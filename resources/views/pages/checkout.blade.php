@extends('layouts.default')

@section('content')
    <h1>Checkout</h1>

    <h2>Cart Items</h2>
    @if (session()->has('cart'))
        <table>
            <tr>
                <th>Product</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
            @foreach (session('cart') as $id => $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td><img style='height:100px' src="{{ $item['imgLink'] }}" alt=""></td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['quantity'] * $item['price'] }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>Your cart is empty.</p>
    @endif


    <h2>Order Total: {{ $orderTotal }}</h2>

    <form action="{{ route('checkout.placeAnOrder') }}" method="POST">
        @csrf

        <h2>Shipping Address</h2>
        <div>
            <label for="address_line1">Address Line 1:</label>
            <input type="text" name="address_line1" id="address_line1" required>
        </div>
        <div>
            <label for="address_line2">Address Line 2:</label>
            <input type="text" name="address_line2" id="address_line2">
        </div>
        <div>
            <label for="city">City:</label>
            <input type="text" name="city" id="city" required>
        </div>
        <div>
            <label for="state">State:</label>
            <input type="text" name="state" id="state" required>
        </div>
        <div>
            <label for="zip">Zip Code:</label>
            <input type="text" name="zip" id="zip" required>
        </div>

        <button type="submit">Place Order</button>
    </form>
@endsection
