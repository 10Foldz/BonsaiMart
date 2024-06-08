<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Bellota:wght@400;700&family=Baskervville&family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-form {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 500px;
            color: #fff;
        }
        .register-form h2 {
            text-align: center;
            margin-top: 0px;
            margin-bottom: 30px;
            color: #6ab04c;
            font-family: 'Bellota', sans-serif;
            font-size: 2rem;
        }
        .register-form input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        .register-form button {
            width: 100%;
            padding: 10px;
            background-color: #294e2e;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            font-family: 'Baskervville', sans-serif;
            transition: background-color 0.3s ease;
        }
        .register-form button:hover {
            background-color: #3b6a45;
        }
        .register-form .or {
            text-align: center;
            margin: 10px 0;
            position: relative;
            color: #828282;
            font-family: 'Inter', sans-serif;
        }
        .register-form .or::before,
        .register-form .or::after {
            content: '';
            height: 1px;
            width: 40%;
            background: #828282;
            display: inline-block;
            position: absolute;
            top: 50%;
        }
        .register-form .or::before {
            left: 0;
        }
        .register-form .or::after {
            right: 0;
        }
        .register-form .google-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            color: #444;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            width: 100%;
            font-family: 'Inter', sans-serif;
            transition: none;
        }
        .register-form .google-button:hover {
            background-color: #fff;
        }
        .register-form .google-button img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
        .register-form .login-link {
            text-align: center;
            margin-top: 10px;
            color: #828282;
            font-family: 'Inter', sans-serif;
        }
        .register-form .login-link a {
            color: #0070E0;
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="register-form">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" placeholder="Full Name" required autofocus>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
            <div class="or">or continue with</div>
            <button class="google-button">
                <img src="images/google.png" alt="Google">
                Google
            </button>
            <div class="login-link">Already have an account? <a href="{{ route('login') }}">Login</a></div>
        </div>
    </div>
</body>
</html>
