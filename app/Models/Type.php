<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    use HasFactory;

    protected $fillable = [
        'title_en',
        'slug_en',
        'title_ar',
        'slug_ar'
    ];
}
