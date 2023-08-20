@extends("layouts.default")

@section("pageTitle")
Product
@stop

@section("PageSpecificPropertiesInTheHead")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{ URL::asset('css/product.css') }}">
@stop

@section("content")


<section class="">
    <div class="grid-container">
        <nav>
            <div class="">
                <button class="">
                    <!-- <img src="{{URL::asset('/assets/product/greater-than-icon.svg')}}" alt="greater than" height="10" width="10"> -->
                </button>
            </div>
        </nav>
    </div>
</section>

<!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="{{URL::asset('/assets/product/image_1.avif')}}" alt="greater than"></div>
        <div class="swiper-slide"><img src="{{URL::asset('/assets/product/image_2.avif')}}" alt="greater than"></div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
<!-- Slider main container -->


<!-- name, category, reviews -->

<div class="container">
    <div class="product__details">
        <p class="product__details-name"> Th ai Constellation </p>
        <div class="product__details-price">
            <div class="product__detail-price-box">
                <span> Price : € </span>
                <span class="price">3.12</span>
            </div>
            <div class="product__details-quantity">
                <label for="tentacles">Add Quantity:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="100" />
            </div>



            <div class="product__details-description">
                <span> About this plant:- </span>
                Here she is! The much beloved and rare Monstera Thai Constellation! Isn’t she absolutely gorgeous?! This is a rare Monstera species that you will not find in nature. This is because she was especially created to have stable variegation. She will never stop giving you her amazing variegated leaves. Yay! :) That is a very big difference with her look-a-like, the variegated Monstera. Another big difference is that the Thai is a real crawler and the space between the nodes is way shorter than with the Monstera Variegata.
            </div>
            <form action="" method="post">
                <ul class=""></ul>
                <div class="product__details-cart">
                    <div class="">
                        <button class="">
                            Buy Now
                        </button>
                        <button class="">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/product.js') }}"></script>

@stop
