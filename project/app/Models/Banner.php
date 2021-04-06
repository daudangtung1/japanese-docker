<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image'
    ];

    public function setFilenameAttribute($value)
    {
        $this->attributes['image'] = json_encode($value);
    }
}
