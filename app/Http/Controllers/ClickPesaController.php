<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

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
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'client-id' => $this->clientId,
                'api-key' => $this->apiKey,
            ])->post($this->baseUrl . '/generate-token');

            $data = $response->json();

            if ($response->successful() && isset($data['success']) && $data['success'] && isset($data['token'])) {
                return response()->json([
                    'success' => true,
                    'token' => $data['token']
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => 'Failed to generate token: ' . ($data['message'] ?? 'Unknown error')
                ], 400);
            }
        } catch (\Exception $e) {
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
            $token = $request->header('Authorization');
            if (!$token) {
                return response()->json(['success' => false, 'error' => 'Authorization token required'], 401);
            }

            $response = Http::withHeaders([
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

            if ($response->successful()) {
                return response()->json($data);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => 'Preview failed: ' . ($data['message'] ?? 'Unknown error')
                ], $response->status());
            }
        } catch (\Exception $e) {
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
            $token = $request->header('Authorization');
            if (!$token) {
                return response()->json(['success' => false, 'error' => 'Authorization token required'], 401);
            }

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => $token,
            ])->post($this->baseUrl . '/payments/initiate-ussd-push-request', [
                'amount' => $request->amount,
                'currency' => $request->currency,
                'orderReference' => $request->orderReference,
                'phoneNumber' => $request->phoneNumber,
            ]);

            $data = $response->json();

            if ($response->successful()) {
                return response()->json($data);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => 'Payment initiation failed: ' . ($data['message'] ?? 'Unknown error')
                ], $response->status());
            }
        } catch (\Exception $e) {
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
            $token = $request->header('Authorization');
            if (!$token) {
                return response()->json(['success' => false, 'error' => 'Authorization token required'], 401);
            }

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => $token,
            ])->post($this->baseUrl . '/payments/initiate-card-payment', [
                'amount' => $request->amount,
                'currency' => $request->currency,
                'orderReference' => $request->orderReference,
                'customer' => $request->customer,
            ]);

            $data = $response->json();

            if ($response->successful()) {
                return response()->json($data);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => 'Card payment initiation failed: ' . ($data['message'] ?? 'Unknown error')
                ], $response->status());
            }
        } catch (\Exception $e) {
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
            $token = $request->header('Authorization');
            if (!$token) {
                return response()->json(['success' => false, 'error' => 'Authorization token required'], 401);
            }

            $response = Http::withHeaders([
                'Authorization' => $token,
            ])->get($this->baseUrl . '/payments/' . $orderReference);

            $data = $response->json();

            if ($response->successful()) {
                return response()->json($data);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => 'Query failed: ' . ($data['message'] ?? 'Unknown error')
                ], $response->status());
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'API connection error: ' . $e->getMessage()
            ], 500);
        }
    }
}
