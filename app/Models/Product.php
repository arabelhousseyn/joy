<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'brand_id',
        'product_number',
        'title',
        'description',
        'price',
        'accepted_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function categories()
    {
        return $this->hasMany(ProductCategory::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function attributes()
    {
        return $this->morphMany(Attribute::class,'attributeable');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id')->withDefault();
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id')->withDefault();
    }

    public function feedbacks()
    {
        return $this->hasMany(FeedbackProduct::class);
    }


}
