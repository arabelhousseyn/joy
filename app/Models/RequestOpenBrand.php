<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestOpenBrand extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'plan_id',
        'request_number',
        'name',
        'name_plan',
        'price_plan',
        'grade',
        'months',
        'logo',
        'commercial_document',
        'area',
        'status'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id')->withDefault();
    }

    public function payments()
    {
        return $this->hasMany(RequestOpenBrandPayment::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class,'plan_id')->withDefault();
    }
}
