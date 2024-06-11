<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddProduct;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

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

    //function to fetch products in product page
    public function productPage()
    {
        $products = AddProduct::all();
        return view('flow.productpage', compact('products'));
    }

    // Method to fetch products for the sellerproduct page
    public function sellerProductPage()
    {
        $products = AddProduct::all();
        return view('sellerpermit.sellerproduct', compact('products'));
    }

    public function deleteProduct($id)
    {
        $product = AddProduct::find($id);

        if ($product) {
            $product->delete();
            return redirect()->route('seller.product')->with('success', 'Product deleted successfully');
        } else {
            return redirect()->route('seller.product')->with('error', 'Product not found');
        }
    }

    public function editProduct($id)
    {
        $product = AddProduct::find($id);

        if ($product) {
            return view('sellerpermit.editproduct', compact('product'));
        } else {
            return redirect()->route('seller.product')->with('error', 'Product not found');
        }
    }

    public function updateProduct(Request $request, $id)
    {
        $product = AddProduct::find($id);

        if ($product) {
            $validator = Validator::make($request->all(), [
                'product_name' => 'required|max:255',
                'product_description' => 'required',
                'price' => 'required|numeric',
                'product_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->route('edit.product', $id)
                                ->withErrors($validator)
                                ->withInput();
            }

            $product->product_name = $request->input('product_name');
            $product->product_description = $request->input('product_description');
            $product->price = $request->input('price');

            if ($request->hasFile('product_image')) {
                $image = $request->file('product_image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $product->product_image = $name;
            }

            $product->save();

            return redirect()->route('seller.product')->with('success', 'Product updated successfully');
        } else {
            return redirect()->route('seller.product')->with('error', 'Product not found');
        }
    }
}
