<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddProduct;
use Illuminate\Support\Facades\Log;

class SellerController extends Controller
{
    public function addProduct(Request $request)
    {

        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'product_description' => 'required',
            'product_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $product = new AddProduct();
        $product->product_name = $request->input('product_name');
        $product->price = $request->input('price');
        $product->product_description = $request->input('product_description');

        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->product_image = $imageName;
        }

        $product->save();

        return redirect()->route('add.product')->with('success', 'Product added successfully!');
    }
}
