<?php
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout');
});



Route::get('/check-rates', [BookingController::class, 'showForm']); // Form ko display karega
Route::post('/check-rates', [BookingController::class, 'processForm']); // Form ko submit karne par process karega


Route::view('register','auth.register')->name('register');
Route::post('registerSave',[UserController::class,'register'])->name('registerSave');

Route::view('login','auth.login')->name('login');
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');

Route::get('dashboard',[UserController::class,'dashboardpage'])->name('dashboard');

// Route::view('booking','booking')->name('booking');

Route::get('/room-category', function () {
    return view('booking.roomcategory');
})->name('room.category');

