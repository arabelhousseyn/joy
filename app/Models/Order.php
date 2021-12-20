<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'user_billing_address_id',
        'session_id',
        'province_id',
        'name',
        'street_address',
        'street_address2',
        'zip_code',
        'phone'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function billing()
    {
        return $this->belongsTo(UserBillingAddress::class)->withDefault();
    }

    public function payment()
    {
        return $this->hasOne(OrderPayment::class)->withDefault();
    }
}
