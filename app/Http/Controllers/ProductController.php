<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Logic to fetch all products
        $products = Product::all();
        return view('products.index',['products'=>$products]);
    }

    public function show(Product $product)
    {
        // Logic to show a specific product
    }

    public function create()
    {
        // Logic to create a new product
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Logic to store a new product
        // Validation rules
        $rules = [
            'category' => 'required',
            'code' => 'required|unique:products,code',
            'name' => 'required',
            'hsn_sancode' => 'nullable',
            'uqc' => 'required|in:Kilogram,Numbers,Pieces',
            'tax_rate' => 'required|in:5%,10%,15%',
            'rc_applicable' => 'nullable|boolean',
            'track_inventory' => 'nullable|boolean',
            'sl_no' => 'nullable',
            'quantity' => 'nullable',
            'p_rate' => 'nullable',
            's_rate' => 'nullable',
            'value' => 'nullable',
        ];

        // Custom validation messages
        $messages = [
            'code.unique' => 'The code has already been taken.',
            // Add custom messages for other rules as needed
        ];

        // Validate the request
        $validatedData = $request->validate($rules, $messages);

        // Store the product
        $product = new Product();
        $product->category = $request->category;
        $product->code = $request->code;
        $product->name = $request->name;
        $product->hsn_sancode = $request->hsn_sancode;
        $product->uqc = $request->uqc;
        $product->tax_rate = $request->tax_rate;
        $product->rc_applicable = $request->has('rc_applicable');
        $product->track_inventory = $request->has('track_inventory');
        $product->save();

        // Redirect or return response
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function update(Request $request, Product $product)
    {
        // Logic to update a product
    }

    public function destroy(Product $product)
    {
        // Logic to delete a product
    }
}
