<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'type',
        'status',
        'message',
    ];

    /**
     * The sender of the notification (user who triggered it)
     */
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }


    public function scopeUnread($query)
    {
        return $query->where('status', 'unread');
    }


    public function markAsRead()
    {
        $this->update(['status' => 'read']);
    }


    public function markAsUnread()
    {
        $this->update(['status' => 'unread']);
    }
}
