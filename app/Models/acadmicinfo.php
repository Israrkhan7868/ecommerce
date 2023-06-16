<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acadmicinfo extends Model
{
    use HasFactory;

    public function acadmicinfo()
{
    return $this->hasOne(acadmicinfo::class);
}
}
