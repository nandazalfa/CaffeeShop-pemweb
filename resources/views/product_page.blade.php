<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page - Hanila Brew</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
/* Navbar */
.navbar {
            background-color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            height: 40px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: black;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
        }

        .language-selector {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-left: 1rem;
        }

        .download-btn {
            background-color: white;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .download-btn:hover {
            background-color: var(--primary-color);
            color: white;
        }

        /* Category Title */
        .category-title {
            text-align: center;
            font-size: 1.5em;
            color: #2e7d32; /* Dark Green */
            margin: 100px 0 10px;
            font-weight: bold;
        }

        /* Container and Products */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
        }

        .product {
            background-color: #e8f5e9; /* Light Green Background */
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
            color: #388e3c;
        }

        .product p {
            color: #424242;
            margin-bottom: 10px;
            font-size: 0.9em;
        }

        .product .price {
            font-size: 1.3em;
            color: #388e3c;
            font-weight: bold;
        }

        .product .discount {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #388e3c;
            color: white;
            padding: 5px 10px;
            font-size: 0.9em;
            border-radius: 5px;
        }

        /* Quantity Controls */
        .quantity-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        .quantity-controls button {
            background-color: #388e3c;
            color: white;
            border: none;
            padding: 5px 10px;
            font-size: 1.2em;
            cursor: pointer;
            border-radius: 5px;
            width: 30px;
            height: 30px;
        }

        .quantity-controls input {
            width: 40px;
            text-align: center;
            margin: 0 10px;
            font-size: 1.2em;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Add to Cart Button */
        .btn-buy {
            background-color: #388e3c;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 15px;
        }

        .btn-buy:hover {
            background-color: #2e7d32;
        }

        /* Footer */
        .footer {
            background-color: #388e3c;
            color: white;
            text-align: center;
            padding: 15px 0;
        }

        /* WhatsApp Chat Button */
        .whatsapp-chat {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: white;
            border-radius: 50%;
            padding: 15px;
            font-size: 1.5em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .whatsapp-chat a {
            color: white;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .navbar .navbar-menu {
                flex-direction: column;
                align-items: center;
                margin-top: 10px;
            }

            .navbar .navbar-left {
                font-size: 1.4em;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <img src="/api/placeholder/120/40" alt="Nanya & Co." class="logo">
            <div class="nav-links">
                <a href="#tentang">Tentang</a>
                <a href="#menu">Menu</a>
                <a href="#kolaborasi">Kolaborasi</a>
                <a href="#store">Store</a>
                <a href="#news">News</a>
                <a href="#karir">Karir</a>
                <a href="#hubungi">Hubungi Kami</a>
                <div class="language-selector">
                    <span>🇮🇩</span>
                    <span>ID</span>
                </div>
                <a href="#download" class="download-btn">Download App</a>
                <a href="#cart" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i> <!-- Ikon Keranjang -->
                </a>
            </div>
        </div>
    </nav>

    <!-- Categories and Products -->
    @foreach ($categories as $category)
        <h2 class="category-title">{{ ucfirst($category) }}</h2>
        <div class="container">
            @foreach ($products as $product)
                @if ($product->category == $category)
                    <div class="product">
                        <img src="{{ $product->image_url }}" alt="Product Image">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <p class="price">Rp {{ number_format($product->price, 2) }}</p>

                        <!-- Quantity Controls -->
                        <div class="quantity-controls">
                            <button onclick="changeQuantity('decrease', '{{ $product->id }}')">-</button>
                            <input type="text" id="quantity-{{ $product->id }}" value="0" readonly>
                            <button onclick="changeQuantity('increase', '{{ $product->id }}')">+</button>
                        </div>

                        <!-- Add to Cart Button -->
                        <button class="btn-buy">Tambah</button>
                    </div>
                @endif
            @endforeach
        </div>
    @endforeach

    <div class="footer">
        <p>&copy; 2024 Hanila Brew | All Rights Reserved</p>
    </div>

    <div class="whatsapp-chat">
        <a href="https://wa.me/6287782665046" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- JavaScript -->
    <script>
        function changeQuantity(action, productId) {
            const quantityInput = document.getElementById('quantity-' + productId);
            let currentQuantity = parseInt(quantityInput.value);

            // Increase or decrease based on action
            if (action === 'increase') {
                currentQuantity++;
            } else if (action === 'decrease' && currentQuantity > 0) {
                currentQuantity--;
            }

            // Set the updated quantity in the input field
            quantityInput.value = currentQuantity;
        }
    </script>
</body>
</html>
