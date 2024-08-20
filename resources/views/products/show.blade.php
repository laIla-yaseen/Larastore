<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        .product-details {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .product-details label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
    </style>
</head>
<body>
    <h1>Product Details</h1>
    <div class="product-details">
        <label>Product Name:</label>
        <p>{{ $product->product_name }}</p>

        <label>Product Description:</label>
        <p>{{ $product->product_description }}</p>

        <label>Product Price:</label>
        <p>{{ $product->product_price }}</p>
    </div>
</body>
</html>
