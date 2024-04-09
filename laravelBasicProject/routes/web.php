<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersphpController;
use App\Http\Controllers\ProductController;

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UsersphpController::class, 'login']);
Route::get('/', [ProductController::class, 'index']);
