<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvinceTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_id',
        'locale',
        'name'
    ];
}
