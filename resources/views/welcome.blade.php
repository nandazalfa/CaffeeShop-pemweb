<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caffe Shop - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff8e1; /* Light yellow background */
        }
        .navbar {
            background-color: #ff4081; /* Pink background */
            color: white;
            padding: 15px 0;
            text-align: center;
            font-weight: bold;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 1.1em;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 40px 20px;
        }
        .product {
            background-color: #f0f4c3; /* Light green background */
            padding: 20px;
            margin: 15px;
            border-radius: 10px;
            width: 220px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .product img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .product h3 {
            font-size: 1.2em;
            color: #6a1b9a; /* Purple color */
        }
        .product p {
            color: #424242; /* Dark grey */
            margin-bottom: 10px;
            font-size: 0.9em;
        }
        .product .price {
            font-size: 1.3em;
            color: #00bcd4; /* Orange color */
            font-weight: bold;
        }
        .product .discount {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #00bcd4; /* Cyan background */
            color: white;
            padding: 5px 10px;
            font-size: 0.9em;
            border-radius: 5px;
        }
        .btn-buy {
            background-color: #8e24aa; /* Purple button */
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-buy:hover {
            background-color: #7b1fa2; /* Darker purple on hover */
        }
        .footer {
            background-color: #00bcd4; /* Orange footer */
            color: white;
            text-align: center;
            padding: 15px 0;
        }
        .whatsapp-chat {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366; /* WhatsApp green */
            color: white;
            border-radius: 50%;
            padding: 15px;
            font-size: 1.5em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="/">Home</a>
        <a href="/products">Products</a>
        <a href="/about">About</a>
        <a href="https://wa.me/6287782665046">Contact</a>
    </div>

    <div class="container">
        @foreach ($products as $product)
            <div class="product">
                <div class="discount">25%</div>
                <img src="{{ $product->image_url }}" alt="Product Image">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p class="price">Rp {{ number_format($product->price, 2) }}</p>
                <button class="btn-buy">Buy Now</button>
            </div>
        @endforeach
    </div>

    <div class="footer">
        <p>&copy; 2024 Caffe Shop | All Rights Reserved</p>
    </div>

    <div class="whatsapp-chat">
        <a href="https://wa.me/6287782665046" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

</body>
</html>
