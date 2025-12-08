<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ------------------ HOME / INDEX ------------------
Route::get('/', function () {
    return view('index');
});

// ------------------ TEMP REGISTER & LOGIN (NO DATABASE) ------------------

// Register (GET)
Route::get('/register', function () {
    return view('register');
})->name('register');

// Register (POST) — TEMP ONLY (NO DB SAVE)
Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
        'password' => 'required|min:6|confirmed',
    ]);

    // 🚫 No database yet — so we just redirect
    return redirect('/login')->with('success', 'Registration successful! (Temporary Only)');
});

// Login (GET)
Route::get('/login', function () {
    return view('login');
})->name('login');

// Login (POST) — TEMP LOGIN (NO AUTH)
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // ✅ Temporary auto-login
    return redirect('/dashboard');
});

// Dashboard (UNPROTECTED FOR NOW)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ------------------ OTHER PAGES ------------------
Route::get('/applicants', function () {
    return view('applicants');
});

Route::get('/manage-applicants', function () {
    return view('manage-applicants');
});

Route::get('/manage-jobs', function () {
    return view('manage-jobs');
})->name('manage.jobs');


Route::get('/manage-user', function () {
    return view('manage-user');
})->name('manage.user');

Route::get('/notification', function () {
    return view('notification');
});

Route::get('/post-job', function () {
    return view('post job');
});

Route::get('/review', function () {
    return view('review');
});
// ------------------ LOGOUT ------------------
// ------------------ LOGOUT ------------------
Route::post('/logout', function () {
    session()->flush();   // Clear session
    return redirect('/'); // Go to frontpage
})->name('logout');



