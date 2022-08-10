<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
      'website',
      'image_id'
    ];

    /**
     * Get the image associated with the Compound.
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Images::class);
    }

}
