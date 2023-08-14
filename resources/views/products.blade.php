<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        <h1>Products</h1>
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->Title }}</li>
            @endforeach
        </ul>
    </body>
</html>
