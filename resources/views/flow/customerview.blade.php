<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonsai Mart</title>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Baskervville', serif;
            margin: 0;
            padding: 0;
            background-color: #1d1d1d;
            color: #fff;
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 30%;
            padding: 50px;
            background-color: #1e1e1e;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            text-align: right;
            position: relative;
        }
        .sidebar h1 {
            font-size: 6.5em;
            margin: 0 70px;
            color: #fff;
            font-weight: 400;
        }
        .sidebar h1 span {
            display: block;
            line-height: 1;
        }
        .sidebar h1 span:last-child {
            margin-left: 20px;
        }
        .sidebar p {
            font-size: 1.2em;
            margin-top: 20px;
            margin-left: 150px;
            margin-right: 40px;
            text-align: left;
        }
        .buttons {
            margin-top: 20px;
            margin-left: 145px;
        }
        .buttons a {
            display: inline-block;
            padding: 15px 30px;
            font-size: 1.2em;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 15px;
            box-shadow: 3px 3px 10px #00000070;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .buttons a:hover {
            background-color: #555;
            box-shadow: 3px 3px 15px #00000090;
        }
        .back-button {
            position: absolute;
            bottom: 30px;
            left: 30px;
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
        .main-content {
            width: 70%;
            display: flex;
        }
        .main-content div {
            flex: 1;
            overflow: hidden;
            position: relative;
        }
        .main-content img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .main-content h2 {
            position: absolute;
            bottom: 50px;
            left: 20px;
            margin: 0;
            font-size: 2.5em;
            font-family: 'Baskervville', serif;
            font-weight: 400;
        }
        .main-content h2::before {
            content: "";
            display: block;
            width: 1px;
            height: 200px;
            background-color: #fff;
            position: absolute;
            top: -220px; /* Adjust the distance above the text as needed */
            left: 50%;
            transform: translateX(-50%);
        }
        .nav {
            position: absolute;
            top: 30px;
            right: 30px;
            display: flex;
            gap: 80px;
            align-items: center;
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
        }
    </style>
</head>
<body>
    <div class="logo">BONSAIMART</div>
    <div class="container">
        <div class="sidebar">
            <h1>
                <span>Bonsai</span>
                <span>Mart</span>
            </h1>
            <p>Find the best bonsai. With fast delivery, decorate your space with natural beauty!</p>
            <div class="buttons">
                <a href="{{ route('product.page') }}">See Marketplace</a>
            </div>
            <div class="back-button">
                <a href="{{ route('user.choice') }}">← Back</a>
            </div>
        </div>
        <div class="main-content">
            <div>
                <img src="{{ asset('images/moyogi.jpg') }}" alt="Moyogi">
                <h2>Moyogi</h2>
            </div>
            <div>
                <img src="{{ asset('images/sokan.jpg') }}" alt="Sokan">
                <h2>Sokan</h2>
            </div>
            <div>
                <img src="{{ asset('images/fukinagashi.jpg') }}" alt="Fukinagashi">
                <h2>Fukinagashi</h2>
            </div>
        </div>
    </div>
    <div class="nav">
        <a href="#">About</a>
        <a href="#">Market</a>
        <a href="#">Contact</a>
        <a href="{{ route('cart.page') }}" class="fs-6">
            <i class="fa-solid fa-bag-shopping icon-nav"></i>
        </a>
    </div>
</body>
</html>
