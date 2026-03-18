<?php

namespace App\Http\Controllers;

use App\Services\ClickPesaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    protected $clickPesaService;
    
    public function __construct(ClickPesaService $clickPesaService)
    {
        $this->clickPesaService = $clickPesaService;
    }
    
    /**
     * Preview USSD Push payment
     */
    public function previewUssdPayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:1000',
            'phone_number' => 'required|string|regex:/^[0-9]{12}$/', // 255XXXXXXXXX
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        
        $orderReference = $this->clickPesaService->generateOrderReference('DONATE');
        
        $result = $this->clickPesaService->previewUssdPush(
            $request->amount,
            $request->phone_number,
            $orderReference,
            true // fetch sender details
        );
        
        return response()->json($result);
    }
    
    /**
     * Initiate USSD Push payment
     */
    public function initiateUssdPayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:1000',
            'phone_number' => 'required|string|regex:/^[0-9]{12}$/', // 255XXXXXXXXX
            'donor_name' => 'nullable|string|max:255',
            'donor_email' => 'nullable|email|max:255',
            'donation_type' => 'required|string|in:one_time,monthly',
            'campaign_id' => 'nullable|string|max:100',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        
        $orderReference = $this->clickPesaService->generateOrderReference('DONATE');
        
        // Store donation details in session for confirmation page
        session([
            'donation_details' => [
                'order_reference' => $orderReference,
                'amount' => $request->amount,
                'phone_number' => $request->phone_number,
                'donor_name' => $request->donor_name ?? 'Anonymous',
                'donor_email' => $request->donor_email,
                'donation_type' => $request->donation_type,
                'campaign_id' => $request->campaign_id,
                'payment_method' => 'mobile_money',
            ]
        ]);
        
        $result = $this->clickPesaService->initiateUssdPush(
            $request->amount,
            $request->phone_number,
            $orderReference
        );
        
        if ($result['success']) {
            Log::info('USSD payment initiated', [
                'order_reference' => $orderReference,
                'amount' => $request->amount,
                'phone_number' => $request->phone_number,
                'transaction_id' => $result['data']['id'] ?? null
            ]);
        }
        
        return response()->json($result);
    }
    
    /**
     * Preview Card payment
     */
    public function previewCardPayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:1', // USD minimum
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        
        $orderReference = $this->clickPesaService->generateOrderReference('DONATE');
        
        $result = $this->clickPesaService->previewCardPayment(
            $request->amount,
            $orderReference
        );
        
        return response()->json($result);
    }
    
    /**
     * Initiate Card payment
     */
    public function initiateCardPayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:1', // USD minimum
            'donor_name' => 'nullable|string|max:255',
            'donor_email' => 'nullable|email|max:255',
            'donation_type' => 'required|string|in:one_time,monthly',
            'campaign_id' => 'nullable|string|max:100',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }
        
        $orderReference = $this->clickPesaService->generateOrderReference('DONATE');
        $customerId = $request->donor_email ? md5($request->donor_email) : null;
        
        // Store donation details in session for confirmation page
        session([
            'donation_details' => [
                'order_reference' => $orderReference,
                'amount' => $request->amount,
                'donor_name' => $request->donor_name ?? 'Anonymous',
                'donor_email' => $request->donor_email,
                'donation_type' => $request->donation_type,
                'campaign_id' => $request->campaign_id,
                'payment_method' => 'card',
                'currency' => 'USD',
            ]
        ]);
        
        $result = $this->clickPesaService->initiateCardPayment(
            $request->amount,
            $orderReference,
            $customerId
        );
        
        if ($result['success']) {
            Log::info('Card payment initiated', [
                'order_reference' => $orderReference,
                'amount' => $request->amount,
                'currency' => 'USD',
                'customer_id' => $customerId,
                'payment_link' => $result['data']['cardPaymentLink'] ?? null
            ]);
        }
        
        return response()->json($result);
    }
    
    /**
     * Check payment status
     */
    public function checkPaymentStatus($orderReference)
    {
        $result = $this->clickPesaService->queryPaymentStatus($orderReference);
        
        if ($result['success'] && !empty($result['data'])) {
            $payment = $result['data'][0]; // API returns array
            
            // Update session with payment status
            if (session('donation_details.order_reference') === $orderReference) {
                session(['donation_details.payment_status' => $payment['status']]);
                session(['donation_details.payment_data' => $payment]);
            }
            
            Log::info('Payment status checked', [
                'order_reference' => $orderReference,
                'status' => $payment['status'],
                'amount' => $payment['collectedAmount'] ?? null,
                'currency' => $payment['collectedCurrency'] ?? null
            ]);
        }
        
        return response()->json($result);
    }
    
    /**
     * Payment confirmation page
     */
    public function paymentConfirmation($orderReference)
    {
        $donationDetails = session('donation_details');
        
        if (!$donationDetails || $donationDetails['order_reference'] !== $orderReference) {
            return redirect()->route('donate')->with('error', 'Donation session expired or not found.');
        }
        
        // Check payment status
        $statusResult = $this->clickPesaService->queryPaymentStatus($orderReference);
        
        if ($statusResult['success'] && !empty($statusResult['data'])) {
            $payment = $statusResult['data'][0];
            $donationDetails['payment_status'] = $payment['status'];
            $donationDetails['payment_data'] = $payment;
        }
        
        return view('payment.confirmation', compact('donationDetails'));
    }
    
    /**
     * Payment success/cancel webhook handler
     */
    public function paymentWebhook(Request $request)
    {
        Log::info('Payment webhook received', [
            'payload' => $request->all(),
            'headers' => $request->headers->all()
        ]);
        
        // Process webhook based on ClickPesa webhook format
        // This would need to be implemented based on actual webhook structure
        
        return response()->json(['status' => 'received']);
    }
}
