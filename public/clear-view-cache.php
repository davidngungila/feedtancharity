<?php
// Clear Laravel view cache
echo "<h2>Clear Laravel View Cache</h2>";

$cachePath = __DIR__ . '/../storage/framework/views';

if (is_dir($cachePath)) {
    $cacheFiles = glob($cachePath . '/*.php');
    $deletedCount = 0;
    
    echo "<h3>Clearing View Cache Files:</h3>";
    foreach ($cacheFiles as $file) {
        if (unlink($file)) {
            $deletedCount++;
            echo "<p style='color: green;'>✅ Deleted: " . basename($file) . "</p>";
        } else {
            echo "<p style='color: red;'>❌ Failed to delete: " . basename($file) . "</p>";
        }
    }
    
    echo "<p><strong>Total files deleted: {$deletedCount}</strong></p>";
    
    if ($deletedCount > 0) {
        echo "<p style='color: green; font-weight: bold;'>✅ View cache cleared successfully!</p>";
        echo "<p>You can now test the pages:</p>";
        echo "<ul>";
        echo "<li><a href='/events' target='_blank' style='color: blue;'>Events Page</a></li>";
        echo "<li><a href='/blog' target='_blank' style='color: blue;'>Blog Page</a></li>";
        echo "<li><a href='/blog/test-post' target='_blank' style='color: blue;'>Blog Post Page</a></li>";
        echo "</ul>";
    }
} else {
    echo "<p style='color: orange;'>⚠️ View cache directory not found</p>";
}

echo "<p><a href='/check-views.php'>← Check Views</a> | <a href='/'>← Back to Home</a></p>";
?>
