
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page - Nestara Coffee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif; /* Font modern sans-serif */
            background-color: #fafafa;
            padding-top: 80px;
        }
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

        /* Category Title */
        .category-title {
            text-align: center;
            font-size: 1.5em;
            color: #2e7d32; /* Dark Green */
            margin: 10px 0 10px;
            font-weight: bold;
        }

        /* Container untuk list produk */
        .container {
            display: grid; /* Menggunakan grid untuk penataan produk */
            grid-template-columns: repeat(3, 1fr); /* Menampilkan 3 kolom */
            gap: 20px; /* Jarak antar item produk */
            padding: 20px;
        }

        /* Responsif untuk perangkat kecil */
        @media (max-width: 1024px) {
            .container {
                grid-template-columns: repeat(2, 1fr); /* 2 kolom pada layar menengah */
            }
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr; /* 1 kolom pada perangkat kecil */
            }
        }

        /* Card Produk Horizontal */
        .product {
            display: flex; /* Atur card dalam bentuk horizontal */
            align-items: center;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            border-radius: 10px;
            gap: 15px; /* Jarak antara elemen gambar dan informasi */
        }

        /* Gambar produk */
        .product img {
            width: 80px; /* Ukuran gambar lebih kecil */
            height: 80px;
            object-fit: cover; /* Menyesuaikan gambar */
            border-radius: 10px;
        }

        /* Info produk */
        .product-info {
            flex-grow: 1; /* Biarkan info mengambil ruang tersisa */
        }

        .product h3 {
            font-size: 1rem; /* Ukuran font lebih kecil */
            color: #333;
            margin: 0 0 5px;
        }

        .product .price {
            font-size: 1.1rem; /* Ukuran harga sedikit lebih besar */
            font-weight: bold;
            color: #388e3c;
            margin: 5px 0;
        }

        .product .btn-buy {
            align-self: flex-end;
            margin-top: 10px;
            background-color: #25d366; /* Hijau ala WhatsApp */
        }

        /* Responsif untuk perangkat kecil */
        @media (max-width: 768px) {
            .product {
                flex-direction: column; /* Produk vertikal */
                align-items: center;
            }

            .product img {
                width: 100px;
                height: 100px;
            }
        }

        /* Add to Cart Button */
        .btn-buy {
            background-color: #388e3c;
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
            padding: 7px 10px;
            font-size: 1em;
            border-radius: 20px;
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

        #toast {
            position: fixed;
            top: 50%; /* Menempatkan toast di tengah layar secara vertikal */
            left: 50%; /* Menempatkan toast di tengah layar secara horizontal */
            transform: translate(-50%, -50%); /* Menyesuaikan posisi agar tepat di tengah */
            background-color: #388e3c; /* Warna latar belakang hijau */
            color: white; /* Warna teks putih */
            padding: 15px 30px; /* Ukuran padding agar lebih terlihat jelas */
            border-radius: 8px; /* Sudut melengkung */
            display: none; /* Awalnya disembunyikan */
            z-index: 1000;
            font-size: 18px; /* Ukuran font lebih besar */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Efek bayangan */
            font-weight: bold; /* Teks tebal */
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
                <!-- Ikon keranjang di navbar -->
                <a href="{{ route('cart') }}" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i> <!-- Ikon Keranjang -->
                    <span id="cart-count" class="cart-count">0</span> <!-- Menampilkan jumlah produk di keranjang -->
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
                    <div class="product-info">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <p class="price">Rp {{ number_format($product->price, 2) }}</p>
                    </div>
                    <!-- Tombol beli -->
                    <button class="btn-buy" onclick="addToCart('{{ $product->id }}', '{{ $product->name }}', {{ $product->price }}, 1)">+</button>
                </div>
                @endif
            @endforeach
        </div>
    @endforeach

    <!-- Toast Notification -->
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
    <!-- JavaScript -->
    <script>
        // Fungsi untuk menambah produk ke keranjang
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
                    productId: productId,
                    productName: productName,
                    productPrice: productPrice,
                    quantity: quantity,
                    image_url: imageUrl // Tambahkan properti image_url
                    productId,
                    productName,
                    productPrice,
                    quantity
                });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            showToast();
        }

        // Fungsi untuk menampilkan toast
        function showToast() {
            const toast = document.getElementById('toast');
            toast.style.display = 'block'; // Tampilkan toast

            // Sembunyikan toast setelah 3 detik
            setTimeout(() => {
                toast.style.display = 'none';
            }, 3000);
        }

        // Update jumlah produk di ikon keranjang
        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartCount = cart.reduce((total, item) => total + item.quantity, 0);
            document.getElementById('cart-count').textContent = cartCount;
        }

        // Memanggil updateCartCount saat halaman dimuat
        window.onload = updateCartCount;
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
