<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{


    public function toArray($request)
    {
        return [
           
            "id" => $this->id,
            "title_En" => $this->title_en,
            "title_Ar" => $this->title_ar,
            "description_en" => $this->description_en,
            "description_ar" => $this->description_ar,
            "quantity" => $this->quantity,
            "price" => $this->price,
        ]
        ;
    }
}
