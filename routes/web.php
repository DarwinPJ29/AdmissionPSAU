<?php

use App\Http\Controllers\Admin\Account;
use App\Http\Controllers\Admin\College;
use App\Http\Controllers\Admin\Course;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Evaluation;
use App\Http\Controllers\Admin\Exam;
use App\Http\Controllers\Admin\Record;
use App\Http\Controllers\Admin\Report;
use App\Http\Controllers\Admin\Requirement;
use App\Http\Controllers\Admin\Schedule;
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
use App\Services\Status;

// Redirect the user if auth
Route::get('/redirect', function () {
    if (auth()->check()) {
        if (auth()->user()->role == 0) {
            return redirect()->route('dataPrivacy');
        } else {

            if (auth()->user()->role == 1)
                return redirect()->route('dashboard');
            else if (auth()->user()->role == 2)
                return redirect()->route('admin.sched');
            else
                return redirect()->route('evaluation');
        }
    } else {
        return redirect()->route('index');
    }
})->name('redirect');

//Loading
Route::get('/loading', function () {
    return view('components.loading');
})->name('loading');


Route::get('/steps', function () {

    if (auth()->check()) {
        if (auth()->user()->role == 0) {

            $status = auth()->user()->status;
            switch ($status) {
                case Status::Fillup->value:
                    return redirect()->route('ApplicantForm');
                    break;
                case Status::Requirement->value:
                    return redirect()->route('applicant.requirement');
                    break;
                case Status::Review->value:
                case Status::ReqAccepted->value:
                    return redirect()->route('reviews');
                    break;
                case Status::Scheduled->value:
                    return redirect()->route('schedule');
                    break;
                case Status::Evaluation->value:
                    return redirect()->route('score');
                    break;
                default:
                    return redirect()->route('evaluate');
                    break;
            }
        }
    } else
        return redirect()->route('index');
})->name('steps')->middleware('auth', 'can:applicant');

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
    Route::any('/find-account', 'findAccount')->name('findAccount')->middleware('guest');
    Route::any('/verify-otp/{id}', 'validateOTP')->name('validateOTP')->middleware('guest');
});

// Admin
// Route::controller(AdminController::class)->group(function () {
//     Route::any('/admin/dashboard', 'dashboard')->name('dashboard')->middleware('auth', 'can:admin');
//     Route::any('/admin/interviewee', 'interviewee')->name('interviewee');
//     Route::any('/admin/department', 'department')->name('department');
//     Route::any('/admin/department', 'department')->name('department');
// });

//Submitted
Route::controller(Submitted::class)->group(function () {
    Route::any('/submitted', 'Submitted')->name('Submitted')->middleware('auth', 'can:admin');
    Route::any('/returned/{id}', 'Returned')->name('returned')->middleware('auth', 'can:admin');
    Route::any('/acceptReq/{id}', 'acceptReq')->name('acceptReq')->middleware('auth', 'can:admin');
});

//Schedule
Route::controller(Schedule::class)->group(function () {
    Route::any('/schedules', 'schedule')->name('admin.sched')->middleware('auth', 'can:proctor');
    Route::any('/sched/{id}', 'sched')->name('sched')->middleware('auth', 'can:proctor');
});

// College
Route::controller(College::class)->group(function () {
    Route::any('/colleges', 'College')->name('college')->middleware('auth', 'can:admin');
    Route::any('/colleges/{id}', 'CollegeUpdate')->name('college.update')->middleware('auth', 'can:admin');
    Route::any('/colleges/delete/{id}', 'CollegeDeleted')->name('college.delete')->middleware('auth', 'can:admin');
});
// Course
Route::controller(Course::class)->group(function () {
    Route::any('/program', 'courses')->name('courses');
    Route::any('/program/{id}', 'coursesUpdate')->name('courses.update')->middleware('auth', 'can:admin');
    Route::any('/program/delete/{id}', 'courseDelete')->name('courses.delete')->middleware('auth', 'can:admin');
});
// Requirement
Route::controller(Requirement::class)->group(function () {
    Route::any('/requirement', 'requirement')->name('requirement')->middleware('auth', 'can:admin');
    Route::any('/requirement/{id}', 'requirementUpdate')->name('requirement.update')->middleware('auth', 'can:admin');
    Route::any('/requirement/delete/{id}', 'requirementDelete')->name('requirement.delete')->middleware('auth', 'can:admin');
});
// Applicant
Route::controller(FormController::class)->group(function () {
    Route::any('/admission-form', 'ApplicantForm')->name('ApplicantForm')->middleware('auth', 'can:applicant');
    Route::any('/dataPrivacy', 'privacy')->name('privacy')->middleware('auth', 'can:applicant');
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
    Route::any('/applicant-form/generate/{id}', 'ApplicantFormGenerate')->name('ApplicantFormGenerate');
    Route::any('/admission-form/generate/{id}', 'EvalResultGenerate')->name('EvalResultGenerate')->middleware('auth', 'can:applicant');
});
// exam
Route::controller(Exam::class)->group(function () {
    Route::any('/exam', 'Exam')->name('exam');
});
// Evaluation
Route::controller(Evaluation::class)->group(function () {
    Route::any('/evaluation', 'evaluation')->name('evaluation')->middleware('auth', 'can:personnel');
    Route::any('/deny/{id}', 'Deny')->name('deny')->middleware('auth', 'can:personnel');
    Route::any('/recommended/{id}', 'Recommended')->name('recommended')->middleware('auth', 'can:personnel');
});
// Region, Municipality and Barangay
Route::controller(StaticData::class)->group(function () {
    Route::any('/data', 'SetData');
});
// Records
Route::controller(Record::class)->group(function () {
    Route::any('/records/', 'records')->name('records')->middleware('auth', 'can:admin');
    Route::any('/records/denied', 'denied')->name('denied')->middleware('auth', 'can:admin');
    Route::any('/records/recommend', 'recommend')->name('admin.recommend')->middleware('auth', 'can:admin');
    Route::any('/send/mail', 'SendMail')->name('sendMail')->middleware('auth', 'can:admin');
});
// Reports
Route::controller(Report::class)->group(function () {
    Route::any('/report', 'report')->name('report')->middleware('auth', 'can:admin');
});
// College
Route::controller(College::class)->group(function () {
    Route::any('/college', 'College')->name('college')->middleware('auth', 'can:admin');
    Route::any('/college/{$id}', 'CollegeUpdate')->name('college.update')->middleware('auth', 'can:admin');
    Route::any('/college/{$id}', 'CourseDelete')->name('course.delete')->middleware('auth', 'can:admin');
});
// PDFs
Route::controller(PdfController::class)->group(function () {
    Route::any('/pdf', 'pdf')->name('pdf');
});
// Account
Route::controller(Account::class)->group(function () {
    Route::any('/account', 'account')->name('account')->middleware('auth', 'can:admin');
    Route::any('/evaluator', 'Evaluator')->name('Evaluator')->middleware('auth', 'can:admin');
    Route::any('/evaluator/update/{id}', 'EvaluatorUpdate')->name('evaluator.update')->middleware('auth', 'can:admin');
    Route::any('/account/update/{id}', 'update')->name('account.update')->middleware('auth', 'can:admin');
    Route::any('/account/activate/{id}', 'activate')->name('account.activate')->middleware('auth', 'can:admin');
});
// Dashboard

Route::controller(Dashboard::class)->group(function () {
    Route::any('/admin/dashboard', 'dashboard')->name('dashboard')->middleware('auth', 'can:admin');
});
