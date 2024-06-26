<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
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
        .empty-products-message {
            color: #fff;
            font-size: 2em;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
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
            width: 260px;
            background-color: #242428bd;
            border: none;
        }
        .card-header img {
            border-radius: 5px;
        }
        .card-body p, .card-footer p {
            color: white;
        }
        .card-footer p {
            font-size: 20px;
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
        <div class="hamburger" onclick="toggleDropdown()">
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
        <div class="content">
            @if ($products->isEmpty())
                <h2 class="empty-products-message">No products listed yet</h2>
            @else
                @foreach ($products as $product)
                    <div class="card">
                        <div class="card-header m-auto">
                            <img src="{{ asset('images/' . $product->product_image) }}" alt="{{ $product->product_name }}" style="width: 225px; height:225px;">
                        </div>
                        <div class="card-body">
                            <p class="m-0 text-justify" style="font-size:25px;">{{ $product->product_name }}</p>
                            <p class="m-0" style="color: #B6B4B4; font-size: 13px;">{{ $product->product_description }}</p>
                        </div>
                        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                            <p class="m-0">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                            <form action="{{ route('add.to.cart', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-primary" style="font-size:15px">
                                    <i class="fa-solid fa-cart-shopping"></i> +
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="back-button">
        <a href="javascript:history.back()">← Back</a>
    </div>
    <script>
        function formatCurrency(amount) {
            return amount.toLocaleString('id-ID');
        }

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></scrip>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
