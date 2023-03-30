<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompoundCollection extends JsonResource
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
            "title_en"=> $this->title_en,
            "slug_en"=> $this->slug_en,
            "description_en"=> $this->description_en,
            "title_ar"=> $this->title_ar,
            "slug_ar"=> $this->slug_ar,
            "description_ar"=> $this->description_ar,
            "website"=> $this->website,
            "location"=> $this->location,
            "order" => $this->order,
            "image"=> new ImageCollection($this->image),
            'is_active' => $this->isActive ,
            'number_of_unites'=> $this->number_of_unites,
            "last_modify" => $this->last_modify,
            "updated_at"=> $this->updated_at,
            "created_at"=> $this->created_at
        ];
    }
}
