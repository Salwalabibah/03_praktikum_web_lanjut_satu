<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::prefix('product')->group(function(){
    Route::get('/', function(){
        return view('product');
    })->name('product');
    Route::get('/pants', function(){
        return view('pants');
    })->name('pants');
});

Route::get('/about-us', function(){
    return view('about-us');
})->name('about-us');


Route::get('/news', function(){
    return view('news');
})->name('news');

Route::prefix('product')->group(function(){
    Route::get('/program', function(){
        return view('program');
    })->name('program');
    Route::get('/thrift', function(){
        return view('thrift');
    })->name('thrift');
});

Route::get('/contact-us', function(){
    return view('contact-us');
})->name('contact-us');


