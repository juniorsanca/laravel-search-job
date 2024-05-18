<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [JobController::class, 'index']);

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [\App\Http\Controllers\RegisterUserController::class, 'store']);

Route::get('/login', [\App\Http\Controllers\SessionController::class, 'create']);
Route::post('/login', [\App\Http\Controllers\SessionController::class, 'store']);
Route::delete('/logout', [\App\Http\Controllers\SessionController::class, 'destroy']);
