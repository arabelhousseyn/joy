<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Securityable extends Model
{
    use HasFactory;

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
