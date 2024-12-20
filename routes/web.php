<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;

// Route::get('/', function () {
//     return view('layout.content');
// });
// Route::get('/kontol', function () {
//     return view('article.create');
// });
// Route::get('/index', function () {
//     return view('upload.index');
// });

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login/proses', [AuthController::class, 'login_proses'])->name('login.proses');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/proses', [AuthController::class, 'register_proses'])->name('register.proses');

Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

