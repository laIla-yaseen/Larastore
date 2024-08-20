<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name">

        <label for="product_description">Product Description:</label>
        <textarea id="product_description" name="product_description"></textarea>

        <label for="product_price">Product Price:</label>
        <input type="number" id="product_price" name="product_price">

        <button type="submit">Add Product</button>
    </form>
</body>
</html>
