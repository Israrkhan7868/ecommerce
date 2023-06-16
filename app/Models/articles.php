<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class articles extends Model
{
    use HasFactory;
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'description',
        'status',
    ];

    // Here I want to auto generate slug based on the title
    // public function setSlugAttribute($slug){
    //     $this->attributes['slug'] = Str::slug($slug , "-");
    
    //    
    
}
