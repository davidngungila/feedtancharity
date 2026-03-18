<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClickPesaController;

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

// ClickPesa API Routes
Route::prefix('api/clickpesa')->group(function () {
    Route::post('/generate-token', [ClickPesaController::class, 'generateToken']);
    Route::post('/preview-ussd-push', [ClickPesaController::class, 'previewUssdPush']);
    Route::post('/initiate-ussd-push', [ClickPesaController::class, 'initiateUssdPush']);
    Route::post('/initiate-card-payment', [ClickPesaController::class, 'initiateCardPayment']);
    Route::get('/payment-status/{orderReference}', [ClickPesaController::class, 'queryPaymentStatus']);
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
