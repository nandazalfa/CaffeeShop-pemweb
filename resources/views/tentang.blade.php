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
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap');

        :root {
            --fore-green: #006241;
            --fore-gray: #4A4A4A;
            --fore-light-gray: #F5F5F5;
            --fore-gradient: linear-gradient(135deg, #006241, #00A86B);
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
            padding: 0 10px; /* Memperpendek padding container */
        }

        /* Section styles */
        .section {
            padding: 40px 0; /* Mengurangi jarak antar section */
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero {
            text-align: center;
            background: url('https://i.pinimg.com/originals/c0/17/25/c017250e30f153842a896791e6bdaae8.gif') no-repeat center center/cover;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            position: relative;
        }

        .hero h1 {
            font-size: 64px;
            font-family: 'Playfair Display', serif;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 24px;
            margin-top: 10px;
            line-height: 1.5;
            font-weight: 500;
        }

        .testimonials {
            background-color: var(--fore-light-gray);
            padding: 40px 20px;
            text-align: center;
        }

        .testimonial {
            margin-bottom: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            background-color: white;
        }

        .testimonial p {
            font-size: 16px;
            font-style: italic;
            margin-bottom: 12px;
        }

        .testimonial .author {
            font-size: 14px;
            font-weight: bold;
            color: var(--fore-gray);
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
    <!-- Hero Section -->
    <section class="hero">
        <h1>Nestara Caffee</h1>
        <p>"Tempat Dimana Kopi dan Cerita Bertemu."</p>
    </section>

    <!-- About Fore Section -->
    <section class="section">
        <div class="section-half">
            <div class="image-container">
                <img src="https://i.pinimg.com/736x/cd/22/1e/cd221ee7739d4066b48df7a33eef4a36.jpg" alt="Cafe Interior">
            </div>
        </div>
        <div class="section-half">
            <div class="container">
                <div class="section-title">
                    <div class="section-line"></div>
                    <span class="section-label">About Nestara</span>
                </div>
                <h1 class="heading">Our Story</h1>
                <p class="text">
                    Nestara Coffee is a place designed to bring comfort, warmth, and the finest coffee flavors in every sip. Inspired by the spirit of togetherness and creativity, Nestara Coffee is not just a spot to enjoy coffee but also a space to share stories, meet friends, or simply spend time alone.
                </p>
                <p class="text">
                    We serve a wide variety of specialty coffee crafted from premium coffee beans sourced in collaboration with the best local farmers. Every cup is brewed with care to ensure exceptional quality and taste. In addition to our coffee, we offer a selection of light bites and meals, thoughtfully prepared with fresh and natural ingredients to complement any occasion.
                </p>
                <p class="text">
                    With its modern yet cozy interior design, Nestara Coffee is the perfect place to work, relax, or spend quality time. We believe every visit to Nestara Coffee is a memorable experience, whether you're a coffee enthusiast or someone looking for a welcoming and comfortable atmosphere.
                </p>
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

  
    <section class="testimonials">
        <h2 class="heading">What Our Customers Say</h2>
        <div class="testimonial">
            <p>"Nestara Coffee has the best atmosphere and the most delicious coffee I've ever tasted!"</p>
            <span class="author">- Amanda, Coffee Enthusiast</span>
        </div>
        <div class="testimonial">
            <p>"I love coming here to relax and enjoy the warm ambiance. Highly recommended!"</p>
            <span class="author">- Brian, Regular Customer</span>
        </div>
    </section>
</main>

<?php
includeFooter();
?>
@endsection