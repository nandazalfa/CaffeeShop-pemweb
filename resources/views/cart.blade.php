<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - Hanila Brew</title>
    <!-- Link ke CDN Bootstrap dan FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
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

        .cart-page {
            margin-top: 100px; /* Menghindari navbar yang menutupi konten */
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
        }

        .cart-item {
            background-color: #f7f9f7;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 8px;
        }

        .cart-item-details {
            flex-grow: 1;
            margin-left: 20px;
        }

        .cart-item h5 {
            color: #388e3c;
            font-size: 1.1em;
            margin-bottom: 10px;
        }

        .cart-item p {
            color: #424242;
            font-size: 1em;
        }

        .cart-item button {
            background-color: #388e3c;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .cart-item button:hover {
            background-color: #2e7d32;
        }

        .cart-footer {
            margin-top: 30px;
            text-align: center;
        }

        .cart-footer button {
            background-color: #388e3c;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
        }

        .cart-footer button:hover {
            background-color: #2e7d32;
        }

        .cart-total {
            font-size: 1.0em;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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


    <!-- Keranjang Belanja -->
    <div class="cart-page">
        <h2 class="mb-4">Keranjang Belanja</h2>
        <div id="cart-items"></div> <!-- Produk di keranjang akan tampil di sini -->
        <div class="cart-total text-end">
            <h3>Total: Rp <span id="total-price">0</span></h3>
        </div>
        <div class="cart-footer">
            <button onclick="window.location.href='/checkout'">Checkout</button> <!-- Rute checkout -->
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Menampilkan produk dari localStorage ke halaman
        // Fungsi untuk format harga dengan koma setiap tiga angka
        function formatCurrency(value) {
            return value.toLocaleString('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
            }).replace('Rp', ''); // Menghapus 'Rp' agar sesuai dengan format yang diinginkan
        }

        // Menampilkan produk dari localStorage ke halaman
        function displayCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const cartItemsContainer = document.getElementById('cart-items');
            const totalPriceElement = document.getElementById('total-price');

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p>Keranjang Anda kosong.</p>';
                totalPriceElement.innerHTML = '0';
                return;
            }

            let total = 0;

            cartItemsContainer.innerHTML = cart.map(item => {
                const subtotal = item.productPrice * item.quantity;
                total += subtotal;

                return `
                    <div class="cart-item d-flex">
                        <img src="${item.productImage}" alt="${item.productName}">
                        <div class="cart-item-details">
                            <h5>${item.productName}</h5>
                            <p>Harga: Rp ${formatCurrency(item.productPrice)}</p>
                            <p>Kuantitas: ${item.quantity}</p>
                            <p>Subtotal: Rp ${formatCurrency(subtotal)}</p>
                        </div>
                        <button onclick="removeFromCart(${item.productId})">Hapus</button>
                    </div>
                `;
            }).join('');

            totalPriceElement.innerHTML = formatCurrency(total);
        }


        // Fungsi untuk menghapus produk dari keranjang
        function removeFromCart(productId) {
            if (confirm('Apakah Anda yakin ingin menghapus produk ini dari keranjang?')) {
                let cart = JSON.parse(localStorage.getItem('cart')) || [];
                cart = cart.filter(item => item.productId != productId);
                localStorage.setItem('cart', JSON.stringify(cart));
                displayCart();
            }
        }

        // Menampilkan keranjang saat halaman dimuat
        displayCart();
    </script>
</body>
</html>
