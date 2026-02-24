<?php

use Illuminate\Support\Facades\Route;
use App\App\Admin\Controllers\OrderSessionController;
use App\App\Admin\Controllers\TrackingOrderController;
use App\App\Admin\Controllers\LoginController as AdminLoginController;
use App\App\Admin\Controllers\TestController;
use App\App\Admin\Controllers\GeminiController;
use App\App\Admin\Controllers\OrderNotificationController;

use App\App\User\Controllers\OrderController as UserOrderController;


/* USER */
Route::get('/order', [UserOrderController::class, 'create'])->name('user.order.create')->middleware('signed');;
/* END USER */

/* ADMIN */
Route::prefix('admin')->name('admin.')->group(function () {
//	Route::get('notifications', [OrderNotificationController::class, 'stream']);
	Route::middleware('admin.guest')->group(function () {
		Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('login');
		Route::post('login', [AdminLoginController::class, 'login'])->name('login.post');
	});

	Route::middleware('admin.auth')->group(function () {
		Route::get('logout', [AdminLoginController::class, 'logout'])->name('logout');
		Route::get('/order-session', [OrderSessionController::class, 'create'])->name('order-session.create');
		Route::post('/store-order-session', [OrderSessionController::class, 'store'])->name('order-session.store');
		Route::get('/order-session-success', [OrderSessionController::class, 'showOrderSessionPage'])->name('order-session.showOrderSessionPage');

		Route::get('/tracking-order', [TrackingOrderController::class, 'index'])->name('tracking-order.index');
		Route::get('/confirm-tracking-order', [TrackingOrderController::class, 'confirm'])->name('tracking-order.confirm');
		Route::post('/confirm-ordered', [TrackingOrderController::class, 'confirmOrdered'])->name('tracking-order.confirm-ordered');
	});
});
/* end ADMIN */

// test
Route::get('upload-file', [TestController::class, 'showFormUpload']);
Route::post('upload-file', [TestController::class, 'postShowFormUpload'])->name('post.upload-file');
Route::get('chat-gemini', [GeminiController::class, 'index'])->name('gemini.index');
Route::post('/chat-gemini', [GeminiController::class, 'ask'])->name('gemini.ask');


