<?php

namespace App\Modules\Settings\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingsResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id'                   => $this->id,
            'company_name'         => $this->company_name,
            'company_description'  => $this->company_description,
            'company_address'      => $this->company_address,
            'company_logo'         => $this->company_logo,
            'web_company_logo'     => $this->company_logo ? asset('temp/' . $this->company_logo) : null,
            'company_email'        => $this->company_email,
            'phone_1'              => $this->phone_1,
            'phone_2'              => $this->phone_2,
            'social_links'         => $this->social_links ? json_decode($this->social_links) : null
        ];
    }
}
