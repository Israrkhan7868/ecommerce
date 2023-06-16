<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'contact',
        'email',
        'logo',
        'icon'
    ];

    protected $casts = [
        'logo' => 'array', // Cast the logos attribute to an array
    ];
    protected $icon = [
        'icon' => 'array', // Cast the logos attribute to an array
    ];
}
