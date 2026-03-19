<?php
// Fix .env file format to remove invalid syntax
echo "<h2>Fix .env File Format</h2>";

$envFile = __DIR__ . '/../.env';

if (!file_exists($envFile)) {
    echo "<p style='color: red;'>❌ .env file not found</p>";
    exit;
}

// Read current .env content
$envContent = file_get_contents($envFile);

echo "<h3>Current .env Content (ClickPesa section):</h3>";
$lines = explode("\n", $envContent);
$clickpesaLines = [];
foreach ($lines as $line) {
    if (strpos($line, 'CLICKPESA_') === 0) {
        $clickpesaLines[] = $line;
    }
}
echo "<pre style='background: #f5f5f5; padding: 10px; border-radius: 5px;'>";
echo implode("\n", $clickpesaLines);
echo "</pre>";

// Fix the problematic line
$fixedContent = str_replace(
    'CLICKPESA_API_KEY=${CLICKPESA_CLIENT_SECRET} (backward compatibility)',
    'CLICKPESA_API_KEY=SK5tDVLHb8RCJWFCEsQdEOYXMxG43G5yXAcVt2Y2iY',
    $envContent
);

// Backup original .env
$backupFile = $envFile . '.format.backup.' . date('Y-m-d-H-i-s');
copy($envFile, $backupFile);

// Write fixed .env content
if (file_put_contents($envFile, $fixedContent)) {
    echo "<p style='color: green;'>✅ .env file format fixed!</p>";
    echo "<p style='color: blue;'>📁 Backup created: " . basename($backupFile) . "</p>";
    
    echo "<h3>Fixed Format:</h3>";
    echo "<pre style='background: #f5f5f5; padding: 10px; border-radius: 5px;'>";
    echo "CLICKPESA_CLIENT_ID=IDmWAiPBvx3imzVRrN9AiHCL49d5Dn9V\n";
    echo "CLICKPESA_CLIENT_SECRET=SK5tDVLHb8RCJWFCEsQdEOYXMxG43G5yXAcVt2Y2iY\n";
    echo "CLICKPESA_BASE_URL=https://api.clickpesa.com\n";
    echo "CLICKPESA_API_KEY=SK5tDVLHb8RCJWFCEsQdEOYXMxG43G5yXAcVt2Y2iY";
    echo "</pre>";
    
    echo "<h3>Next Steps:</h3>";
    echo "<ol>";
    echo "<li>✅ .env format fixed</li>";
    echo "<li>Clear Laravel cache: <code>php artisan cache:clear</code></li>";
    echo "<li>Clear view cache: <code>php artisan view:clear</code></li>";
    echo "<li>Restart Laravel server</li>";
    echo "<li>Test pages: <a href='/events' style='color: green;'>Events</a> | <a href='/blog' style='color: green;'>Blog</a></li>";
    echo "</ol>";
} else {
    echo "<p style='color: red;'>❌ Failed to fix .env file</p>";
}

echo "<p><a href='/'>← Back to Home</a></p>";
?>
