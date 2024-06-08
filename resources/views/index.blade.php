<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonsai Mart</title>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
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
            align-items: center;
        }
        .sidebar h1 {
            font-size: 3em;
            margin: 0;
        }
        .sidebar p {
            font-size: 1.2em;
            margin-top: 20px;
            text-align: center;
        }
        .buttons {
            margin-top: 40px;
            display: flex;
            gap: 10px;
        }
        .buttons a {
            display: inline-block;
            padding: 10px 20px;
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
            bottom: 20px;
            left: 20px;
            margin: 0;
            font-size: 2em;
        }
        .nav {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .nav a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
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
            top: 20px;
            left: 20px;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <div class="logo">BONSAIMART</div>
    <div class="container">
        <div class="sidebar">
            <h1>Bonsai Mart</h1>
            <p>Find the best bonsai. With fast delivery, decorate your space with natural beauty!</p>
            <div class="buttons">
                <a href="{{ url('/register') }}">Register</a>
                <a href="{{ url('/login') }}">Login</a>
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
        <a href="#">Product</a>
        <a href="#">Contact</a>
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</body>
</html>
