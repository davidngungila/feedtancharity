<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// About page
Route::get('/about', function () {
    return view('about');
});

// Campaigns page
Route::get('/campaigns', function () {
    return view('campaigns');
});

// Individual campaign pages
Route::get('/campaigns/{slug}', function ($slug) {
    return view('campaign', ['slug' => $slug]);
});

// Donate page
Route::get('/donate', function () {
    return view('donate');
});

// ClickPesa test page
Route::get('/test-clickpesa', function () {
    return view('test-clickpesa');
});

// ClickPesa simple test page (standalone)
Route::get('/test-clickpesa-simple', function () {
    return view('test-clickpesa-simple');
});

// Simple API test route
Route::get('/api-test', function () {
    return response()->json([
        'success' => true,
        'message' => 'API is working!',
        'timestamp' => now()->toISOString(),
        'server' => 'Laravel ' . app()->version()
    ]);
});

// Direct ClickPesa test page
Route::get('/test-direct-clickpesa', function () {
    return view('test-direct-clickpesa');
});

// Complete ClickPesa test page
Route::get('/test-complete-clickpesa', function () {
    return view('test-complete-clickpesa');
});

// Debug ClickPesa credentials
Route::get('/debug-clickpesa', function () {
    $clientId = config('services.clickpesa.client_id');
    $apiKey = config('services.clickpesa.api_key');
    $baseUrl = config('services.clickpesa.base_url');
    
    return response()->json([
        'credentials' => [
            'client_id' => $clientId,
            'api_key_set' => !empty($apiKey),
            'api_key_length' => strlen($apiKey ?? ''),
            'base_url' => $baseUrl,
            'is_default_client_id' => $clientId === 'your_client_id_here',
            'client_id_empty' => empty($clientId),
            'api_key_empty' => empty($apiKey)
        ],
        'environment' => [
            'app_env' => config('app.env'),
            'app_debug' => config('app.debug'),
            'laravel_version' => app()->version()
        ],
        'next_steps' => [
            'if credentials are missing' => 'Copy credentials from .env.example to .env file',
            'if client_id is "your_client_id_here"' => 'Update .env with real ClickPesa credentials',
            'if api_key is empty' => 'Add CLICKPESA_API_KEY to .env file'
        ]
    ]);
});

// Impact page
Route::get('/impact', function () {
    return view('impact');
});

// Events page
Route::get('/events', function () {
    return view('events');
});

// Blog/News page
Route::get('/blog', function () {
    return view('blog');
});

// Individual blog posts
Route::get('/blog/{slug}', function ($slug) {
    return view('blog-post', ['slug' => $slug]);
});

// Contact page
Route::get('/contact', function () {
    return view('contact');
});

// FAQ page
Route::get('/faq', function () {
    return view('faq');
});

// Get Involved page
Route::get('/get-involved', function () {
    return view('get-involved');
});

// Partners page
Route::get('/partners', function () {
    return view('partners');
});

// Privacy Policy page
Route::get('/privacy', function () {
    return view('privacy');
});

// Terms of Service page
Route::get('/terms', function () {
    return view('terms');
});

// Include payment routes
require __DIR__.'/payments.php';
