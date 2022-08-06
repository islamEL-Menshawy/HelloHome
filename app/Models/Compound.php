<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compound extends Model
{
    use HasFactory;
    protected $fillable =[
      'title_en',
      'slug_en',
      'description_en',
      'title_ar',
      'slug_ar',
      'description_ar',
      'image_id'
    ];

}
