<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Complete ClickPesa Test - FeedTan Charity</title>
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
                    <a href="/test-complete-clickpesa" class="text-emerald-600 font-semibold">Complete Test</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-6 py-12">
        <div class="bg-white rounded-3xl shadow-2xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-slate-900 mb-4">Complete ClickPesa Test</h1>
                <p class="text-slate-600">Test the complete ClickPesa payment flow</p>
                <div class="mt-4 inline-flex items-center gap-2 px-4 py-2 bg-purple-100 rounded-full">
                    🚀 <span class="text-purple-700 font-semibold">Full API Flow Test</span>
                </div>
            </div>

            <!-- Test Form -->
            <div class="mb-8 p-6 bg-gray-50 rounded-xl">
                <h3 class="text-lg font-semibold text-slate-900 mb-4">Test Payment Details</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Amount (TZS)</label>
                        <input type="number" id="testAmount" value="50000" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Phone Number</label>
                        <input type="tel" id="testPhone" value="255712345678" class="w-full px-3 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                    </div>
                </div>
            </div>

            <!-- Step 1: Generate Token -->
            <div class="mb-6">
                <button onclick="testGenerateToken()" class="w-full px-6 py-4 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all">
                    <i class="ph-bold ph-key text-xl mr-3"></i>
                    Step 1: Generate Token
                </button>
            </div>

            <!-- Step 2: Preview USSD -->
            <div class="mb-6">
                <button onclick="testPreviewUssd()" class="w-full px-6 py-4 bg-purple-600 text-white font-bold rounded-xl hover:bg-purple-700 transition-all">
                    <i class="ph-bold ph-eye text-xl mr-3"></i>
                    Step 2: Preview USSD-PUSH
                </button>
            </div>

            <!-- Step 3: Initiate Payment -->
            <div class="mb-6">
                <button onclick="testInitiatePayment()" class="w-full px-6 py-4 bg-emerald-600 text-white font-bold rounded-xl hover:bg-emerald-700 transition-all">
                    <i class="ph-bold ph-paper-plane-tilt text-xl mr-3"></i>
                    Step 3: Initiate USSD-PUSH
                </button>
            </div>

            <!-- Step 4: Check Status -->
            <div class="mb-6">
                <button onclick="testPaymentStatus()" class="w-full px-6 py-4 bg-orange-600 text-white font-bold rounded-xl hover:bg-orange-700 transition-all">
                    <i class="ph-bold ph-clock-counter-clockwise text-xl mr-3"></i>
                    Step 4: Check Payment Status
                </button>
            </div>

            <!-- Results Section -->
            <div id="test-results" class="hidden">
                <h3 class="text-xl font-bold text-slate-900 mb-4">Test Results</h3>
                <div id="results-content" class="bg-slate-50 rounded-xl p-6 font-mono text-sm max-h-96 overflow-y-auto">
                    <!-- Results will be displayed here -->
                </div>
            </div>

            <!-- Test Info -->
            <div class="mt-8 p-4 bg-purple-50 rounded-xl">
                <h4 class="font-semibold text-purple-900 mb-2">📋 Complete Flow Test</h4>
                <ul class="text-sm text-purple-700 space-y-1">
                    <li>• Step 1: Generate Bearer token from ClickPesa</li>
                    <li>• Step 2: Preview USSD-PUSH to validate payment details</li>
                    <li>• Step 3: Initiate actual USSD-PUSH payment request</li>
                    <li>• Step 4: Query payment status using order reference</li>
                    <li>• Uses correct API endpoints from ClickPesa documentation</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
    let currentToken = null;
    let currentOrderReference = null;

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

    async function testGenerateToken() {
        const amount = document.getElementById('testAmount').value;
        const phone = document.getElementById('testPhone').value;
        
        try {
            console.log('Testing token generation...');
            
            const response = await fetch('/api/payments/test-generate-token', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                }
            });

            const data = await response.json();
            
            if (data.success && data.data.token) {
                currentToken = data.data.token;
                showResult('test-results', data, response.ok);
            } else {
                showResult('test-results', data, false);
            }
        } catch (error) {
            showResult('test-results', { error: error.message }, false);
        }
    }

    async function testPreviewUssd() {
        if (!currentToken) {
            showResult('test-results', { error: 'Please generate token first (Step 1)' }, false);
            return;
        }

        const amount = document.getElementById('testAmount').value;
        const phone = document.getElementById('testPhone').value;
        currentOrderReference = 'TEST-' + Date.now();
        
        try {
            console.log('Testing USSD preview...');
            
            const response = await fetch('/api/payments/test-preview-ussd', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    amount: amount,
                    currency: 'TZS',
                    orderReference: currentOrderReference,
                    phoneNumber: phone,
                    fetchSenderDetails: true
                })
            });

            const data = await response.json();
            showResult('test-results', data, response.ok);
        } catch (error) {
            showResult('test-results', { error: error.message }, false);
        }
    }

    async function testInitiatePayment() {
        if (!currentToken || !currentOrderReference) {
            showResult('test-results', { error: 'Please complete Steps 1 & 2 first' }, false);
            return;
        }

        const amount = document.getElementById('testAmount').value;
        const phone = document.getElementById('testPhone').value;
        
        try {
            console.log('Testing payment initiation...');
            
            const response = await fetch('/api/payments/test-initiate-payment', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    amount: amount,
                    currency: 'TZS',
                    orderReference: currentOrderReference,
                    phoneNumber: phone
                })
            });

            const data = await response.json();
            showResult('test-results', data, response.ok);
        } catch (error) {
            showResult('test-results', { error: error.message }, false);
        }
    }

    async function testPaymentStatus() {
        if (!currentToken || !currentOrderReference) {
            showResult('test-results', { error: 'Please complete Steps 1-3 first' }, false);
            return;
        }
        
        try {
            console.log('Testing payment status...');
            
            const response = await fetch('/api/payments/test-payment-status', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    orderReference: currentOrderReference
                })
            });

            const data = await response.json();
            showResult('test-results', data, response.ok);
        } catch (error) {
            showResult('test-results', { error: error.message }, false);
        }
    }
    </script>
</body>
</html>
