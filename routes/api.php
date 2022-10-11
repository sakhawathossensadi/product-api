<?php

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
    }
);

Route::get('ff', function () {
    return "eafae";
});
