@extends('layouts.default')


@section('pageTitle')
    Mage's Greens
@stop


@section('content')

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
        <h2>Summer sale</h2>
        <p>Elevate your plant care game this summer with PLNTS, <br>your ultimate resource for all things green and vibrant!</p>
        <button>Let's go</button>
    </div>
</div>
<div class="mobile-overlay">
    <h2>Summer sale</h2>
    <p>Elevate your plant care game this summer with PLNTS, <br>your ultimate resource for all things green and vibrant!</p>
    <button>Let's go</button>
</div>
<div class="products">
    <h2>Product list</h2>
    <div class="product">
        <div class="productImage">
            <img src="{{ URL::asset('images/plant1.jpg') }}" alt="">
        </div>
        <div class="productInfo">
            <p>Product info</p>
        </div>
    </div>
    <div class="product">
        <div class="productImage">
            <img src="{{ URL::asset('images/plant2.jpg') }}" alt="">
        </div>
        <button>View all</button>
    </div>
</div>
<div class="shipping-notice">
    <img src="{{ URL::asset('images/shipping-notice.png') }}" alt="">
    <p>Free shipping from €50,-</p>
</div>
<div class="featured-image">
    <div class="featured-plant-text">
        <h2>Plant of the month</h2>
        <h2>Anthurium Warocqueanum</h2>
    </div>
    <img src="{{ URL::asset('images/featured-image.jpg') }}" alt="">
</div>
<div id="review">
    <p><b>Magesgreens.com</b> is rated <b>excellent</b> by our customers.</p>
</div>
<div class='sk-ww-google-reviews reviews-list' data-embed-id='181499'></div>
<script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
<div class="assistant">
    <div id="assistantImage">
        <img src="{{ URL::asset('assets/assistant.jpg') }}" alt="">
    </div>
    <div id="assistantGreet">
        <h2 id="assistantText">Hi, I'm Alex, your Mage's Greens guide!</h2>
        <button>Can I help you?</button>
    </div>
</div>

@stop
