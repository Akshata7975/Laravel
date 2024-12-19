<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .product {
            border: 1px solid #ddd;
            padding: 16px;
            margin: 16px;
            border-radius: 8px;
            max-width: 300px;
        }
        .product img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-name {
            font-size: 1.5em;
            margin: 8px 0;
        }
        .product-id {
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Product Page</h1>
    <div class="product" id="product-123">
        <img src="product-image.jpg" alt="Product Image">
        <div class="product-name" id="product-name-123">Product Name</div>
        <div class="product-id">ID: <span id="product-id-123">123</span></div>
        <p>Description of the product goes here. This is where you can provide details about the product features, specifications, and any other relevant information.</p>
        <p><strong>Price:</strong> $99.99</p>
        <button>Add to Cart</button>
    </div>
</body>
</html>
