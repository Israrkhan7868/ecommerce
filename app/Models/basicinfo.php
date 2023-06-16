<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class basicinfo extends Model
{
    use HasFactory;

    public function basicinfo()
{
    return $this->belongsTo(basicinfo::class);
}

public function acadmicinfo()
{
    return $this->hasOne(Acadmicinfo::class);
}

}
