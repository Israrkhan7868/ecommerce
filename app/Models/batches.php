<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batches extends Model
{
    use HasFactory;

    protected $table = 'batches';

    public function getByTitle($title)
    {
        return $this->where('title', $title)->get();
    }
    
}
