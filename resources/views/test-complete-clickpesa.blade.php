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

            <!-- Test Input Section -->
            <div class="mb-8 p-6 bg-slate-50 rounded-xl">
                <h3 class="text-lg font-semibold text-slate-900 mb-4">Test Configuration</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Amount (TZS)</label>
                        <input type="number" id="testAmount" value="50000" min="1000" step="1000" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500">
                        <p class="text-xs text-slate-500 mt-1">Minimum: 1,000 TZS</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Phone Number</label>
                        <input type="tel" id="testPhone" value="255712345678" placeholder="255712345678" class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-4 focus:ring-emerald-500/20 focus:border-emerald-500">
                        <p class="text-xs text-slate-500 mt-1">Format: 255xxxxxxxx</p>
                    </div>
                </div>
                
                <!-- Quick Test Button -->
                <div class="mt-6">
                    <button onclick="quickTest()" class="w-full px-6 py-4 bg-gradient-to-r from-emerald-600 to-teal-600 text-white font-bold rounded-xl hover:from-emerald-700 hover:to-teal-700 transition-all shadow-lg">
                        <i class="ph-bold ph-rocket-launch text-xl mr-3"></i>
                        🚀 Quick Test - Pop-up & Splash Step-by-Step
                    </button>
                    <p class="text-xs text-slate-500 mt-2">Visual step-by-step execution with pop-up alerts and splash screens for each step</p>
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

            <!-- Test Display Button -->
            <div class="mb-6">
                <button onclick="testDisplay()" class="w-full px-6 py-4 bg-pink-600 text-white font-bold rounded-xl hover:bg-pink-700 transition-all">
                    <i class="ph-bold ph-monitor text-xl mr-3"></i>
                    Test Display (Debug Results)
                </button>
            </div>

            <!-- Debug Credentials Button -->
            <div class="mb-6">
                <button onclick="debugCredentials()" class="w-full px-6 py-4 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 transition-all">
                    <i class="ph-bold ph-key text-xl mr-3"></i>
                    Debug ClickPesa Credentials
                </button>
            </div>

            <!-- Clear Results Button -->
            <div class="mb-6">
                <button onclick="clearResults()" class="w-full px-6 py-4 bg-gray-600 text-white font-bold rounded-xl hover:bg-gray-700 transition-all">
                    <i class="ph-bold ph-arrow-counter-clockwise text-xl mr-3"></i>
                    Clear Results & Start Over
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

    // Test page load
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Page loaded, testing JavaScript...');
        
        // Test basic functionality
        const resultsElement = document.getElementById('test-results');
        const contentElement = document.getElementById('results-content');
        
        console.log('Page elements found:', {
            resultsElement: !!resultsElement,
            contentElement: !!contentElement,
            testAmount: !!document.getElementById('testAmount'),
            testPhone: !!document.getElementById('testPhone')
        });
        
        if (resultsElement && contentElement) {
            console.log('✅ All elements found, JavaScript is working!');
        } else {
            console.error('❌ Missing elements, check HTML structure');
        }
    });

    function showResult(elementId, content, isSuccess = true) {
        console.log('showResult called with:', { elementId, content, isSuccess });
        
        const element = document.getElementById(elementId);
        let contentDivId = elementId.replace('-results', '-content');
        
        // Special case for test-results
        if (elementId === 'test-results') {
            contentDivId = 'results-content';
        }
        
        let contentDiv = document.getElementById(contentDivId);
        
        console.log('Elements found:', { 
            element: !!element, 
            contentDiv: !!contentDiv,
            elementId: elementId,
            contentDivId: contentDivId
        });
        
        // Try alternative method if element not found
        if (!element) {
            console.error('Results element not found:', elementId);
            // Try to find any element with similar ID
            const possibleElements = document.querySelectorAll('[id*="results"]');
            console.log('Possible result elements:', Array.from(possibleElements).map(el => el.id));
            
            alert('Error: Results container not found. Check browser console for details.');
            return;
        }
        
        if (!contentDiv) {
            console.error('Results content element not found:', contentDivId);
            // Try to find content div within the results element
            const possibleContentDivs = element.querySelectorAll('[id*="content"]');
            console.log('Possible content divs:', Array.from(possibleContentDivs).map(el => el.id));
            
            // If still not found, create it
            if (possibleContentDivs.length === 0) {
                console.log('Creating content div dynamically...');
                const newContentDiv = document.createElement('div');
                newContentDiv.id = contentDivId;
                newContentDiv.className = 'bg-slate-50 rounded-xl p-6 font-mono text-sm max-h-96 overflow-y-auto';
                element.appendChild(newContentDiv);
                contentDiv = newContentDiv;
            } else {
                contentDiv = possibleContentDivs[0];
            }
        }
        
        // Make sure element is visible
        element.classList.remove('hidden');
        element.style.display = 'block';
        
        // Add step information if available
        let displayContent = content;
        if (content.step) {
            displayContent = {
                ...content,
                testing_step: content.step
            };
        }
        
        // Add timestamp for debugging
        displayContent.timestamp = new Date().toISOString();
        displayContent.user_agent = navigator.userAgent.substring(0, 100);
        
        const html = `
            <div class="mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium ${
                    isSuccess ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'
                }">
                    ${isSuccess ? '✅ Success' : '❌ Error'}
                </span>
                ${content.step ? `<span class="ml-2 inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                    📍 ${content.step}
                </span>` : ''}
            </div>
            <div class="mb-2 text-xs text-slate-500">
                🕒 ${new Date().toLocaleString()}
            </div>
            <pre class="whitespace-pre-wrap text-xs bg-white p-4 rounded border border-slate-200 max-h-96 overflow-y-auto">${JSON.stringify(displayContent, null, 2)}</pre>
        `;
        
        console.log('Setting HTML content:', html);
        contentDiv.innerHTML = html;
        
        // Scroll to results
        try {
            element.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        } catch (e) {
            console.warn('Scroll to results failed:', e);
        }
        
        console.log('showResult completed successfully');
    }

    async function testGenerateToken() {
        console.log('=== Starting Step 1: Generate Token ===');
        const amount = document.getElementById('testAmount').value;
        const phone = document.getElementById('testPhone').value;
        
        // Validation
        if (!amount || !phone) {
            showResult('test-results', { 
                error: 'Please enter amount and phone number first',
                validation: {
                    amount: !!amount,
                    phone: !!phone,
                    amount_value: amount,
                    phone_value: phone
                },
                step: 'Token Generation'
            }, false);
            return;
        }
        
        try {
            console.log('Testing token generation...');
            showResult('test-results', { 
                message: '🔄 Generating ClickPesa token...',
                step: 'Token Generation',
                progress: 'starting'
            }, true);
            
            const response = await fetch('/api/payments/test-generate-token', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                }
            });

            console.log('Token response status:', response.status);
            const contentType = response.headers.get('content-type');
            console.log('Token response content-type:', contentType);

            let data;
            if (contentType && contentType.includes('application/json')) {
                data = await response.json();
            } else {
                const text = await response.text();
                console.error('Non-JSON response received:', text);
                data = { 
                    error: 'Non-JSON response received',
                    status: response.status,
                    content_type: contentType,
                    raw_response: text.substring(0, 500) + (text.length > 500 ? '...' : ''),
                    step: 'Token Generation'
                };
            }
            
            if (data.success && data.data.token) {
                currentToken = data.data.token;
                showResult('test-results', { 
                    message: '✅ Token generated successfully!',
                    success: true,
                    token_info: {
                        token_length: data.data.token.length,
                        token_preview: data.data.token.substring(0, 50) + '...',
                        generated_at: data.data.generated_at,
                        expires_at: data.data.expires_at
                    },
                    next_step: 'Ready for Step 2: Preview USSD-PUSH',
                    step: 'Token Generation'
                }, true);
            } else {
                showResult('test-results', { 
                    error: 'Token generation failed',
                    details: data,
                    step: 'Token Generation',
                    troubleshooting: [
                        'Check ClickPesa credentials in .env file',
                        'Verify Laravel server is running',
                        'Check API endpoint accessibility'
                    ]
                }, false);
            }
        } catch (error) {
            console.error('Token generation error:', error);
            showResult('test-results', { 
                error: error.message,
                stack: error.stack,
                type: error.name,
                step: 'Token Generation',
                troubleshooting: [
                    'Check network connection',
                    'Verify Laravel server is running on port 8000',
                    'Check browser console for JavaScript errors'
                ]
            }, false);
        }
    }

    async function testPreviewUssd() {
        console.log('=== Starting Step 2: Preview USSD-PUSH ===');
        
        // Validation
        if (!currentToken) {
            showResult('test-results', { 
                error: 'Please complete Step 1: Generate Token first',
                current_status: {
                    has_token: !!currentToken,
                    token_length: currentToken ? currentToken.length : 0
                },
                step: 'USSD Preview',
                action_required: 'Click Step 1 button first'
            }, false);
            return;
        }

        const amount = document.getElementById('testAmount').value;
        const phone = document.getElementById('testPhone').value;
        
        if (!amount || !phone) {
            showResult('test-results', { 
                error: 'Please enter amount and phone number',
                validation: {
                    amount: !!amount,
                    phone: !!phone,
                    amount_value: amount,
                    phone_value: phone
                },
                step: 'USSD Preview'
            }, false);
            return;
        }
        
        currentOrderReference = 'TEST-' + Date.now();
        
        try {
            console.log('Testing USSD preview...');
            showResult('test-results', { 
                message: '🔄 Previewing USSD payment...',
                step: 'USSD Preview',
                progress: 'validating payment details',
                order_reference: currentOrderReference
            }, true);
            
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

            console.log('USSD preview response status:', response.status);
            const contentType = response.headers.get('content-type');
            console.log('USSD preview content-type:', contentType);

            let data;
            if (contentType && contentType.includes('application/json')) {
                data = await response.json();
            } else {
                const text = await response.text();
                console.error('Non-JSON response received:', text);
                data = { 
                    error: 'Non-JSON response received',
                    status: response.status,
                    content_type: contentType,
                    raw_response: text.substring(0, 500) + (text.length > 500 ? '...' : ''),
                    step: 'USSD Preview'
                };
            }
            
            if (data.success) {
                showResult('test-results', { 
                    message: '✅ USSD preview successful!',
                    success: true,
                    preview_details: {
                        order_reference: currentOrderReference,
                        amount: amount,
                        currency: 'TZS',
                        phone_number: phone,
                        available_channels: data.data?.payment_methods || 'Not specified',
                        sender_details: data.data?.sender_details || 'Not fetched'
                    },
                    next_step: 'Ready for Step 3: Initiate USSD-PUSH',
                    step: 'USSD Preview'
                }, true);
            } else {
                showResult('test-results', { 
                    error: 'USSD preview failed',
                    details: data,
                    step: 'USSD Preview',
                    troubleshooting: [
                        'Check phone number format (should be 255xxxxxxxx)',
                        'Verify amount is valid',
                        'Check ClickPesa API credentials',
                        'Ensure token is still valid'
                    ]
                }, false);
            }
        } catch (error) {
            console.error('USSD preview error:', error);
            showResult('test-results', { 
                error: error.message,
                stack: error.stack,
                type: error.name,
                step: 'USSD Preview',
                troubleshooting: [
                    'Check network connection',
                    'Verify Laravel server is running',
                    'Check API endpoint: /api/payments/test-preview-ussd'
                ]
            }, false);
        }
    }

    async function testInitiatePayment() {
        console.log('=== Starting Step 3: Initiate USSD-PUSH ===');
        
        // Validation
        if (!currentToken) {
            showResult('test-results', { 
                error: 'Please complete Step 1: Generate Token first',
                current_status: {
                    has_token: !!currentToken,
                    token_length: currentToken ? currentToken.length : 0
                },
                step: 'Payment Initiation',
                action_required: 'Click Step 1 button first'
            }, false);
            return;
        }

        if (!currentOrderReference) {
            showResult('test-results', { 
                error: 'Please complete Step 2: Preview USSD-PUSH first',
                current_status: {
                    has_token: !!currentToken,
                    has_order_reference: !!currentOrderReference,
                    order_reference: currentOrderReference
                },
                step: 'Payment Initiation',
                action_required: 'Click Step 2 button first'
            }, false);
            return;
        }

        const amount = document.getElementById('testAmount').value;
        const phone = document.getElementById('testPhone').value;
        
        if (!amount || !phone) {
            showResult('test-results', { 
                error: 'Please enter amount and phone number',
                validation: {
                    amount: !!amount,
                    phone: !!phone,
                    amount_value: amount,
                    phone_value: phone
                },
                step: 'Payment Initiation'
            }, false);
            return;
        }
        
        try {
            console.log('Testing payment initiation...');
            showResult('test-results', { 
                message: '🔄 Initiating USSD payment...',
                step: 'Payment Initiation',
                progress: 'sending payment request',
                order_reference: currentOrderReference,
                payment_details: {
                    amount: amount,
                    currency: 'TZS',
                    phone_number: phone
                }
            }, true);
            
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

            console.log('Payment initiation response status:', response.status);
            const contentType = response.headers.get('content-type');
            console.log('Payment initiation content-type:', contentType);

            let data;
            if (contentType && contentType.includes('application/json')) {
                data = await response.json();
            } else {
                const text = await response.text();
                console.error('Non-JSON response received:', text);
                data = { 
                    error: 'Non-JSON response received',
                    status: response.status,
                    content_type: contentType,
                    raw_response: text.substring(0, 500) + (text.length > 500 ? '...' : ''),
                    step: 'Payment Initiation'
                };
            }
            
            if (data.success) {
                showResult('test-results', { 
                    message: '✅ USSD payment initiated successfully!',
                    success: true,
                    payment_details: {
                        order_reference: currentOrderReference,
                        amount: amount,
                        currency: 'TZS',
                        phone_number: phone,
                        transaction_id: data.data?.transaction_id || 'Generated',
                        status: data.data?.status || 'PROCESSING'
                    },
                    user_instructions: [
                        'Check your phone for USSD prompt',
                        'Enter your PIN to confirm payment',
                        'Wait for payment completion',
                        'Use Step 4 to check payment status'
                    ],
                    next_step: 'Ready for Step 4: Check Payment Status',
                    step: 'Payment Initiation'
                }, true);
            } else {
                showResult('test-results', { 
                    error: 'Payment initiation failed',
                    details: data,
                    step: 'Payment Initiation',
                    troubleshooting: [
                        'Check phone number format and availability',
                        'Verify sufficient funds in mobile money account',
                        'Check ClickPesa API credentials',
                        'Ensure token and order reference are valid'
                    ]
                }, false);
            }
        } catch (error) {
            console.error('Payment initiation error:', error);
            showResult('test-results', { 
                error: error.message,
                stack: error.stack,
                type: error.name,
                step: 'Payment Initiation',
                troubleshooting: [
                    'Check network connection',
                    'Verify Laravel server is running',
                    'Check API endpoint: /api/payments/test-initiate-payment'
                ]
            }, false);
        }
    }

    async function testPaymentStatus() {
        console.log('=== Starting Step 4: Check Payment Status ===');
        
        // Validation
        if (!currentToken) {
            showResult('test-results', { 
                error: 'Please complete Step 1: Generate Token first',
                current_status: {
                    has_token: !!currentToken,
                    token_length: currentToken ? currentToken.length : 0
                },
                step: 'Payment Status',
                action_required: 'Click Step 1 button first'
            }, false);
            return;
        }

        if (!currentOrderReference) {
            showResult('test-results', { 
                error: 'Please complete Steps 2 & 3 first',
                current_status: {
                    has_token: !!currentToken,
                    has_order_reference: !!currentOrderReference,
                    order_reference: currentOrderReference
                },
                step: 'Payment Status',
                action_required: 'Click Steps 2 & 3 buttons first'
            }, false);
            return;
        }
        
        try {
            console.log('Testing payment status...');
            showResult('test-results', { 
                message: '🔄 Checking payment status...',
                step: 'Payment Status',
                progress: 'querying payment completion',
                order_reference: currentOrderReference
            }, true);
            
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

            console.log('Payment status response status:', response.status);
            const contentType = response.headers.get('content-type');
            console.log('Payment status content-type:', contentType);

            let data;
            if (contentType && contentType.includes('application/json')) {
                data = await response.json();
            } else {
                const text = await response.text();
                console.error('Non-JSON response received:', text);
                data = { 
                    error: 'Non-JSON response received',
                    status: response.status,
                    content_type: contentType,
                    raw_response: text.substring(0, 500) + (text.length > 500 ? '...' : ''),
                    step: 'Payment Status'
                };
            }
            
            if (data.success) {
                const status = data.data?.status || 'UNKNOWN';
                const statusEmoji = status === 'SUCCESS' ? '✅' : status === 'FAILED' ? '❌' : status === 'PROCESSING' ? '⏳' : '❓';
                
                showResult('test-results', { 
                    message: `${statusEmoji} Payment status retrieved!`,
                    success: true,
                    payment_status: {
                        order_reference: currentOrderReference,
                        status: status,
                        status_emoji: statusEmoji,
                        amount: data.data?.amount || 'Not specified',
                        currency: data.data?.currency || 'TZS',
                        transaction_id: data.data?.transaction_id || currentOrderReference,
                        updated_at: data.data?.updated_at || new Date().toISOString()
                    },
                    status_meaning: {
                        'SUCCESS': 'Payment completed successfully',
                        'FAILED': 'Payment failed or was declined',
                        'PROCESSING': 'Payment is still being processed',
                        'UNKNOWN': 'Status could not be determined'
                    }[status] || 'Unknown status',
                    next_actions: status === 'SUCCESS' ? [
                        'Payment completed successfully!',
                        'You can now test a new payment flow'
                    ] : status === 'FAILED' ? [
                        'Payment failed',
                        'Check phone number and try again',
                        'Verify sufficient funds'
                    ] : [
                        'Payment still processing',
                        'Wait a few moments and check again',
                        'Check your phone for USSD prompts'
                    ],
                    step: 'Payment Status'
                }, true);
            } else {
                showResult('test-results', { 
                    error: 'Payment status check failed',
                    details: data,
                    step: 'Payment Status',
                    troubleshooting: [
                        'Verify order reference is valid',
                        'Check ClickPesa API credentials',
                        'Ensure payment was initiated successfully',
                        'Try checking status again in a few moments'
                    ]
                }, false);
            }
        } catch (error) {
            console.error('Payment status error:', error);
            showResult('test-results', { 
                error: error.message,
                stack: error.stack,
                type: error.name,
                step: 'Payment Status',
                troubleshooting: [
                    'Check network connection',
                    'Verify Laravel server is running',
                    'Check API endpoint: /api/payments/test-payment-status'
                ]
            }, false);
        }
    }

    function quickTest() {
        console.log('=== 🚀 Starting Quick Test - All Steps Automatically ===');
        
        // Reset state
        currentToken = null;
        currentOrderReference = null;
        
        // Show initial message
        showResult('test-results', {
            message: '🚀 Starting Quick Test - Running All Steps Automatically...',
            step: 'Quick Test',
            progress: 'initializing',
            steps: [
                'Step 1: Generate Token',
                'Step 2: Preview USSD-PUSH', 
                'Step 3: Initiate USSD-PUSH',
                'Step 4: Check Payment Status'
            ]
        }, true);
        
        // Run steps sequentially, waiting for each to complete
        runQuickTestStep1();
    }

    async function runQuickTestStep1() {
        console.log('Quick Test - Step 1: Generate Token');
        
        // Show splash screen for Step 1
        showStepSplash('Step 1: Generate Token', '🔑', 'Generating ClickPesa authentication token...', '#3B82F6');
        
        showResult('test-results', {
            message: '🔄 Quick Test - Step 1: Generating Token...',
            step: 'Quick Test',
            progress: 'step 1 of 4',
            current_step: 'Generate Token'
        }, true);
        
        try {
            await testGenerateToken();
            // Wait a moment to see the result, then proceed
            setTimeout(() => {
                hideStepSplash();
                if (currentToken) {
                    // Show success popup
                    showStepPopup('✅ Step 1 Complete!', 'Token generated successfully!', 'success');
                    setTimeout(() => {
                        runQuickTestStep2();
                    }, 2000);
                } else {
                    showStepPopup('❌ Step 1 Failed', 'Token generation was not successful', 'error');
                    showResult('test-results', {
                        error: 'Quick Test failed: Token generation was not successful',
                        step: 'Quick Test',
                        failed_at: 'Step 1: Generate Token',
                        progress: '0 of 4 steps completed',
                        action: 'Check the token generation result above and fix any issues'
                    }, false);
                }
            }, 3000);
        } catch (error) {
            hideStepSplash();
            showStepPopup('❌ Step 1 Error', 'Token generation failed: ' + error.message, 'error');
            showResult('test-results', {
                error: 'Quick Test failed at Step 1: ' + error.message,
                step: 'Quick Test',
                failed_at: 'Step 1: Generate Token',
                progress: '0 of 4 steps completed'
            }, false);
        }
    }

    async function runQuickTestStep2() {
        console.log('Quick Test - Step 2: Preview USSD-PUSH');
        
        // Show splash screen for Step 2
        showStepSplash('Step 2: Preview USSD-PUSH', '📱', 'Validating payment details and previewing USSD request...', '#8B5CF6');
        
        showResult('test-results', {
            message: '🔄 Quick Test - Step 2: Previewing USSD-PUSH...',
            step: 'Quick Test',
            progress: 'step 2 of 4',
            current_step: 'Preview USSD-PUSH'
        }, true);
        
        try {
            await testPreviewUssd();
            // Wait a moment to see the result, then proceed
            setTimeout(() => {
                hideStepSplash();
                if (currentOrderReference) {
                    // Show success popup
                    showStepPopup('✅ Step 2 Complete!', 'USSD preview successful!', 'success');
                    setTimeout(() => {
                        runQuickTestStep3();
                    }, 2000);
                } else {
                    showStepPopup('❌ Step 2 Failed', 'USSD preview was not successful', 'error');
                    showResult('test-results', {
                        error: 'Quick Test failed: USSD preview was not successful',
                        step: 'Quick Test',
                        failed_at: 'Step 2: Preview USSD-PUSH',
                        progress: '1 of 4 steps completed',
                        action: 'Check the USSD preview result above and fix any issues'
                    }, false);
                }
            }, 3000);
        } catch (error) {
            hideStepSplash();
            showStepPopup('❌ Step 2 Error', 'USSD preview failed: ' + error.message, 'error');
            showResult('test-results', {
                error: 'Quick Test failed at Step 2: ' + error.message,
                step: 'Quick Test',
                failed_at: 'Step 2: Preview USSD-PUSH',
                progress: '1 of 4 steps completed'
            }, false);
        }
    }

    async function runQuickTestStep3() {
        console.log('Quick Test - Step 3: Initiate USSD-PUSH');
        
        // Show splash screen for Step 3
        showStepSplash('Step 3: Initiate USSD-PUSH', '💳', 'Sending payment request to your phone...', '#10B981');
        
        showResult('test-results', {
            message: '🔄 Quick Test - Step 3: Initiating USSD-PUSH...',
            step: 'Quick Test',
            progress: 'step 3 of 4',
            current_step: 'Initiate USSD-PUSH'
        }, true);
        
        try {
            await testInitiatePayment();
            // Wait a moment to see the result, then proceed
            setTimeout(() => {
                hideStepSplash();
                // Show success popup
                showStepPopup('✅ Step 3 Complete!', 'Payment initiated! Check your phone for USSD prompt.', 'success');
                setTimeout(() => {
                    runQuickTestStep4();
                }, 2000);
            }, 3000);
        } catch (error) {
            hideStepSplash();
            showStepPopup('❌ Step 3 Error', 'Payment initiation failed: ' + error.message, 'error');
            showResult('test-results', {
                error: 'Quick Test failed at Step 3: ' + error.message,
                step: 'Quick Test',
                failed_at: 'Step 3: Initiate USSD-PUSH',
                progress: '2 of 4 steps completed'
            }, false);
        }
    }

    async function runQuickTestStep4() {
        console.log('Quick Test - Step 4: Check Payment Status');
        
        // Show splash screen for Step 4
        showStepSplash('Step 4: Check Payment Status', '🔍', 'Checking payment completion status...', '#F59E0B');
        
        showResult('test-results', {
            message: '🔄 Quick Test - Step 4: Checking Payment Status...',
            step: 'Quick Test',
            progress: 'step 4 of 4',
            current_step: 'Check Payment Status'
        }, true);
        
        try {
            await testPaymentStatus();
            // Final success message
            setTimeout(() => {
                hideStepSplash();
                // Show success popup
                showStepPopup('🎉 Quick Test Complete!', 'All steps executed successfully! Check your phone for USSD prompts.', 'success');
                
                setTimeout(() => {
                    showResult('test-results', {
                        message: '🎉 Quick Test Complete! All steps executed successfully!',
                        step: 'Quick Test',
                        status: 'completed',
                        progress: '4 of 4 steps completed',
                        final_results: {
                            token_generated: !!currentToken,
                            order_reference: currentOrderReference,
                            steps_completed: 4,
                            total_time: '~20 seconds'
                        },
                        next_actions: [
                            'Check your phone for USSD prompts',
                            'Review the detailed results above',
                            'Test individual steps if needed',
                            'Use Clear Results to start over'
                        ]
                    }, true);
                }, 2000);
            }, 3000);
        } catch (error) {
            hideStepSplash();
            showStepPopup('❌ Step 4 Error', 'Payment status check failed: ' + error.message, 'error');
            showResult('test-results', {
                error: 'Quick Test failed at Step 4: ' + error.message,
                step: 'Quick Test',
                failed_at: 'Step 4: Check Payment Status',
                progress: '3 of 4 steps completed'
            }, false);
        }
    }

    // Splash Screen Functions
    function showStepSplash(title, emoji, description, color) {
        // Remove existing splash
        hideStepSplash();
        
        const splash = document.createElement('div');
        splash.id = 'step-splash';
        splash.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            animation: fadeIn 0.3s ease-in-out;
        `;
        
        splash.innerHTML = `
            <div style="background: white; border-radius: 20px; padding: 40px; text-align: center; max-width: 400px; margin: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.3);">
                <div style="font-size: 60px; margin-bottom: 20px;">${emoji}</div>
                <h2 style="color: ${color}; margin: 0 0 10px 0; font-size: 24px; font-weight: bold;">${title}</h2>
                <p style="color: #666; margin: 0; font-size: 16px; line-height: 1.5;">${description}</p>
                <div style="margin-top: 20px;">
                    <div style="width: 60px; height: 4px; background: ${color}; margin: 0 auto; border-radius: 2px; animation: pulse 1.5s infinite;"></div>
                </div>
            </div>
            <style>
                @keyframes fadeIn {
                    from { opacity: 0; }
                    to { opacity: 1; }
                }
                @keyframes pulse {
                    0%, 100% { opacity: 1; }
                    50% { opacity: 0.5; }
                }
            </style>
        `;
        
        document.body.appendChild(splash);
    }

    function hideStepSplash() {
        const splash = document.getElementById('step-splash');
        if (splash) {
            splash.remove();
        }
    }

    function showStepPopup(title, message, type) {
        const popup = document.createElement('div');
        popup.id = 'step-popup';
        
        const bgColor = type === 'success' ? '#10B981' : type === 'error' ? '#EF4444' : '#3B82F6';
        const emoji = type === 'success' ? '✅' : type === 'error' ? '❌' : 'ℹ️';
        
        popup.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${bgColor};
            color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            z-index: 10000;
            max-width: 350px;
            animation: slideIn 0.3s ease-out;
        `;
        
        popup.innerHTML = `
            <div style="display: flex; align-items: center; margin-bottom: 8px;">
                <span style="font-size: 24px; margin-right: 12px;">${emoji}</span>
                <h3 style="margin: 0; font-size: 18px; font-weight: bold;">${title}</h3>
            </div>
            <p style="margin: 0; font-size: 14px; line-height: 1.4;">${message}</p>
            <style>
                @keyframes slideIn {
                    from { transform: translateX(100%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
            </style>
        `;
        
        document.body.appendChild(popup);
        
        // Auto-remove after 3 seconds
        setTimeout(() => {
            if (popup && popup.parentNode) {
                popup.style.animation = 'slideOut 0.3s ease-in forwards';
                setTimeout(() => {
                    if (popup.parentNode) {
                        popup.remove();
                    }
                }, 300);
            }
        }, 3000);
        
        // Add slide out animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideOut {
                from { transform: translateX(0); opacity: 1; }
                to { transform: translateX(100%); opacity: 0; }
            }
        `;
        document.head.appendChild(style);
    }

    function testDisplay() {
        console.log('Testing display function...');
        
        // Direct element access test
        const resultsElement = document.getElementById('test-results');
        const contentElement = document.getElementById('results-content');
        
        console.log('Direct element test:', {
            resultsElement: !!resultsElement,
            contentElement: !!contentElement,
            resultsElementId: resultsElement?.id,
            contentElementId: contentElement?.id
        });
        
        if (!resultsElement || !contentElement) {
            console.error('Elements not found!');
            alert('Test Results elements not found! Check console for details.');
            return;
        }
        
        // Make visible
        resultsElement.classList.remove('hidden');
        resultsElement.style.display = 'block';
        
        const testData = {
            message: 'Test display is working!',
            timestamp: new Date().toISOString(),
            test_data: {
                amount: 50000,
                phone: '255712345678',
                currency: 'TZS'
            },
            debug_info: {
                page_url: window.location.href,
                user_agent: navigator.userAgent,
                screen_resolution: `${screen.width}x${screen.height}`,
                viewport_size: `${window.innerWidth}x${window.innerHeight}`
            }
        };
        
        // Direct HTML assignment
        const html = `
            <div class="mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                    ✅ Success
                </span>
                <span class="ml-2 inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                    📍 Test Display
                </span>
            </div>
            <div class="mb-2 text-xs text-slate-500">
                🕒 ${new Date().toLocaleString()}
            </div>
            <pre class="whitespace-pre-wrap text-xs bg-white p-4 rounded border border-slate-200 max-h-96 overflow-y-auto">${JSON.stringify(testData, null, 2)}</pre>
        `;
        
        console.log('Setting HTML directly...');
        contentElement.innerHTML = html;
        
        // Scroll to results
        resultsElement.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        
        console.log('Test display completed successfully!');
    }

    function debugCredentials() {
        console.log('=== Starting Debug ClickPesa Credentials ===');
        
        showResult('test-results', { 
            message: '🔍 Debugging ClickPesa credentials...',
            step: 'Credentials Debug',
            progress: 'checking configuration'
        }, true);
        
        fetch('/debug-clickpesa')
            .then(response => {
                console.log('Debug response status:', response.status);
                if (!response.ok) {
                    throw new Error(`HTTP ${response.status}: ${response.statusText}`);
                }
                return response.json();
            })
            .then(data => {
                console.log('Debug response data:', data);
                
                const credentialsStatus = data.credentials?.client_id_empty || data.credentials?.api_key_empty || data.credentials?.is_default_client_id ? '❌ Issues Found' : '✅ All Good';
                
                showResult('test-results', {
                    message: `${credentialsStatus} ClickPesa Credentials Debug`,
                    credentials_status: credentialsStatus,
                    ...data,
                    step: 'Credentials Debug',
                    recommendations: data.credentials?.client_id_empty ? [
                        'Add CLICKPESA_CLIENT_ID to .env file',
                        'Copy from .env.example to .env',
                        'Restart Laravel server after changes'
                    ] : data.credentials?.api_key_empty ? [
                        'Add CLICKPESA_API_KEY to .env file',
                        'Copy from .env.example to .env',
                        'Restart Laravel server after changes'
                    ] : data.credentials?.is_default_client_id ? [
                        'Replace default client_id with real ClickPesa credentials',
                        'Update CLICKPESA_CLIENT_ID in .env file',
                        'Restart Laravel server after changes'
                    ] : [
                        '✅ Credentials are properly configured',
                        'Ready to test ClickPesa API calls',
                        'Proceed with Step 1: Generate Token'
                    ]
                }, credentialsStatus === '✅ All Good');
            })
            .catch(error => {
                console.error('Debug credentials error:', error);
                showResult('test-results', {
                    error: error.message,
                    step: 'Credentials Debug',
                    troubleshooting: [
                        'Check if Laravel server is running',
                        'Verify /debug-clickpesa route is accessible',
                        'Check network connection',
                        'Try accessing http://127.0.0.1:8000/debug-clickpesa directly'
                    ]
                }, false);
            });
    }

    function clearResults() {
        console.log('=== Clearing Results & Starting Over ===');
        
        // Clear results display
        const resultsDiv = document.getElementById('test-results');
        const contentDiv = document.getElementById('results-content');
        
        if (resultsDiv) {
            resultsDiv.classList.add('hidden');
            resultsDiv.style.display = 'none';
        }
        
        if (contentDiv) {
            contentDiv.innerHTML = '';
        }
        
        // Reset stored data
        currentToken = null;
        currentOrderReference = null;
        
        // Clear form inputs
        const amountInput = document.getElementById('testAmount');
        const phoneInput = document.getElementById('testPhone');
        
        if (amountInput) {
            amountInput.value = '';
        }
        
        if (phoneInput) {
            phoneInput.value = '';
        }
        
        console.log('✅ Results cleared, ready to start fresh');
        
        // Show confirmation
        alert('✅ All results cleared!\n\nReady to start fresh testing:\n• Token and order reference reset\n• Form inputs cleared\n• Results section hidden\n\nYou can now start a new test flow!');
    }
    </script>
</body>
</html>
