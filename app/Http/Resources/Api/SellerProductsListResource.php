<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class SellerProductsListResource extends JsonResource
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
            'seller' => $this->seller->seller_name ?? '',
            'product_name'=> $this->product->product_name ?? '',
            'image_url'=> $this->product->image_url ?? '',
            'stock'=> $this->stock ?? 0,
            'price'=> number_format($this->price,2) ?? 0,
        ];
    }
}
