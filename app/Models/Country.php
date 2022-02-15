<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    protected $collection = 'countries';

    protected $fillable = [
        'name',
        'flag',
        'alpha_2_code'
    ];


    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
