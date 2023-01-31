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
    return view('auth.login');
})->name('dashboard');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\PrintController::class, 'dashboard'])->name('home');

Route::get('/accept-request/{id}', [App\Http\Controllers\PrintController::class, 'acceptRequest'])->name('acceptrequest');
Route::get('/cancel-request/{id}', [App\Http\Controllers\PrintController::class, 'cancelRequest'])->name('cancelrequest');



Route::get('/currentorder', [App\Http\Controllers\PrintController::class, 'currentorder'])->name('currentorder');
Route::get('/cancelledorder', [App\Http\Controllers\PrintController::class, 'cancelledorder'])->name('cancelledorder');
Route::get('/acceptedorder', [App\Http\Controllers\PrintController::class, 'acceptedorder'])->name('acceptedorder');
Route::get('/order-history', [App\Http\Controllers\PrintController::class, 'orderhistory'])->name('orderhistory');
Route::get('/manage-account', [App\Http\Controllers\PrintController::class, 'manageaccount'])->name('manageaccount');