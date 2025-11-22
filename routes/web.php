<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Web\NotificationController;
use \App\Http\Controllers\Web\UserController;

Route::get('notifications', [NotificationController::class, 'index']);

Route::get('admin/users', [UserController::class, 'index'])->name('users');
Route::post('admin/users', [UserController::class, 'store'])->name('user-form');
