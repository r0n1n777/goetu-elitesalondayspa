<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Services;

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
Route::view('/gallery/our-salon', 'gallery/our-salon')->name('our-salon');
Route::view('/gallery/portfolio', 'gallery/portfolio')->name('portfolio');
Route::view('/services', 'services')->name('services');
Route::view('/promo', 'promo')->name('promo');
Route::view('/contact', 'contact')->name('contact');
Route::view('/rate', 'rate')->name('rate');
Route::view('/policy', 'policy')->name('policy');

// Auth and Admin
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin/dashboard', Services::class)->name('admin-dashboard');
});
