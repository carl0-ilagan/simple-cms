<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);


// Admin
Route::get('/admin', [AdminController::class, 'login']);

Route::post('/admin/login', [AdminController::class, 'authenticate']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

Route::get('/admin/logout', [AdminController::class, 'logout']);

Route::get('/admin/posts', [PostController::class, 'index']);

Route::get('/admin/posts/create', [PostController::class, 'create']);

Route::post('/admin/posts', [PostController::class, 'store']);

Route::get('/admin/posts/{post}/edit', [PostController::class, 'edit']);

Route::put('/admin/posts/{post}', [PostController::class, 'update']);

Route::delete('/admin/posts/{post}', [PostController::class, 'destroy']);

Route::get('/admin/messages', [ContactController::class, 'index']);

// Contact Form
Route::post('/contact', [ContactController::class, 'store']);

