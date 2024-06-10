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

// Redirect the user if auth
Route::get('/redirect', function () {
    if (auth()->check()) {
        if (auth()->user()->role == 0) {
            return redirect()->route('ApplicantForm');
        } else {
            return redirect()->route('dashboard');
        }
    } else {
        return redirect()->route('index');
    }
})->name('redirect');

//Loading
Route::get('/loading', function () {
    return view('components.loading');
})->name('loading');


Route::controller(HomeController::class)->group(function () {
    Route::any('/', 'index')->name('index')->middleware('guest');
    Route::any('/applyNow', 'ApplyNow')->name('ApplyNow');
    Route::any('/student/courses-offer', 'coursesOffer')->name('coursesOffer');
    Route::any('/student/check-email', 'notif')->name('notif');
});

// Authentications
Route::controller(AuthController::class)->group(function () {
    Route::get('/account-activation/{id}', 'AccountActivation')->name('accountActivation');
    Route::any('/login', 'login')->name('login');
    Route::any('/admin/account', 'storeAccnt')->name('storeAccnt');
    Route::any('/logout', 'logout')->name('logout');
});

// Admin
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'dashboard')->name('dashboard');
    Route::get('/admin/interviewee', 'interviewee')->name('interviewee');
    Route::get('/admin/admission', 'admission')->name('admission');
    Route::get('/admin/department', 'department')->name('department');
    Route::get('/admin/department', 'department')->name('department');
    Route::get('/admin/courses', 'courses')->name('courses');
    Route::get('/admin/requirements', 'requirements')->name('requirements');
    Route::get('/admin/settings', 'settings')->name('settings');
});

// Applicaant
Route::controller(ApplicantController::class)->group(function () {
    Route::any('/admission-form', 'ApplicantForm')->name('ApplicantForm')->middleware('auth', 'can:applicant');
});