<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Security extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'changed_at',
        'type',
        'securityable_type',
        'securityable_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'changed_at' => 'date'
    ];
}
