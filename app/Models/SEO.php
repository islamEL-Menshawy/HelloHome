<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SEO extends Model
{
    use HasFactory;

    protected $fillable = [
      'page_id',
      'unit_id',
      'keywords_en',
      'keywords_ar',
      'description_en',
      'description_ar',
      'page_type',
      'robots',
    ];
}
