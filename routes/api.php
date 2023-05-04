<?php

use App\Http\Controllers\Api\CommonApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('product/get_details/{sellerProductId}', [CommonApiController::class, 'productDetails']);
Route::get('seller/products/{seller_id}', [CommonApiController::class, 'getProductsBySeller']);
Route::get('product/get_seller_details/{sellerProductId}', [CommonApiController::class, 'getSellerByProduct']);
