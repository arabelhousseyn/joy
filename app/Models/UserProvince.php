<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProvince extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'province_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class,'province_id')->withDefault();
    }
}
