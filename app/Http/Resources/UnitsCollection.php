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
            'is_youtube' => $this->is_youtube ,
            'price' => $this->price ,
            'video_path' => $this->video_path ,
            'location_lat' => $this->location_lat ,
            'location_log' => $this->location_log ,
            'compound' => $this->compound ,
            'type' => $this->type ,
            'location' => $this->location ,
            'images' => $this->images ,
            'amenities' => $this->amenities ,
            'updated_at'=> $this->updated_at,
            'created_at'=> $this->created_at
        ];
    }
}

