<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            color: white;
            background: url('/images/background3.jpg') no-repeat center center fixed;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
            margin: 0;
            font-family: 'Baskervville', serif;
        }
        h1 {
            text-align: center;
            width: 100%;
            margin-bottom: 30px;
            font-family: 'Baskervville', serif;
        }
        .btn-custom {
            background-color: #2d572c;
            border-color: #2d572c;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-family: 'Baskervville', serif;
        }
        .btn-custom:hover {
            background-color: #24481f;
            border-color: #24481f;
            text-decoration: underline;
        }
        .nav {
            position: absolute;
            top: 30px;
            right: 30px;
            display: flex;
            gap: 80px;
            align-items: center;
            font-family: 'Baskervville', serif;
        }
        .nav a {
            color: #fff;
            text-decoration: none;
            font-size: 1.5em;
            transition: color 0.3s ease;
        }
        .nav a:hover {
            color: #bbb;
        }
        .hamburger {
            width: 30px;
            height: 22px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            cursor: pointer;
        }
        .hamburger div {
            width: 100%;
            height: 4px;
            background-color: #fff;
        }
        .logo {
            position: absolute;
            top: 30px;
            left: 30px;
            font-size: 1.5em;
            z-index: 1;
            font-family: 'Baskervville', serif;
        }
        .back-button {
            position: absolute;
            bottom: 30px;
            left: 30px;
            z-index: 1;
        }
        .back-button a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 15px;
            box-shadow: 3px 3px 10px #00000070;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .back-button a:hover {
            background-color: #555;
            box-shadow: 3px 3px 15px #00000090;
        }
        .dropdown {
            margin-top: 20px;
            display: none;
            position: absolute;
            top: 60px;
            right: 0;
            background-color: #1e1e1e;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            transition: all 0.3s ease-in-out;
            border-radius: 10px;
            overflow: hidden;
        }
        .dropdown a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }
        .dropdown a:hover {
            background-color: #333;
        }
        .show {
            display: block;
        }
        .content-container {
            position: absolute;
            top: 100px; /* Adjust based on your fixed header height */
            bottom: 0px; /* Adjust based on your fixed footer height */
            left: 0;
            right: 0;
            overflow-y: auto;
            padding: 20px;
        }
        .content {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 50px;
        }
        .card {
            width: 350px;
            background-color: #242428bd;
            border: none;
        }
        .card-header img {
            margin-top: 10px;
            border-radius: 5px;
        }
        .card-body p, .card-footer p {
            color: white;
        }
        .card-footer p {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="add-product-container">
        <div class="logo">BONSAIMART</div>
        <div class="back-button">
            <a href="{{ route('seller.product') }}">← Back</a>
        </div>
        <div class="nav">
            <a href="{{ route('about.page') }}">About</a>
            <a href="{{ route('product.page') }}">Market</a>
            <a href="#">Contact</a>
            <div class="hamburger" onclick="toggleDropdown()">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="content-container">
            <div class="content">
                <div class="card">
                    <div class="card-header m-auto">
                        <img src="{{ asset('images/' . $product->product_image) }}" alt="{{ $product->product_name }}" style="width: 225px; height:225px;">
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.product', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="product_name" style="color:white;">Product Name</label>
                                <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->product_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="product_description" style="color:white;">Product Description</label>
                                <textarea name="product_description" id="product_description" class="form-control" required>{{ $product->product_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price" style="color:white;">Price</label>
                                <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="product_image" style="color:white;">Product Image</label>
                                <input type="file" name="product_image" id="product_image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-custom">Update Product</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p>Current Price: Rp.{{ $product->price }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown" id="dropdownMenu">
            <a href="{{ route('seller.product') }}">My products</a>
        </div>
    </div>
    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('show');
        }
    </script>
</body>
</html>
