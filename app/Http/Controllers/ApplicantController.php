<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function viewManageApplicants()
    {
        if (!auth()->check()) {
            return redirect()->route('viewLogin')->withErrors([
                'auth' => 'You must be logged in to access the dashboard.'
            ]);
        }

        $applicants = Applicant::all();

        return view('manage-applicants', compact('applicants'));
    }
    public function approveApplicant($id)
    {
        $applicant = Applicant::findOrFail($id);
        $applicant->status = 'approved';
        $applicant->save();


        Notification::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $applicant->user_id ?? null,
            'type' => 'application_status',
            'status' => 'unread',
            'message' => "Your application for the position {$applicant->position} has been approved."
        ]);

        return redirect()->back()->with('success', 'Applicant approved and notified.');
    }

    public function rejectApplicant($id)
    {
        $applicant = Applicant::findOrFail($id);
        $applicant->status = 'declined';
        $applicant->save();

        Notification::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $applicant->user_id ?? null,
            'type' => 'application_status',
            'status' => 'unread',
            'message' => "Your application for the position {$applicant->position} has been declined."
        ]);

        return redirect()->back()->with('success', 'Applicant rejected and notified.');
    }
}
