<?php

use Illuminate\Support\Facades\Route;
use App\App\Admin\Controllers\TeamController;

Route::get('/teams', [TeamController::class, 'index']);

