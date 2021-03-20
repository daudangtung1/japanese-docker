<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'time',
        'status',
    ];

    protected $hidden = [
        'id'
    ];

//    public function setStatusAttribute($status)
//    {
//        $this->attributes['status'] = strtolower($status);
//
//        if ($this->attributes['status']) {
//            return 'Online';
//        } else {
//            return 'Offline';
//        }
//    }
}
