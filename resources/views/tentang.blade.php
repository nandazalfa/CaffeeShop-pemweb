@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<?php
// header.php
function includeHeader() {
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Fore Coffee</title>
    <style>
        /* Global styles */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        :root {
            --fore-green: #006241;
            --fore-gray: #4A4A4A;
            --fore-light-gray: #F5F5F5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--fore-gray);
            line-height: 1.5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Section styles */
        .section {
            padding: 80px 0;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .section-half {
            width: 100%;
            padding: 20px;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .section-line {
            width: 24px;
            height: 2px;
            background-color: var(--fore-green);
        }

        .section-label {
            color: var(--fore-green);
            font-weight: 500;
        }

        .heading {
            font-size: 48px;
            color: var(--fore-green);
            font-weight: bold;
            margin-bottom: 24px;
            line-height: 1.2;
        }

        .text {
            font-size: 16px;
            margin-bottom: 16px;
        }

        .image-container {
            width: 100%;
            height: 500px;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .expert-image {
            width: 320px;
            height: 320px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }

        .expert-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Responsive */
        @media (min-width: 768px) {
            .section-half {
                width: 50%;
            }
        }
    </style>
</head>
<body>
<?php
}

// footer.php
function includeFooter() {
?>
</body>
</html>
<?php
}

// index.php
includeHeader();
?>

<main>
    <!-- About Fore Section -->
    <section class="section">
        <div class="section-half">
            <div class="image-container">
                <img src="https://fore.coffee/wp-content/uploads/2023/09/ourstory2.png" alt="Cafe Interior">
            </div>
        </div>
        <div class="section-half">
            <div class="container">
                <div class="section-title">
                    <div class="section-line"></div>
                    <span class="section-label">About Fore</span>
                </div>
                <h1 class="heading">Cerita Kami</h1>
                <p class="text">
                    Mari berkenalan dengan tim kami mulai dari toko, lingkungan, dan orang-orang yang bekerja bersama kami!
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="section">
        <div class="section-half">
            <div class="container">
                <div class="section-title">
                    <div class="section-line"></div>
                    <span class="section-label">Our Story</span>
                </div>
                <h2 class="heading">Grind The<br>Essentials</h2>
                <p class="text">
                    Di dunia yang serba cepat, mudah sekali kita kehilangan fokus terhadap apa yang sebenarnya penting. 
                    Fore menyediakan tempat bernaung, dimana kamu bisa beristirahat sejenak dan menikmati secangkir kopi 
                    berkualitas tinggi. Filosofi ini juga terlihat dalam tagline kami.
                </p>
                <p class="text">
                    Dengan menggunakan kata "Grind" yang memiliki dua arti: 'Grind' sebagai usaha keras yang dilakukan 
                    tiap hari oleh semua orang, dan 'Grind' yang merupakan langkah penting dalam proses pembuatan kopi, 
                    Fore ingin menginspirasi orang untuk menyadari hal penting dalam kehidupan di tengah-tengah kesibukan 
                    mereka melalui tiap cangkir kopi yang kami sajikan.
                </p>
            </div>
        </div>
        <div class="section-half">
            <div class="image-container">
                <img src="path/to/coffee-grinding.jpg" alt="Coffee Grinding Process">
            </div>
        </div>
    </section>

    <!-- Halal Certification Section -->
    <section class="section">
        <div class="section-half">
            <div class="container">
                <h2 class="heading">Tersertifikasi<br>Halal</h2>
            </div>
        </div>
        <div class="section-half">
            <div class="container">
                <p class="text">
                    Fore Coffee tersertifikasi Halal Grade A oleh MUI dengan nomor LPPOM-00160233461223. 
                    Kami menjunjung standar tinggi dalam pembuatan dan penyajian produk dengan menggunakan 100% bahan Halal.
                </p>
            </div>
        </div>
    </section>

    <!-- Expert Section -->
    <section class="section" style="background-color: var(--fore-light-gray);">
        <div class="section-half">
            <div class="expert-image">
                <img src="path/to/expert.jpg" alt="Our Expert">
            </div>
        </div>
        <div class="section-half">
            <div class="container">
                <h2 class="heading">Our Experts Says</h2>
                <p class="text">
                    Kami mentransformasi visi kami dalam menawarkan kopi berkualitas tinggi ke pelanggan menjadi 
                    sebuah prestasi yang bisa dicapai. Fore Coffee adalah <em>brand</em> kopi yang sangat berkomitmen 
                    untuk memberikan pengalaman terbaik.
                </p>
            </div>
        </div>
    </section>
</main>

<?php
includeFooter();
?>
@endsection