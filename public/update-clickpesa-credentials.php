<?php
// One-click script to update ClickPesa credentials to the new format
echo "<h2>Update ClickPesa Credentials to Official API Format</h2>";

$envFile = __DIR__ . '/../.env';
$envExampleFile = __DIR__ . '/../.env.example';

if (!file_exists($envFile)) {
    echo "<p style='color: red;'>❌ .env file not found</p>";
    exit;
}

// Read current .env content
$envContent = file_get_contents($envFile);

// New ClickPesa credentials
$newCredentials = [
    '# ClickPesa Payment Gateway (Official API)',
    'CLICKPESA_CLIENT_ID=IDmWAiPBvx3imzVRrN9AiHCL49d5Dn9V',
    'CLICKPESA_CLIENT_SECRET=SK5tDVLHb8RCJWFCEsQdEOYXMxG43G5yXAcVt2Y2iY',
    'CLICKPESA_BASE_URL=https://api.clickpesa.com',
    '',
    '# Legacy ClickPesa Configuration (for backward compatibility)',
    'CLICKPESA_API_KEY=${CLICKPESA_CLIENT_SECRET}'
];

echo "<h3>Updating .env file with new credentials:</h3>";
echo "<pre style='background: #f5f5f5; padding: 10px; border-radius: 5px;'>";
echo implode("\n", $newCredentials);
echo "</pre>";

// Remove existing ClickPesa credentials
$envLines = explode("\n", $envContent);
$newEnvLines = [];
foreach ($envLines as $line) {
    if (strpos($line, 'CLICKPESA_') !== 0) {
        $newEnvLines[] = $line;
    }
}

// Add new credentials
$newEnvContent = implode("\n", $newEnvLines) . "\n" . implode("\n", $newCredentials) . "\n";

// Backup original .env
$backupFile = $envFile . '.backup.' . date('Y-m-d-H-i-s');
copy($envFile, $backupFile);

// Write new .env content
if (file_put_contents($envFile, $newEnvContent)) {
    echo "<p style='color: green;'>✅ ClickPesa credentials updated successfully!</p>";
    echo "<p style='color: blue;'>📁 Backup created: " . basename($backupFile) . "</p>";
    
    echo "<h3>Next Steps:</h3>";
    echo "<ol>";
    echo "<li>✅ Credentials updated to official API format</li>";
    echo "<li>Restart Laravel server: <code>php artisan serve</code></li>";
    echo "<li>Clear cache: <code>php artisan config:clear</code></li>";
    echo "<li><a href='/test-complete-clickpesa' style='color: green; font-weight: bold;'>Test Quick Test Now!</a></li>";
    echo "</ol>";
    
    echo "<h3>What's New:</h3>";
    echo "<ul>";
    echo "<li>✅ Official ClickPesa OAuth2 authentication</li>";
    echo "<li>✅ Real USSD checkout endpoint</li>";
    echo "<li>✅ Proper payment status tracking</li>";
    echo "<li>✅ Laravel 12 compatibility</li>";
    echo "<li>✅ Backward compatibility maintained</li>";
    echo "</ul>";
} else {
    echo "<p style='color: red;'>❌ Failed to update .env file</p>";
}

echo "<p><a href='/check-env.php'>Check Credentials</a> | <a href='/test-complete-clickpesa'>Test Page</a></p>";
?>
