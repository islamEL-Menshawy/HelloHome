<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Unites extends Model
{
    use HasFactory;

    protected $fillable = [
      'bed_number',
      'bathroom_number',
      'area',
      'is_youtube',
      'price',
      'video_path',
      'location_lat',
      'location_log',
      'compound_id',
      'type_id',
      'location_id',
      'video_link',
      'location_link'
    ];

//    protected $appends = ['last_modify'];

    public function getLastModifyAttribute()
    {
        if (!empty($this->created_at) && !empty($this->updated_at)) {
            return $this->updated_at->diffForHumans();
        }
    }

    /**
     * The images that belong to the Unit.
     */
    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Images::class);
    }

    /**
     * The amenities that belong to the Unit.
     */
    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenitie::class);
    }


    /**
     * Get the compound associated with the unit.
     */
    public function compound(): BelongsTo
    {
        return $this->belongsTo(Compound::class);
    }

    /**
     * Get the location associated with the unit.
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * Get the type associated with the unit.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
