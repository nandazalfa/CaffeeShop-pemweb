<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page - Hanila Brew</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fafafa;
            padding-top: 80px;
        }
        
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

        .category-title {
            text-align: center;
            font-size: 1.5em;
            color: #2e7d32;
            margin: 10px 0 10px;
            font-weight: bold;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 20px;
        }

        .product {
            display: flex;
            align-items: stretch;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            border-radius: 10px;
            gap: 15px;
            cursor: pointer;
            transition: transform 0.2s;
            height: auto;
        }

        .product:hover {
            transform: translateY(-2px);
        }

        .product img {
            width: 120px;
            height: 120px;
            object-fit: contain;
            border-radius: 10px;
            background-color: #f5f5f5;
        }

        .product-info {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product h3 {
            font-size: 1rem;
            color: #333;
            margin: 0 0 5px;
        }

        .product .description {
            font-size: 0.9rem;
            color: #666;
            margin: 5px 0;
        }

        .product .price {
            font-size: 1.1rem;
            font-weight: bold;
            color: #388e3c;
            margin: 5px 0;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2000;
            overflow-y: auto;
        }

        .modal-content {
            position: relative;
            background-color: white;
            margin: 20px auto;
            padding: 0;
            width: 90%;
            max-width: 500px;
            border-radius: 10px;
            overflow: hidden;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
        }

        .modal-header h2 {
            margin: 0;
            font-size: 1.2rem;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #666;
            padding: 0;
            line-height: 1;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-image-container {
            width: 100%;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .modal-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 20px 0;
            justify-content: center;
        }

        .quantity-btn {
            background-color: #f0f0f0;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .quantity-btn:hover {
            background-color: #e0e0e0;
        }

        .quantity-value {
            font-size: 1.1rem;
            font-weight: 500;
        }

        .continue-btn {
            width: 100%;
            padding: 12px;
            background-color: #25d366;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .continue-btn:hover {
            background-color: #1da856;
        }

        #toast {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #388e3c;
            color: white;
            padding: 15px 30px;
            border-radius: 8px;
            display: none;
            z-index: 3000;
            font-size: 18px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            font-weight: bold;
        }

        .cart-count {
            background-color: #388e3c;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 0.8rem;
            margin-left: 5px;
        }

        @media (max-width: 1024px) {
            .container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }

            .product {
                flex-direction: row;
                align-items: center;
            }

            .product img {
                width: 100px;
                height: 100px;
            }

            .modal-image-container {
                height: 250px;
            }

            .nav-content {
                padding: 0 1rem;
            }

            .nav-links {
                gap: 1rem;
            }

            .nav-links a {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <img src="/api/placeholder/120/40" alt="Logo" class="logo">
            <div class="nav-links">
                <a href="{{ url('/') }}">Tentang</a>
                <a href="{{ url('/product') }}">Menu</a>
                <a href="#kolaborasi">Kolaborasi</a>
                <a href="#store">Store</a>
                <a href="#news">News</a>
                <a href="{{ url('/karir') }}">Karir</a>
                <a href="#hubungi">Hubungi Kami</a>
                <div class="language-selector">
                    <span>🇮🇩</span>
                    <span>ID</span>
                </div>
                <a href="{{ route('cart') }}" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-count" class="cart-count">0</span>
                </a>
            </div>
        </div>
    </nav>

    @foreach ($categories as $category)
        <h2 class="category-title">{{ ucfirst($category) }}</h2>
        <div class="container">
            @foreach ($products as $product)
                @if ($product->category == $category)
                <div class="product" onclick="openModal('{{ $product->id }}', '{{ $product->name }}', {{ $product->price }}, '{{ $product->description }}', '{{ $product->image_url }}')">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                    <div class="product-info">
                        <h3>{{ $product->name }}</h3>
                        <p class="description">{{ $product->description }}</p>
                        <p class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    @endforeach

    <div id="productModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Pilih Varian</h2>
                <button class="close-modal" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-image-container">
                    <img id="modalImage" src="" alt="Product Image" class="modal-image">
                </div>
                <h3 id="modalProductName"></h3>
                <p id="modalDescription"></p>
                <p id="modalPrice" class="price"></p>
                <div class="quantity-selector">
                    <button class="quantity-btn" onclick="decrementQuantity()">-</button>
                    <span id="quantity" class="quantity-value">1</span>
                    <button class="quantity-btn" onclick="incrementQuantity()">+</button>
                </div>
                <button class="continue-btn" onclick="addToCartAndNavigate()">Lanjutkan ke Keranjang</button>
            </div>
        </div>
    </div>

    <div id="toast">
        Produk berhasil ditambahkan ke keranjang!
    </div>

    <script>
        let currentProduct = null;
        let currentQuantity = 1;

        function openModal(productId, name, price, description, imageUrl) {
            currentProduct = {
                id: productId,
                name: name,
                price: price,
                description: description,
                imageUrl: imageUrl
            };
            currentQuantity = 1;

            document.getElementById('modalImage').src = imageUrl;
            document.getElementById('modalProductName').textContent = name;
            document.getElementById('modalPrice').textContent = 'Rp ' + price.toLocaleString('id-ID');
            document.getElementById('modalDescription').textContent = description;
            document.getElementById('quantity').textContent = currentQuantity;
            document.getElementById('productModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('productModal').style.display = 'none';
            document.body.style.overflow = 'auto';
            currentProduct = null;
            currentQuantity = 1;
        }

        function incrementQuantity() {
            currentQuantity++;
            document.getElementById('quantity').textContent = currentQuantity;
        }

        function decrementQuantity() {
            if (currentQuantity > 1) {
                currentQuantity--;
                document.getElementById('quantity').textContent = currentQuantity;
            }
        }

        function addToCartAndNavigate() {
            if (currentProduct) {
                addToCart(
                    currentProduct.id,
                    currentProduct.name,
                    currentProduct.price,
                    currentQuantity
                );
                // Navigate to cart page after adding to cart
                window.location.href = '{{ route("cart") }}';
            }
        }

        function addToCart(productId, productName, productPrice, quantity) {
            if (quantity <= 0) {
                alert('Pilih jumlah produk yang valid.');
                return;
            }

            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const existingProduct = cart.find(item => item.productId === productId);

            if (existingProduct) {
                existingProduct.quantity += quantity;
            } else {
                cart.push({
                    productId,
                    productName,
                    productPrice,
                    quantity
                });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
        }

        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartCount = cart.reduce((total, item) => total + item.quantity, 0);
            document.getElementById('cart-count').textContent = cartCount;
        }

        window.onclick = function(event) {
            const modal = document.getElementById('productModal');
            if (event.target === modal) {
                closeModal();
            }
        };

        window.onload = updateCartCount;
    </script>
</body>
</html>