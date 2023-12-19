<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function () {

    Route::get('/', [ProductController::class, 'index'])->name('frontend.layouts.app.index');
    Route::get('/products', [ProductController::class, 'index'])->name('frontend.pages.dashboard');

    // insert data
    Route::get('/products/create', [ProductController::class, 'create'])->name('frontend.pages.create');
    Route::Post('/products/create', [ProductController::class, 'createData']);

    // delete data
    Route::get('/products/{id}', [ProductController::class, 'destroy'])->name('destroy');

    // update data
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::POST('/products/edit/{id}', [ProductController::class, 'update'])->name('update');

    //sell
    Route::get('/products/sell/{id}', [ProductController::class, 'sell'])->name('sell');
    Route::Post('/products/sell/{id}', [ProductController::class, 'transactions'])->name("update_transactions");

    // show transactions data
    Route::get('/transactions', [ProductController::class, 'showTransactions'])->name('transactions');

    // delete transactions
    Route::get('/transactions/{id}', [ProductController::class, 'destroyTransaction'])->name('destroyTransaction');




});




