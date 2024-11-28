<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;

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
Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account');
    Route::get('/donate', [DonationController::class, 'create'])->name('donate.create');
    Route::post('/donate', [DonationController::class, 'store'])->name('donate.store');
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
