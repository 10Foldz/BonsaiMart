<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
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
        .receipt-items {
            background-color: #242428bd;
            padding: 15px;
            border-radius: 10px;
            width: 100%;
        }
        .receipt-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid white;
        }
        .receipt-item:last-child {
            border-bottom: none;
        }
        .total {
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <a href="{{ route('home') }}" div class="logo">BONSAIMART</a>
    <div class="nav">
        <a href="{{ route('about.page') }}">About</a>
        <a href="{{ route('product.page') }}">Market</a>
        <a href="#">Contact</a>
        <a href="{{ route('cart.page') }}" class="fs-6">
            <i class="fa-solid fa-bag-shopping icon-nav"></i>
        </a>
    </div>
    <hr>
    <div class="content-container">
        <h1>Your Receipt</h1>
        <div class="content">
            @if ($order)
                <div class="receipt-items">
                    @foreach ($orderItems as $item)
                        <div class="receipt-item">
                            <div>{{ $item->product->product_name }}</div>
                            <div>Rp. {{ number_format($item->price, 0, ',', '.') }}</div>
                            <div>Quantity: {{ $item->quantity }}</div>
                        </div>
                    @endforeach
                    <div class="total">
                        <p>Total Quantity: {{ $totalQuantity }}</p>
                        <p>Total Price: Rp. {{ number_format($totalPrice, 0, ',', '.') }}</p>
                    </div>
                </div>
            @else
                <p>No recent order found.</p>
            @endif
        </div>
    </div>
    <div class="back-button">
        <a href="javascript:history.back()">← Back</a>
    </div>
</body>
</html>
