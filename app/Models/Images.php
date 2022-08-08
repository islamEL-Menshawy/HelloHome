<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $fillable =[
      'image_path'
    ];

    /**
     * Get the user that owns the phone.
     */
    public function compound()
    {
        return $this->belongsTo(Compound::class);
    }
}
