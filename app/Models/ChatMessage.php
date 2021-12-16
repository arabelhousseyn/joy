<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatMessage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'chat_id',
        'sender_id',
        'receiver_id',
        'message'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function chat()
    {
        return $this->belongsTo(Chat::class)->withDefault();
    }

    public function sender()
    {
        return $this->belongsTo(User::class,'sender_id')->withDefault();
    }

    public function receiver()
    {
        return $this->belongsTo(User::class,'receiver_id')->withDefault();
    }
}
