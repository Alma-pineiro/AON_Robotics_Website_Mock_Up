<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        :root {
            --neon-green: #2bfc0f;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0e0e0e;
            color: #fff;
        }

        /* Navbar styling */
        nav {
            background-color: #111;
            padding: 15px 30px;
            box-shadow: 0 0 10px rgba(43,252,15,0.4);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative; /* keeps navbar at top */
            top: 0;
            z-index: 1000;
        }

        nav a {
            color: var(--neon-green);
            text-decoration: none;
            margin-left: 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-shadow: 0 0 6px var(--neon-green);
        }

        main {
            padding: 40px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!-- Navbar at the top -->
    <nav>
        <div class="logo">
            <a href="{{ url('/') }}" class="text-xl font-bold uppercase tracking-widest neon-link neon-text-hover">
                AON Robotics
            </a>
        </div>
        <div class="links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/team_members') }}">Team</a>
            <a href="{{ url('/sponsors') }}">Sponsors</a>
            <a href="{{ url('/apply_now') }}">Apply Now</a>
        </div>
    </nav>

    <!-- Main content -->
    <main>
        @yield('content')
    </main>
</body>
</html>
