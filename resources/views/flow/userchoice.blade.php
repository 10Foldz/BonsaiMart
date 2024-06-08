<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Choice</title>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Baskervville', serif;
            background: url('/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }
        .container {
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            width: 600px;
            height: 400px;
            border-radius: 10px;
            position: relative;
            padding: 20px;
        }
        .container .logo-wrapper {
            margin-bottom: 20px;
        }
        .container h1 {
            margin-bottom: 40px;
            margin-top: 0;
        }
        .container .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .container .buttons a {
            display: inline-block;
            padding: 20px 40px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            text-align: center;
            width: 120px;
        }
        .container .buttons a:hover {
            background-color: #555;
        }
        .container .signout {
            margin-top: 20px;
            font-size: 1em;
        }
        .container .signout form {
            display: inline;
        }
        .container .signout button {
            background: none;
            border: none;
            color: #0070E0;
            text-decoration: underline;
            cursor: pointer;
            transition: color 0.3s ease;
            font-size: 1em;
            font-family: 'Baskervville', serif;
        }
        .container .signout button:hover {
            color: #bbb;
        }
        .social-logos {
            position: absolute;
            bottom: 20px;
            left: 20px;
            display: flex;
            gap: 20px;
        }
        .social-logos img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-wrapper">
            <img src="/images/person.png" alt="Person Logo" class="person-logo">
        </div>
        <h1>Login as:</h1>
        <div class="buttons">
            <a href="{{ route('login') }}">Seller</a>
            <a href="{{ route('login') }}">Customer</a>
        </div>
        <div class="signout">
            <span>Not you? <a href="{{ route('logout') }}">Sign out</a></span>
        </div>
    </div>
    <div class="social-logos">
        <a href="#"><img src="/images/phone.png" alt="Phone Logo"></a>
        <a href="#"><img src="/images/twitter.png" alt="Twitter Logo"></a>
        <a href="#"><img src="/images/facebook.png" alt="Facebook Logo"></a>
        <a href="#"><img src="/images/instagram.png" alt="Instagram Logo"></a>
    </div>
</body>
</html>
