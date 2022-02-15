<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model;

class Province extends Model
{
    use HasFactory, SoftDeletes;

    protected $collection = 'provinces';

    protected $fillable = [
        'country_id',
        'code',
        'name'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id')->withDefault();
    }
}
