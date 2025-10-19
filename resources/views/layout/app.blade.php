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
        }

        /* Navbar styling */
        nav {
            background-color: #111;
            padding: 15px 30px;
            box-shadow: 0 0 10px rgba(88, 154, 105, 0.2); /* softer shadow */
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            top: 0;
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
            color: #7dbf91; /* slightly brighter hover */
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
    <!-- Navbar at the top -->
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
            <a href="{{ url('/apply_now') }}">Apply Now</a>
        </div>
    </nav>

    <!-- Main content -->
    <main>
        @yield('content')
    </main>
</body>
</html>
