<?php

namespace App\Modules\ContactUs\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListContactUsResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'created_at' => $this->created_at,
        ];
    }
}
