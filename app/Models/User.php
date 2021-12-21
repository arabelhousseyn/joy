<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function addresses()
    {
        return $this->hasMany(UserAdress::class);
    }

    public function favorites()
    {
        return $this->hasMany(UserFavorite::class);
    }

    public function payments()
    {
        return $this->hasMany(UserPayment::class);
    }

    public function phones()
    {
        return $this->hasMany(UserPhone::class);
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class)->withDefault();
    }

    public function province()
    {
        return $this->hasOne(UserProvince::class)->withDefault();
    }

    public function logins()
    {
        return $this->morphMany(Login::class,'loginable');
    }

    public function securities()
    {
        return $this->morphMany(Security::class,'securityable');
    }

    public function onlines()
    {
        return $this->hasMany(UserOnline::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feddback::class);
    }

    public function billing_address()
    {
        return $this->hasOne(UserBillingAddress::class);
    }

    public function points()
    {
        return $this->hasMany(UserPoint::class);
    }

}
