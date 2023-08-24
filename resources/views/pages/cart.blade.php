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
            <span data-th="Quantity">
                <input type="number" min="1" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
            </span>
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


    
{{-- <table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:20%">Name</th>
            <th style="width:20%">Image</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%">Delete</th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Name">{{ $details['name'] }}</td>
                    <td><img src="{{ $details['imgLink'] }}" width="100" height="100" class="img-responsive"/></td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="Delete">
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/plants') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-success" onclick="window.location.href='{{ url('/checkout') }}'">Checkout</button>            </td>
        </tr>
    </tfoot>
</table> --}}
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script type="text/javascript">

    // $(".update-cart").change(function (e) {
    //     e.preventDefault();

    //     var ele = $(this);
    //     $.ajax({
    //         url: '{{ route('update.cart') }}',
    //         method: "patch",
    //         data: {
    //             _token: '{{ csrf_token() }}',
    //             id: ele.parents("").attr("data-id"),
    //             quantity: ele.parents("tr").find(".quantity").val()
    //         },
    //         success: function (response) {
    //            window.location.reload();
    //         }
    //     });
    // });

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
                            updateCartTotal();
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

    // document.addEventListener("DOMContentLoaded", function() {
    //     const updateInputs = document.querySelectorAll(".update-cart");

    //     updateInputs.forEach(button => {
    //         button.addEventListener("click", function(e) {
    //             e.preventDefault();

    //             if (true) {
    //                 const ele = e.currentTarget;
    //                 const input_value = e.currentTarget.value;
    //                 const cartItem = ele.closest(".cart_item");
    //                 const productId = cartItem.dataset.value;
    //                 const xhr = new XMLHttpRequest();
    //                 xhr.open("POST", `{{ route('update.cart') }}?id=${productId}&quantity=${input_value}`);
    //                 xhr.setRequestHeader("X-CSRF-TOKEN", '{{ csrf_token() }}');
    //                 xhr.onload = function() {
    //                     if (xhr.status === 200) {
    //                         updateCartTotal();
    //                     } else {
    //                         console.error("Error:", xhr.status, xhr.statusText);
    //                     }
    //                 };
    //                 xhr.onerror = function() {
    //                     console.error("Network error");
    //                 };
    //                 xhr.send();
    //             }
    //         });
    //     });
    // });

    document.addEventListener("DOMContentLoaded", function() {
            const cartItems = document.querySelectorAll(".cart_item");

            cartItems.forEach(cartItem => {
                const inputField = cartItem.querySelector('.update-cart');
                const productId = cartItem.dataset.value;
                const price = parseFloat(cartItem.querySelector('.item_details-price').textContent.replace(
                    '$', ''));
                const subtotalElement = cartItem.querySelector('[data-th="Subtotal"]');

                inputField.addEventListener('input', function() {
                    const quantity = parseInt(inputField.value);
                    const xhr = new XMLHttpRequest();
                    xhr.open("PATCH", `{{ route('update.cart') }}`);
                    xhr.setRequestHeader("X-CSRF-TOKEN", '{{ csrf_token() }}');
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            // Update the subtotal
                            const subtotal = price * quantity;
                            subtotalElement.textContent = `Subtotal: $${subtotal.toFixed(2)}`;

                            // Update the total
                            let total = 0;
                            document.querySelectorAll('[data-th="Subtotal"]').forEach(
                                subtotalElement => {
                                    total += parseFloat(subtotalElement.textContent.replace(
                                        'Subtotal: $', ''));
                                });
                            document.querySelector('#total').textContent =
                                `Total: $${total.toFixed(2)}`;
                        } else {
                            console.error("Error:", xhr.status, xhr.statusText);
                        }
                    };
                    xhr.onerror = function() {
                        console.error("Network error");
                    };
                    xhr.send(`id=${productId}&quantity=${quantity}`);
                });
            });
        });


</script>
@endsection
