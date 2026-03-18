<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ClickPesaController extends Controller
{
    private $clientId = 'ID6t2Itw6oIepcDEYGQORZNaAcEvqIGZ';
    private $apiKey = 'SKmOjYqsWbDcROwxdDiC7XpLavqpbMjcyE33JHcvl2';
    private $baseUrl = 'https://api.clickpesa.com/third-parties';

    /**
     * Generate authentication token
     */
    public function generateToken()
    {
        try {
            Log::info('ClickPesa: Attempting to generate token');
            
            $response = Http::timeout(30)->withHeaders([
                'Content-Type' => 'application/json',
                'client-id' => $this->clientId,
                'api-key' => $this->apiKey,
            ])->post($this->baseUrl . '/generate-token');

            Log::info('ClickPesa: Token response status', ['status' => $response->status()]);
            
            $data = $response->json();
            Log::info('ClickPesa: Token response data', ['data' => $data]);

            if ($response->successful() && isset($data['success']) && $data['success'] && isset($data['token'])) {
                Log::info('ClickPesa: Token generated successfully');
                return response()->json([
                    'success' => true,
                    'token' => $data['token']
                ]);
            } else {
                Log::error('ClickPesa: Token generation failed', ['data' => $data]);
                return response()->json([
                    'success' => false,
                    'error' => 'Failed to generate token: ' . ($data['message'] ?? 'Invalid API response')
                ], 400);
            }
        } catch (\Exception $e) {
            Log::error('ClickPesa: Token generation exception', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'error' => 'API connection error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Preview USSD Push request
     */
    public function previewUssdPush(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|string|min:1',
            'currency' => 'required|string|in:TZS',
            'orderReference' => 'required|string',
            'phoneNumber' => 'required|string|regex:/^255\d{9}$/',
            'fetchSenderDetails' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Validation failed',
                'details' => $validator->errors()
            ], 400);
        }

        try {
            Log::info('ClickPesa: Preview USSD Push', ['orderReference' => $request->orderReference]);
            
            $token = $request->header('Authorization');
            if (!$token) {
                return response()->json(['success' => false, 'error' => 'Authorization token required'], 401);
            }

            $response = Http::timeout(30)->withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => $token,
            ])->post($this->baseUrl . '/payments/preview-ussd-push-request', [
                'amount' => $request->amount,
                'currency' => $request->currency,
                'orderReference' => $request->orderReference,
                'phoneNumber' => $request->phoneNumber,
                'fetchSenderDetails' => $request->fetchSenderDetails ?? false,
            ]);

            $data = $response->json();
            Log::info('ClickPesa: Preview USSD response', ['status' => $response->status(), 'data' => $data]);

            if ($response->successful()) {
                return response()->json($data);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => 'Preview failed: ' . ($data['message'] ?? 'Unknown error')
                ], $response->status());
            }
        } catch (\Exception $e) {
            Log::error('ClickPesa: Preview USSD exception', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'error' => 'API connection error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Initiate USSD Push request
     */
    public function initiateUssdPush(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|string|min:1',
            'currency' => 'required|string|in:TZS',
            'orderReference' => 'required|string',
            'phoneNumber' => 'required|string|regex:/^255\d{9}$/',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Validation failed',
                'details' => $validator->errors()
            ], 400);
        }

        try {
            Log::info('ClickPesa: Initiate USSD Push', ['orderReference' => $request->orderReference]);
            
            $token = $request->header('Authorization');
            if (!$token) {
                return response()->json(['success' => false, 'error' => 'Authorization token required'], 401);
            }

            $response = Http::timeout(30)->withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => $token,
            ])->post($this->baseUrl . '/payments/initiate-ussd-push-request', [
                'amount' => $request->amount,
                'currency' => $request->currency,
                'orderReference' => $request->orderReference,
                'phoneNumber' => $request->phoneNumber,
            ]);

            $data = $response->json();
            Log::info('ClickPesa: Initiate USSD response', ['status' => $response->status(), 'data' => $data]);

            if ($response->successful()) {
                return response()->json($data);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => 'Payment initiation failed: ' . ($data['message'] ?? 'Unknown error')
                ], $response->status());
            }
        } catch (\Exception $e) {
            Log::error('ClickPesa: Initiate USSD exception', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'error' => 'API connection error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Initiate Card Payment
     */
    public function initiateCardPayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|string|min:1',
            'currency' => 'required|string|in:USD',
            'orderReference' => 'required|string',
            'customer.id' => 'required|string',
            'customer.name' => 'required|string',
            'customer.email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Validation failed',
                'details' => $validator->errors()
            ], 400);
        }

        try {
            Log::info('ClickPesa: Initiate Card Payment', ['orderReference' => $request->orderReference]);
            
            $token = $request->header('Authorization');
            if (!$token) {
                return response()->json(['success' => false, 'error' => 'Authorization token required'], 401);
            }

            $response = Http::timeout(30)->withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => $token,
            ])->post($this->baseUrl . '/payments/initiate-card-payment', [
                'amount' => $request->amount,
                'currency' => $request->currency,
                'orderReference' => $request->orderReference,
                'customer' => $request->customer,
            ]);

            $data = $response->json();
            Log::info('ClickPesa: Card payment response', ['status' => $response->status(), 'data' => $data]);

            if ($response->successful()) {
                return response()->json($data);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => 'Card payment initiation failed: ' . ($data['message'] ?? 'Unknown error')
                ], $response->status());
            }
        } catch (\Exception $e) {
            Log::error('ClickPesa: Card payment exception', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'error' => 'API connection error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Query Payment Status
     */
    public function queryPaymentStatus($orderReference, Request $request)
    {
        try {
            Log::info('ClickPesa: Query payment status', ['orderReference' => $orderReference]);
            
            $token = $request->header('Authorization');
            if (!$token) {
                return response()->json(['success' => false, 'error' => 'Authorization token required'], 401);
            }

            $response = Http::timeout(30)->withHeaders([
                'Authorization' => $token,
            ])->get($this->baseUrl . '/payments/' . $orderReference);

            $data = $response->json();
            Log::info('ClickPesa: Query status response', ['status' => $response->status(), 'data' => $data]);

            if ($response->successful()) {
                return response()->json($data);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => 'Query failed: ' . ($data['message'] ?? 'Unknown error')
                ], $response->status());
            }
        } catch (\Exception $e) {
            Log::error('ClickPesa: Query status exception', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'error' => 'API connection error: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Test API connectivity
     */
    public function testConnection()
    {
        try {
            $response = Http::timeout(10)->get($this->baseUrl . '/health');
            
            return response()->json([
                'success' => true,
                'message' => 'API connection successful',
                'status' => $response->status()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'API connection failed: ' . $e->getMessage()
            ], 500);
        }
    }
}
