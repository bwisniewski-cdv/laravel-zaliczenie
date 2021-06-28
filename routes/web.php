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
//Stary index
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('start');
});

Route::get('/oferta', function () {
    return view('oferta');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/o_nas', function () {
    return view('o_nas');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
