<?php

namespace App\Modules\Settings\Resources;

use App\Traits\TranslateTrait;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Modules\BlogCategories\Resources\BlogCategoriesResource;

class ListSettingsResource extends JsonResource
{
    use TranslateTrait;


    public function toArray($request): array
    {
        return [
            'id'                 => $this->id,
            'title'              => $this->translate($this->title),
            'description'        => $this->translate($this->description),
            'image'              => $this->image,
            'web_image'          => $this->image ? asset('temp/' . $this->image) : null,
            'blog_categories_id' => $this->blog_categories_id,
            'blog_categories'    => new BlogCategoriesResource($this->blogCategories),


        ];
    }
}
