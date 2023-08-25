<div class="backdrop"></div>
<!-- Side Cart -->
<div id="sidecart" class="sidecart">
    <div class="cart_content">
        <!-- Cart Header -->
        <div class="cart_header">
            <i class="fa-solid fa-cart-shopping" style="width: 30px;"></i>
            <div class="header_title">
                <h2>Your cart</h2>
                <span id="items_num">{{ count((array) session('cart')) }}</span>
            </div>
            <span id="close_btn" class="close_btn">&times;</span>
        </div>
        <!-- Cart Items -->
        <div class="cart_items">
            <!-- Item -->
            @if (session('cart'))
            @foreach (session('cart') as $id => $details)
            @isset($details['product_id'])
            <div class="cart_item" data-value="{{ $details['product_id'] }}">
                @else
                <div class="cart_item" data-value="">
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
                    </div>
                </div>
                @endforeach

            </div>
            <!-- /Item -->
            <!-- Cart Actions -->
            <div class="cart_actions">
                @php $total = 0 @endphp
                @foreach ((array) session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                @endforeach
                <div class="subtotal">
                    <p>TOTAL:</p>
                    <p><span data-th="Subtotal">${{ $details['price'] * $details['quantity'] }}</span></p>
                </div>
                <a href="/cart">
                    <button class="cart_btn btn1">View Cart</button>
                </a>
                <a href="{{ route('checkout.index') }}">
                    <button class="cart_btn">Checkout</button>
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script>
    // Side Cart
    const openBtn = document.getElementById('open_cart_btn');
    const cart = document.getElementById('sidecart');
    const closeBtn = document.getElementById('close_btn');
    const backdrop = document.querySelector('.backdrop');

    openBtn.addEventListener('click', openCart)
    closeBtn.addEventListener('click', closeCart)
    backdrop.addEventListener('click', closeCart)

    // Open Cart
    function openCart() {
        cart.classList.add('open');
        backdrop.style.display = 'block';

        setTimeout(() => {
            backdrop.classList.add('show');
        }, 0);
    }

    // Close Cart
    function closeCart() {
        cart.classList.remove('open');
        backdrop.classList.remove('show');

        setTimeout(() => {
            backdrop.style.display = 'none';
        }, 500);
    }

    function setHeaders(headers) {
        for (let key in headers) {
            xhr.setRequestHeader(key, headers[key])
        }
    }
    updateSubtotal();
    function updateSubtotal() {
        let total = 0;

        const cartItems = document.querySelectorAll('.cart_item');
        cartItems.forEach(item => {
            const price = parseFloat(item.querySelector('.item_details-price').textContent.replace('$', ''));
            const quantity = parseInt(item.querySelector('.product_quantity').value);
            total += price * quantity;
        });

        const subtotalElement = document.querySelector('[data-th="Subtotal"]');
        subtotalElement.textContent = '$' + total.toFixed(2);
    }

    const quantityInputs = document.querySelectorAll('.product_quantity');
    quantityInputs.forEach(input => {
        input.addEventListener('input', updateSubtotal);
    });


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

                       updateSubtotal();

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
