<?php

namespace App\Modules\Blogs\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Modules\BlogCategories\Resources\BlogCategoriesResource;

class BlogsEditResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title'              => $this->title,
            'description'        => $this->description,
            'image'              => $this->image,
            'web_image'          => $this->image ? asset('temp/' . $this->image) : null,
            'blog_categories_id' => $this->blog_categories_id,
            'blog_categories'    => new BlogCategoriesResource($this->blogCategories),

        ];
    }
}
