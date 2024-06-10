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
        .content {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 50px; /* Increased margin-top to move content further down */
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
    </style>
</head>
<body>
    <div class="logo">BONSAIMART</div>
    <div class="nav">
        <a href="#">About</a>
        <a href="#">Market</a>
        <a href="#">Contact</a>
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <hr>
    <div class="content">
        <div class="card">
            <div class="card-header m-auto">
                <img src="assets/bonsai3.jpeg" alt="Bonsai Bougenville" style="width: 225px; height:225px;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify" style="font-size:25px;">Bonsai Bougenville</p>
                <p class="m-0" style="color: #B6B4B4; font-size: 13px;">Tanaman bougenville memiliki daya tarik pada bunga serta daunnya. Selain itu bougenville memiliki total 14 spesies dan delapan di antaranya tumbuh dan mudah ditemui di Indonesia.</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size:15px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-header m-auto">
                <img src="assets/bonsai3.jpeg" alt="Bonsai Adenium" style="width: 225px; height:225px;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify" style=" font-size:25px;">Bonsai Adenium</p>
                <p class="m-0" style="color: #B6B4B4; font-size: 13px;">Kamboja Jepang atau adenium merupakan salah satu tanaman yang sangat umum dijadikan sebagai bonsai. Hal ini karena adenium memiliki kontur batang yang besar di bawahnya dan batang yang cukup kecil di bagian atasnya.</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size:15px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-header m-auto">
                <img src="assets/bonsai3.jpeg" alt="Bonsai Bougenville" style="width: 225px; height:225px;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify" style="font-size:25px;">Bonsai Bougenville</p>
                <p class="m-0" style="color: #B6B4B4; font-size: 13px">Tanaman bougenville memiliki daya tarik pada bunga serta daunnya. Selain itu bougenville memiliki total 14 spesies dan delapan di antaranya tumbuh dan mudah ditemui di Indonesia.</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size:15px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-header m-auto">
                <img src="assets/bonsai3.jpeg" alt="Bonsai Bougenville" style="width: 225px; height:225px;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify" style="font-size:25px;">Bonsai Bougenville</p>
                <p class="m-0" style="color: #B6B4B4; font-size: 13px">Tanaman bougenville memiliki daya tarik pada bunga serta daunnya. Selain itu bougenville memiliki total 14 spesies dan delapan di antaranya tumbuh dan mudah ditemui di Indonesia.</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size:15px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="back-button">
        <a href="{{ route('seller.view') }}">← Back</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
