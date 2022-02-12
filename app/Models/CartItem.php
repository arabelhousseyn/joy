<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cart_id',
        'product_id',
        'price',
        'quantity'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class,'cart_id')->withDefault();
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id')->withDefault();
    }
}
