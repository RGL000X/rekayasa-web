<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TransactionController;

Route::resource('products', ProductController::class);
Route::resource('stocks', StockController::class);
Route::resource('transactions', TransactionController::class);