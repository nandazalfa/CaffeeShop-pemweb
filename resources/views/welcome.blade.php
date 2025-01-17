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

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                width: 100%;
                position: absolute;
                top: 60px;
                left: 0;
                background-color: white;
                padding: 20px;
                text-align: center;
                flex-direction: column;
                gap: 1rem;
            }

            .hamburger {
                display: block;
                cursor: pointer;
            }

            .hamburger span {
                display: block;
                width: 30px;
                height: 4px;
                margin: 5px;
                background-color: black;
            }

            .nav-links.active {
                display: flex;
            }
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
            <img src="https://i.pinimg.com/736x/a1/23/8f/a1238f01e1eba65044714a350d8c2567.jpg" alt="Logo" class="logo">
            <div class="nav-links">
                <a href="{{ url('/tentang') }}">About</a>
                <a href="{{ url('/product') }}">Menu</a>
                <a href="{{ url('/kolaborasi') }}">Collaboration</a>
                <a href="{{ url('/karir') }}">Career</a>
                <a href="{{ url('/hubungi') }}">Contact Us</a>
                <div class="language-selector">
                    <span>🇮🇩</span>
                    <span>ID</span>
                </div>
            </div>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <script>
        // Handle Hamburger Menu Toggle
        document.getElementById("hamburger").addEventListener("click", function() {
            document.querySelector(".nav-links").classList.toggle("active");
        });
    </script>

    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Nestara Coffee</h1>
                <p>Di Setiap Cangkir, Ada Cerita yang Menunggu untuk Diceritakan</p>
                <div class="slider-controls">
                </div>
            </div>
            <div class="hero-image">
                <img src="https://i.pinimg.com/736x/c6/b5/84/c6b58417bcf36debcdcc1f3270c94288.jpg" alt="Coffee Cup">
            </div>
        </div>
    </section>
  
<style>

.testimonials {
    padding: 6rem 0;
    background: linear-gradient(135deg, var(--bg-light) 0%, #fff 100%);
}

.testimonials-grid {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
}

.testimonial-card {
    background: white;
    padding: 2.5rem;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.testimonial-card::before {
    content: '"';
    position: absolute;
    top: 20px;
    left: 20px;
    font-size: 120px;
    color: rgba(0, 98, 65, 0.1);
    font-family: serif;
    line-height: 1;
}

.testimonial-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
}

.testimonial-header {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin-bottom: 2rem;
    position: relative;
}

.testimonial-avatar {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid var(--primary-color);
    box-shadow: 0 5px 15px rgba(0,98,65,0.2);
}

.testimonial-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.testimonial-info {
    flex: 1;
}

.testimonial-info h4 {
    color: var(--primary-color);
    font-size: 1.4rem;
    margin-bottom: 0.3rem;
}

.testimonial-info .customer-type {
    color: var(--text-gray);
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.customer-type i {
    color: var(--primary-color);
}

.testimonial-text {
    color: var(--text-gray);
    line-height: 1.8;
    margin-bottom: 1.5rem;
    font-size: 1.1rem;
    position: relative;
    z-index: 1;
}

.testimonial-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 2rem;
}

.testimonial-rating {
    display: flex;
    gap: 0.2rem;
}

.testimonial-rating i {
    color: #FFD700;
    font-size: 1.2rem;
}

.testimonial-date {
    color: var(--text-gray);
    font-size: 0.9rem;
}

.verified-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.3rem 0.8rem;
    background-color: rgba(0, 98, 65, 0.1);
    color: var(--primary-color);
    border-radius: 20px;
    font-size: 0.9rem;
    margin-top: 0.5rem;
}

.verified-badge i {
    font-size: 0.8rem;
}
</style>

