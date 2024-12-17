<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\userController;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [userController::class, 'login']);
