<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attribut extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','page_id','is_image','content','image_id'
    ];


    public function image(): BelongsTo
    {
        return $this->belongsTo(Images::class);
    }
}
