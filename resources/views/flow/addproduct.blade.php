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
            background: url('/images/background2.jpg') no-repeat center center fixed;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
            margin: 0;
        }
        .add-product-container {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            margin-top: 100px;
            display: flex;
            flex-wrap: wrap;
        }
        h1 {
            text-align: center;
            width: 100%;
            margin-bottom: 30px;
            font-family: 'Baskervville', serif;
        }
        .form-container {
            flex: 1;
            padding-right: 20px;
        }
        .preview-container {
            width: 40%;
            text-align: center;
        }
        .preview-container img {
            margin-top: 30px;
            max-width: 100%;
            max-height: 300px;
            display: none;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .form-group {
            width: 100%;
            font-family: 'Baskervville', serif;
        }
        .form-control {
            color: black;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-family: 'Arial', serif;
        }
        .form-control::placeholder {
            color: #ccc;
        }
        .input-group-prepend {
            background-color: #222;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
        }
        .input-group-text {
            border: none;
            color: black;
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
        <h1>Add Product</h1>
        <div class="form-container">
            <form action="{{ route('add.product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="product_name">Product name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" required>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_description">Product description</label>
                    <textarea class="form-control" id="product_description" name="product_description" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="product_image">Product Image</label>
                    <input type="file" class="form-control-file" id="product_image" name="product_image" accept="image/*" onchange="previewFile()" required>
                </div>
                <button type="submit" class="btn btn-custom">Add product</button>
            </form>
        </div>
        <div class="preview-container">
            <img id="preview-image">
        </div>
        <div class="back-button">
            <a href="{{ route('seller.view') }}">← Back</a>
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
    </script>
</body>
</html>
