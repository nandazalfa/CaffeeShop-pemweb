<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - Hanila Brew</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .cart-container {
            margin-top: 100px;
        }

        .product-image {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .cart-item {
            border-bottom: 1px solid #e9ecef;
        }

        .checkout-btn {
            background-color: #00A651;
            border: none;
            color: white;
            font-weight: bold;
        }

        .checkout-btn:hover {
            background-color: #008c44;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="https://i.pinimg.com/736x/a1/23/8f/a1238f01e1eba65044714a350d8c2567.jpg" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="/product">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kolaborasi">Collaboration</a></li>
                    <li class="nav-item"><a class="nav-link" href="/karir">Career</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hubungi">Contact Us</a></li>
                    <li class="nav-item">
                        <a href="{{ route('cart') }}" class="nav-link">
                            <i class="fas fa-shopping-cart"></i>
                            <span id="cart-count" class="badge bg-danger">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cart Page -->
    <div class="container cart-container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-8">
                <div class="mb-4 p-3 bg-white rounded shadow-sm">
                    <h5 class="mb-3">Data Pembeli</h5>
                    <form id="customer-form">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap">
                            <small id="name-error" class="text-danger d-none">Nama harus diisi</small>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">No. Telepon</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon">
                            <small id="phone-error" class="text-danger d-none">Nomor telepon harus diisi</small>
                        </div>
                    </form>
                </div>

                <div class="p-3 bg-white rounded shadow-sm">
                    <h5 class="mb-3">Rincian Pembayaran</h5>
                    <select class="form-select" id="payment-method">
                        <option value="transfer">Transfer Bank</option>
                        <option value="ewallet">E-Wallet</option>
                    </select>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-4">
                <div class="p-3 bg-white rounded shadow-sm">
                    <h5 class="mb-3">Ringkasan Pesanan</h5>
                    <div id="cart-items">
                        <p class="text-muted">Keranjang Anda kosong.</p>
                    </div>
                    <div class="d-flex justify-content-between border-top pt-3 mt-3">
                        <span>Total Harga</span>
                        <strong id="total-price">Rp0</strong>
                    </div>
                    <button class="btn checkout-btn w-100 mt-3" onclick="processCheckout()">Pesan</button>
                </div>
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
            const cartCount = document.getElementById('cart-count');
            cartCount.textContent = cart.length;

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p class="text-muted">Keranjang Anda kosong.</p>';
                document.getElementById('total-price').textContent = 'Rp0';
                return;
            }

            const itemsHtml = cart.map(item => `
                <div class="cart-item py-2 d-flex">
                    <img src="${item.image_url}" class="product-image me-3" alt="${item.productName}">
                    <div>
                        <p class="mb-0">${item.productName}</p>
                        <small>${item.quantity} x Rp${formatCurrency(item.productPrice)}</small>
                    </div>
                    <div class="ms-auto">Rp${formatCurrency(item.productPrice * item.quantity)}</div>
                </div>
            `).join('');

            cartItemsContainer.innerHTML = itemsHtml;

            const total = cart.reduce((sum, item) => sum + (item.quantity * item.productPrice), 0);
            document.getElementById('total-price').textContent = `Rp${formatCurrency(total)}`;
        }

        function processCheckout() {
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const paymentMethod = document.getElementById('payment-method').value;
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const totalAmount = cart.reduce((sum, item) => sum + (item.quantity * item.productPrice), 0);

            if (!name) {
                document.getElementById('name-error').classList.remove('d-none');
                return;
            } else {
                document.getElementById('name-error').classList.add('d-none');
            }

            if (!phone) {
                document.getElementById('phone-error').classList.remove('d-none');
                return;
            } else {
                document.getElementById('phone-error').classList.add('d-none');
            }

            // Siapkan data yang akan dikirim
            const data = {
                customer_name: name,
                customer_phone: phone,
                payment_method: paymentMethod,
                total_amount: totalAmount,
                status: "pending", // Status awal pesanan
                cart_items: cart
            };

            // Kirim data ke Laravel
            fetch('/api/transactions', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Pesanan sedang di proses, Mohon ditunggu.");
                        localStorage.removeItem('cart');
                        displayCart();
                    } else {
                        alert("Terjadi kesalahan saat memproses pesanan Anda.");
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert("Kesalahan jaringan atau server.");
                });
            
            if (data.success) {
                alert("Pesanan sedang diproses, mohon tunggu.");
                localStorage.removeItem('cart');
                displayCart();

                // Tambahkan tautan untuk mengunduh struk
                window.location.href = `/transactions/${data.transaction_id}/receipt`;
            }
        }


        document.addEventListener('DOMContentLoaded', () => displayCart());
    </script>
</body>
</html>
