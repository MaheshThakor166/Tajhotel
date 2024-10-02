<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});


Route::view('register','auth.register')->name('register');
Route::view('login','auth.login')->name('login');

Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

