<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    public function index()
    {
        $providers = Provider::all();
        $products = Product::paginate(5);
        return view('product.index', compact(['products', 'providers']));
    }

    public function create()
    {
        //
    }

    public function store(ProductRequest $request)
    {
        $status = true;
        $request->request->add(['status' => $status]);
        Product::create($request->all());
        return redirect()->route('product.index')->with('status', 'Se ha creado un nuevo producto: ' . $request->name);
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('product.index')->with('status', 'Se ha editado el producto');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('status', 'Se ha eliminado el producto');
    }
}
