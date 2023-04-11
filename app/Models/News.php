<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
        'title_ar',
        'author',
        'image_id',
        'publish_date',
        'content_en',
        'content_ar',
        'is_active',
    ];
    protected $appends = ['image_url', 'date'];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Images::class);
    }

    public function getImageUrlAttribute(){
        return env('APP_URL')."/uploads". $this->image['image_path'];
    }
    public function getDateAttribute(){
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->publish_date)->diffForHumans();
//        return new Carbon($this->publish_date)::$this->getDateAttribute()->diffForHumans();
    }

}
