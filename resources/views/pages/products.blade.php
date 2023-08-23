@extends('layouts.default')

@section('pageTitle')
    Plants
@stop

@section('PageSpecificPropertiesInTheHead')
    <link rel="stylesheet" href="{{ URL::asset('css/products.css') }}">

@stop

@section('content')


    <br />
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <div class="row">
        @foreach ($products as $product)
            <div class="col">
                <div class="thumbnail">
                    <a href="/product/{{ $product->id }}"><img src="{{ $product->imgLink }}" alt='product image'></a>
                    <div class="caption">
                        <a href="/product/{{ $product->id }}">
                            <h4>{{ $product->name }}</h4>
                        </a>
                        <p>{{ $product->description }}</p>
                        <p><strong>Price:</strong> ${{ $product->price }}</p>
                        <p class="btn-holder" id="open_cart_btn"><a href="{{ route('add.to.cart', $product->id) }}" class="btn">Add to cart</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>




@endsection
