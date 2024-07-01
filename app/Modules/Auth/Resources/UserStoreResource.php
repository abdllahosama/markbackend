<?php

namespace App\Modules\Auth\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class UserStoreResource extends JsonResource
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
            'id'            => $this->id,
            'name'          => $this->name,
            'user_name'     => $this->user_name,
            'email'         => $this->email,
            'image'         => $this->image,
            'web_image'     => $this->image ? asset('temp/'. $this->image) : null,
        ];
    }
}
