<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

// Payment Routes
Route::prefix('payments')->name('payments.')->group(function () {
    
    // Process donation
    Route::post('/donate', [PaymentController::class, 'processDonation'])->name('donate');
    
    // Check payment status
    Route::get('/status/{orderReference}', [PaymentController::class, 'checkPaymentStatus'])->name('status');
    
    // Get payment history
    Route::get('/history', [PaymentController::class, 'getPaymentHistory'])->name('history');
    
    // ClickPesa webhook
    Route::post('/webhook/clickpesa', [PaymentController::class, 'paymentWebhook'])->name('webhook.clickpesa');
    
    // Test connection (for development)
    Route::get('/test', [PaymentController::class, 'testConnection'])->name('test');
});

// API Routes for AJAX calls
Route::prefix('api/payments')->name('api.payments.')->group(function () {
    
    // Process donation via AJAX
    Route::post('/donate', [PaymentController::class, 'processDonation'])->name('donate');
    
    // Check payment status via AJAX
    Route::get('/status/{orderReference}', [PaymentController::class, 'checkPaymentStatus'])->name('status');
    
    // Get payment history via AJAX
    Route::get('/history', [PaymentController::class, 'getPaymentHistory'])->name('history');
});
