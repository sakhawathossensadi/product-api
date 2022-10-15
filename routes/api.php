<?php

use Businesshub\Product\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware' => 'api',
        'prefix' => 'products',
    ],
    function () {
        Route::group(['middleware' => 'guest:api'], function () {
            Route::get('hello', function () {
                return "dsfndsn";
            });
        });

        Route::group(['middleware' => 'guest:api'], function () {
            Route::get('/', [ProductController::class, 'index'])->name('product.list');
            Route::post('/', [ProductController::class, 'store'])->name('product.store');
        });
    }
);
