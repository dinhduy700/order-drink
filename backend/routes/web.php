<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/greeting', function () {
    return 'Hello World';
});

