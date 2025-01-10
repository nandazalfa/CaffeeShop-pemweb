
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
            height: 90px;
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

        .cart-panel {
            position: fixed;
            top: 0;
            right: -400px;
            width: 400px;
            height: 100vh;
            background-color: white;
            box-shadow: -2px 0 10px rgba(0,0,0,0.1);
            transition: right 0.3s ease-in-out;
            z-index: 2000;
            display: flex;
            flex-direction: column;
            transition: right 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .cart-panel.open {
            right: 0;
        }

        .cart-header {
            padding: 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-header h2 {
            margin: 0;
            font-size: 1.2rem;
        }

        .cart-items {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
        }

        .cart-item {
            display: flex;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-name {
            font-weight: 500;
            margin-bottom: 5px;
        }

        .cart-item-price {
            color: #388e3c;
            font-weight: 500;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        .cart-summary {
            padding: 20px;
            border-top: 1px solid #eee;
            background-color: #f9f9f9;
        }

        .cart-total {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .checkout-btn {
            width: 100%;
            padding: 12px;
            background-color: #25d366;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
        }

        .checkout-btn:hover {
            background-color: #1da856;
        }

        .delivery-info {
            padding: 10px 20px;
            background-color: #f5f5f5;
            font-size: 0.9rem;
            color: #666;
        }

        @media (max-width: 768px) {
            .cart-panel {
                width: 100%;
                right: -100%;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <img src="https://i.pinimg.com/736x/a1/23/8f/a1238f01e1eba65044714a350d8c2567.jpg" alt="Logo" class="logo">
            <div class="nav-links">
                <a href="{{ url('/tentang') }}">About</a>
                <a href="{{ url('/product') }}">Menu</a>
                <a href="{{ url('/kolaborasi') }}">Collaboration</a>
                <a href="{{ url('/karir') }}">Career</a>
                <a href="{{ url('/hubungii') }}">Contact Us</a>
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

    <div class="cart-panel" id="cartPanel">
        <div class="cart-header">
            <h2>Keranjang</h2>
            <button class="close-modal" onclick="closeCart()">&times;</button>
        </div>
        <div class="cart-items" id="cartItems">
            <!-- Cart items will be dynamically added here -->
        </div>
        <div class="cart-summary">
            <div class="cart-total">
                <span>Total Harga</span>
                <span id="cartTotal">Rp0</span>
            </div>
            <button class="checkout-btn" onclick="checkout()">Cek Pesanan</button>
        </div>
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
                    currentQuantity,
                    currentProduct.image_url // Pastikan mengambil image_url dari currentProduct
                );
                closeModal(); // Tutup modal "Pilih Varian"
                toggleCart(); // Membuka panel keranjang
            }
        }



        function toggleCart() {
            const cartPanel = document.getElementById('cartPanel');
            cartPanel.classList.toggle('open');
            if (cartPanel.classList.contains('open')) {
                updateCartDisplay();
            }
        }

        function closeCart() {
            document.getElementById('cartPanel').classList.remove('open');
        }

        function updateCartDisplay() {
        const cartItems = document.getElementById('cartItems');
        const cartTotal = document.getElementById('cartTotal');
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        
        cartItems.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const itemTotal = item.productPrice * item.quantity;
            total += itemTotal;

            cartItems.innerHTML += `
                <div class="cart-item">
                    <div class="cart-item-details">
                        <div class="cart-item-name">${item.productName}</div>
                        <div class="cart-item-price">Rp${item.productPrice.toLocaleString('id-ID')}</div>
                        <div class="cart-item-quantity">
                            <button onclick="updateCartItemQuantity('${item.productId}', ${item.quantity - 1})">-</button>
                            <span>${item.quantity}</span>
                            <button onclick="updateCartItemQuantity('${item.productId}', ${item.quantity + 1})">+</button>
                        </div>
                    </div>
                </div>
            `;
        });

        cartTotal.textContent = `Rp${total.toLocaleString('id-ID')}`;
    }


        function updateCartItemQuantity(productId, newQuantity) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (newQuantity <= 0) {
                const newCart = cart.filter(item => item.productId !== productId);
                localStorage.setItem('cart', JSON.stringify(newCart));
            } else {
                const item = cart.find(item => item.productId === productId);
                if (item) {
                    item.quantity = newQuantity;
                    localStorage.setItem('cart', JSON.stringify(cart));
                }
            }
            updateCartDisplay();
            updateCartCount();
        }

        function checkout() {
            // Implement checkout logic here
            alert('Memproses pesanan...');
            window.location.href = "/checkout";
        }

        // Update click handler for cart icon
        document.querySelector('.cart-icon').onclick = function(e) {
            e.preventDefault();
            toggleCart();
        };

        function addToCart(productId, productName, productPrice, quantity, imageUrl) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Cek apakah item sudah ada di keranjang
            const existingItem = cart.find(item => item.productId === productId);
            if (existingItem) {
                existingItem.quantity += quantity;  // Jika sudah ada, tambahkan jumlahnya
            } else {
                // Jika tidak ada, buat item baru
                cart.push({
                    productId: productId,
                    productName: productName,
                    productPrice: productPrice,
                    quantity: quantity,
                    image_url: imageUrl // Tambahkan properti image_url
                });
            }

            // Simpan kembali ke localStorage
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
        }


        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Menghitung jumlah total item dalam keranjang
            const cartCount = cart.reduce((sum, item) => sum + item.quantity, 0);

            // Menampilkan jumlah total item pada ikon keranjang
            document.getElementById('cart-count').textContent = cartCount;
        }
        window.onload = updateCartCount;
    </script>
</body>
</html>