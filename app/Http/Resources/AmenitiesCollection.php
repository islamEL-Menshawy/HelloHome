<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AmenitiesCollection extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
            "title_en"=> $this->title_en,
            "image"=> env('APP_URL')."/uploads". $this->image->image_path,
            "updated_at"=> $this->updated_at,
            "created_at"=> $this->created_at
        ];
    }
}
