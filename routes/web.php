<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/student/admission', [HomeController::class, 'admission'])->name('admission');
Route::get('/student/courses', [HomeController::class, 'courses'])->name('courses');

// Authentications
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
Route::post('/registration', [AuthController::class, 'storeAccnt'])->name('storeAccnt');

// Admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/account', [AdminController::class, 'account'])->name('account');