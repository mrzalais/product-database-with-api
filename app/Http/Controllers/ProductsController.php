<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function create()
    {
/*        $this->authorize('create');*/ // nestrada, kad ielogojies - 403 error

        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = (new Product)->fill($request->all());

        $product->save();

        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product
        ]);
    }


    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.edit', $product);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
