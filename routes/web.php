<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'App\Http\Controllers\Web\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\Web\HomeController@about')->name('about');
Route::get('/service', 'App\Http\Controllers\Web\HomeController@service')->name('service');
Route::get('/pricing', 'App\Http\Controllers\Web\HomeController@pricing')->name('pricing');
Route::get('/contact', 'App\Http\Controllers\Web\HomeController@contact')->name('contact');
Route::get('/account', 'App\Http\Controllers\Web\AccountController@index')->name('account');
Route::get('/cart', 'App\Http\Controllers\Web\AccountController@cart')->name('cart');

require __DIR__.'/auth.php';
