<?php
// Check if views exist
echo "<h2>View Files Check</h2>";

$viewPaths = [
    'events' => __DIR__ . '/../resources/views/events.blade.php',
    'blog' => __DIR__ . '/../resources/views/blog.blade.php', 
    'blog-post' => __DIR__ . '/../resources/views/blog-post.blade.php',
    'layouts.app' => __DIR__ . '/../resources/views/layouts/app.blade.php'
];

echo "<h3>View File Status:</h3>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr><th style='padding: 8px; background: #f0f0f0;'>View Name</th><th style='padding: 8px; background: #f0f0f0;'>File Path</th><th style='padding: 8px; background: #f0f0f0;'>Status</th><th style='padding: 8px; background: #f0f0f0;'>Size</th></tr>";

$allExist = true;
foreach ($viewPaths as $viewName => $filePath) {
    $exists = file_exists($filePath);
    $size = $exists ? filesize($filePath) : 0;
    $status = $exists ? '✅ Exists' : '❌ Missing';
    $color = $exists ? 'green' : 'red';
    
    echo "<tr>";
    echo "<td style='padding: 8px;'>{$viewName}</td>";
    echo "<td style='padding: 8px; font-family: monospace; font-size: 12px;'>" . basename($filePath) . "</td>";
    echo "<td style='padding: 8px; color: {$color}; font-weight: bold;'>{$status}</td>";
    echo "<td style='padding: 8px;'>" . ($size > 0 ? $size . ' bytes' : '-') . "</td>";
    echo "</tr>";
    
    if (!$exists) {
        $allExist = false;
    }
}

echo "</table>";

if ($allExist) {
    echo "<p style='color: green; font-weight: bold;'>✅ All view files exist!</p>";
    echo "<h3>Test Links:</h3>";
    echo "<ul>";
    echo "<li><a href='/events' target='_blank' style='color: blue;'>Events Page</a></li>";
    echo "<li><a href='/blog' target='_blank' style='color: blue;'>Blog Page</a></li>";
    echo "<li><a href='/blog/test-post' target='_blank' style='color: blue;'>Blog Post Page</a></li>";
    echo "</ul>";
} else {
    echo "<p style='color: red; font-weight: bold;'>❌ Some view files are missing!</p>";
}

echo "<h3>Laravel View Cache:</h3>";
$cachePath = __DIR__ . '/../storage/framework/views';
if (is_dir($cachePath)) {
    $cacheFiles = glob($cachePath . '/*.php');
    echo "<p>View cache files: " . count($cacheFiles) . "</p>";
    echo "<p><a href='/clear-view-cache.php' style='color: blue;'>Clear View Cache</a></p>";
} else {
    echo "<p>View cache directory not found</p>";
}

echo "<p><a href='/'>← Back to Home</a> | <a href='/fix-env-format.php'>Fix .env Format</a></p>";
?>
