<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function viewManageUsers()
    {
        if (!auth()->check()) {
            return redirect()->route('viewLogin')->withErrors([
                'auth' => 'You must be logged in to access the dashboard.'
            ]);
        }

        $allUsers = User::where('role', 'user')->get();


        return view('manage-user', compact('allUsers'));
    }
    public function updateUserStatus(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Toggle status
        $user->status = $user->status === 'active' ? 'blocked' : 'active';
        $user->save();

        return redirect()->back()->with('success', "User status updated successfully.");
    }

}
