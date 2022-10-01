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
            'title' => $this->title,
            'description' => $this->description,
            'bathroom_number' => $this->bathroom_number ,
            'area' => $this->area ,
            'bed_number' => $this->bed_number,
            'is_youtube' => $path ,
            'price' => $this->price ,
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

