<?php

use App\Http\Controllers\Admin\College;
use App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Admin\Evaluation;
use App\Http\Controllers\Admin\Exam;
use App\Http\Controllers\Admin\Record;
use App\Http\Controllers\Admin\Report;
use App\Http\Controllers\Admin\Requirement;
use App\Http\Controllers\Admin\Submitted;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Applicant\FormController;
use App\Http\Controllers\Applicant\NotificationController;
use App\Http\Controllers\Applicant\RequirementController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\StaticData;
use App\Models\College as ModelsCollege;

// Redirect the user if auth
Route::get('/redirect', function () {
    if (auth()->check()) {
        if (auth()->user()->role == 0) {
            return redirect()->route('dataPrivacy');
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
    Route::any('/sample', 'homes')->name('homes');
});

// Authentications
Route::controller(AuthController::class)->group(function () {
    Route::get('/account-activation/{id}', 'AccountActivation')->name('accountActivation');
    Route::any('/login', 'login')->name('login')->middleware('guest');
    Route::any('/admin/account', 'storeAccnt')->name('storeAccnt');
    Route::any('/logout', 'logout')->name('logout')->middleware('auth');
    Route::any('/settings', 'changePassword')->name('settings')->middleware('auth');
    Route::any('/change-password', 'changeDefaultPassword')->name('changeDefaultPassword')->middleware('auth');
    Route::any('/data-privacy', 'dataPrivacy')->name('dataPrivacy')->middleware('auth');
});

// Admin
Route::controller(AdminController::class)->group(function () {
    Route::any('/admin/dashboard', 'dashboard')->name('dashboard'); //->middleware('auth', 'can:admin');
    Route::any('/admin/interviewee', 'interviewee')->name('interviewee');
    Route::any('/admin/department', 'department')->name('department');
    Route::any('/admin/department', 'department')->name('department');
});

//Submitted
Route::controller(Submitted::class)->group(function () {
    Route::any('/submitted', 'Submitted')->name('Submitted');
    Route::any('/returned/{id}', 'Returned')->name('returned');
    Route::any('/sched/{id}', 'Schedule')->name('sched');
});

// College
Route::controller(College::class)->group(function () {
    Route::any('/colleges', 'College')->name('college');
    Route::any('/colleges/{id}', 'CollegeUpdate')->name('college.update');
    Route::any('/colleges/delete/{id}', 'CollegeDeleted')->name('college.delete');
});
// Course
Route::controller(Course::class)->group(function () {
    Route::any('/program', 'courses')->name('courses');
    Route::any('/program/{id}', 'coursesUpdate')->name('courses.update');
    Route::any('/program/delete/{id}', 'courseDelete')->name('courses.delete');
});
// Requirement
Route::controller(Requirement::class)->group(function () {
    Route::any('/requirement', 'requirement')->name('requirement');
    Route::any('/requirement/{id}', 'requirementUpdate')->name('requirement.update');
    Route::any('/requirement/delete/{id}', 'requirementDelete')->name('requirement.delete');
});


// Applicant
Route::controller(FormController::class)->group(function () {
    Route::any('/admission-form', 'ApplicantForm')->name('ApplicantForm'); //->middleware('auth', 'can:applicant');
    Route::any('/dataPrivacy', 'privacy')->name('privacy'); //->middleware('auth', 'can:applicant');
});

//Applicant Requirement
Route::controller(RequirementController::class)->group(function () {
    Route::any('/requirements', 'Requirement')->name('applicant.requirement')->middleware('auth', 'can:applicant');
    Route::any('/requirements/edit', 'RequirementEdit')->name('applicant.edit')->middleware('auth', 'can:applicant');
    Route::any('/requirements/submit', 'RequirementSubmit')->name('applicant.submit')->middleware('auth', 'can:applicant');
});

//Notification
Route::controller(NotificationController::class)->group(function () {
    Route::any('/review', 'Review')->name('reviews')->middleware('auth', 'can:applicant');
    Route::any('/schedule', 'Schedule')->name('schedule')->middleware('auth', 'can:applicant');
    Route::any('/score', 'Score')->name('score')->middleware('auth', 'can:applicant');
    Route::any('/evaluations', 'Evaluation')->name('evaluate')->middleware('auth', 'can:applicant');
    Route::any('/status', 'Status')->name('status')->middleware('auth', 'can:applicant');
});

// exam
Route::controller(Exam::class)->group(function () {
    Route::any('/exam', 'Exam')->name('exam');
});

// Evaluation
Route::controller(Evaluation::class)->group(function () {
    Route::any('/evaluation', 'evaluation')->name('evaluation');
    Route::any('/deny/{id}', 'Deny')->name('deny');
    Route::any('/recommended/{id}', 'Recommended')->name('recommended');
});

// Region, Municipality and Barangay
Route::controller(StaticData::class)->group(function () {
    Route::any('/data', 'SetData');
});
// Records
Route::controller(Record::class)->group(function () {
    Route::any('/records', 'records')->name('records');
    Route::any('/records/denied', 'denied')->name('denied');
    Route::any('/send/mail', 'SendMail')->name('sendMail');
});
// Reports
Route::controller(Report::class)->group(function () {
    Route::any('/report', 'report')->name('report');
});
// College
Route::controller(College::class)->group(function () {
    Route::any('/college', 'College')->name('college');
    Route::any('/college/{$id}', 'CollegeUpdate')->name('college.update');
    Route::any('/college/{$id}', 'CourseDelete')->name('course.delete');
});
// PDFs
Route::controller(PdfController::class)->group(function () {
    Route::any('/pdf', 'pdf')->name('pdf');
});