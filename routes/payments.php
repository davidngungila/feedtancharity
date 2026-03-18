<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// API Routes for AJAX calls
Route::prefix('api/payments')->name('api.payments.')->group(function () {
    
    // Process donation via AJAX
    Route::post('/donate', [PaymentController::class, 'processDonation'])->name('donate');
    
    // ClickPesa test routes (API)
    Route::post('/test-clickpesa-connection', [TestController::class, 'testConnection'])->name('test.clickpesa.connection');
    Route::post('/test-clickpesa-token', [TestController::class, 'testTokenGeneration'])->name('test.clickpesa.token');
    Route::post('/test-clickpesa-payment', [TestController::class, 'testPaymentPreview'])->name('test.clickpesa.payment');
    Route::post('/test-direct-clickpesa-token', [TestController::class, 'testDirectToken'])->name('test.direct.clickpesa.token');
    
    // Complete ClickPesa flow tests
    Route::post('/test-generate-token', [TestController::class, 'testGenerateToken'])->name('test.generate.token');
    Route::post('/test-preview-ussd', [TestController::class, 'testPreviewUssd'])->name('test.preview.ussd');
    Route::post('/test-initiate-payment', [TestController::class, 'testInitiatePayment'])->name('test.initiate.payment');
    Route::post('/test-payment-status', [TestController::class, 'testPaymentStatus'])->name('test.payment.status');
    
    // Generate token on page load
    Route::post('/generate-token-on-load', [TestController::class, 'generateTokenOnLoad'])->name('generate.token.on.load');
    
    // Check payment status via AJAX
    Route::get('/status/{orderReference}', [PaymentController::class, 'checkPaymentStatus'])->name('status');
    
    // Get payment history via AJAX
    Route::get('/history', [PaymentController::class, 'getPaymentHistory'])->name('history');
    
    // ClickPesa webhook
    Route::post('/webhook/clickpesa', [PaymentController::class, 'paymentWebhook'])->name('webhook.clickpesa');
    
    // Test connection (for development)
    Route::get('/test', [PaymentController::class, 'testConnection'])->name('test');
});
