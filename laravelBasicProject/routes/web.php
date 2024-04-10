<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersphpController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post('/login', [UsersphpController::class, 'login']);
Route::get('/', [ProductController::class, 'index']);
Route::get('/detail/{id}', [ProductController::class, 'detail']);
// Route::get('search', [ProductController::class, 'search']);
Route::post('add_to_cart', [ProductController::class, 'addToCart']);
