<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            color: white;
            font-family: 'Baskervville', serif;
            background: url('/images/background2.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            overflow: hidden; /* Prevent body from scrolling */
        }
        .back-button {
            position: fixed;
            bottom: 30px;
            left: 30px;
            z-index: 2;
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
        a {
            color: #fff;
            text-decoration: none;
            font-size: 1.5em;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #bbb;
        }
        .nav {
            position: fixed;
            top: 30px;
            right: 30px;
            display: flex;
            gap: 80px;
            align-items: center;
            z-index: 2;
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
            position: fixed;
            top: 30px;
            left: 30px;
            font-size: 1.5em;
            z-index: 2;
            color: #fff;
        }
        .header {
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: white;
        }
        hr {
            margin-top: 100px;
            background-color: white;
            height: 1px;
            border: none;
        }
        h1 {
            text-align: center;
        }
        .content-container {
            position: absolute;
            top: 150px; /* Adjust based on your fixed header height */
            bottom: 0px; /* Adjust based on your fixed footer height */
            left: 0;
            right: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .content {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 20px;
            width: 100%;
            max-width: 1200px;
        }
        .cart-items-container {
            width: 40%;
            height: 400px; /* Adjust height as needed */
            overflow-y: auto; /* Make the container scrollable */
        }
        .cart-items {
            background-color: #242428bd;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column; /* Change from horizontal to vertical */
            width: 100%;
            height: auto;
        }
        .cart-item {
            display: flex;
            flex-direction: row; /* Keep the inner items horizontal */
            align-items: center;
            margin-bottom: 20px; /* Add margin between items */
            padding: 15px;
            border-radius: 10px;
            background-color: #242428bd;
        }
        .cart-item img {
            width: 100px;
            height: 100px;
            border-radius: 10px;
        }
        .cart-item .product-info {
            flex-grow: 1;
            padding-left: 20px;
        }
        .cart-item .product-info p {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .total-price {
            padding: 10px;
            background-color: #242428bd;
            border-radius: 10px;
            margin-top: 20px;
            text-align: right;
        }
        .checkout-form {
            background-color: #242428bd;
            padding: 20px;
            border-radius: 10px;
            width: 60%;
        }
        .checkout-form label {
            color: white;
        }
        .dropdown {
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
    </style>
</head>
<body>
    <a href="{{ route('home') }}" div class="logo">BONSAIMART</a>
    <div class="nav">
        <a href="{{ route('about.page') }}">About</a>
        <a href="{{ route('product.page') }}">Market</a>
        <a href="{{ route('cart.page') }}" class="fs-6">
            <i class="fa-solid fa-bag-shopping icon-nav"></i>
        </a>
        <div class="hamburger"onclick="toggleDropdown()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="dropdown" id="dropdown">
            <a href="{{ route('receipt.page') }}">View receipt</a>
        </div>
    </div>
    <hr>
    <div class="content-container">
        <h1>Checkout</h1>
        <div class="content">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($cartItems->isEmpty())
                <p>Your cart is empty</p>
                <p>If you want to check your recent receipt, head to menu and then click View Receipt</p>
            @else
                <div class="cart-items-container">
                    <div class="cart-items">
                        @foreach ($cartItems as $item)
                            <div class="cart-item d-flex align-items-center">
                                <img src="{{ asset('images/'. $item->product->product_image) }}" alt="{{ $item->product->product_name }}">
                                <div class="product-info">
                                    <p>{{ $item->product->product_name }}</p>
                                    <p>Rp. {{ number_format($item->product->price, 0, ',', '.') }}</p>
                                    <p>Quantity: {{ $item->quantity }}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="total-price">
                            <p>Total Quantity: {{ $totalQuantity }}</p>
                            <p>Total Price: Rp. {{ number_format($totalPrice, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
                <form class="checkout-form" action="{{ route('process.checkout') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                    </div>
                    <div class="form-group">
                        <label for="expedition_shipping">Expedition Shipping:</label>
                        <select class="form-control" id="expedition_shipping" name="expedition_shipping" required>
                            <option value="JNE Express">JNE Express</option>
                            <option value="J&T Express">J&T Express</option>
                            <option value="SiCepat">SiCepat</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Place Order</button>
                    <a href="{{ route('receipt.page') }}" class="btn btn-secondary">View Receipt</a>
                </form>
            @endif
        </div>
    </div>
    <div class="back-button">
        <a href="javascript:history.back()">← Back</a>
    </div>
    <script>
        function toggleDropdown() {
            document.getElementById("dropdown").classList.toggle("show");
        }
        window.onclick = function(event) {
            if (!event.target.matches('.hamburger') && !event.target.matches('.hamburger div')) {
                var dropdowns = document.getElementsByClassName("dropdown");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>
</html>
