<?php
// Simple script to check ClickPesa credentials
echo "<h2>ClickPesa Credentials Check</h2>";

$clientId = env('CLICKPESA_CLIENT_ID');
$apiKey = env('CLICKPESA_API_KEY');
$baseUrl = env('CLICKPESA_BASE_URL');

echo "<h3>Current Environment Variables:</h3>";
echo "<p><strong>CLICKPESA_CLIENT_ID:</strong> " . ($clientId ?: 'NOT SET') . "</p>";
echo "<p><strong>CLICKPESA_API_KEY:</strong> " . ($apiKey ? 'SET (' . strlen($apiKey) . ' chars)' : 'NOT SET') . "</p>";
echo "<p><strong>CLICKPESA_BASE_URL:</strong> " . ($baseUrl ?: 'NOT SET') . "</p>";

echo "<h3>Configuration Status:</h3>";
if ($clientId && $apiKey && $baseUrl) {
    echo "<p style='color: green;'>✅ All ClickPesa credentials are configured</p>";
    
    // Test basic connectivity
    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $baseUrl . '/generate-token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([]));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'client-id: ' . $clientId,
            'api-key: ' . $apiKey,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        if ($error) {
            echo "<p style='color: red;'>❌ Connection Error: " . htmlspecialchars($error) . "</p>";
        } else {
            echo "<p style='color: green;'>✅ API Connection Successful (HTTP $httpCode)</p>";
            echo "<p><strong>Response:</strong></p>";
            echo "<pre style='background: #f5f5f5; padding: 10px; border-radius: 5px;'>";
            echo htmlspecialchars(substr($response, 0, 500) . (strlen($response) > 500 ? '...' : ''));
            echo "</pre>";
        }
    } catch (Exception $e) {
        echo "<p style='color: red;'>❌ Exception: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
} else {
    echo "<p style='color: red;'>❌ Missing ClickPesa credentials</p>";
    echo "<p>Please copy the following from .env.example to .env:</p>";
    echo "<pre style='background: #f5f5f5; padding: 10px; border-radius: 5px;'>";
    echo "CLICKPESA_CLIENT_ID=IDmWAiPBvx3imzVRrN9AiHCL49d5Dn9V\n";
    echo "CLICKPESA_API_KEY=SK5tDVLHb8RCJWFCEsQdEOYXMxG43G5yXAcVt2Y2iY\n";
    echo "CLICKPESA_BASE_URL=https://api.clickpesa.com/third-parties";
    echo "</pre>";
}

echo "<h3>PHP Info:</h3>";
echo "<p>PHP Version: " . PHP_VERSION . "</p>";
echo "<p>cURL Extension: " . (extension_loaded('curl') ? '✅ Available' : '❌ Not Available') . "</p>";
echo "<p>JSON Extension: " . (extension_loaded('json') ? '✅ Available' : '❌ Not Available') . "</p>";

echo "<p><a href='/test-complete-clickpesa'>← Back to Test Page</a></p>";
?>
