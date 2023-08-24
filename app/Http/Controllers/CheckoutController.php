<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $orderTotal = 0;

        foreach ($cart as $item) {
            $orderTotal += $item['quantity'] * $item['price'];
        }

        return view('pages/checkout', compact('orderTotal'));
    }

    public function placeAnOrder(Request $request)
    {
//         if (!auth()->check()) {
//             return redirect()->route('login')->with('message', 'Please login to continue');
// }


        $cart = session()->get('cart', []);
        $orderTotal = 0;

        foreach ($cart as $item) {
            $orderTotal += $item['quantity'] * $item['price'];
        }

        $order = new Order();
        $order->fill([
            'user_id' => auth()->check() ? auth()->id() : null,
            'total_price' => $orderTotal,
            'address_line1' => $request->input('address_line1'),
            'email' => $request->input('email'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zip' => $request->input('zip'),
        ]);
        $order->save();

        foreach ($cart as $item) {
            $orderItem = new OrderItem();
            $orderItem->fill([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
            $orderItem->save();
        }

        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
}
