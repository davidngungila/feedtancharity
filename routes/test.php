<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Test routes for ClickPesa API
Route::get('/test-clickpesa', [TestController::class, 'showTestPage'])->name('test.clickpesa');
Route::post('/test-clickpesa-connection', [TestController::class, 'testConnection'])->name('test.clickpesa.connection');
Route::post('/test-clickpesa-token', [TestController::class, 'testTokenGeneration'])->name('test.clickpesa.token');
Route::post('/test-clickpesa-payment', [TestController::class, 'testPaymentPreview'])->name('test.clickpesa.payment');
