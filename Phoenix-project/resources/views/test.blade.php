<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
</head>
<body>
    <h1>Products List</h1>

    @if($products->isEmpty())
        <p>No products found.</p>
    @else
        <ul>
            @foreach($products as $product)
                <li>
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" width="100">
                    <h2>{{ $product->name }}</h2>
                    <p>{{ $product->content }}</p>
                    <p>Price: ${{ number_format($product->price, 2) }}</p>
                    <p>Available: {{ $product->number }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
