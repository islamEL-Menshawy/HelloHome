<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
