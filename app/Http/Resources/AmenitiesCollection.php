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
            "image"=> new ImageCollection($this->image),
            "number_of_unites"=> $this->number_of_unites,
            "last_modify" => $this->last_modify,
            "updated_at"=> $this->updated_at,
            "created_at"=> $this->created_at
        ];
    }
}
