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
        'securityable_id',
        'securityable_type'
    ];

    protected $casts = [
        'changed_at' => 'date'
    ];
}
