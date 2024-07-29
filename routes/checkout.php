<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\GeneralViewController;

Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/calculateShippingCost', [CheckoutController::class, 'calculateShippingCost'])->name('calculateShippingCost');
    Route::post('/finalizePurchase', [CheckoutController::class, 'finalizePurchase'])->name('finalizePurchase');
});

Route::get('/finalizePurchase', [GeneralViewController::class, 'no_authorized'])->name('finalizePurchase.unauthorized');
