<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class ClickPesaService
{
    private $clientId;
    private $apiKey;
    private $baseUrl;
    private $token;
    private $tokenExpiresAt;

    public function __construct()
    {
        $this->clientId = config('services.clickpesa.client_id');
        $this->apiKey = config('services.clickpesa.api_key');
        $this->baseUrl = 'https://api.clickpesa.com/third-parties';
        $this->token = null;
        $this->tokenExpiresAt = null;
    }

    /**
     * Generate Authorization Token
     */
    public function generateToken()
    {
        try {
            $response = Http::withHeaders([
                'client-id' => $this->clientId,
                'api-key' => $this->apiKey,
            ])->post($this->baseUrl . '/generate-token');

            if ($response->successful()) {
                $data = $response->json();
                if ($data['success']) {
                    $this->token = $data['token'];
                    $this->tokenExpiresAt = Carbon::now()->addHour(); // Token valid for 1 hour
                    
                    // Store token in cache
                    cache(['clickpesa_token' => $this->token], 3600); // 1 hour
                    
                    Log::info('ClickPesa token generated successfully', [
                        'token_length' => strlen($this->token),
                        'expires_at' => $this->tokenExpiresAt
                    ]);
                    return $this->token;
                }
            }

            Log::error('ClickPesa token generation failed', [
                'status' => $response->status(),
                'response' => $response->json(),
                'headers' => $response->headers()
            ]);

            return null;
        } catch (\Exception $e) {
            Log::error('ClickPesa token generation exception', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return null;
        }
    }

    /**
     * Get valid authorization token
     */
    public function getAuthToken()
    {
        // Check if we have a valid cached token
        if ($this->token && $this->tokenExpiresAt && $this->tokenExpiresAt->isFuture()) {
            return $this->token;
        }

        // Try to get from cache
        $cachedToken = cache('clickpesa_token');
        if ($cachedToken) {
            $this->token = $cachedToken;
            $this->tokenExpiresAt = Carbon::now()->addHour();
            return $this->token;
        }

        // Generate new token
        return $this->generateToken();
    }

    /**
     * Preview USSD-PUSH request
     */
    public function previewUssdPush($amount, $orderReference, $phoneNumber, $fetchSenderDetails = false)
    {
        $token = $this->getAuthToken();
        if (!$token) {
            return ['success' => false, 'error' => 'Unable to get authorization token'];
        }

        try {
            $payload = [
                'amount' => (string) $amount,
                'currency' => 'TZS',
                'orderReference' => $orderReference,
                'phoneNumber' => $phoneNumber,
                'fetchSenderDetails' => $fetchSenderDetails,
            ];

            $response = Http::withHeaders([
                'Authorization' => $token,
                'Content-Type' => 'application/json',
            ])->post($this->baseUrl . '/payments/preview-ussd-push-request', $payload);

            if ($response->successful()) {
                return ['success' => true, 'data' => $response->json()];
            }

            Log::error('USSD Push preview failed', [
                'status' => $response->status(),
                'response' => $response->json()
            ]);

            return ['success' => false, 'error' => $response->json(), 'status' => $response->status()];
        } catch (\Exception $e) {
            Log::error('Exception previewing USSD Push', ['error' => $e->getMessage()]);
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Initiate USSD-PUSH request
     */
    public function initiateUssdPush($amount, $orderReference, $phoneNumber)
    {
        $token = $this->getAuthToken();
        if (!$token) {
            return ['success' => false, 'error' => 'Unable to get authorization token'];
        }

        try {
            $payload = [
                'amount' => (string) $amount,
                'currency' => 'TZS',
                'orderReference' => $orderReference,
                'phoneNumber' => $phoneNumber,
            ];

            $response = Http::withHeaders([
                'Authorization' => $token,
                'Content-Type' => 'application/json',
            ])->post($this->baseUrl . '/payments/initiate-ussd-push-request', $payload);

            if ($response->successful()) {
                return ['success' => true, 'data' => $response->json()];
            }

            Log::error('USSD Push initiation failed', [
                'status' => $response->status(),
                'response' => $response->json()
            ]);

            return ['success' => false, 'error' => $response->json(), 'status' => $response->status()];
        } catch (\Exception $e) {
            Log::error('Exception initiating USSD Push', ['error' => $e->getMessage()]);
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Preview Card Payment
     */
    public function previewCardPayment($amount, $orderReference)
    {
        $token = $this->getAuthToken();
        if (!$token) {
            return ['success' => false, 'error' => 'Unable to get authorization token'];
        }

        try {
            $payload = [
                'amount' => (string) $amount,
                'currency' => 'USD',
                'orderReference' => $orderReference,
            ];

            $response = Http::withHeaders([
                'Authorization' => $token,
                'Content-Type' => 'application/json',
            ])->post($this->baseUrl . '/payments/preview-card-payment', $payload);

            if ($response->successful()) {
                return ['success' => true, 'data' => $response->json()];
            }

            Log::error('Card payment preview failed', [
                'status' => $response->status(),
                'response' => $response->json()
            ]);

            return ['success' => false, 'error' => $response->json(), 'status' => $response->status()];
        } catch (\Exception $e) {
            Log::error('Exception previewing card payment', ['error' => $e->getMessage()]);
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Initiate Card Payment
     */
    public function initiateCardPayment($amount, $orderReference, $customerId = null)
    {
        $token = $this->getAuthToken();
        if (!$token) {
            return ['success' => false, 'error' => 'Unable to get authorization token'];
        }

        try {
            $payload = [
                'amount' => (string) $amount,
                'currency' => 'USD',
                'orderReference' => $orderReference,
                'customer' => [
                    'id' => $customerId ?: $orderReference, // Use orderReference as fallback
                ],
            ];

            $response = Http::withHeaders([
                'Authorization' => $token,
                'Content-Type' => 'application/json',
            ])->post($this->baseUrl . '/payments/initiate-card-payment', $payload);

            if ($response->successful()) {
                return ['success' => true, 'data' => $response->json()];
            }

            Log::error('Card payment initiation failed', [
                'status' => $response->status(),
                'response' => $response->json()
            ]);

            return ['success' => false, 'error' => $response->json(), 'status' => $response->status()];
        } catch (\Exception $e) {
            Log::error('Exception initiating card payment', ['error' => $e->getMessage()]);
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Query Payment Status
     */
    public function queryPaymentStatus($orderReference)
    {
        $token = $this->getAuthToken();
        if (!$token) {
            return ['success' => false, 'error' => 'Unable to get authorization token'];
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => $token,
            ])->get($this->baseUrl . '/payments/' . $orderReference);

            if ($response->successful()) {
                return ['success' => true, 'data' => $response->json()];
            }

            Log::error('Payment status query failed', [
                'status' => $response->status(),
                'response' => $response->json()
            ]);

            return ['success' => false, 'error' => $response->json(), 'status' => $response->status()];
        } catch (\Exception $e) {
            Log::error('Exception querying payment status', ['error' => $e->getMessage()]);
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Query All Payments
     */
    public function queryAllPayments()
    {
        $token = $this->getAuthToken();
        if (!$token) {
            return ['success' => false, 'error' => 'Unable to get authorization token'];
        }

        try {
            $response = Http::withHeaders([
                'Authorization' => $token,
            ])->get($this->baseUrl . '/payments');

            if ($response->successful()) {
                return ['success' => true, 'data' => $response->json()];
            }

            Log::error('All payments query failed', [
                'status' => $response->status(),
                'response' => $response->json()
            ]);

            return ['success' => false, 'error' => $response->json(), 'status' => $response->status()];
        } catch (\Exception $e) {
            Log::error('Exception querying all payments', ['error' => $e->getMessage()]);
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }

    /**
     * Generate unique order reference
     */
    public function generateOrderReference($prefix = 'FT')
    {
        return $prefix . '_' . time() . '_' . uniqid();
    }

    /**
     * Validate phone number format
     */
    public function validatePhoneNumber($phoneNumber)
    {
        // Remove + and spaces, ensure it starts with country code
        $phoneNumber = preg_replace('/[\s+]/', '', $phoneNumber);
        
        // If starts with 0, replace with 255 (Tanzania)
        if (str_starts_with($phoneNumber, '0')) {
            $phoneNumber = '255' . substr($phoneNumber, 1);
        }
        
        // If doesn't start with 255, add it
        if (!str_starts_with($phoneNumber, '255')) {
            $phoneNumber = '255' . $phoneNumber;
        }
        
        return $phoneNumber;
    }

    /**
     * Format amount for API
     */
    public function formatAmount($amount)
    {
        return number_format((float) $amount, 0, '.', '');
    }
}
