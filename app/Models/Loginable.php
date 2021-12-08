<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Loginable extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'login_at',
        'ip',
        'user_agent',
        'loginable_type',
        'loginable_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'login_at' => 'date'
    ];
}
