<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UnitsCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
//     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        if($this->is_youtube){
            $path = $this->video_path;
        }else{
            $path = getenv('APP_URL') . $this->video_path;
        }
        return [
            'id' => $this->id,
            'title_en' => $this->title_en,
            'description_en' => $this->description_en,
            'description_left_en' => $this->description_left_en,
            'title_ar' => $this->title_ar,
            'description_ar' => $this->description_ar,
            'description_left_ar' => $this->description_left_ar,
            'bathroom_number' => $this->bathroom_number ,
            'area' => $this->area ,
            'bed_number' => $this->bed_number,
            'is_youtube' => $path ,
            'price_en' => $this->price_en ,
            'price_ar' => $this->price_ar ,
            'phone_number' => $this->phone_number ,
            'order' => $this->order ,
            'video_path' => $this->video_path ,
            'location_lat' => $this->location_lat ,
            'location_log' => $this->location_log ,
            'compound' => $this->compound ,
            'location_link' => $this->location_link,
            'video_link' => $this->video_link,
            'type' => $this->type ,
            'location' => $this->location ,
            'images' => ImageCollection::collection($this->images) ,
            'amenities' => $this->amenities ,
            "last_modify" => $this->last_modify,
            'updated_at'=> $this->updated_at,
            'created_at'=> $this->created_at
        ];
    }
}

