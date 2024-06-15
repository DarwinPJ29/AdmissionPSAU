<?php

use App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Admin\Requirement;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Applicant\FormController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    Route::any('/student/applyNow', 'ApplyNow')->name('ApplyNow')->middleware('guest');
    Route::any('/student/check-email', 'notif')->name('notif');
});

// Authentications
Route::controller(AuthController::class)->group(function () {
    Route::get('/account-activation/{id}', 'AccountActivation')->name('accountActivation');
    Route::any('/login', 'login')->name('login')->middleware('guest');
    Route::any('/admin/account', 'storeAccnt')->name('storeAccnt');
    Route::any('/logout', 'logout')->name('logout')->middleware('auth');
    Route::any('/settings', 'changePassword')->name('settings');
});

// Admin
Route::controller(AdminController::class)->group(function () {
    Route::any('/admin/dashboard', 'dashboard')->name('dashboard'); //->middleware('auth', 'can:admin');
    Route::any('/admin/interviewee', 'interviewee')->name('interviewee');
    Route::any('/admin/admission', 'admission')->name('admission');
    Route::any('/admin/department', 'department')->name('department');
    Route::any('/admin/department', 'department')->name('department');
});

// Course
Route::controller(Course::class)->group(function () {
    Route::any('/courses', 'courses')->name('courses');
    Route::any('/courses/{id}', 'coursesUpdate')->name('courses.update');
    Route::any('/courses/delete/{id}', 'courseDelete')->name('courses.delete');
});
// Requirement
Route::controller(Requirement::class)->group(function () {
    Route::any('/requirement', 'requirement')->name('requirement');
    Route::any('/requirement/{id}', 'requirementUpdate')->name('requirement.update');
    Route::any('/requirement/delete/{id}', 'requirementDelete')->name('requirement.delete');
});

// Applicaant
Route::controller(FormController::class)->group(function () {
    Route::any('/admission-form', 'ApplicantForm')->name('ApplicantForm')->middleware('auth', 'can:applicant');
});
