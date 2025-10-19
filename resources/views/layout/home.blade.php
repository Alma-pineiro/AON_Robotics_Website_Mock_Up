@extends('layout.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AON Robotics - Home')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --green-accent: #589a69;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #0e0e0e;
            color: #fff;
            padding-top: 80px;
        }

        /* Navbar */
        nav {
            background-color: #111;
            border-bottom: 1px solid rgba(88, 154, 105, 0.2);
        }

        nav a {
            color: #e0e0e0;
            text-decoration: none;
            transition: color 0.3s ease, background-color 0.3s ease;
        }

        nav a:hover {
            color: var(--green-accent);
            background-color: rgba(88, 154, 105, 0.1);
        }

        /* Buttons */
        .btn {
            background-color: rgba(88, 154, 105, 0.25);
            border: 2px solid var(--green-accent);
            border-radius: 0.75rem;
            color: #fff;
            font-weight: bold;
            padding: 0.75rem 2rem;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: rgba(88, 154, 105, 0.45);
        }

        /* Hero title */
        .hero-title {
            color: var(--green-accent);
        }

        /* Robot Image Glow */
        .robot-image-glow {
            filter: drop-shadow(0 0 6px rgba(255, 255, 255, 0.5))
                    drop-shadow(0 0 16px rgba(88, 154, 105, 0.7));
            transition: transform 0.4s ease-out;
            max-width: 100%;
            height: auto;
        }

        .robot-image-glow:hover {
            transform: scale(1.03);
        }

        @media (max-width: 600px) {
            body {
                padding-top: 130px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-10 p-4 md:flex md:justify-between md:items-center w-full">
        <div class="logo mb-3 md:mb-0 text-center md:text-left">
            <a href="{{ url('/') }}" class="text-xl font-bold uppercase tracking-widest">
                AON Robotics
            </a>
        </div>

        <div class="links flex flex-wrap justify-center md:justify-end gap-x-4 gap-y-2">
            <a href="{{ url('/') }}" class="font-semibold p-2 rounded-md">Home</a>
            <a href="{{ url('/about') }}" class="font-semibold p-2 rounded-md">About</a>
            <a href="{{ url('/team_members') }}" class="font-semibold p-2 rounded-md">Team</a>
            <a href="{{ url('/project_management') }}" class="font-semibold p-2 rounded-md">Projects</a>
            <a href="{{ url('/sponsors') }}" class="font-semibold p-2 rounded-md">Sponsors</a>
            <a href="{{ url('/apply_now') }}" class="btn text-white">Apply Now</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="p-8 max-w-6xl mx-auto min-h-screen">
        <!-- Hero Section -->
        <section class="mb-16 pt-4 grid md:grid-cols-2 gap-12 items-center">
            <div class="text-center md:text-left">
                <h1 class="hero-title text-4xl md:text-6xl font-extrabold mb-4 pb-2 leading-tight uppercase">
                    Precision in Motion. Power in Design.
                </h1>
                <p class="text-xl mb-8 text-gray-300">
                    We are AON Robotics, where innovation meets competition. Discover the award-winning designs and dedicated team driving the future of autonomous systems.
                </p>
                <a href="{{ url('/about') }}" class="btn inline-block">JOIN OUR TEAM</a>
            </div>

            <div class="flex justify-center md:justify-end">
                <img src="https://placehold.co/700x700/0e0e0e/589a69?text=AON+ROBOT+HERO" 
                     alt="AON Robotics Competition Robot with Glow" 
                     class="w-full max-w-sm sm:max-w-md md:max-w-xl h-auto robot-image-glow">
            </div>
        </section>

        <!-- Achievements -->
        <section class="mt-20 py-10 border-t border-[#589a69]/30">
            <h2 class="text-3xl font-extrabold text-center mb-10 hero-title">Recent Achievements</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6 bg-gray-800/50 rounded-lg hover:bg-gray-700/50 transition-colors duration-300">
                    <div class="text-4xl font-bold text-[#589a69] mb-2">3X</div>
                    <p class="text-gray-400">State Champions</p>
                </div>
                <div class="p-6 bg-gray-800/50 rounded-lg hover:bg-gray-700/50 transition-colors duration-300">
                    <div class="text-4xl font-bold text-[#589a69] mb-2">12+</div>
                    <p class="text-gray-400">VEX Competitions</p>
                </div>
                <div class="p-6 bg-gray-800/50 rounded-lg hover:bg-gray-700/50 transition-colors duration-300">
                    <div class="text-4xl font-bold text-[#589a69] mb-2">95%</div>
                    <p class="text-gray-400">Success Rate in Matches</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
