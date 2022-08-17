<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Images extends Model
{
    use HasFactory;

    protected $fillable =[
      'image_path'
    ];

    /**
     * Get the user that owns the phone.
     */
    public function compound(): BelongsTo
    {
        return $this->belongsTo(Compound::class);
    }
}
