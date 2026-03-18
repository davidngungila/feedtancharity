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
     * Test ClickPesa payment preview
     */
    public function testPaymentPreview(Request $request)
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
