<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

//    protected $casts = [
//        'banner' => 'array',
//    ];

    protected $fillable = [
        'image',
        'title',
        'caption',
    ];
}
