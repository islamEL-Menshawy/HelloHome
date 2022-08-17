<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{

    use HasFactory;

    protected $fillable = [
        'title_en',
        'slug_en',
        'title_ar',
        'slug_ar'
    ];

    protected $dates = [
        'updated_at',
        'created_at'
    ];
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
