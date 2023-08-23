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
                                <span class="update-cart-minus">-</span>
                                <strong class="update-cart-value">{{ $details['quantity'] }}</strong>
                                <span class="update-cart-plus">+</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <!-- /Item -->
            <!-- Cart Actions -->
            <div class="cart_actions">
                @php $total = 0 @endphp
                @foreach ((array) session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                @endforeach
                <div class="subtotal">
                    <p>TOTAL:</p>
                    <p><span id="subtotal_price">$ {{ $total }}</span></p>
                </div>
                <button class="cart_btn">View Cart</button>
                <button class="cart_btn">Checkout</button>
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

            // $(".update-cart-minus").click(function (e) {
            //     e.preventDefault();

            //     var btn_minus = document.querySelector('.update-cart-value').innerHTML
            //     console.log(btn_minus);
            //     // console.log(ele)
            //     $.ajax({
            //         url: "{{ route('update.cart') }}",
            //         method: "patch",
            //         data: {
            //             _token: '{{ csrf_token() }}',
            //             id: ele.parents("tr").attr("data-id"),
            //             quantity: ele.parents("tr").find(".quantity").val()
            //         },
            //         success: function (response) {
            //             // window.location.reload();
            //         }
            //     });
            // });

            // $(".update-cart-plus").click(function (e) {
            //     e.preventDefault();

            //     var ele = document.querySelector('.update-cart')
            //     // console.log(ele)
            //     $.ajax({
            //         url: "{{ route('update.cart') }}",
            //         method: "patch",
            //         data: {
            //             _token: '{{ csrf_token() }}',
            //             id: ele.parents("tr").attr("data-id"),
            //             quantity: ele.parents("tr").find(".quantity").val()
            //         },
            //         success: function (response) {
            //             // window.location.reload();
            //         }
            //     });
            // });

            function setHeaders(headers) {
                for (let key in headers) {
                    xhr.setRequestHeader(key, headers[key])
                }
            }
            // document.addEventListener("DOMContentLoaded", function () {
            //     const removeButtons = document.querySelectorAll(".remove-from-cart");

            //     removeButtons.forEach(button => {
            //         button.addEventListener("click", function (e) {
            //             e.preventDefault();

            //             if (confirm("Are you sure you want to delete?")) {
            //                 const ele = e.currentTarget;
            //                 const cartItem = ele.closest(".cart_item");
            //                 const itemId = cartItem.dataset.itemId;

            //                 const formData = new FormData();
            //                 formData.append("id", itemId);

            //                 const xhr = new XMLHttpRequest();
            //                 xhr.open("DELETE", "{{ route('remove.from.cart') }}");
            //                 const product_id = cartItem.dataset.value;
            //                 console.log(product_id);
            //                 setHeaders({"X-CSRF-TOKEN":"{{ csrf_token() }}","id": product_id});
            //                 // xhr.setRequestHeader("X-CSRF-TOKEN", '{{ csrf_token() }}');
            //                 xhr.onload = function () {
            //                     if (xhr.status === 200) {
            //                         cartItem.remove();
            //                         updateCartTotal();
            //                     } else {
            //                         console.error("Error:", xhr.status, xhr.statusText);
            //                     }
            //                 };
            //                 xhr.onerror = function () {
            //                     console.error("Network error");
            //                 };
            //                 xhr.send(formData);
            //             }
            //         });
            //     });
            // });
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
                            xhr.open("DELETE",
                                `{{ route('remove.from.cart') }}?product_id=${productId}`);
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


            document.addEventListener("DOMContentLoaded", function() {
                const minusButtons = document.querySelectorAll(".update-cart-minus");
                const plusButtons = document.querySelectorAll(".update-cart-plus");

                minusButtons.forEach(button => {
                    button.addEventListener("click", function(e) {
                        e.preventDefault();
                        const cartItem = button.closest(".cart_item");
                        const itemId = cartItem.dataset.itemId;

                        updateCartItem(itemId, -1,
                        cartItem); // Вызов функции для обновления количества товара
                    });
                });

                plusButtons.forEach(button => {
                    button.addEventListener("click", function(e) {
                        e.preventDefault();
                        const cartItem = button.closest(".cart_item");
                        const itemId = cartItem.dataset.itemId;

                        updateCartItem(itemId, 1,
                        cartItem); // Вызов функции для обновления количества товара
                    });
                });
            });

            function updateCartItem(itemId, change, cartItem) {
                const formData = new FormData();
                formData.append("id", itemId);
                formData.append("change", change);

                const xhr = new XMLHttpRequest();
                xhr.open("PATCH", "{{ route('update.cart') }}");
                xhr.setRequestHeader("X-CSRF-TOKEN", '{{ csrf_token() }}');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        const newValue = parseInt(cartItem.querySelector('.update-cart-value').textContent) + change;
                        cartItem.querySelector('.update-cart-value').textContent = newValue;
                        // Обработка успешного ответа, например, обновление подытога
                        // updateCartTotal(); // Ваша функция для обновления подытога
                    } else {
                        console.error("Произошла ошибка:", xhr.status, xhr.statusText);
                    }
                };
                xhr.onerror = function() {
                    console.error("Произошла ошибка сети");
                };
                xhr.send(formData);
            }

            function updateCartTotal() {
                const totalElements = document.querySelectorAll(".item_details-price");
                let total = 0;

                totalElements.forEach(element => {
                    total += parseFloat(element.textContent.replace("$", ""));
                });

                const subtotalPriceElement = document.getElementById("subtotal_price");
                subtotalPriceElement.textContent = "$ " + total.toFixed(2);
            }
        </script>
    @endsection
