<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::all()->toJson(JSON_PRETTY_PRINT);
        return response($products, 200);
    }

    public function show($id) {
        $product = Product::find($id)->toJson(JSON_PRETTY_PRINT);
        return response($product, 200);
    }
}
