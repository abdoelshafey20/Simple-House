<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{


    public function toArray($request)
    {
        return [
            // "image_url" => $this->cate_image,
            "id" => $this->id,
            "title_En" => $this->title_en,
            "title_Ar" => $this->title_ar,
            "description_en" => $this->description_en,
            "description_ar" => $this->description_ar,
            // "parent_id" => $this->parent_id,
        ]
        ;
    }
}
