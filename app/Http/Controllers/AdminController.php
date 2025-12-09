<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Applicant;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{

    public function viewDashboard()
    {
        if (!auth()->check()) {
            return redirect()->route('viewLogin')->withErrors([
                'auth' => 'You must be logged in to access the dashboard.'
            ]);
        }
        $userId = Auth::id();

        // Get counts from database
        $jobsCount = Job::count();
        $applicantsCount = Applicant::count();
        $usersCount = User::count();
        $notificationsCount = Notification::where('receiver_id', $userId)->count();

        return view('dashboard', compact(
            'jobsCount',
            'applicantsCount',
            'usersCount',
            'notificationsCount'
        ));
    }



}
