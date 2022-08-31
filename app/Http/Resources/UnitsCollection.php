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
        return [
            'id' => $this->id,
            'bathroom_number' => $this->bathroom_number ,
            'area' => $this->area ,
            'bed_number' => $this->bed_number,
            'is_youtube' => $this->is_youtube ,
            'price' => $this->price ,
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

