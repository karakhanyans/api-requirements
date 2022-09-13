<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsListRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function products(ProductsListRequest $request)
    {
        return ProductResource::collection(Product::search($request)->get());
    }
}
