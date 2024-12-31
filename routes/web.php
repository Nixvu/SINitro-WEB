<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'registerSave'])->name('register.save');
Route::post('login', [AuthController::class, 'loginAksi'])->name('login.aksi');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::get('/pelanggan', [PelangganController::class, 'Pelanggan'])->name('pelanggan');
Route::get('/profile', [ProfileController::class, 'Profile'])->name('profile');
Route::get('/dashboard/tampilan/{id}', [DashboardController::class, 'viewDetail'])->name('view');
Route::post('/dashboard/store', [DashboardController::class, 'storeTransaction'])->name('transaksi.store');
Route::get('/dashboard/edit/{id}', [DashboardController::class, 'editDetail'])->name('edit');
Route::put('/dashboard/edit/{id}', [DashboardController::class, 'updateDetail'])->name('update');
Route::delete('/dashboard/delete/{id}', [DashboardController::class, 'deleteDetail'])->name('delete');