<section class="testimonials">
    <div class="section-title">
        <h2>What Our Customers Say</h2>
        <p>Pengalaman autentik dari pelanggan setia kami</p>
    </div>
    <div class="testimonials-grid">
        <div class="testimonial-card">
            <div class="testimonial-header">
                <div class="testimonial-avatar">
                    <img src="https://i.pinimg.com/736x/a5/ee/ab/a5eeabe069c8c208f8982394e267e78a.jpg" alt="Sarah Wijaya">
                </div>
                <div class="testimonial-info">
                    <h4>Uni Bakwan</h4>
                    <div class="customer-type">
                        <i class="fas fa-award"></i>
                        <span>Member Gold</span>
                    </div>
                    <div class="verified-badge">
                        <i class="fas fa-check-circle"></i>
                        <span>Verified Purchase</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-text">
                "Kopi ini tuh kayak bakwan, enak, nggak perlu mikir panjang! Begitu nyeruput, langsung berasa di surga dunia. Kalau hidup lagi nggak enak, tinggal ngopi, semua masalah hilang."
            </div>
            <div class="testimonial-footer">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="testimonial-date">December 2024</div>
            </div>
        </div>

        <div class="testimonial-card">
            <div class="testimonial-header">
                <div class="testimonial-avatar">
                    <img src="https://i.pinimg.com/736x/2c/b6/21/2cb621dc23d3613ece340e6dede7d2f8.jpg" alt="Budi Santoso">
                </div>
                <div class="testimonial-info">
                    <h4>Kak Gem</h4>
                    <div class="customer-type">
                        <i class="fas fa-gem"></i>
                        <span>Member Platinum</span>
                    </div>
                    <div class="verified-badge">
                        <i class="fas fa-check-circle"></i>
                        <span>Verified Purchase</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-text">
                " Kehidupan itu seperti secangkir kopi. Kadang pahit, kadang manis, tapi selalu ada rasa yang bikin kita terus ngelangkah. Kopi ini ngingetin aku, meski hari-hari gak selalu mulus, tapi dengan sedikit semangat, semuanya bisa jadi lebih indah. PAHAM!!!"
            </div>
            <div class="testimonial-footer">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="testimonial-date">December 2024</div>
            </div>
        </div>

        <div class="testimonial-card">
            <div class="testimonial-header">
                <div class="testimonial-avatar">
                    <img src="https://i.pinimg.com/736x/a2/2a/63/a22a631e4bde880809396334f5a7f30d.jpg" alt="Linda Kusuma">
                </div>
                <div class="testimonial-info">
                    <h4>Fajar Sadboy</h4>
                    <div class="customer-type">
                        <i class="fas fa-crown"></i>
                        <span>Coffee Enthusiast</span>
                    </div>
                    <div class="verified-badge">
                        <i class="fas fa-check-circle"></i>
                        <span>Verified Purchase</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-text">
                "Hidup tuh kayak kopi, kadang pahit, kadang manis. Tapi jangan khawatir, kalau kopi aja bisa bikin kita melek, hidup juga pasti bisa bikin kita kuat! Kalau rasa hidup lagi pahit, inget aja, ada gula di kopi."
            </div>
            <div class="testimonial-footer">
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="testimonial-date">Agustus 2024</div>
            </div>
        </div>
    </div>

    </div>
    </section>
    <section class="social-feed">
    <div class="section-title">
        <h2>Follow Our Instagram</h2>
        <p>Explore special moments with Nestara Coffee</p>
    </div>
    <div class="social-grid">
        <div class="social-post">
            <img src="https://i.pinimg.com/736x/3c/4a/13/3c4a134bc8b51f58779fbfd3795af2f5.jpg" alt="Instagram post 1">
            <div class="social-overlay">
                <a href="https://www.instagram.com/nestara_coffe/profilecard/?igsh=ajh4ZjczbDA0OGZu" target="_blank" rel="noopener noreferrer" class="social-link">
                    <i class="fab fa-instagram social-icon"></i>
                </a>
            </div>
        </div>
        <div class="social-post">
            <img src="https://i.pinimg.com/736x/45/25/76/45257653c09220c62a8aded6fe20ec54.jpg" alt="Instagram post 2">
            <div class="social-overlay">
                <a href="https://www.instagram.com/nestara_coffe/profilecard/?igsh=ajh4ZjczbDA0OGZu" target="_blank" rel="noopener noreferrer" class="social-link">
                    <i class="fab fa-instagram social-icon"></i>
                </a>
            </div>
        </div>
        <div class="social-post">
            <img src="https://i.pinimg.com/736x/01/d4/b2/01d4b25ca1acdccaa7b96eb92552c6f7.jpg" alt="Instagram post 4">
            <div class="social-overlay">
                <a href="https://www.instagram.com/nestara_coffe/profilecard/?igsh=ajh4ZjczbDA0OGZu" target="_blank" rel="noopener noreferrer" class="social-link">
                    <i class="fab fa-instagram social-icon"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="social-cta">
        <a href="https://www.instagram.com/nestara_coffe/profilecard/?igsh=ajh4ZjczbDA0OGZu" class="instagram-btn" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-instagram"></i> Follow @Nestara_coffee
        </a>
    </div> 

    <style>
        .social-feed {
            padding: 6rem 0;
            background-color: var(--bg-light);
        }

        .social-grid {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .social-post {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            aspect-ratio: 1;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .social-post img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
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
            background: rgba(0,98,65,0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .social-post:hover .social-overlay {
            opacity: 1;
        }

        .social-icon {
            color: white;
            font-size: 2.5rem;
            transition: transform 0.3s ease;
        }

        .social-post:hover .social-icon {
            transform: scale(1.2);
        }

        .social-cta {
            text-align: center;
            margin-top: 3rem;
        }

        .instagram-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 2rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,98,65,0.2);
        }

        .instagram-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,98,65,0.3);
        }

        .instagram-btn i {
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .social-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
        }
    </style>
    </section>
    <section class="locations">
            <div class="section-title">
                <h2>Our Locations</h2>
                <p>Find our outlets in various locations</p>
            </div>
            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126487.63788222353!2d107.5793072261943!3d-6.903444882459351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c927c924a9%3A0x401e8f1fc28c6e0!2sBandung%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1703317234676!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>

            </div>
  