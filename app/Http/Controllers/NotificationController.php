<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function viewNotifications()
    {
        $userId = auth()->id();

        $notifications = Notification::where('receiver_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('notification', compact('notifications'));
    }
    public function deleteNotification($id)
    {
        $notification = Notification::where('id', $id)
            ->where('receiver_id', auth()->id()) // ensure only their own notifications
            ->firstOrFail();

        $notification->delete();

        return redirect()->back()->with('success', 'Notification deleted successfully.');
    }
    public function markAsRead($id)
    {
        $notification = Notification::where('id', $id)
            ->where('receiver_id', auth()->id())
            ->firstOrFail();

        $notification->markAsRead();

        return redirect()->back()->with('success', 'Notification marked as read.');
    }


}
