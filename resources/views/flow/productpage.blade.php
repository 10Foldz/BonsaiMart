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
            background: url('/images/background2.jpg') no-repeat center center fixed;
            background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
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
    </style>
</head>
<body>
    <div class="logo">BONSAIMART</div>
    <h4 class="text-center mt-md-5 mb-md-2" style="color: white; font-size: 35px">Our Product</h4>
    <hr style="color: white;">
    <div class="content mt-5 d-flex flex-lg-wrap gap-4">
        <div class="card" style="width: 260px; background-color: #242428bd;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="assets/bonsai3.jpeg" alt="Bonsai Bougenville" style="width: 225px; height:225px;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify" style="font-size:25px; color: white">Bonsai Bougenville</p>
                <p class="m-0" style="color: #B6B4B4; font-size: 13px;">Tanaman bougenville memiliki daya tarik pada bunga serta daunnya. Selain itu bougenville memiliki total 14 spesies dan delapan di antaranya tumbuh dan mudah ditemui di Indonesia.</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 20px; color: white;">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size:15px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>

        <div class="card" style="width: 260px; background-color: #242428bd;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="assets/bonsai3.jpeg" alt="Bonsai Adenium" style="width: 225px; height:225px;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify" style=" font-size:25px; color: white">Bonsai Adenium</p>
                <p class="m-0" style="color: #B6B4B4; font-size: 13px;">Kamboja Jepang atau adenium merupakan salah satu tanaman yang sangat umum dijadikan sebagai bonsai. Hal ini karena adenium memiliki kontur batang yang besar di bawahnya dan batang yang cukup kecil di bagian atasnya.</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 20px; color: white">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size:15px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>

        <div class="card" style="width: 260px; background-color: #242428bd;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="assets/bonsai3.jpeg" alt="Bonsai Bougenville" style="width: 225px; height:225px;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify" style=" font-size:25px; color: white">Bonsai Bougenville</p>
                <p class="m-0" style="color: #B6B4B4; font-size: 13px">Tanaman bougenville memiliki daya tarik pada bunga serta daunnya. Selain itu bougenville memiliki total 14 spesies dan delapan di antaranya tumbuh dan mudah ditemui di Indonesia.</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 20px; color: white">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size:15px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>

        <div class="card" style="width: 260px; background-color: #242428bd;">
            <div class="card-header m-auto" style="border-radius:5px;">
                <img src="assets/bonsai3.jpeg" alt="Bonsai Bougenville" style="width: 225px; height:225px;">
            </div>
            <div class="card-body">
                <p class="m-0 text-justify" style="font-size:25px; color: white">Bonsai Bougenville</p>
                <p class="m-0" style="color: #B6B4B4; font-size: 13px">Tanaman bougenville memiliki daya tarik pada bunga serta daunnya. Selain itu bougenville memiliki total 14 spesies dan delapan di antaranya tumbuh dan mudah ditemui di Indonesia.</p>
            </div>
            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                <p class="m-0" style="font-size: 20px; color: white">Rp. 150.000</p>
                <button class="btn btn-outline-primary" style="font-size:15px">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>
            </div>
        </div>
        <div class="back-button">
            <a href="{{ route('seller.view') }}">← Back</a>
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
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
