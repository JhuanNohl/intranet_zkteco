<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommercialMapArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'region', 'consultant', 'states', 'color', 'coordinates'
    ];

    protected $casts = [
        'coordinates' => 'array',
    ];
}