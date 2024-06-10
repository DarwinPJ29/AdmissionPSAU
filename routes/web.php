<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantController;
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
Route::get('/student/landing-admission', [HomeController::class, 'landingAdmission'])->name('landing_admission');
Route::get('/student/courses-offer', [HomeController::class, 'coursesOffer'])->name('coursesOffer');
Route::get('/student/check-email', [HomeController::class, 'notif'])->name('notif');
Route::get('/student/che', [HomeController::class, 'question'])->name('question');

// Authentications
Route::controller(AuthController::class)->group(function () {
    Route::any('/login', 'login')->name('login');
    Route::any('/login', 'login')->name('login');
    Route::any('/admin/account/registration', 'registration')->name('registration');
    Route::any('/admin/account', 'storeAccnt')->name('storeAccnt');
    Route::any('/logout', 'logout')->name('logout');
    Route::any('/check-email', 'logout')->name('logout');
});

// Admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/interviewee', [AdminController::class, 'interviewee'])->name('interviewee');
Route::get('/admin/admission', [AdminController::class, 'admission'])->name('admission');
Route::get('/admin/department', [AdminController::class, 'department'])->name('department');
Route::get('/admin/department', [AdminController::class, 'department'])->name('department');
Route::get('/admin/courses', [AdminController::class, 'courses'])->name('courses');
Route::get('/admin/requirements', [AdminController::class, 'requirements'])->name('requirements');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('settings');


// Applicaant
Route::controller(ApplicantController::class)->group(function () {
    Route::any('/admission-form', 'ApplicantForm')->name('ApplicantForm');
});