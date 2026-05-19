<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

// FRONTEND
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\HomestayController;
use App\Http\Controllers\frontend\BookingController;
use App\Http\Controllers\frontend\ProfileController;

// HOST
use App\Http\Controllers\host\DashboardController as HostDashboardController;
use App\Http\Controllers\host\HomestayController as HostHomestayController;
use App\Http\Controllers\host\BookingController as HostBookingController;

// ADMIN
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\HomestayController as AdminHomestayController;
use App\Http\Controllers\backend\BookingController as AdminBookingController;





/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('site.home');


// DANH SÁCH HOMESTAY
Route::get('/homestay', [HomestayController::class, 'index'])
    ->name('homestay.index');


// CHI TIẾT HOMESTAY
Route::get('/homestay/{slug}', [HomestayController::class, 'detail'])
    ->name('homestay.detail');

Route::get('/homestay', function () {return view('frontend.homestay.index');})->name('homestay.index');



/*
|--------------------------------------------------------------------------
| BOOKING
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // ĐẶT PHÒNG
    Route::post('/booking/{id}', [BookingController::class, 'store'])
        ->name('booking.store');

    // LỊCH SỬ ĐẶT PHÒNG
    Route::get('/my-booking', [BookingController::class, 'index'])
        ->name('booking.index');

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('user.profile');

});





/*
|--------------------------------------------------------------------------
| LOGIN / REGISTER
|--------------------------------------------------------------------------
*/

Route::get('/dang-nhap', function () {
    return view('frontend.login');
})->name('login');

Route::post('/dang-nhap', [AuthController::class, 'login'])
    ->name('login.post');


Route::get('/dang-ky', function () {
    return view('frontend.register');
})->name('register');

Route::post('/dang-ky', [AuthController::class, 'register'])
    ->name('register.post');


Route::post('/dang-xuat', [AuthController::class, 'logout'])
    ->name('logout');





/*
|--------------------------------------------------------------------------
| HOST
|--------------------------------------------------------------------------
*/

Route::prefix('host')
    ->name('host.')
    ->middleware(['auth'])
    ->group(function () {

        // DASHBOARD
        Route::get('/dashboard', [HostDashboardController::class, 'index'])
            ->name('dashboard');

        // QUẢN LÝ HOMESTAY
        Route::resource('homestay', HostHomestayController::class);

        // QUẢN LÝ BOOKING
        Route::get('/booking', [HostBookingController::class, 'index'])
            ->name('booking.index');

        Route::patch('/booking/{id}/status', [HostBookingController::class, 'updateStatus'])
            ->name('booking.status');

});





/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function () {

        // DASHBOARD
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        // USERS
        Route::get('/users', [UserController::class, 'index'])
            ->name('users.index');

        Route::get('/users/toggle/{id}', [UserController::class, 'toggleRole'])
            ->name('users.toggle');

        // HOMESTAY
        Route::resource('homestay', AdminHomestayController::class);

        // BOOKING
        Route::get('/booking', [AdminBookingController::class, 'index'])
            ->name('booking.index');

        Route::get('/booking/{id}', [AdminBookingController::class, 'show'])
            ->name('booking.show');

        Route::patch('/booking/{id}/status', [AdminBookingController::class, 'updateStatus'])
            ->name('booking.status');

        Route::delete('/booking/{id}', [AdminBookingController::class, 'destroy'])
            ->name('booking.destroy');

});