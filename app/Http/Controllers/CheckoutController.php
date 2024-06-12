<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function showCheckoutPage()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        $totalQuantity = $cartItems->sum('quantity');
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('flow.checkoutpage', compact('cartItems', 'totalQuantity', 'totalPrice'));
    }

    public function processCheckout(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'expedition_shipping' => 'required|string|max:50',
        ]);

        // Create new order
        $order = Order::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'expedition_shipping' => $request->expedition_shipping,
        ]);

        // Add order items
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product->id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);
        }

        // Clear the cart
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('checkout.page')->with('success', 'Order placed successfully!');
    }

    public function showOrder(Order $order)
    {
        // Ensure the order belongs to the authenticated user
        if ($order->user_id != Auth::id()) {
            abort(403);
        }

        $orderItems = $order->orderItems()->with('product')->get();

        return view('flow.order', compact('order', 'orderItems'));
    }
    public function showReceiptPage()
    {
        $order = Order::where('user_id', Auth::id())->latest()->first();
        if (!$order) {
            return redirect()->route('checkout.page')->with('error', 'No recent order found.');
        }

        $orderItems = $order->orderItems()->with('product')->get();
        $totalQuantity = $orderItems->sum('quantity');
        $totalPrice = $orderItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        return view('flow.receiptpage', compact('order', 'orderItems', 'totalQuantity', 'totalPrice'));
    }
}
