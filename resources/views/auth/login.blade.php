<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .login-form {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 500px;
            color: #fff;
        }
        .login-form h2 {
            text-align: center;
            margin-top: 0px;
            margin-bottom: 30px;
            color: #6ab04c;
            font-family: 'Bellota', sans-serif;
            font-size: 2rem;
        }
        .login-form input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #294e2e;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            font-family: 'Baskervville', sans-serif;
            transition: background-color 0.3s ease;
        }
        .login-form button:hover {
            background-color: #3b6a45;
            cursor: pointer;
        }
        .login-form .or {
            text-align: center;
            margin: 10px 0;
            position: relative;
            color: #828282;
            font-family: 'Inter', sans-serif;
        }
        .login-form .or::before,
        .login-form .or::after {
            content: '';
            height: 1px;
            width: 40%;
            background: #828282;
            display: inline-block;
            position: absolute;
            top: 50%;
        }
        .login-form .or::before {
            left: 0;
        }
        .login-form .or::after {
            right: 0;
        }
        .login-form .google-button {
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
        .login-form .google-button:hover {
            background-color: #fff;
        }
        .login-form .google-button img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
        .login-form .register-link {
            text-align: center;
            margin-top: 10px;
            color: #828282;
            font-family: 'Inter', sans-serif;
        }
        .login-form .register-link a {
            color: #0070E0;
            text-decoration: underline;
            transition: color 0.3s ease
        }
        .login-form .register-link a:hover {
            color: #bbb;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <div class="or">or</div>
            <button type="button" class="google-button">
                <img src="{{ asset('images/google.png') }}" alt="Google Icon">
                Sign in with Google
            </button>
            <div class="register-link">Don't have an account? <a href="{{ route('register') }}">Register</a></div>
        </form>
    </div>
    <script>
        @if ($errors->any())
            alert("Invalid credentials. Please try again.");
        @endif
    </script>
</body>
</html>
