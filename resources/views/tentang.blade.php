@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
@include('header')  <!-- Menyertakan header.blade.php -->
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

@include('footer')  <!-- Menyertakan footer.blade.php -->
@endsection