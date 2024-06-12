<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Bonsai Mart</title>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Krona+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Baskervville', serif;
            margin: 0;
            padding: 0;
            background-color: #1d1d1d;
            color: #fff;
            overflow: hidden; /* Prevents scrolling */
        }
        .container {
            padding: 0 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            box-sizing: border-box;
        }
        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }
        .about-content img {
            border-radius: 10px;
            width: 450px;
            height: 450px;
            object-fit: cover;
        }
        .text-content {
            max-width: 500px;
        }
        .text-content h1 {
            font-family: 'Krona One', sans-serif;
            font-size: 5.3em;
            margin: 0;
            font-weight: 400;
        }
        .text-content p {
            font-size: 1em;
            line-height: 1.6;
            margin: 20px 0;
        }
        .nav {
            position: absolute;
            top: 30px;
            right: 30px;
            display: flex;
            gap: 80px;
            align-items: center;
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
        }
        .social-icons {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .social-icons img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <a href="{{ route('home') }}" div class="logo">BONSAIMART</a>
    <div class="nav">
        <a href="{{ route('about.page') }}">About</a>
        <a href="{{ route('product.page') }}">Market</a>
        <a href="#">Contact</a>
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="container">
        <div class="about-content">
            <img src="{{ asset('images/bonsai-about.jpg') }}" alt="Bonsai Image">
            <div class="text-content">
                <h1>ABOUT US</h1>
                <p>BonsaiMart is the ultimate digital destination for bonsai lovers, both beginners and experts. The website offers a complete product catalog, ranging from ready-to-display bonsai seedlings and trees to high-quality tools and accessories.</p>
                <p>With an active community and responsive customer support, BonsaiOnline is the ideal place to learn, share and fulfill all your bonsai needs.</p>
                <div class="social-icons">
                    <a href="#"><img src="/images/x.png" alt="Twitter X Logo"></a>
                    <a href="#"><img src="/images/facebook.png" alt="Facebook Logo"></a>
                    <a href="#"><img src="/images/instagram.png" alt="Instagram Logo"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
