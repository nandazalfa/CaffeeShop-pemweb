<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Fore Coffee')</title>
    {{-- Link CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Coffee Shop')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --fore-green: #0F513D;
            --fore-light-green: #E6F0ED;
            --fore-brown: #8B4513;
            --fore-cream: #FFF8DC;
            --fore-gray: #667085;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: white;
            color: var(--fore-gray);
            line-height: 1.6;
        }

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
            max-width: 1280px;
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
            align-items: center;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--fore-gray);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--fore-green);
        }

        .nav-links a.active {
            color: var(--fore-green);
            border-bottom: 2px solid var(--fore-green);
        }

        .language-selector {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-left: 1rem;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
        }

        .language-selector:hover {
            background-color: var(--fore-light-green);
        }

        .download-btn {
            background-color: white;
            color: var(--fore-green);
            border: 2px solid var(--fore-green);
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .download-btn:hover {
            background-color: var(--fore-green);
            color: white;
            transform: translateY(-2px);
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 6rem 2rem 2rem;
            min-height: calc(100vh - 4rem);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .nav-links {
                gap: 1.5rem;
            }

            .nav-links a {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            .nav-content {
                padding: 0 1rem;
            }

            .nav-links {
                display: none;
            }

            .container {
                padding: 5rem 1rem 1rem;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            animation: fadeIn 0.5s ease-out;
        }

        /* Additional Utility Classes */
        .text-green {
            color: var(--fore-green);
        }

        .bg-light-green {
            background-color: var(--fore-light-green);
        }

        .shadow-sm {
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .rounded-full {
            border-radius: 9999px;
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
                <a href="{{ url('/hubungi') }}i">Contact Us</a>
                <div class="language-selector">
                    <span>🇮🇩</span>
                    <span>ID</span>
                    <i class="fas fa-chevron-down text-xs ml-1"></i>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>