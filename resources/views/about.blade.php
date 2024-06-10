<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&display=swap" rel="stylesheet">
    <style>
        body {
            color: white;
            background: url('/images/background3.jpg') center center fixed;
            font-family: 'Baskervville', sans-serif;
            overflow-x: hidden;
            margin: 0;
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
        .title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Baskervville', serif;
            font-size: 5em;
            text-align: center;
        }
        .description {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            font-size: 1.2em;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="back-button">
        <a href="{{ route('seller.view') }}">← Back</a>
    </div>

    <div class="title">
        <h1>Bonsai<br>Mart</h1>
    </div>
    <div class="description">
        <p>BonsaiMart is the ultimate digital destination for bonsai lovers, both beginners and experts. The website offers a complete product catalog, ranging from ready-to-display bonsai seedlings and trees to high-quality tools and accessories. With an active community and responsive customer support, BonsaiOnline is the ideal place to learn, share and fulfill all your bonsai needs.</p>
    </div>

</body>
</html>
