<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_title'
    ];
    public function attributes(): HasMany
    {
        return $this->hasMany(Attribut::class);
    }

    public function seo(): HasOne
    {
        return $this->hasOne(SEO::class);
    }




}
