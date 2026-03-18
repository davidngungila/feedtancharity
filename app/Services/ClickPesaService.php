<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class ClickPesaService
{
    private $clientId;
    private $apiKey;
    private $baseUrl;
    
    public function __construct()
    {
        $this->clientId = config('services.clickpesa.client_id');
        $this->apiKey = config('services.clickpesa.api_key');
        $this->baseUrl = 'https://api.clickpesa.com/third-parties';
    }
    
    /**
     * Generate authorization token
     */
    public function generateToken()
    {
        try {
            $cacheKey = 'clickpesa_token';
            
            // Check if we have a valid cached token
            if (Cache::has($cacheKey)) {
                return Cache::get($cacheKey);
            }
            
            $response = Http::withHeaders([
                'client-id' => $this->clientId,
                'api-key' => $this->apiKey,
            ])->post($this->baseUrl . '/generate-token');
            
            if ($response->successful()) {
                $data = $response->json();
                $token = $data['token'];
                
                // Cache token for 50 minutes (valid for 1 hour)
                Cache::put($cacheKey, $token, 50 * 60);
                
                return $token;
            }
            
            Log::error('ClickPesa token generation failed', [
                'status' => $response->status(),
                'response' => $response->body()
            ]);
            
            return null;
        } catch (\Exception $e) {
            Log::error('ClickPesa token generation error', [
                'error' => $e->getMessage()
            ]);
            
            return null;
        }
    }
    
    /**
     * Preview USSD Push request
     */
    public function previewUssdPush($amount, $phoneNumber, $orderReference, $fetchSenderDetails = false)
    {
        try {
            $token = $this->generateToken();
            
            if (!$token) {
                return ['success' => false, 'message' => 'Failed to generate authorization token'];
            }
            
            $payload = [
                'amount' => $amount,
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
            
            Log::error('ClickPesa USSD preview failed', [
                'status' => $response->status(),
                'response' => $response->body(),
                'payload' => $payload
            ]);
            
            return ['success' => false, 'message' => 'Failed to preview payment', 'data' => $response->json()];
        } catch (\Exception $e) {
            Log::error('ClickPesa USSD preview error', [
                'error' => $e->getMessage(),
                'payload' => $payload ?? null
            ]);
            
            return ['success' => false, 'message' => 'Payment preview error: ' . $e->getMessage()];
        }
    }
    
    /**
     * Initiate USSD Push request
     */
    public function initiateUssdPush($amount, $phoneNumber, $orderReference)
    {
        try {
            $token = $this->generateToken();
            
            if (!$token) {
                return ['success' => false, 'message' => 'Failed to generate authorization token'];
            }
            
            $payload = [
                'amount' => $amount,
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
            
            Log::error('ClickPesa USSD initiation failed', [
                'status' => $response->status(),
                'response' => $response->body(),
                'payload' => $payload
            ]);
            
            return ['success' => false, 'message' => 'Failed to initiate payment', 'data' => $response->json()];
        } catch (\Exception $e) {
            Log::error('ClickPesa USSD initiation error', [
                'error' => $e->getMessage(),
                'payload' => $payload ?? null
            ]);
            
            return ['success' => false, 'message' => 'Payment initiation error: ' . $e->getMessage()];
        }
    }
    
    /**
     * Preview Card Payment
     */
    public function previewCardPayment($amount, $orderReference)
    {
        try {
            $token = $this->generateToken();
            
            if (!$token) {
                return ['success' => false, 'message' => 'Failed to generate authorization token'];
            }
            
            $payload = [
                'amount' => $amount,
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
            
            Log::error('ClickPesa card preview failed', [
                'status' => $response->status(),
                'response' => $response->body(),
                'payload' => $payload
            ]);
            
            return ['success' => false, 'message' => 'Failed to preview card payment', 'data' => $response->json()];
        } catch (\Exception $e) {
            Log::error('ClickPesa card preview error', [
                'error' => $e->getMessage(),
                'payload' => $payload ?? null
            ]);
            
            return ['success' => false, 'message' => 'Card payment preview error: ' . $e->getMessage()];
        }
    }
    
    /**
     * Initiate Card Payment
     */
    public function initiateCardPayment($amount, $orderReference, $customerId = null)
    {
        try {
            $token = $this->generateToken();
            
            if (!$token) {
                return ['success' => false, 'message' => 'Failed to generate authorization token'];
            }
            
            $payload = [
                'amount' => $amount,
                'currency' => 'USD',
                'orderReference' => $orderReference,
                'customer' => [
                    'id' => $customerId ?? 'guest_' . time()
                ]
            ];
            
            $response = Http::withHeaders([
                'Authorization' => $token,
                'Content-Type' => 'application/json',
            ])->post($this->baseUrl . '/payments/initiate-card-payment', $payload);
            
            if ($response->successful()) {
                return ['success' => true, 'data' => $response->json()];
            }
            
            Log::error('ClickPesa card initiation failed', [
                'status' => $response->status(),
                'response' => $response->body(),
                'payload' => $payload
            ]);
            
            return ['success' => false, 'message' => 'Failed to initiate card payment', 'data' => $response->json()];
        } catch (\Exception $e) {
            Log::error('ClickPesa card initiation error', [
                'error' => $e->getMessage(),
                'payload' => $payload ?? null
            ]);
            
            return ['success' => false, 'message' => 'Card payment initiation error: ' . $e->getMessage()];
        }
    }
    
    /**
     * Query payment status
     */
    public function queryPaymentStatus($orderReference)
    {
        try {
            $token = $this->generateToken();
            
            if (!$token) {
                return ['success' => false, 'message' => 'Failed to generate authorization token'];
            }
            
            $response = Http::withHeaders([
                'Authorization' => $token,
            ])->get($this->baseUrl . '/payments/' . $orderReference);
            
            if ($response->successful()) {
                return ['success' => true, 'data' => $response->json()];
            }
            
            Log::error('ClickPesa payment status query failed', [
                'status' => $response->status(),
                'response' => $response->body(),
                'orderReference' => $orderReference
            ]);
            
            return ['success' => false, 'message' => 'Failed to query payment status', 'data' => $response->json()];
        } catch (\Exception $e) {
            Log::error('ClickPesa payment status query error', [
                'error' => $e->getMessage(),
                'orderReference' => $orderReference
            ]);
            
            return ['success' => false, 'message' => 'Payment status query error: ' . $e->getMessage()];
        }
    }
    
    /**
     * Generate unique order reference
     */
    public function generateOrderReference($prefix = 'FT')
    {
        return $prefix . '_' . time() . '_' . uniqid();
    }
}
