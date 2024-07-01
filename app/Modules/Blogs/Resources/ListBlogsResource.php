<?php

namespace App\Modules\Blogs\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Modules\BlogCategories\Resources\BlogCategoriesResource;

class ListBlogsResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            'id'                 => $this->id,
            'title'              => $this->title,
            'description'        => $this->description,
            'image'              => $this->image,
            'web_image'          => $this->image ? asset('temp/' . $this->image) : null,
            'blog_categories_id' => $this->blog_categories_id,
            'blog_categories'    => new BlogCategoriesResource($this->blogCategories),
        ];
    }
}
