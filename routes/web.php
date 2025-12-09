<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\NotificationController;
use Illuminate\Http\Request;


// ------------------ HOME / INDEX ------------------
Route::get('/', function () {
    return view('index');
});

// ------------------ TEMP REGISTER & LOGIN (NO DATABASE) ------------------


Route::get('/register', [AuthController::class, 'viewRegister'])->name('viewRegister');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'viewLogin'])->name('viewLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AdminController::class, 'viewDashboard'])->name('dashboard');


Route::get('/manage-jobs', [JobController::class, 'viewManageJobs'])->name('viewManageJobs');
Route::get('/post-jobs', [JobController::class, 'viewPostJobs'])->name('viewPostJobs');
Route::post('/post-jobs', [JobController::class, 'addJob'])->name('postJobs');
Route::patch('/jobs/{id}/edit', [JobController::class, 'editJob'])->name('editJob');
Route::delete('/delete-job/{id}', [JobController::class, 'deleteJob'])->name('deleteJob');


Route::get('/manage-users', [UserController::class, 'viewManageUsers'])->name('viewManageUsers');
Route::patch('/user/status/{id}', [UserController::class, 'updateUserStatus'])->name('updateUserStatus');

Route::get('/view-manage-applicants', [ApplicantController::class, 'viewManageApplicants'])->name('viewManageApplicants');
Route::patch('/approve-applicant/{id}', [ApplicantController::class, 'approveApplicant'])->name('approveApplicant');
Route::patch('/reject-applicant/{id}', [ApplicantController::class, 'rejectApplicant'])->name('rejectApplicant');

Route::get('/notifications', [NotificationController::class, 'viewNotifications'])->name('viewNotifications');
Route::delete('/notification/delete/{id}', [NotificationController::class, 'deleteNotification'])->name('deleteNotification');
Route::patch('/notification/read/{id}', [NotificationController::class, 'markAsRead'])->name('markAsRead');

Route::get('/review', function () {
    return view('review');
});



