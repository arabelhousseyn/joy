<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestOpenBrandPayment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'request_open_brand_id',
        'payment_number',
        'type',
        'receipt',
        'card_name',
        'card_number',
        'exp_month',
        'exp_year',
        'cvv',
        'card_type'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function requestOpenBrand()
    {
        return $this->belongsTo(RequestOpenBrand::class)->withDefault();
    }
}
