<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            color: white;
            background: url('/images/background3.jpg') no-repeat center center fixed;
            overflow-x: hidden;
            margin: 0;
            font-family: 'Baskervville', serif;
        }
        h1 {
            text-align: center;
            width: 100%;
            margin-bottom: 30px;
            font-family: 'Baskervville', serif;
        }
        .btn-custom {
            background-color: #2d572c;
            border-color: #2d572c;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-family: 'Baskervville', serif;
        }
        .btn-custom:hover {
            background-color: #24481f;
            border-color: #24481f;
            text-decoration: underline;
        }
        .nav {
            position: absolute;
            top: 30px;
            right: 30px;
            display: flex;
            gap: 80px;
            align-items: center;
            font-family: 'Baskervville', serif;
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
            z-index: 1;
            font-family: 'Baskervville', serif;
        }
        .back-button {
            position: absolute;
            bottom: 30px;
            left: 30px;
            z-index: 1;
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
        .dropdown {
            margin-top: 20px;
            display: none;
            position: absolute;
            top: 60px;
            right: 0;
            background-color: #1e1e1e;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            transition: all 0.3s ease-in-out;
            border-radius: 10px;
            overflow: hidden;
        }
        .dropdown a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }
        .dropdown a:hover {
            background-color: #333;
        }
        .show {
            display: block;
        }
        .content-container {
            position: absolute;
            top: 100px; /* Adjust based on your fixed header height */
            bottom: 0px; /* Adjust based on your fixed footer height */
            left: 0;
            right: 0;
            overflow-y: auto;
            padding: 20px;
        }
        .content {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 50px;
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
        .card-footer .btn-group {
            display: flex;
            gap: 5px;
        }
    </style>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="add-product-container">
        <a href="{{ route('home') }}" div class="logo">BONSAIMART</a>
        <div class="back-button">
            <a href="{{ route('seller.view') }}">← Back</a>
        </div>
        <div class="nav">
            <a href="{{ route('about.page') }}">About</a>
            <a href="{{ route('product.page') }}">Market</a>
            <a href="#">Contact</a>
            <div class="hamburger" onclick="toggleDropdown()">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="content-container">
            <div class="content">
                @if ($products->isEmpty())
                    <h2 class="empty-products-message">No products listed yet</h2>
                @else
                    @foreach ($products as $product)
                        <div class="card">
                            <div class="card-header m-auto">
                                <img src="{{ asset('images/' . $product->product_image) }}" alt="{{ $product->product_name }}" style="width: 225px; height:225px;">
                            </div>
                            <div class="card-body">
                                <p class="m-0 text-justify" style="font-size:25px;">{{ $product->product_name }}</p>
                                <p class="m-0" style="color: #B6B4B4; font-size: 13px;">{{ $product->product_description }}</p>
                            </div>
                            <div class="card-footer d-flex flex-row justify-content-between align-items-center">
                                <p class="m-0">Rp.</p>
                                <p class="m-0">{{ number_format($product->price, 0, ',', '.') }}</p>
                                <div class="btn-group">
                                    <a href="{{ route('edit.product', $product->id) }}" class="btn btn-outline-warning" style="font-size:15px">
                                        <i class="fa-solid fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('delete.product', $product->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" style="font-size:15px">
                                            <i class="fa-solid fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="dropdown" id="dropdown">
            <a href="#">My products</a>
        </div>
    </div>
    <script>
        function previewFile() {
            const preview = document.getElementById('preview-image');
            const file    = document.querySelector('input[type=file]').files[0];
            const reader  = new FileReader();

            reader.addEventListener("load", function () {
                preview.src = reader.result;
                preview.style.display = 'block';
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        function toggleDropdown() {
            document.getElementById("dropdown").classList.toggle("show");
        }
        window.onclick = function(event) {
            if (!event.target.matches('.hamburger') && !event.target.matches('.hamburger div')) {
                var dropdowns = document.getElementsByClassName("dropdown");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
        function formatCurrency(amount) {
            return amount.toLocaleString('id-ID');
        }
    </script>
</body>
</html>
