<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});


Route::view('register','auth.register')->name('register');
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

Route::view('login','auth.login')->name('login');
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

Route::get('dashboard',[UserController::class,'dashboardpage'])->name('dashboard');



Route::view('booking','booking')->name('booking');


