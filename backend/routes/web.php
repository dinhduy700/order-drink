<?php

use Illuminate\Support\Facades\Route;
use App\App\Admin\Controllers\OrderSessionController;
use App\App\Admin\Controllers\LoginController as AdminLoginController;

Route::prefix('admin')->name('admin.')->group(function () {
	Route::middleware('admin.guest')->group(function () {
		Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('login');
		Route::post('login', [AdminLoginController::class, 'login'])->name('login.post');
	});

	Route::middleware('admin.auth')->group(function () {
		Route::get('logout', [AdminLoginController::class, 'logout'])->name('logout');
		Route::get('/order-session', [OrderSessionController::class, 'create'])->name('order-session.create');
		Route::post('/store-order-session', [OrderSessionController::class, 'store'])->name('order-session.store');

		Route::get('/order-session-success', [OrderSessionController::class, 'showOrderSessionPage'])->name('order-session.showOrderSessionPage');
	});
});