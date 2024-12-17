<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('welcome');
});
Route::post('/login', [UserController::class, 'loginUser']);

Route::get('/register', function(){
    return view('register');
});
Route::post('/register',[UserController::class, 'registerUser']);
