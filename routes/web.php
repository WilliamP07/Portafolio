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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/skills', function () {
    return view('skills.index');
});

Route::get('/portfolio', function () {
    return view('portfolio.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/experience', function () {
    return view('business.index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
