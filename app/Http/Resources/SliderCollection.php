<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SliderCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
            "first_text"=> $this->first_text,
            "second_text"=> $this->second_text,
            "is_image"=> $this->is_image,
            "is_active"=> $this->is_active,
            "image"=> new ImageCollection($this->image),
            "last_modify" => $this->last_modify,
            "updated_at"=> $this->updated_at,
            "created_at"=> $this->created_at
        ];
    }
}
