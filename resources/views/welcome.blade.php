<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
        
        :root {
            --primary-color: #006241;
            --text-gray: #767676;
            --bg-light: #F8F9FA;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: white;
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

        /* Hero Section */
        .hero {
            margin-top: 80px;
            padding: 4rem 0;
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
            background-color: #fff;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 4rem;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 4.5rem;
            font-weight: 800;
            color: var(--primary-color);
            line-height: 1.1;
            margin-bottom: 1.5rem;
        }

        .hero-text p {
            font-size: 1.5rem;
            color: var(--text-gray);
            line-height: 1.5;
            font-weight: 400;
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .hero-image img {
            max-width: 100%;
            height: auto;
        }

        .slider-controls {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .slider-arrow {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid var(--primary-color);
            border-radius: 50%;
            cursor: pointer;
            color: var(--primary-color);
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .slider-arrow:hover {
            background-color: var(--primary-color);
            color: white;
        }

        /* Section Styles */
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .section-title p {
            color: var(--text-gray);
            font-size: 1.2rem;
        }

        /* Our Story Section */
        .story {
            padding: 6rem 0;
            background-color: var(--bg-light);
        }

        .story-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 4rem;
            align-items: center;
        }

        .story-image {
            border-radius: 20px;
            overflow: hidden;
        }

        .story-image img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }

        .story-image:hover img {
            transform: scale(1.05);
        }

        .story-text {
            padding: 2rem;
        }

        .story-text h3 {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .story-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-gray);
            margin-bottom: 1.5rem;
        }

        /* Store Locations */
        .locations {
            padding: 6rem 0;
        }

        .map-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Testimonials */
        .testimonials {
            padding: 6rem 0;
            background-color: var(--bg-light);
        }

        .testimonials-grid {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .testimonial-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
        }

        .testimonial-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-info h4 {
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .testimonial-info p {
            color: var(--text-gray);
            font-size: 0.9rem;
        }

        .testimonial-text {
            color: var(--text-gray);
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .testimonial-rating {
            color: gold;
        }

        /* Social Media Feed */
        .social-feed {
            padding: 6rem 0;
        }

        .social-grid {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .social-post {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            aspect-ratio: 1;
        }

        .social-post img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .social-post:hover img {
            transform: scale(1.1);
        }

        .social-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .social-post:hover .social-overlay {
            opacity: 1;
        }

        .social-icon {
            color: white;
            font-size: 2rem;
        }

        @media (max-width: 1024px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 3.5rem;
            }

            .hero-text p {
                font-size: 1.2rem;
            }

            .slider-controls {
                justify-content: center;
            }

            .story-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .story-text h3 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <img src="/api/placeholder/120/40" alt="Logo" class="logo">
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
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Grind The Essentials</h1>
                <p>Dibuat dari biji kopi Indonesia pilihan untuk pengalaman minum kopi terbaik setiap hari</p>
                <div class="slider-controls">
                    <div class="slider-arrow">&#8249;</div>
                    <div class="slider-arrow">&#8250;</div>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://i.pinimg.com/736x/c6/b5/84/c6b58417bcf36debcdcc1f3270c94288.jpg" alt="Coffee Cup">
            </div>
        </div>
    </section>

    <section class="story">
        <div class="section-title">
            <h2>Our Story</h2>
            <p>Perjalanan kami dalam menciptakan pengalaman kopi terbaik</p>
        </div>
        <div class="story-content">
            <div class="story-image">
                <img src="https://fore.coffee/wp-content/uploads/2023/09/web2.png" alt="Coffee Plantation">
            </div>
            <div class="story-text">
                <h3>Dari Biji Hingga Secangkir Kopi</h3>
                <p>Kami memulai perjalanan ini dengan satu tujuan sederhana: membawa pengalaman kopi berkualitas tinggi kepada pencinta kopi di Indonesia. Bekerja sama dengan petani kopi lokal terbaik, kami memastikan setiap biji kopi yang kami gunakan dipilih dengan teliti dan diolah dengan sempurna.</p>
                <p>Setiap cangkir kopi kami menceritakan kisah dedikasi para petani, keahlian para barista, dan komitmen kami untuk memberikan yang terbaik kepada pelanggan kami.</p>
            </div>
        </div>
    </section>

    <section class="locations">
        <div class="section-title">
            <h2>Our Locations</h2>
            <p>Temukan gerai kami di berbagai lokasi</p>
        </div>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.51380936121!2d112.71268687362064!3d-7.275619143075757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20Surabaya%20City%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1703317234676!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <section class="testimonials">
        <div class="section-title">
            <h2>What Our Customers Say</h2>
            <p>Pengalaman pelanggan bersama kami</p>
        </div>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-header">
                    <div class="testimonial-avatar">
                        <img src="/api/placeholder/60/60" alt="Customer">
                    </div>
                    <div class="testimonial-info">
                        <h4>Sarah Wijaya</h4>