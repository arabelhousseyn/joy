<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderPayment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
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
}
