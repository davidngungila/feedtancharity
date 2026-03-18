<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ClickPesa API Test - FeedTan Charity</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-emerald-600">FeedTan Charity</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/donate" class="text-gray-600 hover:text-emerald-600">Donate</a>
                    <a href="/test-clickpesa-simple" class="text-emerald-600 font-semibold">Test API</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-6 py-12">
        <div class="bg-white rounded-3xl shadow-2xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-slate-900 mb-4">ClickPesa Connection Test</h1>
                <p class="text-slate-600">Test API connection and token generation</p>
                <div class="mt-4 inline-flex items-center gap-2 px-4 py-2 bg-emerald-100 rounded-full">
                    🧪 <span class="text-emerald-700 font-semibold">API Testing Mode</span>
                </div>
            </div>

            <!-- Test Connection Button -->
            <div class="mb-8">
                <button onclick="testConnection()" class="w-full px-6 py-4 bg-emerald-600 text-white font-bold rounded-xl hover:bg-emerald-700 transition-all">
                    <i class="ph-bold ph-plug text-xl mr-3"></i>
                    Test ClickPesa Connection
                </button>
            </div>

            <!-- Results Section -->
            <div id="test-results" class="hidden">
                <h3 class="text-xl font-bold text-slate-900 mb-4">Test Results</h3>
                <div id="results-content" class="bg-slate-50 rounded-xl p-6 font-mono text-sm max-h-96 overflow-y-auto">
                    <!-- Results will be displayed here -->
                </div>
            </div>

            <!-- Token Test Section -->
            <div class="mt-8">
                <button onclick="testTokenGeneration()" class="w-full px-6 py-4 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all">
                    <i class="ph-bold ph-key text-xl mr-3"></i>
                    Test Token Generation
                </button>
            </div>

            <!-- Token Results -->
            <div id="token-results" class="hidden mt-6">
                <h3 class="text-xl font-bold text-slate-900 mb-4">Token Generation Results</h3>
                <div id="token-content" class="bg-slate-50 rounded-xl p-6 font-mono text-sm max-h-96 overflow-y-auto">
                    <!-- Token results will be displayed here -->
                </div>
            </div>

            <!-- Payment Preview Test -->
            <div class="mt-8">
                <button onclick="testPaymentPreview()" class="w-full px-6 py-4 bg-purple-600 text-white font-bold rounded-xl hover:bg-purple-700 transition-all">
                    <i class="ph-bold ph-credit-card text-xl mr-3"></i>
                    Test Payment Preview
                </button>
            </div>

            <!-- Payment Preview Results -->
            <div id="payment-results" class="hidden mt-6">
                <h3 class="text-xl font-bold text-slate-900 mb-4">Payment Preview Results</h3>
                <div id="payment-content" class="bg-slate-50 rounded-xl p-6 font-mono text-sm max-h-96 overflow-y-auto">
                    <!-- Payment results will be displayed here -->
                </div>
            </div>

            <!-- Configuration Info -->
            <div class="mt-8 p-4 bg-blue-50 rounded-xl">
                <h4 class="font-semibold text-blue-900 mb-2">📋 Test Information</h4>
                <ul class="text-sm text-blue-700 space-y-1">
                    <li>• Test Connection: Verifies API credentials are loaded correctly</li>
                    <li>• Test Token Generation: Attempts to generate ClickPesa access token</li>
                    <li>• Test Payment Preview: Tests actual payment preview with sample data</li>
                    <li>• All responses show detailed debug information</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
    function showResult(elementId, content, isSuccess = true) {
        const element = document.getElementById(elementId);
        const contentDiv = document.getElementById(elementId.replace('-results', '-content'));
        
        element.classList.remove('hidden');
        contentDiv.innerHTML = `
            <div class="mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium ${
                    isSuccess ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'
                }">
                    ${isSuccess ? '✅ Success' : '❌ Error'}
                </span>
            </div>
            <pre class="whitespace-pre-wrap text-xs">${JSON.stringify(content, null, 2)}</pre>
        `;
    }

    async function testConnection() {
        const resultsDiv = document.getElementById('test-results');
        const contentDiv = document.getElementById('results-content');
        
        resultsDiv.classList.remove('hidden');
        contentDiv.innerHTML = '<div class="text-center">Testing connection...</div>';

        try {
            const response = await fetch('/api/payments/test-clickpesa-connection', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

            const data = await response.json();
            showResult('test-results', data, response.ok);
        } catch (error) {
            showResult('test-results', { error: error.message }, false);
        }
    }

    async function testTokenGeneration() {
        const resultsDiv = document.getElementById('token-results');
        const contentDiv = document.getElementById('token-content');
        
        resultsDiv.classList.remove('hidden');
        contentDiv.innerHTML = '<div class="text-center">Generating token...</div>';

        try {
            const response = await fetch('/api/payments/test-clickpesa-token', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });

            const data = await response.json();
            showResult('token-results', data, response.ok);
        } catch (error) {
            showResult('token-results', { error: error.message }, false);
        }
    }

    async function testPaymentPreview() {
        const resultsDiv = document.getElementById('payment-results');
        const contentDiv = document.getElementById('payment-content');
        
        resultsDiv.classList.remove('hidden');
        contentDiv.innerHTML = '<div class="text-center">Testing payment preview...</div>';

        try {
            const testData = {
                amount: 50000,
                currency: 'TZS',
                payment_method: 'ussd',
                phone_number: '255712345678',
                donor_name: 'Test User',
                donor_email: 'test@example.com'
            };

            const response = await fetch('/api/payments/test-clickpesa-payment', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(testData)
            });

            const data = await response.json();
            showResult('payment-results', data, response.ok);
        } catch (error) {
            showResult('payment-results', { error: error.message }, false);
        }
    }
    </script>
</body>
</html>
