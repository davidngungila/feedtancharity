<?php

namespace App\Http\Controllers;

use App\Services\ClickPesaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    protected $clickPesaService;

    public function __construct(ClickPesaService $clickPesaService)
    {
        $this->clickPesaService = $clickPesaService;
    }

    /**
     * Show the ClickPesa test page
     */
    public function showTestPage()
    {
        return view('test-clickpesa');
    }

    /**
     * Test ClickPesa connection
     */
    public function testConnection(Request $request)
    {
        try {
            $clientId = config('services.clickpesa.client_id');
            $apiKey = config('services.clickpesa.api_key');
            $baseUrl = config('services.clickpesa.base_url');

            return response()->json([
                'success' => true,
                'message' => 'Configuration loaded successfully',
                'data' => [
                    'client_id' => $clientId,
                    'api_key' => $apiKey ? 'SET' : 'NOT_SET',
                    'base_url' => $baseUrl,
                    'client_id_length' => strlen($clientId),
                    'api_key_length' => strlen($apiKey),
                    'is_default_client_id' => $clientId === 'your_client_id_here',
                    'is_default_api_key' => $apiKey === 'your_api_key_here'
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Configuration test failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Test ClickPesa token generation
     */
    public function testTokenGeneration(Request $request)
    {
        try {
            $clientId = config('services.clickpesa.client_id');
            $apiKey = config('services.clickpesa.api_key');
            $baseUrl = config('services.clickpesa.base_url');

            Log::info('Testing ClickPesa token generation', [
                'client_id' => $clientId,
                'base_url' => $baseUrl
            ]);

            $response = Http::withHeaders([
                'client-id' => $clientId,
                'api-key' => $apiKey,
            ])->post($baseUrl . '/generate-token');

            $responseData = $response->json();

            return response()->json([
                'success' => $response->successful(),
                'message' => $response->successful() ? 'Token generated successfully' : 'Token generation failed',
                'data' => [
                    'status' => $response->status(),
                    'response' => $responseData,
                    'headers' => $response->headers(),
                    'successful' => $response->successful(),
                    'failed' => $response->failed(),
                    'clientError' => $response->clientError(),
                    'serverError' => $response->serverError()
                ]
            ]);
        } catch (\Exception $e) {
            Log::error('ClickPesa token generation error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Token generation failed',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }

    /**
     * Test ClickPesa token generation directly (cURL style)
     */
    public function testDirectToken(Request $request)
    {
        try {
            $clientId = config('services.clickpesa.client_id');
            $apiKey = config('services.clickpesa.api_key');
            $baseUrl = config('services.clickpesa.base_url');

            Log::info('Direct ClickPesa token test', [
                'client_id' => $clientId,
                'base_url' => $baseUrl,
                'client_id_length' => strlen($clientId),
                'api_key_length' => strlen($apiKey)
            ]);

            // Use the exact same approach as your working cURL
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => $baseUrl . "/generate-token",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_HTTPHEADER => [
                    "api-key: " . $apiKey,
                    "client-id: " . $clientId
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            curl_close($curl);

            if ($err) {
                Log::error('Direct ClickPesa cURL error', ['error' => $err]);
                
                return response()->json([
                    'success' => false,
                    'message' => 'cURL Error',
                    'error' => $err,
                    'http_code' => $httpCode
                ], 500);
            }

            Log::info('Direct ClickPesa response', [
                'http_code' => $httpCode,
                'response_length' => strlen($response),
                'response_preview' => substr($response, 0, 200)
            ]);

            $responseData = json_decode($response, true);

            return response()->json([
                'success' => $httpCode === 200,
                'message' => $httpCode === 200 ? 'Direct token generation successful' : 'Direct token generation failed',
                'data' => [
                    'http_code' => $httpCode,
                    'response' => $responseData,
                    'raw_response' => $response,
                    'client_id' => $clientId,
                    'base_url' => $baseUrl
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Direct ClickPesa token test exception', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Direct token test failed',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }
    /**
     * Generate token on page load
     */
    public function generateTokenOnLoad(Request $request)
    {
        try {
            // Check credentials first
            $clientId = config('services.clickpesa.client_id');
            $apiKey = config('services.clickpesa.api_key');
            $baseUrl = config('services.clickpesa.base_url');
            
            Log::info('ClickPesa token generation attempt', [
                'client_id' => $clientId,
                'api_key_set' => !empty($apiKey),
                'base_url' => $baseUrl,
                'client_id_length' => strlen($clientId),
                'is_default_client_id' => $clientId === 'your_client_id_here'
            ]);

            // If credentials are not set, return error
            if (empty($clientId) || $clientId === 'your_client_id_here' || empty($apiKey)) {
                return response()->json([
                    'success' => false,
                    'message' => 'ClickPesa credentials not configured',
                    'error' => 'Please set CLICKPESA_CLIENT_ID and CLICKPESA_API_KEY in .env file',
                    'debug' => [
                        'client_id' => $clientId,
                        'api_key_set' => !empty($apiKey),
                        'is_default' => $clientId === 'your_client_id_here'
                    ]
                ], 500);
            }

            $token = $this->clickPesaService->generateToken();
            
            if ($token) {
                return response()->json([
                    'success' => true,
                    'message' => 'Token generated successfully on page load',
                    'data' => [
                        'token' => $token,
                        'token_length' => strlen($token),
                        'generated_at' => now()->toISOString(),
                        'expires_at' => now()->addHour()->toISOString()
                    ]
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Failed to generate token on page load',
                'error' => 'Token generation returned null',
                'debug' => [
                    'client_id' => $clientId,
                    'base_url' => $baseUrl,
                    'service_class' => get_class($this->clickPesaService)
                ]
            ], 500);
        } catch (\Exception $e) {
            Log::error('Token generation on page load failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Token generation failed on page load',
                'error' => $e->getMessage(),
                'debug' => [
                    'exception_type' => get_class($e),
                    'file' => $e->getFile(),
                    'line' => $e->getLine()
                ]
            ], 500);
        }
    }

    /**
     * Test complete ClickPesa token generation
     */
    public function testGenerateToken(Request $request)
    {
        try {
            $token = $this->clickPesaService->generateToken();
            
            if ($token) {
                return response()->json([
                    'success' => true,
                    'message' => 'Token generated successfully',
                    'data' => [
                        'token' => $token,
                        'token_length' => strlen($token),
                        'generated_at' => now()->toISOString()
                    ]
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Failed to generate token',
                'error' => 'Token generation returned null'
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Token generation failed',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }

    /**
     * Test USSD preview
     */
    public function testPreviewUssd(Request $request)
    {
        try {
            $request->validate([
                'amount' => 'required|numeric|min:1000',
                'currency' => 'required|string',
                'orderReference' => 'required|string',
                'phoneNumber' => 'required|string|regex:/^[0-9]{12}$/',
                'fetchSenderDetails' => 'boolean'
            ]);

            $result = $this->clickPesaService->previewUssdPush(
                $request->amount,
                $request->currency,
                $request->orderReference,
                $request->phoneNumber,
                $request->fetchSenderDetails ?? false
            );

            return response()->json([
                'success' => true,
                'message' => 'USSD preview successful',
                'data' => $result
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'USSD preview failed',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }

    /**
     * Test payment initiation
     */
    public function testInitiatePayment(Request $request)
    {
        try {
            $request->validate([
                'amount' => 'required|numeric|min:1000',
                'currency' => 'required|string',
                'orderReference' => 'required|string',
                'phoneNumber' => 'required|string|regex:/^[0-9]{12}$/'
            ]);

            $result = $this->clickPesaService->initiateUssdPush(
                $request->amount,
                $request->currency,
                $request->orderReference,
                $request->phoneNumber
            );

            return response()->json([
                'success' => true,
                'message' => 'Payment initiated successfully',
                'data' => $result
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Payment initiation failed',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }

    /**
     * Test payment status
     */
    public function testPaymentStatus(Request $request)
    {
        try {
            $request->validate([
                'orderReference' => 'required|string'
            ]);

            $result = $this->clickPesaService->queryPaymentStatus($request->orderReference);

            return response()->json([
                'success' => true,
                'message' => 'Payment status retrieved successfully',
                'data' => $result
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Payment status query failed',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }
    {
        try {
            $amount = $request->amount;
            $phoneNumber = $request->phone_number;
            $currency = $request->currency ?? 'TZS';

            // Generate token first
            $token = $this->clickPesaService->generateToken();
            
            if (!$token) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to generate token for payment preview'
                ], 500);
            }

            // Test payment preview
            $previewData = [
                'amount' => $amount,
                'currency' => $currency,
                'payment_method' => 'ussd',
                'phone_number' => $phoneNumber,
                'reason' => 'Donation to FeedTan Charity',
                'merchant_reference' => $this->clickPesaService->generateOrderReference('TEST')
            ];

            $baseUrl = config('services.clickpesa.base_url');
            
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Content-Type' => 'application/json'
            ])->post($baseUrl . '/payments/preview', $previewData);

            $responseData = $response->json();

            return response()->json([
                'success' => $response->successful(),
                'message' => $response->successful() ? 'Payment preview successful' : 'Payment preview failed',
                'data' => [
                    'status' => $response->status(),
                    'preview_data' => $previewData,
                    'response' => $responseData,
                    'successful' => $response->successful(),
                    'failed' => $response->failed()
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('ClickPesa payment preview error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Payment preview failed',
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ], 500);
        }
    }
}
