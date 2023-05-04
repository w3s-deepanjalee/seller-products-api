<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class SellerSelectResource extends JsonResource
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
            'id'=> $this->id ?? '',
            'seller_id'=> $this->id ?? '',
            'seller_name'=> $this->seller_name ?? '',
            'email'=> $this->seller_email ?? '',
            'mobile'=> $this->seller_mobile ?? '',
        ];
    }
}
