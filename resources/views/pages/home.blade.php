@extends('layouts.default')


@section('pageTitle')
Mage's Greens  🌿
@stop




@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="hwrap">
    <div class="hitem">
        <span><strong>Free shipping</strong> for orders over €50,-</span>
        <span>30 days Mage's <strong>health guarantee</strong></span>
        <span><strong>Free returns</strong> for orders over €50,-</span>
    </div>
</div>
<div class="wallpaper">
    <h1 class="text-wrapper">touching the<br>hearts of<br>all plants</h1>
    <div class="overlay">
            <h2 id="summerHead">Summer sale</h2>
            <p id="summerText">Elevate your plant care game this summer with Mage's greens, <br>your ultimate resource for all things green and vibrant!</p>
            <button id="summerButton">Let's go</button>
    </div>
</div>
<div class="mobile-overlay">
    <h2>Summer sale</h2>
    <p>Elevate your plant care game this summer with Mage's greens, <br>your ultimate resource for all things green and vibrant!</p>
    <button>Let's go</button>
</div>
<h2 id="products-head">Featured product list</h2>
<div class="products">
    <div class="grid-container">
        @php $count = 0 @endphp
        <div class="grid-row">
            @foreach($products as $product)
                @if($count >= 6)
                    @break
                @endif
                <div class="card">
                    <img class="card-image" src="{{ $product->imgLink }}" alt="{{ $product->name }}">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <p>Price: <b>{{ $product->price }}€</b> <s>35.99€</s></p>
                    <a href="{{ route('add.to.cart', $product->id) }}"><button><strong>ADD TO CART</strong></button></a>
                </div>

                @php $count++ @endphp
                @if($count % 3 === 0)
                    </div><div class="grid-row">
                @endif
            @endforeach
        </div>
    </div>
</div>

<div class="shipping-notice">
    <div>
        <i class="fa fa-solid fa-truck-fast"></i>
        <span class="shippingFree">Free <strong>shipping</strong> from <strong>€50,-</strong></span>
    </div>
    <div>
        <i class="fa-solid fa-shield-heart"></i>
        <span>30 days Mage's <strong>health guarantee</strong></span>
    </div>
</div>
<div class="featured-wallpaper">
    <div class="featured-plant-text">
        <h2>Plant of the month</h2>
        <h2>Anthurium Warocqueanum</h2>
    </div>
</div>
<div id="review">
    <p><b>Magesgreens.com</b> is rated <b>excellent</b> by our customers.</p>
</div>
<div class='sk-ww-google-reviews reviews-list' data-embed-id='181499'></div><script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
<div class="assistant" id="assistant">
<div id="assistantImage">
    <img src="{{ URL::asset('assets/assistant.webp') }}" alt="">
</div>
<div id="assistantGreet">
    <h2 id="assistantText">Hi, I'm Alex, your Mage's Greens guide!</h2>
    <p id="assistantCall">... or you can call us on <b>+371 25 000 666</b></p>
    <button id="assistantButton" onclick="assistant()">Can I help you?</button>
</div>
</div>

@stop
