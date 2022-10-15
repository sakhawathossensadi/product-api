<?php

namespace Businesshub\Product\Http\Controllers;

use Businesshub\Product\Http\Request\ProductRequest;
use Businesshub\Product\Http\Resources\ProductResource;
use Businesshub\Product\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function index(Request $request)
    {
        $products = Product::paginate();

        return ProductResource::collection($products);
    }

    public function store(ProductRequest $request)
    {
        $data = $request->except('_token');

        $product = Product::create($data);

        return new ProductResource($product);
    }
}
