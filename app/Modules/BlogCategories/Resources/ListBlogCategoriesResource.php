<?php

namespace App\Modules\BlogCategories\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListBlogCategoriesResource extends JsonResource
{


    public function toArray($request): array
    {
        return [
            'id'    => $this->id,
            'title' => $this->title,
        ];
    }
}
