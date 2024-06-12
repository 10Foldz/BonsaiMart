<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\AddProduct;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $product = AddProduct::findOrFail($productId);
        $cart = Cart::firstOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $productId],
            ['quantity' => 1]
        );

        if (!$cart->wasRecentlyCreated) {
            $cart->increment('quantity');
        }

        return redirect()->route('cart.page')->with('success', 'Product added to cart!');
    }

    public function cartPage()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        $totalQuantity = $cartItems->sum('quantity');
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('flow.cartpage', compact('cartItems', 'totalQuantity', 'totalPrice'));
    }

    public function updateCart(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->update(['quantity' => $request->quantity]);

        return redirect()->route('cart.page');
    }

    public function removeFromCart($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('cart.page')->with('success', 'Item removed from cart!');
    }

    public function checkoutPage()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        $totalQuantity = $cartItems->sum('quantity');
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('flow.checkout', compact('cartItems', 'totalQuantity', 'totalPrice'));
    }
}
