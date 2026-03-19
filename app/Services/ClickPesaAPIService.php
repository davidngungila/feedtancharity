<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class ClickPesaAPIService
{
    private $clientId;
    private $clientSecret;
    private $baseUrl;
    private $token;
    private $tokenExpiresAt;

    public function __construct()
    {
        $this->clientId = config('services.clickpesa.client_id');
        $this->clientSecret = config('services.clickpesa.client_secret') ?: config('services.clickpesa.api_key');
        $this->baseUrl = config('services.clickpesa.base_url', 'https://api.clickpesa.com');
    }

    /**
     * Generate authentication token
     */
    public function generateToken()
    {
        try {
            $response = Http::asForm()->post($this->baseUrl . '/oauth/token', [
                'grant_type' => 'client_credentials',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
            ]);

            if ($response->successful()) {
                $data = $response->json();
                if (isset($data['access_token'])) {
                    $this->token = $data['access_token'];
                    $this->tokenExpiresAt = Carbon::now()->addSeconds($data['expires_in'] ?? 3600);
                    
                    // Store token in cache
                    cache(['clickpesa_token' => $this->token], $data['expires_in'] ?? 3600);
                    
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
     * Get authentication token (from cache or generate new)
     */
    public function getAuthToken()
    {
        // Check cache first
        $cachedToken = cache('clickpesa_token');
        if ($cachedToken) {
            return $cachedToken;
        }

        // Check if current token is still valid
        if ($this->token && $this->tokenExpiresAt && $this->tokenExpiresAt->isFuture()) {
            return $this->token;
        }

        // Generate new token
        return $this->generateToken();
    }

    /**
     * Initiate USSD Checkout
     */
    public function initiateUSSD(array $data)
    {
        try {
            $token = $this->getAuthToken();
            
            if (!$token) {
                throw new \Exception('Failed to get authentication token');
            }

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json'
            ])->post($this->baseUrl . '/ussd-checkout', $data);

            if ($response->successful()) {
                return $response->json();
            }

            Log::error('ClickPesa USSD initiation failed', [
                'status' => $response->status(),
                'response' => $response->json(),
                'payload' => $data
            ]);

            throw new \Exception('USSD initiation failed: ' . ($response->json()['message'] ?? 'Unknown error'));
        } catch (\Exception $e) {
            Log::error('ClickPesa USSD initiation exception', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }

    /**
     * Query payment status
     */
    public function queryStatus($transactionId)
    {
        try {
            $token = $this->getAuthToken();
            
            if (!$token) {
                throw new \Exception('Failed to get authentication token');
            }

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token
            ])->get($this->baseUrl . '/payments/' . $transactionId);

            if ($response->successful()) {
                return $response->json();
            }

            Log::error('ClickPesa status query failed', [
                'status' => $response->status(),
                'response' => $response->json(),
                'transaction_id' => $transactionId
            ]);

            throw new \Exception('Status query failed: ' . ($response->json()['message'] ?? 'Unknown error'));
        } catch (\Exception $e) {
            Log::error('ClickPesa status query exception', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }

    /**
     * Get wallet balance
     */
    public function getBalance()
    {
        try {
            $token = $this->getAuthToken();
            
            if (!$token) {
                throw new \Exception('Failed to get authentication token');
            }

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token
            ])->get($this->baseUrl . '/wallet/balance');

            if ($response->successful()) {
                return $response->json();
            }

            Log::error('ClickPesa balance query failed', [
                'status' => $response->status(),
                'response' => $response->json()
            ]);

            throw new \Exception('Balance query failed: ' . ($response->json()['message'] ?? 'Unknown error'));
        } catch (\Exception $e) {
            Log::error('ClickPesa balance query exception', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }

    /**
     * Legacy methods for backward compatibility with existing code
     */
    public function previewUssdPush($amount, $currency, $orderReference, $phoneNumber, $fetchSenderDetails = false)
    {
        // For backward compatibility, we'll use the initiateUSSD method
        // but with a preview flag if needed
        $data = [
            'phone' => $phoneNumber,
            'amount' => $amount,
            'currency' => $currency,
            'reference' => $orderReference,
            'fetch_sender_details' => $fetchSenderDetails
        ];

        return $this->initiateUSSD($data);
    }

    public function initiateUssdPush($amount, $currency, $orderReference, $phoneNumber)
    {
        $data = [
            'phone' => $phoneNumber,
            'amount' => $amount,
            'currency' => $currency,
            'reference' => $orderReference
        ];

        return $this->initiateUSSD($data);
    }

    public function queryPaymentStatus($orderReference)
    {
        return $this->queryStatus($orderReference);
    }
}
