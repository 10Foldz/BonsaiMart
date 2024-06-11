<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
        .content-container {
            margin-top: 20px;
        }
        .cart-item {
            background-color: #242428bd;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
        }
        .cart-item img {
            width: 100px;
            height: 100px;
            border-radius: 10px;
        }
        .cart-item .product-info {
            flex-grow: 1;
            padding-left: 20px;
        }
        .cart-item .product-info p {
            margin: 0;
        }
        .cart-item .quantity {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .cart-item .quantity button {
            background-color: #333;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .cart-item .quantity button:hover {
            background-color: #555;
        }
        .cart-item .quantity input {
            width: 50px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .cart-item .delete-button {
            margin-left: 5px;
        }
        .checkout-container {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border-radius: 15px;
            box-shadow: 3px 3px 10px #00000070;
        }
        .checkout-container .total-price {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .checkout-container .btn-checkout {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .checkout-container .btn-checkout:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="back-button">
        <a href="{{ route('product.page') }}">← Back</a>
    </div>
    <div class="container content-container">
        <h1>Your Cart</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($cartItems->isEmpty())
            <p>Your cart is empty</p>
        @else
            @foreach ($cartItems as $item)
                <div class="cart-item d-flex align-items-center">
                    <img src="{{ asset('images/' . $item->product->product_image) }}" alt="{{ $item->product->product_name }}">
                    <div class="product-info">
                        <p><strong>{{ $item->product->product_name }}</strong></p>
                        <p>{{ $item->product->product_description }}</p>
                        <p>Rp. <span class="item-price" data-price="{{ $item->product->price }}">{{ $item->product->price * $item->quantity }}</span></p>
                    </div>
                    <div class="quantity">
                        <button class="btn-decrease" data-id="{{ $item->id }}">-</button>
                        <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" data-id="{{ $item->id }}" readonly>
                        <button class="btn-increase" data-id="{{ $item->id }}">+</button>
                    </div>
                    <form action="{{ route('remove.from.cart', $item->id) }}" method="POST" class="delete-button">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>

    <div class="checkout-container">
        <span class="total-price">Total: Rp. <span id="total-price">0</span></span>
        <button class="btn-checkout">Checkout</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const decreaseButtons = document.querySelectorAll('.btn-decrease');
            const increaseButtons = document.querySelectorAll('.btn-increase');
            const quantityInputs = document.querySelectorAll('.quantity input');
            const totalPriceElement = document.getElementById('total-price');

            function updateTotalPrice() {
                let total = 0;
                document.querySelectorAll('.item-price').forEach(priceSpan => {
                    total += parseFloat(priceSpan.textContent);
                });
                totalPriceElement.textContent = total;
            }

            function updateCart(id, quantity) {
                fetch(`/update-cart/${id}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ quantity })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const priceSpan = document.querySelector(`input[data-id="${id}"]`).closest('.cart-item').querySelector('.item-price');
                        const price = priceSpan.getAttribute('data-price');
                        priceSpan.textContent = price * quantity;
                        updateTotalPrice();
                    }
                });
            }

            decreaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    const input = document.querySelector(`input[data-id="${id}"]`);
                    if (input.value > 1) {
                        input.value--;
                        const quantity = parseInt(input.value);
                        const priceSpan = input.closest('.cart-item').querySelector('.item-price');
                        const price = parseFloat(priceSpan.getAttribute('data-price'));
                        priceSpan.textContent = price * quantity;
                        updateTotalPrice();
                        updateCart(id, quantity);
                    }
                });
            });

            increaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    const input = document.querySelector(`input[data-id="${id}"]`);
                    input.value++;
                    const quantity = parseInt(input.value);
                    const priceSpan = input.closest('.cart-item').querySelector('.item-price');
                    const price = parseFloat(priceSpan.getAttribute('data-price'));
                    priceSpan.textContent = price * quantity;
                    updateTotalPrice();
                    updateCart(id, quantity);
                });
            });

            updateTotalPrice();
        });
    </script>
</body>
</html>
