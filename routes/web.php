<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home')->name('home');
Route::view('/shop', 'shop')->name('shop');
Route::view('/services', 'services')->name('services');
Route::view('/promo', 'promo')->name('promo');
Route::view('/contact', 'contact')->name('contact');
Route::view('/rate', 'rate')->name('rate');
Route::view('/about', 'about')->name('about');
