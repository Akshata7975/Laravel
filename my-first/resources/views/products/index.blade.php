<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        /* Container styling */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header styling */
        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 20px;
        }

        /* Product grid styling */
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        /* Individual product box styling */
        .product-box {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .product-box h3 {
            margin-top: 0;
            color: #343a40;
        }

        .product-box p {
            color: #6c757d;
            font-size: 14px;
        }

        .product-box .price {
            font-weight: bold;
            color:#2F4F4F;
        }

        /* Button styling */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }

        .btn-primary {
            background-color:#800000;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Products List</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="product-grid">
            @foreach ($products as $product)
                <div class="product-box">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <p class="price">${{ $product->price }}</p>
                    <p>Quantity: {{ $product->quantity }}</p>
                </div>
            @endforeach
        </div>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
    </div>
</body>
</html>
