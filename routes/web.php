<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\WorkshopSessionController;
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
    return view('index');
});
Route::get('/app', function () {
    return view('layouts.app');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/registration', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/registration', [RegistrationController::class, 'store'])->name('registration.store');

// Route::get('/payment', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');

Route::get('/workshop', [WorkshopSessionController::class, 'index'])->name('workshop.index');

