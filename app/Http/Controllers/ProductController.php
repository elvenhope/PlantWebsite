<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
     /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $products = Product::all();
        return view('pages/products', compact('products'));
    }


    public function show($id)
{
    $product = Product::find($id);

    if ($product === null) {
        abort(404);
    }

    return view('pages/product', ['product' => $product]);
}



    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('pages/cart');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function addToCart($id, $quantity = 1)
    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $quantity = $request->input('quantity', 1);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $product->price,
                "imgLink" => $product->imgLink,
                "product_id" => $product->id
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', " \"{$product->name}\" added to cart successfully!");
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if ($request->has('product_id')) {
            $product_id = $request->input('product_id');
            $cart = session()->get('cart');
            if(isset($cart[$product_id])) {
                unset($cart[$product_id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
