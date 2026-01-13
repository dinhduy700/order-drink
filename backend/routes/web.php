<?php

use Illuminate\Support\Facades\Route;
use App\App\Admin\Controllers\TeamController;
use App\App\Admin\Controllers\OrderSessionController;

Route::get('/teams', [TeamController::class, 'index']);

Route::get('/order-session', [OrderSessionController::class, 'create']);
Route::post('/store-order-session', [OrderSessionController::class, 'store'])->name('admin.order-session.store');;

