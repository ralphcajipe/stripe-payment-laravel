<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::post('/test', 'App\Http\Controllers\StripeController@test');
Route::post('/live', 'App\Http\Controllers\StripeController@live');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');