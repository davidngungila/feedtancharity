<?php
// Script to fix ClickPesa credentials in .env file
echo "<h2>Fix ClickPesa Credentials</h2>";

$envFile = __DIR__ . '/.env';
$envExampleFile = __DIR__ . '/.env.example';

if (!file_exists($envFile)) {
    echo "<p style='color: red;'>❌ .env file not found</p>";
    exit;
}

if (!file_exists($envExampleFile)) {
    echo "<p style='color: red;'>❌ .env.example file not found</p>";
    exit;
}

// Read current .env content
$envContent = file_get_contents($envFile);
$envExampleContent = file_get_contents($envExampleFile);

// Extract ClickPesa credentials from .env.example
$clickpesaCredentials = [];
$lines = explode("\n", $envExampleContent);
foreach ($lines as $line) {
    if (strpos($line, 'CLICKPESA_') === 0 && strpos($line, '=') !== false) {
        $clickpesaCredentials[] = $line;
    }
}

echo "<h3>ClickPesa Credentials from .env.example:</h3>";
echo "<pre style='background: #f5f5f5; padding: 10px; border-radius: 5px;'>";
echo implode("\n", $clickpesaCredentials);
echo "</pre>";

// Remove existing ClickPesa credentials from .env
$envLines = explode("\n", $envContent);
$newEnvLines = [];
foreach ($envLines as $line) {
    if (strpos($line, 'CLICKPESA_') !== 0) {
        $newEnvLines[] = $line;
    }
}

// Add ClickPesa credentials to .env
$newEnvContent = implode("\n", $newEnvLines) . "\n" . implode("\n", $clickpesaCredentials) . "\n";

// Backup original .env
$backupFile = $envFile . '.backup.' . date('Y-m-d-H-i-s');
copy($envFile, $backupFile);
echo "<p style='color: blue;'>📁 Backup created: " . basename($backupFile) . "</p>";

// Write new .env content
if (file_put_contents($envFile, $newEnvContent)) {
    echo "<p style='color: green;'>✅ ClickPesa credentials added to .env file</p>";
    echo "<p><strong>Next steps:</strong></p>";
    echo "<ol>";
    echo "<li>Restart Laravel server: <code>php artisan serve</code></li>";
    echo "<li>Clear cache: <code>php artisan config:clear</code></li>";
    echo "<li>Test again: <a href='/test-complete-clickpesa'>ClickPesa Test Page</a></li>";
    echo "</ol>";
} else {
    echo "<p style='color: red;'>❌ Failed to write to .env file</p>";
}

echo "<p><a href='/check-env.php'>Check Credentials</a> | <a href='/test-complete-clickpesa'>Test Page</a></p>";
?>
