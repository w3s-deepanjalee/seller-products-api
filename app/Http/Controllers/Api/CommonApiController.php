<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProductSelectResource;
use App\Http\Resources\Api\SellerProductsListResource;
use App\Http\Resources\Api\SellerSelectResource;
use App\Models\Admin\Product;
use App\Models\Admin\SellerProduct;
use Illuminate\Http\Request;

class CommonApiController extends Controller
{
    public function productDetails($sellerProductId)
    {
     $sellerProduct = SellerProduct::find($sellerProductId);
     return ProductSelectResource::make($sellerProduct);
    }
    //getProductsBySeller
    public function getProductsBySeller($sellerId)
    {
        $sellerProducts = SellerProduct::where('seller_id',$sellerId)->get();
        return SellerProductsListResource::collection($sellerProducts);
    }
    public function getSellerByProduct($sellerProductId)
    {
        $sellerProduct = SellerProduct::where('id',$sellerProductId)->first();
        $seller = $sellerProduct->seller;

       return SellerSelectResource::make($seller);
    }

}
