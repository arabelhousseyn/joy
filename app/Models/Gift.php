<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gift extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = [
        'name_gift',
        'description',
        'price',
        'points'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function images()
    {
        return $this->hasMany(GiftImage::class);
    }
}
