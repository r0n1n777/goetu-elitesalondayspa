<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PromoController;

use App\Http\Livewire\Services;
use App\Http\Livewire\Menus;
use App\Http\Livewire\Galleries;
use App\Http\Livewire\Promotions;

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
Route::view('/gallery', 'gallery/our-salon')->name('gallery');
Route::view('/gallery/portfolio', 'gallery/portfolio')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
Route::view('/rate', 'rate')->name('rate');
Route::view('/policy', 'policy')->name('policy');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/gallery/our-salon', [GalleryController::class, 'index'])->name('our-salon');
Route::get('/promo', [PromoController::class, 'index'])->name('promo');

// Auth and Admin
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin/dashboard', Services::class)->name('admin-dashboard');
    Route::get('/admin/menus/{id}', Menus::class)->name('admin-menus');
    Route::get('/admin/gallery', Galleries::class)->name('admin-gallery');
    Route::get('/admin/promotions', Promotions::class)->name('admin-promotions');
});
