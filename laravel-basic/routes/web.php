<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/san-pham", [ProductController::class, "index"]);

//Dynamic route (Params)
Route::get('/san-pham/{id}', [ProductController::class, 'show']);

Route::get('/san-pham-ban-chay', [ProductController::class, 'bestSeller']);
