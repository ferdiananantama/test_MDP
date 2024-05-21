<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

// Route::get('/', function () {
//     return view('pages.dashboard');
// });

Route::get('/', function () {
    return view('pages.auth.login');
});


// Route::get('/login', function(){
//     return view('pages.auth.login');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');

    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
});