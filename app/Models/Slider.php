<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_text',
        'second_text',
        'image_id',
        'res_path',
        'is_active'
    ];
    protected $appends = ['last_modify'];
    public function getLastModifyAttribute(): string
    {
        return $this->updated_at->diffForHumans();
    }

    /**
     * Get the image associated with the Compound.
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Images::class);
    }

}
