<?php

use App\Http\Controllers\Admin\Course;
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
    Route::any('/admin/dashboard', 'dashboard')->name('dashboard');
    Route::any('/admin/interviewee', 'interviewee')->name('interviewee');
    Route::any('/admin/admission', 'admission')->name('admission');
    Route::any('/admin/department', 'department')->name('department');
    Route::any('/admin/department', 'department')->name('department');
    Route::any('/admin/requirements', 'requirements')->name('requirements');
    Route::any('/admin/settings', 'settings')->name('settings');
});

// Course
Route::controller(Course::class)->group(function () {
    Route::any('/courses', 'courses')->name('courses');
    Route::any('/courses/{id}', 'coursesUpdate')->name('courses.update');
    Route::any('/courses/delete/{id}', 'coursesDeleted')->name('courses.delete');
});

// Applicaant
Route::controller(ApplicantController::class)->group(function () {
    Route::any('/admission-form', 'ApplicantForm')->name('ApplicantForm')->middleware('auth', 'can:applicant');
});