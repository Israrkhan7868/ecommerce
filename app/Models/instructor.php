<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class instructor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'qualification',
        'summary'
        ];

    public static function getinstructor()
    {
        return self::pluck('name', 'id');
    }
}
