<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManagerAuthController;
use App\Http\Controllers\ManagerController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

Route::middleware('auth')->group(function () {
Route::get('/attendance', [UserController::class, 'register']);});

Route::get('/admin/login', [ManagerAuthController::class, 'login']);
Route::post('/admin/authenticate', [ManagerAuthController::class, 'authenticate']);
Route::get('/admin/attendance/list', [ManagerController::class, 'index']);