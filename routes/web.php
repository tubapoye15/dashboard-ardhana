<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    // Next modules will be added here, e.g.:
    // Route::resource('products', ProductController::class);
    // Route::resource('categories', CategoryController::class);
    // Route::resource('preorders', PreorderController::class);
    // Route::resource('customers', CustomerController::class);
    // Route::resource('suppliers', SupplierController::class);
});

require __DIR__.'/auth.php';
