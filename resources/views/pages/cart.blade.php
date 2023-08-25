@extends("layouts.default")

@section("pageTitle")
Cart
@stop

@section("PageSpecificPropertiesInTheHead")
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="{{ URL::asset('css/cart.css') }}">
@stop

@section('content')
@php $total = 0 @endphp
@if (session('cart'))
@foreach (session('cart') as $id => $details)
@php $total += $details['price'] * $details['quantity'] @endphp
@isset($details['product_id'])
<div class="cart_item" data-value="{{ $details['product_id'] }}">
    @else
    <div class="cart_item" data-value="{{ $details['product_id'] }}">
        @endisset
        <div class="remove_item remove-from-cart">
            <span>&times;</span>
        </div>
        <div class="item_img">
            <img src="{{ $details['imgLink'] }}" />
        </div>
        <div class="item_details">
            <p>{{ $details['name'] }}</p>
            <strong class="item_details-price">${{ $details['price'] }}</strong>
            <div class="qty">


                    <button id="minus-btn">-</button>


                    <input class="product_quantity" id="quantity" type="number" value="{{$details['quantity']}}" min="1"
                        step="1" max="100" pattern="/^/d+$/"
                        onKeyPress="if(this.value.length==3) return false;" required />


                    <button id="plus-btn">+</button>

            </div>

            <span data-th="Subtotal">Subtotal: ${{ $details['price'] * $details['quantity'] }}</span>
        </div>
    </div>
</div>
<div class="cartTotal">
    <div id="total"><strong>Total ${{ $total }}</strong></div>
    <a href="{{ url('/plants') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
    <button class="btn btn-success" onclick="window.location.href='{{ url('/checkout') }}'">Checkout</button>
</div>
@endforeach
@else
<div id="emptyCartContainer">
    <h1>Your cart is empty!</h1>
    <p>Your cart is currently empty, head back to the homepage to pick out some plants!</p>
    <button onclick="javascript:history.back()">Go Back</button>
</div>
@endif



@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript">

    function setHeaders(headers) {
        for (let key in headers) {
            xhr.setRequestHeader(key, headers[key])
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        const removeButtons = document.querySelectorAll(".remove-from-cart");

        removeButtons.forEach(button => {
            button.addEventListener("click", function(e) {
                e.preventDefault();

                if (confirm("Are you sure you want to delete?")) {
                    const ele = e.currentTarget;
                    const cartItem = ele.closest(".cart_item");
                    const productId = cartItem.dataset.value;
                    const xhr = new XMLHttpRequest();
                    xhr.open("DELETE", `{{ route('remove.from.cart') }}?product_id=${productId}`);
                    xhr.setRequestHeader("X-CSRF-TOKEN", '{{ csrf_token() }}');
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            cartItem.remove();
                            window.location.reload();
                        } else {
                            console.error("Error:", xhr.status, xhr.statusText);
                        }
                    };
                    xhr.onerror = function() {
                        console.error("Network error");
                    };
                    xhr.send();
                }
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
    const cartItems = document.querySelectorAll(".cart_item");

    cartItems.forEach(cartItem => {
        const inputField = cartItem.querySelector('.product_quantity');
        const minusBtn = cartItem.querySelector('#minus-btn');
        const plusBtn = cartItem.querySelector('#plus-btn');
        const productId = cartItem.dataset.value;
        const price = parseFloat(cartItem.querySelector('.item_details-price').textContent.replace('$', ''));
        const subtotalElement = cartItem.querySelector('[data-th="Subtotal"]');

        function updateCart(quantity) {
            if (quantity < 1) {
                quantity = 1;
                inputField.value = quantity;
            }
            if (quantity > 100) {
                quantity = 100;
                inputField.value = quantity;
            }
            const xhr = new XMLHttpRequest();
            xhr.open("PATCH", `{{ route('update.cart') }}`);
            xhr.setRequestHeader("X-CSRF-TOKEN", '{{ csrf_token() }}');
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Update the subtotal
                    const subtotal = price * quantity;
                    subtotalElement.textContent = `Subtotal: $${subtotal.toFixed(2)}`;

                    window.location.reload();
                } else {
                    console.error("Error:", xhr.status, xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error("Network error");
            };
            xhr.send(`id=${productId}&quantity=${quantity}`);
        }

        inputField.addEventListener('input', function() {
            let quantity = parseInt(inputField.value);
            if (isNaN(quantity)) {
                quantity = 1;
                inputField.value = quantity;
            }
            updateCart(quantity);
        });

        minusBtn.addEventListener('click', function() {
            let quantity = parseInt(inputField.value);
            if (quantity > 1) {
                quantity--;
                inputField.value = quantity;
                updateCart(quantity);
            }
        });

        plusBtn.addEventListener('click', function() {
            let quantity = parseInt(inputField.value);
            if (quantity < 100) {
                quantity++;
                inputField.value = quantity;
                updateCart(quantity);
            }
        });
    });
});


</script>
@endsection
