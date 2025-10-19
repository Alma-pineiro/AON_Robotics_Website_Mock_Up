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
            --neon-green: #589a69; /* lighter green accent */
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #0e0e0e;
            color: #fff;
            padding-top: 80px;
        }

        /* Neon Glow (light version) */
        .neon-link {
            color: var(--neon-green);
            transition: text-shadow 0.3s ease, background-color 0.3s ease;
        }

        .neon-text-hover:hover {
            text-shadow: 0 0 6px rgba(255, 255, 255, 0.6),
                         0 0 12px var(--neon-green),
                         0 0 24px rgba(88, 154, 105, 0.6);
        }

        .neon-shadow {
            box-shadow: 0 0 12px rgba(88, 154, 105, 0.6),
                        0 0 30px rgba(88, 154, 105, 0.3);
        }

        .robot-image-glow {
            filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.4))
                    drop-shadow(0 0 16px rgba(88, 154, 105, 0.7));
            transition: transform 0.4s ease-out;
            max-width: 100%;
            height: auto;
        }

        .robot-image-glow:hover {
            transform: scale(1.03);
        }

        .hero-title {
            color: var(--neon-green);
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.3),
                         0 0 16px rgba(88, 154, 105, 0.8);
        }

        a {
            transition: background-color 0.3s ease, color 0.3s ease;
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
    <nav class="fixed top-0 left-0 right-0 z-10 bg-black neon-shadow p-4 md:flex md:justify-between md:items-center w-full">
        <div class="logo mb-3 md:mb-0 text-center md:text-left">
            <a href="{{ url('/') }}" class="text-xl font-bold uppercase tracking-widest neon-link neon-text-hover">
                AON Robotics
            </a>
        </div>

        <div class="links flex flex-wrap justify-center md:justify-end gap-x-4 gap-y-2">
            <a href="{{ url('/') }}" class="neon-link font-semibold p-2 rounded-md hover:bg-[#589a69]/10 neon-text-hover">Home</a>
            <a href="{{ url('/about') }}" class="neon-link font-semibold p-2 rounded-md hover:bg-[#589a69]/10 neon-text-hover">About</a>
            <a href="{{ url('/team_members') }}" class="neon-link font-semibold p-2 rounded-md hover:bg-[#589a69]/10 neon-text-hover">Team</a>
            <a href="{{ url('/project_management') }}" class="neon-link font-semibold p-2 rounded-md hover:bg-[#589a69]/10 neon-text-hover">Projects</a>
            <a href="{{ url('/sponsors') }}" class="neon-link font-semibold p-2 rounded-md hover:bg-[#589a69]/10 neon-text-hover">Sponsors</a>
            <a href="{{ url('/apply_now') }}" class="bg-[#589a69]/30 text-white font-bold p-2 rounded-lg hover:bg-[#589a69]/50 transition-colors duration-300">
                Apply Now
            </a>
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
                <a href="{{ url('/about') }}" class="inline-block py-3 px-8 text-lg font-bold rounded-xl border-2 border-[#589a69] neon-link hover:bg-[#589a69]/20 transition-all duration-300 shadow-md shadow-[#589a69]/40">
                    JOIN OUR TEAM
                </a>
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
                <div class="p-6 bg-gray-800/50 rounded-lg neon-shadow hover:bg-gray-700/50 transition-colors duration-300">
                    <div class="text-4xl font-bold neon-link mb-2">3X</div>
                    <p class="text-gray-400">State Champions</p>
                </div>
                <div class="p-6 bg-gray-800/50 rounded-lg neon-shadow hover:bg-gray-700/50 transition-colors duration-300">
                    <div class="text-4xl font-bold neon-link mb-2">12+</div>
                    <p class="text-gray-400">VEX Competitions</p>
                </div>
                <div class="p-6 bg-gray-800/50 rounded-lg neon-shadow hover:bg-gray-700/50 transition-colors duration-300">
                    <div class="text-4xl font-bold neon-link mb-2">95%</div>
                    <p class="text-gray-400">Success Rate in Matches</p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
