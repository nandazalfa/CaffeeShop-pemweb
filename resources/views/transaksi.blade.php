<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - Hanila Brew</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            padding-top: 80px;
            background-color: #f5f5f5;
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

        .cart-page {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .cart-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        @media (max-width: 768px) {
            .cart-container {
                grid-template-columns: 1fr;
            }
        }

        .customer-info, .payment-details, .order-summary {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #666;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .cart-item-content {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-btn {
            background: none;
            border: 1px solid #ddd;
            width: 24px;
            height: 24px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 16px;
            color: #666;
        }

        .product-image {
            width: 80px;         /* Sesuaikan ukuran gambar */
            height: 80px;        /* Atur tinggi gambar */
            object-fit: contain;  /* Agar gambar tidak terdistorsi */
        }

        .product-details {
            display: flex;
            flex-direction: column;
        }

        .product-name {
            font-weight: 500;
            color: #333;
            margin-bottom: 4px;
        }

        .product-price {
            color: #666;
            font-size: 14px;
        }

        .price-summary {
            margin-top: 20px;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-size: 14px;
            color: #666;
        }

        .price-row.total {
            font-weight: 600;
            font-size: 16px;
            color: #333;
            border-top: 1px solid #eee;
            padding-top: 15px;
            margin-top: 15px;
        }

        .checkout-btn {
            width: 100%;
            padding: 12px;
            background-color: #00A651;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: 500;
            margin-top: 20px;
            cursor: pointer;
        }

        .checkout-btn:hover {
            background-color: #008c44;
        }

        .error-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: 4px;
            display: none;
        }

        .quantity {
            min-width: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="/">
                <img src="/api/placeholder/120/40" alt="Logo" class="logo">
            </a>
            <div class="d-flex align-items-center nav-links">
                <a href="#tentang" class="nav-link">Tentang</a>
                <a href="{{ url('/product') }}" class="nav-link">Menu</a>
                <a href="#kolaborasi" class="nav-link">Kolaborasi</a>
                <a href="#store" class="nav-link">Store</a>
                <a href="#news" class="nav-link">News</a>
                <a href="{{ url('/karir') }}" class="nav-link">Karir</a>
                <a href="#hubungi" class="nav-link">Hubungi Kami</a>
                <div class="language-selector d-flex align-items-center ms-3">
                    <span>🇮🇩</span>
                    <span>ID</span>
                </div>
                <a href="{{ route('cart') }}" class="cart-icon ms-3">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-count" class="cart-count">0</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="cart-page">
        <div class="cart-container">
            <div class="left-column">
                <div class="customer-info mb-4">
                    <div class="section-title">Data Pembeli</div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" placeholder="Masukkan nama lengkap">
                        <div class="error-message" id="name-error">Nama harus diisi</div>
                    </div>
                    <div class="form-group">
                        <label for="phone">No. Telepon</label>
                        <input type="tel" id="phone" placeholder="Masukkan nomor telepon">
                        <div class="error-message" id="phone-error">Nomor telepon harus diisi</div>
                    </div>
                </div>

                <div class="payment-details">
                    <div class="section-title">Rincian Pembayaran</div>
                    <div class="form-group">
                        <select id="payment-method">
                            <option value="transfer">Transfer Bank</option>
                            <option value="ewallet">E-Wallet</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="order-summary">
                <div class="section-title">Ringkasan Pesanan</div>
                <div id="cart-items">
                    <!-- Cart items will be inserted here -->
                </div>

                <div class="price-summary">
                    <div class="price-row">
                        <span>Subtotal (Termasuk pajak)</span>
                        <span id="subtotal">Rp0</span>
                    </div>
                    <div class="price-row total">
                        <span>Total Harga</span>
                        <span id="total-price">Rp0</span>
                    </div>
                </div>

                <button class="checkout-btn" onclick="processCheckout()">Pesan</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function formatCurrency(value) {
            return value.toLocaleString('id-ID', {
                minimumFractionDigits: 0,
            });
        }

        function displayCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartItemsContainer = document.getElementById('cart-items');
            updateCartCount(cart);

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p>Keranjang Anda kosong.</p>';
                updatePriceSummary(0);
                return;
            }

            cartItemsContainer.innerHTML = cart.map(item => `
            <div class="cart-item">
                <div class="cart-item-content">
                    <img src="${item.image_url}" alt="${item.productName}" class="product-image">
                    <div class="product-details">
                        <span class="product-name">${item.productName}</span>
                        <span class="product-price">${item.quantity} x Rp ${formatCurrency(item.productPrice)}</span>
                    </div>
                </div>
            </div>
            `).join('');


            const subtotal = cart.reduce((total, item) => total + (item.productPrice * item.quantity), 0);
            updatePriceSummary(subtotal);
        }

        function updateCartCount(cart) {
            const cartCount = cart.reduce((total, item) => total + item.quantity, 0);
            document.getElementById('cart-count').textContent = cartCount;
        }

        function updateQuantity(productId, newQuantity) {
            if (newQuantity < 1) return;

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const itemIndex = cart.findIndex(item => item.productId === productId);

            if (itemIndex !== -1) {
                cart[itemIndex].quantity = newQuantity;
                localStorage.setItem('cart', JSON.stringify(cart));
                displayCart();
            }
        }

        function updatePriceSummary(subtotal) {
            const total = subtotal;

            document.getElementById('subtotal').textContent = `Rp${formatCurrency(subtotal)}`;
            document.getElementById('total-price').textContent = `Rp${formatCurrency(total)}`;
        }

        function validateForm() {
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            let isValid = true;

            if (!name) {
                document.getElementById('name-error').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('name-error').style.display = 'none';
            }

            if (!phone) {
                document.getElementById('phone-error').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('phone-error').style.display = 'none';
            }

            return isValid;
        }

        function processCheckout() {
            if (!validateForm()) return;

            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const paymentMethod = document.getElementById('payment-method').value;
            const cart = JSON.parse(localStorage.getItem('cart')) || [];

            if (cart.length === 0) {
                alert('Keranjang Anda kosong');
                return;
            }

            const orderData = {
                customerName: name,
                customerPhone: phone,
                paymentMethod: paymentMethod,
                items: cart,
                total: cart.reduce((total, item) => total + (item.productPrice * item.quantity), 0)
            };

            // Simulasi pengiriman data ke backend
            console.log('Order data:', orderData);
            
            // Clear cart after successful order
            localStorage.removeItem('cart');
            alert('Pesanan Anda telah berhasil diproses!');
            window.location.href = '/struk';
        }

        // Initialize cart display
        document.addEventListener('DOMContentLoaded', () => {
            displayCart();
        });
    </script>
</body>
</html>