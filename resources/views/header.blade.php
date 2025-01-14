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