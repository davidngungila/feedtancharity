<?php

namespace App\Http\Controllers;

use App\Services\ClickPesaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    protected $clickPesaService;

    public function __construct(ClickPesaService $clickPesaService)
    {
        $this->clickPesaService = $clickPesaService;
    }

    /**
     * Process donation payment
     */
    public function processDonation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:1000',
            'payment_method' => 'required|in:ussd,card',
            'phone_number' => 'required_if:payment_method,ussd|regex:/^[0-9+]{10,15}$/',
            'donor_name' => 'required|string|max:255',
            'donor_email' => 'nullable|email|max:255',
            'donation_type' => 'required|in:one_time,monthly',
            'campaign_id' => 'nullable|exists:campaigns,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $amount = $request->amount;
            $paymentMethod = $request->payment_method;
            $orderReference = $this->clickPesaService->generateOrderReference('DONATE');

            // TEMPORARY: Bypass ClickPesa API for testing
            // TODO: Remove this bypass and configure real ClickPesa credentials
            if (env('CLICKPESA_CLIENT_ID') === 'your_client_id_here') {
                // Return mock success for testing
                return response()->json([
                    'success' => true,
                    'message' => 'Payment preview successful (TEST MODE)',
                    'data' => [
                        'order_reference' => $orderReference,
                        'amount' => $amount,
                        'currency' => $request->currency ?? 'TZS',
                        'payment_method' => $paymentMethod,
                        'phone_number' => $request->phone_number,
                        'redirect_url' => '#', // Would normally be ClickPesa payment URL
                        'test_mode' => true
                    ]
                ]);
            }

            // Save donation record
            $donation = \App\Models\Donation::create([
                'order_reference' => $orderReference,
                'donor_name' => $request->donor_name,
                'donor_email' => $request->donor_email,
                'amount' => $amount,
                'currency' => $paymentMethod === 'ussd' ? 'TZS' : 'USD',
                'payment_method' => $paymentMethod,
                'phone_number' => $paymentMethod === 'ussd' ? $this->clickPesaService->validatePhoneNumber($request->phone_number) : null,
                'donation_type' => $request->donation_type,
                'campaign_id' => $request->campaign_id,
                'status' => 'pending',
            ]);

            if ($paymentMethod === 'ussd') {
                return $this->processUssdPayment($donation, $request->phone_number);
            } else {
                return $this->processCardPayment($donation);
            }

        } catch (\Exception $e) {
            Log::error('Donation processing failed', [
                'error' => $e->getMessage(),
                'request' => $request->all()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your donation. Please try again.'
            ], 500);
        }
    }

    /**
     * Process USSD payment
     */
    private function processUssdPayment($donation, $phoneNumber)
    {
        // Preview USSD payment first
        $preview = $this->clickPesaService->previewUssdPush(
            $donation->amount,
            $donation->order_reference,
            $this->clickPesaService->validatePhoneNumber($phoneNumber),
            true // Fetch sender details
        );

        if (!$preview['success']) {
            $donation->update(['status' => 'failed']);
            return response()->json([
                'success' => false,
                'message' => 'Unable to preview payment. Please check your phone number and try again.',
                'error' => $preview['error']
            ], 400);
        }

        // Initiate USSD payment
        $payment = $this->clickPesaService->initiateUssdPush(
            $donation->amount,
            $donation->order_reference,
            $this->clickPesaService->validatePhoneNumber($phoneNumber)
        );

        if (!$payment['success']) {
            $donation->update(['status' => 'failed']);
            return response()->json([
                'success' => false,
                'message' => 'Unable to initiate payment. Please try again.',
                'error' => $payment['error']
            ], 400);
        }

        // Update donation with payment details
        $donation->update([
            'payment_id' => $payment['data']['id'] ?? null,
            'status' => 'processing'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Payment initiated successfully! Please check your phone for the USSD prompt.',
            'data' => [
                'order_reference' => $donation->order_reference,
                'amount' => $donation->amount,
                'currency' => $donation->currency,
                'payment_id' => $payment['data']['id'] ?? null,
                'status' => 'processing',
                'preview' => $preview['data']
            ]
        ]);
    }

    /**
     * Process card payment
     */
    private function processCardPayment($donation)
    {
        // Preview card payment first
        $preview = $this->clickPesaService->previewCardPayment(
            $donation->amount,
            $donation->order_reference
        );

        if (!$preview['success']) {
            $donation->update(['status' => 'failed']);
            return response()->json([
                'success' => false,
                'message' => 'Unable to preview card payment. Please try again.',
                'error' => $preview['error']
            ], 400);
        }

        // Initiate card payment
        $payment = $this->clickPesaService->initiateCardPayment(
            $donation->amount,
            $donation->order_reference,
            $donation->donor_email ?: $donation->order_reference
        );

        if (!$payment['success']) {
            $donation->update(['status' => 'failed']);
            return response()->json([
                'success' => false,
                'message' => 'Unable to initiate card payment. Please try again.',
                'error' => $payment['error']
            ], 400);
        }

        // Update donation with payment details
        $donation->update([
            'payment_id' => $payment['data']['id'] ?? null,
            'status' => 'pending_payment'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Card payment initiated! Please click the link below to complete your payment.',
            'data' => [
                'order_reference' => $donation->order_reference,
                'amount' => $donation->amount,
                'currency' => $donation->currency,
                'payment_link' => $payment['data']['cardPaymentLink'] ?? null,
                'status' => 'pending_payment',
                'preview' => $preview['data']
            ]
        ]);
    }

    /**
     * Check payment status
     */
    public function checkPaymentStatus($orderReference)
    {
        try {
            $paymentStatus = $this->clickPesaService->queryPaymentStatus($orderReference);

            if (!$paymentStatus['success']) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unable to fetch payment status',
                    'error' => $paymentStatus['error']
                ], 400);
            }

            $paymentData = $paymentStatus['data'];
            
            // Update donation status if it's an array with data
            if (is_array($paymentData) && isset($paymentData[0])) {
                $paymentInfo = $paymentData[0];
                $donation = \App\Models\Donation::where('order_reference', $orderReference)->first();

                if ($donation) {
                    $donation->update([
                        'status' => strtolower($paymentInfo['status'] ?? 'unknown'),
                        'payment_reference' => $paymentInfo['paymentReference'] ?? null,
                        'collected_amount' => $paymentInfo['collectedAmount'] ?? null,
                        'message' => $paymentInfo['message'] ?? null,
                    ]);
                }

                return response()->json([
                    'success' => true,
                    'data' => $paymentInfo
                ]);
            }

            return response()->json([
                'success' => true,
                'data' => $paymentData
            ]);

        } catch (\Exception $e) {
            Log::error('Payment status check failed', [
                'error' => $e->getMessage(),
                'order_reference' => $orderReference
            ]);

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while checking payment status'
            ], 500);
        }
    }

    /**
     * Webhook to handle payment notifications
     */
    public function paymentWebhook(Request $request)
    {
        try {
            $payload = $request->all();
            
            Log::info('ClickPesa webhook received', $payload);

            // Extract payment information from webhook
            if (isset($payload['orderReference']) && isset($payload['status'])) {
                $donation = \App\Models\Donation::where('order_reference', $payload['orderReference'])->first();

                if ($donation) {
                    $donation->update([
                        'status' => strtolower($payload['status']),
                        'payment_reference' => $payload['paymentReference'] ?? null,
                        'collected_amount' => $payload['collectedAmount'] ?? null,
                        'message' => $payload['message'] ?? null,
                    ]);

                    // Send confirmation email if payment is successful
                    if (in_array(strtolower($payload['status']), ['success', 'settled'])) {
                        $this->sendDonationConfirmation($donation);
                    }
                }
            }

            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            Log::error('Webhook processing failed', [
                'error' => $e->getMessage(),
                'payload' => $request->all()
            ]);

            return response()->json(['success' => false], 500);
        }
    }

    /**
     * Get payment history
     */
    public function getPaymentHistory(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'limit' => 'nullable|integer|min:1|max:100',
                'offset' => 'nullable|integer|min:0',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid parameters',
                    'errors' => $validator->errors()
                ], 422);
            }

            $limit = $request->get('limit', 20);
            $offset = $request->get('offset', 0);

            $payments = $this->clickPesaService->queryAllPayments();

            if (!$payments['success']) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unable to fetch payment history',
                    'error' => $payments['error']
                ], 400);
            }

            $paymentData = $payments['data'];
            
            // Apply pagination if data is array
            if (is_array($paymentData)) {
                $paginatedData = array_slice($paymentData, $offset, $limit);
                
                return response()->json([
                    'success' => true,
                    'data' => $paginatedData,
                    'pagination' => [
                        'limit' => $limit,
                        'offset' => $offset,
                        'total' => count($paymentData)
                    ]
                ]);
            }

            return response()->json([
                'success' => true,
                'data' => $paymentData
            ]);

        } catch (\Exception $e) {
            Log::error('Payment history fetch failed', [
                'error' => $e->getMessage()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'An error occurred while fetching payment history'
            ], 500);
        }
    }

    /**
     * Send donation confirmation email
     */
    private function sendDonationConfirmation($donation)
    {
        try {
            if ($donation->donor_email) {
                // Send email using Laravel's mail system
                \Mail::to($donation->donor_email)->send(new \App\Mail\DonationConfirmation($donation));
            }
        } catch (\Exception $e) {
            Log::error('Failed to send donation confirmation email', [
                'error' => $e->getMessage(),
                'donation_id' => $donation->id
            ]);
        }
    }

    /**
     * Test ClickPesa connection
     */
    public function testConnection()
    {
        try {
            $token = $this->clickPesaService->generateToken();
            
            if ($token) {
                return response()->json([
                    'success' => true,
                    'message' => 'ClickPesa connection successful',
                    'token_preview' => substr($token, 0, 20) . '...'
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Failed to generate ClickPesa token'
            ], 400);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Connection test failed: ' . $e->getMessage()
            ], 500);
        }
    }
}
