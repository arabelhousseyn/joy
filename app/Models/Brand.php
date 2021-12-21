<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'brand_number',
        'name',
        'logo',
        'email',
        'phone',
        'lat',
        'long',
        'description',
        'expire_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function categories()
    {
        return $this->hasMany(BrandCategory::class);
    }

    public function invoices()
    {
        return $this->hasMany(BrandInvoice::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function socialLinks()
    {
        return $this->hasMany(BrandSocialLink::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
