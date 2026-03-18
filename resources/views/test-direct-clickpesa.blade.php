<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Direct ClickPesa Test - FeedTan Charity</title>
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
                    <a href="/test-direct-clickpesa" class="text-emerald-600 font-semibold">Direct Test</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-6 py-12">
        <div class="bg-white rounded-3xl shadow-2xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-slate-900 mb-4">Direct ClickPesa API Test</h1>
                <p class="text-slate-600">Test ClickPesa API directly (same as your working cURL)</p>
                <div class="mt-4 inline-flex items-center gap-2 px-4 py-2 bg-blue-100 rounded-full">
                    🔗 <span class="text-blue-700 font-semibold">Direct API Test</span>
                </div>
            </div>

            <!-- Direct Token Test -->
            <div class="mb-8">
                <button onclick="testDirectToken()" class="w-full px-6 py-4 bg-green-600 text-white font-bold rounded-xl hover:bg-green-700 transition-all">
                    <i class="ph-bold ph-key text-xl mr-3"></i>
                    Test Direct Token Generation (cURL style)
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
            <div class="mt-8 p-4 bg-blue-50 rounded-xl">
                <h4 class="font-semibold text-blue-900 mb-2">📋 Direct Test Information</h4>
                <ul class="text-sm text-blue-700 space-y-1">
                    <li>• Uses same format as your working cURL request</li>
                    <li>• Tests ClickPesa API directly from Laravel</li>
                    <li>• Uses your actual credentials</li>
                    <li>• Shows detailed response and error info</li>
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

    async function testDirectToken() {
        const resultsDiv = document.getElementById('test-results');
        const contentDiv = document.getElementById('results-content');
        
        resultsDiv.classList.remove('hidden');
        contentDiv.innerHTML = '<div class="text-center">Testing direct ClickPesa token...</div>';

        try {
            console.log('Testing direct ClickPesa token generation...');
            
            const response = await fetch('/test-direct-clickpesa-token', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                }
            });

            console.log('Direct token response status:', response.status);
            
            const contentType = response.headers.get('content-type');
            console.log('Content type:', contentType);

            let data;
            if (contentType && contentType.includes('application/json')) {
                data = await response.json();
            } else {
                const text = await response.text();
                console.log('Raw response:', text);
                data = { 
                    error: 'Non-JSON response received',
                    status: response.status,
                    content_type: contentType,
                    raw_response: text.substring(0, 500) + (text.length > 500 ? '...' : '')
                };
            }

            showResult('test-results', data, response.ok);
        } catch (error) {
            console.error('Direct token test error:', error);
            showResult('test-results', { 
                error: error.message,
                stack: error.stack,
                type: error.name,
                suggestions: [
                    'Check Laravel logs: storage/logs/laravel.log',
                    'Verify ClickPesa credentials in .env',
                    'Make sure server is running: php artisan serve'
                ]
            }, false);
        }
    }
    </script>
</body>
</html>
