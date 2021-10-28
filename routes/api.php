<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/me', [AuthController::class, 'me']);
Route::post('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');