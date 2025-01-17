@extends('layouts.app')

@section('title', 'Halaman Hubungi')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }

    .contact-section {
      max-width: 1200px;
      margin: 60px auto;
      padding: 0 20px;
    }

    .contact-header {
      text-align: center;
      margin-bottom: 40px;
    }

    .contact-header h1 {
      color: #006443;
      font-size: 48px;
      margin-bottom: 16px;
    }

    .contact-header p {
      color: #666;
      font-size: 18px;
    }

    .contact-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      margin-top: 40px;
    }

    .contact-info {
      background-color: #006443;
      color: white;
      padding: 40px;
      border-radius: 16px;
      position: relative;
      overflow: hidden;
    }

    .contact-info h2 {
      font-size: 32px;
      margin-bottom: 24px;
    }

    .contact-info p {
      margin-bottom: 32px;
      line-height: 1.6;
    }

    .contact-details {
      list-style: none;
    }

    .contact-details li {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      margin-bottom: 24px;
    }

    .contact-details img {
      width: 24px;
      height: 24px;
      object-fit: contain;
    }

    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .form-group label {
      color: #666;
      font-size: 16px;
    }

    .form-group input,
    .form-group textarea {
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 16px;
    }

    .form-group textarea {
      height: 120px;
      resize: vertical;
    }

    .submit-button {
      background-color: #006443;
      color: white;
      border: none;
      padding: 16px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .submit-button:hover {
      background-color: #005238;
    }

    .decoration {
      position: absolute;
      bottom: -50px;
      right: -50px;
      width: 200px;
      height: 200px;
      background: rgba(255,255,255,0.1);
      border-radius: 50%;
    }

    @media (max-width: 768px) {
      .contact-content {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <section class="contact-section">
    <div class="contact-header">
      <h1>Contact Us</h1>
      <p>Have any questions or comments? Just send us a message!</p>
    </div>

    <div class="contact-content">
      <div class="contact-info">
        <h2>Contact Information</h2>
        <p>If you have any questions or concerns, you can contact us by filling out the contact form, calling us, visiting our office, finding us on other social networks, or you can send us a personal email at:</p>
        
        <ul class="contact-details">
          <li>
            <img src="https://fore.coffee/wp-content/uploads/2023/08/bxs_phone-call.png" alt="Phone icon" />
            <span>0877-8266-5046</span>
          </li>
          <li>
            <img src="https://fore.coffee/wp-content/uploads/2023/08/ic_sharp-email.png" alt="Email icon" />
            <span>nestaracoffe@gmail.com</span>
          </li>
          <li>
            <img src="https://fore.coffee/wp-content/uploads/2023/08/carbon_location-filled.png" alt="Location icon" />
            <div>
            <div>Gedung Graha Ganesha, Lantai 1 Suite 120 & 130</div>
            <div>Jl. Hayam Wuruk No. 28, RT 014/RW 001, Kelurahan Kebon Kalapa,</div>
            <div>Kecamatan Dago, Bandung, Jawa Barat</div>
            </div>
          </li>
        </ul>

        <div class="decoration"></div>
      </div>

      <form class="contact-form">
        <div class="form-group">
          <label>Name</label>
          <input type="text" placeholder="Your name">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" placeholder="Your email">
        </div>

        <div class="form-group">
          <label>Phone Number</label>
          <input type="tel" placeholder="Your phone number">
        </div>

        <div class="form-group">
          <label>Message</label>
          <textarea placeholder="Your message"></textarea>
        </div>

        <button type="submit" class="submit-button">SEND</button>
      </form>
    </div>
  </section>
</body>
</html>
@endsection