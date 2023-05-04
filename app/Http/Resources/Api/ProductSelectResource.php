<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductSelectResource extends JsonResource
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
            'product_name'=> $this->product->product_name ?? '',
            'image_url'=> $this->product->image_url ?? '',
            'description'=> $this->product->description ?? '',
            'price'=> number_format($this->price,2) ?? 0,
            'stock'=> $this->stock ?? 0,
            'seller_name'=> $this->seller->seller_name ?? '',
        ];
    }
}
