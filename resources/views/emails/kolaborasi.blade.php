@extends('layouts.app')

@section('title', 'Halaman Kolaborasi')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }

    /* Kolaborasi Section Styles */
    .kolaborasi-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 20px;
      text-align: center;
    }

    .hero-images {
      display: flex;
      justify-content: center;
      margin-bottom: 40px;
      overflow: hidden;
    }

    .hero-images img {
      width: 33.33%;
      height: 100%;
      object-fit: cover;
    }

    .title {
      color: #1b4d3e;
      font-size: 48px;
      margin-bottom: 24px;
    }

    .description {
      color: #333;
      font-size: 18px;
      line-height: 1.6;
      max-width: 900px;
      margin: 0 auto 40px;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }

    .product-item {
      border-radius: 8px;
      overflow: hidden;
    }

    .product-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .product-item img:hover {
      transform: scale(1.05);
    }

    /* Partner Section Styles */
    .partner-section {
      max-width: 1200px;
      margin: 60px auto;
      padding: 40px 20px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: center;
    }

    .partner-form {
      padding-right: 40px;
    }

    .partner-form h2 {
      color: #1b4d3e;
      font-size: 48px;
      margin-bottom: 16px;
    }

    .partner-form p {
      color: #666;
      font-size: 18px;
      margin-bottom: 32px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      color: #666;
      margin-bottom: 8px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 16px;
    }

    .form-group textarea {
      height: 120px;
      resize: vertical;
    }

    /* New Submit Button Styles */
    .submit-button {
      background-color: #1b4d3e;
      color: white;
      border: none;
      padding: 14px 32px;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 100%;
      margin-top: 20px;
    }

    .submit-button:hover {
      background-color: #143d31;
    }

    .partner-image {
      position: relative;
    }

    .partner-image img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .whatsapp-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: #25D366;
      color: white;
      padding: 10px 20px;
      border-radius: 24px;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .whatsapp-button img {
      width: 24px;
      height: 24px;
    }

    @media (max-width: 768px) {
      .partner-section {
        grid-template-columns: 1fr;
      }

      .partner-form {
        padding-right: 0;
      }

      .partner-image {
        order: -1;
      }
    }
  </style>
</head>
<body>
  <!-- Kolaborasi Section -->
  <section class="kolaborasi-section">
    <div class="hero-images">
      <img src="https://i.pinimg.com/736x/22/6b/39/226b39d059d8782a024587d6143ec60d.jpg" alt="Barista in brown outfit" />
      <img src="https://i.pinimg.com/736x/d9/5c/b4/d95cb4e69e2de383d01bccb96b9a1163.jpg" alt="Person in striped sweater" />
      <img src="https://i.pinimg.com/736x/ba/63/81/ba6381c4a4f94f6751eb39e9cb70c179.jpg" alt="Person in green sweater" />
    </div>

    <h1 class="title">Collaboration</h1>
    
    <p class="description">
      Nestara Coffee offers a variety of innovative drinks to satisfy the tastes of millennial Indonesians. We always provide the best, from product quality to service that pampers.
    </p>

    <div class="product-grid">
      <div class="product-item">
        <img src="https://fore.coffee/wp-content/uploads/2023/09/Frame-48096759-2.png" alt="Flight attendant serving" />
      </div>
      <div class="product-item">
        <img src="https://fore.coffee/wp-content/uploads/2023/09/Frame-48096758-1-1.png" alt="Laneige collaboration drink" />
      </div>
      <div class="product-item">
        <img src="https://fore.coffee/wp-content/uploads/2023/09/Frame-48096761.png" alt="Coffee product" />
      </div>
      <div class="product-item">
        <img src="https://fore.coffee/wp-content/uploads/2023/09/Frame-48096756.png" alt="Mickey Mouse themed drink" />
      </div>
      <div class="product-item">
        <img src="https://fore.coffee/wp-content/uploads/2023/09/Frame-48096758-2.png" alt="Layered drink" />
      </div>
    </div>
  </section>

  <!-- Partner Section -->
  <section class="partner-section">
    <div class="partner-form">
      <h2>Become a partner!</h2>
      <p>Let us know how we can help!</p>
      
      <form action="{{ route('kolaborasi.send') }}" method="POST">
        @csrf  <!-- CSRF Token -->
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your name" required>
        </div>
        
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Your email" required>
        </div>
        
        <div class="form-group">
          <label for="phonenumber">Phone Number</label>
          <input type="tel" id="phonenumber" name="phonenumber" placeholder="Your phone number" required>
        </div>
        
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Your message" required></textarea>
        </div>

        <!-- Added Submit Button -->
        <button type="submit" class="submit-button">Send</button>
      </form>
    </div>
    
    <div class="partner-image">
      <img src="https://i.pinimg.com/736x/9f/80/7f/9f807f027545344be7812db804f5c7b9.jpg" alt="Person holding drinks" />
    </div>
  </section>
</body>
</html>
@endsection