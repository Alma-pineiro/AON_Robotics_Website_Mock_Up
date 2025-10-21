<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        :root {
            --accent-green: #589a69;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0e0e0e;
            color: #fff;
            /* Added padding-top to prevent content from going under the fixed nav */
            padding-top: 60px; 
        }

        /* Navbar styling */
        nav {
            background-color: #111;
            padding: 15px 30px;
            box-shadow: 0 0 10px rgba(88, 154, 105, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* ADDED: Makes the navbar stay at the top */
            position: fixed; 
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 1000;
        }

        nav a {
            color: var(--accent-green);
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
            transition: color 0.3s ease, text-shadow 0.3s ease;
        }

        nav a:hover {
            color: #7dbf91;
            text-shadow: 0 0 4px rgba(88, 154, 105, 0.4);
        }

        main {
            padding: 40px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="{{ url('/') }}" class="text-xl font-bold uppercase tracking-widest">
                AON Robotics
            </a>
        </div>
        <div class="links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/team_members') }}">Team</a>
            <a href="{{ url('/sponsors') }}">Sponsors</a>
            <a href="{{ url('/apply_now') }}" class="bg-[#589a69]/30 text-white font-bold p-2 rounded-lg hover:bg-[#589a69]/50 transition-colors duration-300">
                Apply Now
            </a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>