<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'fullName',
        'username',
        'email',
        'email_verified_at',
        'phone',
        'otp',
        'phone_verified_at',
        'is_admin'
    ];

    protected $hidden = [
        'password'
    ];

    public function logins()
    {
        return $this->morphMany(Login::class,'loginable');
    }

    public function securities()
    {
        return $this->morphMany(Security::class,'securityable');
    }
}
