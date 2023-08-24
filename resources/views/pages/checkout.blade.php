@extends('layouts.default')

@section("PageSpecificPropertiesInTheHead")
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{ URL::asset('css/checkout.css') }}">
@stop
@section('content')
@if(session()->has('cart'))
    <div class="shipForm">
        @if (count(session()->get('cart'))>0)
        <h1 id="checkout">Checkout</h1>
        <hr>
        <h2 id="cartItems">Cart Items</h2>
        @foreach (session('cart') as $id => $item)
        <ul>
            <li>{{ $item['name'] }}, {{ $item['quantity'] }}x.</li>
        </ul>
        @endforeach
        <h2 id="total">Order Total: <strong>{{ $orderTotal }}€</strong></h2>
        <hr>
        <form class="shipInfo" id="shipInfo" action="{{ route('checkout.placeAnOrder') }}" method="POST">
            @csrf
            <h2 id="address">Shipping Address</h2>
            <div>
                <label for="address_line1">Address Line 1:</label>
                <input type="text" name="address_line1" id="address_line1" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
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

            <button id="shipButton" type="submit">Place Order</button>
        </form>
        @else
            <div id="emptyCartContainer"> 
            <h1>Your cart is empty!</h1>
            <p>Your cart is currently empty, head back to the homepage to pick out some plants!</p>
            <button onclick="javascript:history.back()">Go Back</button>
        </div>
        @endif
    </div>
@endif
@endsection
