<?php
/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */

use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */
// Home
Route::get('/', 'App\Http\Controllers\Web\HomeController@index')->name('home');
Route::get('/about', 'App\Http\Controllers\Web\HomeController@about')->name('about');
Route::get('/service', 'App\Http\Controllers\Web\HomeController@service')->name('service');
Route::get('/service/{id}', 'App\Http\Controllers\Web\HomeController@serviceDatas')->whereNumber('id')->name('service.datas');
Route::get('/pricing', 'App\Http\Controllers\Web\HomeController@pricing')->name('pricing');
Route::get('/contact', 'App\Http\Controllers\Web\HomeController@contact')->name('contact');
Route::get('/symlink', function () {return view('symlink');})->name('generate_symlink'); // Generate symbolic link
Route::get('/language/{locale}', 'App\Http\Controllers\Web\HomeController@changeLanguage')->name('change_language'); // Change language

// Account
Route::get('/account', 'App\Http\Controllers\Web\AccountController@index')->name('account');

Route::middleware('auth')->group(function () {
    Route::get('addCardnbr/{id}', [CommandeController::class, 'addCardnbr'])->name('addCardnbr');
    Route::get('commander', [CommandeController::class, 'store'])->name('commander');
    Route::get('addCard/{id}', [CommandeController::class, 'addCard'])->name('addCard');
    Route::get('deletTpCard/{id}', [CommandeController::class, 'deletTpCard'])->name('deletTpCard');
    Route::get('/cart', 'App\Http\Controllers\Web\AccountController@cart')->name('cart');
    Route::get('dashboard', 'App\Http\Controllers\Web\HomeController@index')->name('dashboard');

});

require __DIR__ . '/auth.php';
