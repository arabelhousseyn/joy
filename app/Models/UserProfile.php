<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class UserProfile extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'username',
        'firstName',
        'lastName',
        'middleName',
        'sexe',
        'dob',
        'picture',
        'language'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function profilePictures()
    {
        return $this->hasMany(UserProfilePicture::class);
    }
}
