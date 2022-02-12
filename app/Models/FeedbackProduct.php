<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeedbackProduct extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'product_id',
        'rating',
        'rating'
    ];

    protected $hidden = [
        'created_at',
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id')->withDefault();
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id')->withDefault();
    }
}
