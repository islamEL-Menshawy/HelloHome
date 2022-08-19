<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    protected $appends = ['number_of_unites','last_modify'];


    public function getLastUpdateAttribute(): string
    {
//        if (!empty($this->created_at) && !empty($this->updated_at)) {
            return $this->updated_at->diffForHumans();
//        }
    }

    public function getNumberOfUnitesAttribute(): int
    {
        return $this->unites()->count();
    }

    /**
     * Get the image associated with the Compound.
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Images::class);
    }



    public function unites(): HasMany
    {
        return $this->hasMany(Unites::class);
    }

}
