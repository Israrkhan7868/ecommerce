<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    use HasFactory;

    protected $fillable =[
         'title',
         'subtitle',
         'status',
         'image'


    ];

    public static function getSliders()
    {
        return self::all();
    }

    
}
