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
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background-color: #333;
            color: #f5f5f5;
        }
        .login-container {
            display: flex;
            flex: 1;
        }
        .login-form {
            background-color: #1b1b1b;
            padding: 2rem;
            width: 30%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .login-form h1 {
            margin-bottom: 1.5rem;
            color: #88a364;
            font-family: 'Bellota', sans-serif;
        }
        .login-form label {
            display: block;
            margin-bottom: 0.5rem;
        }
        .login-form input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #444;
            border-radius: 4px;
            background-color: #222;
            color: #f5f5f5;
        }
        .button-container {
            display: flex;
            justify-content: center;
        }
        .login-form button {
            padding: 0.75rem 1.5rem;
            background-color: #294e2e;
            border: none;
            border-radius: 4px;
            color: #f5f5f5;
            cursor: pointer;
        }
        .login-form button:hover {
            background-color: #3b6a45;
        }
        .register-link {
            margin-top: 1rem;
            color: #828282;
            display: flex;
            justify-content: center;
            font-family: 'Inter', sans-serif;
        }
        .register-link a {
            color: #0070E0;
            text-decoration: none;
            font-family: 'Inter', sans-serif;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
        .info-section {
            background-image: url('/images/background.jpg'); /* Ensure this path is correct */
            background-size: cover;
            background-position: center;
            width: 70%;
            position: relative;
            display: flex;
            justify-content: flex-start;
            align-items: flex-end;
            padding: 2rem;
        }
        .info-section-content {
            text-align: left;
            max-width: 1000px;
        }
        .info-section h2 {
            margin-bottom: 1rem;
            color: #f5f5f5;
            font-family: 'Baskervville', sans-serif;
            font-size: 4rem;
        }
        .info-section p {
            color: #f5f5f5;
            font-family: 'Baskervville', sans-serif;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required autofocus class="wide">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required class="wide">
                </div>
                <div class="button-container">
                    <button type="submit">Login</button>
                </div>
            </form>
            <div class="register-link">
                <p>Don't have an account yet? <a href="{{ route('register') }}">Register</a></p>
            </div>
        </div>
        <div class="info-section">
            <div class="info-section-content">
                <h2>BonsaiMart</h2>
                <p>BonsaiMart is the ultimate digital destination for bonsai lovers, both beginners and experts. The website offers a complete product catalog, ranging from ready-to-display bonsai seedlings and trees to high-quality tools and accessories. With an active community and responsive customer support, BonsaiOnline is the ideal place to learn, share, and fulfill all your bonsai needs.</p>
            </div>
        </div>
    </div>
</body>
</html>
