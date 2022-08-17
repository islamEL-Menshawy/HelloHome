<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Amenitie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en', 'image_id'
    ];



    /**
     * Get the image associated with the Compound.
     */
    public function image()
    {
        return $this->hasOne(Images::class, 'id');
    }

    protected $appends = ['last_modify', 'number_of_unites'];

    public function getLastModifyAttribute()
    {
        if (!empty($this->created_at) && !empty($this->updated_at)) {
            return $this->updated_at->diffForHumans();
        }
    }


    public function getNumberOfUnitesAttribute(): int
    {
        return $this->unites()->count();
    }

    public function unites(): HasMany
    {
        return $this->hasMany(Unites::class);
    }
}
