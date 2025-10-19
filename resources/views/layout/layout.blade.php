<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AON Robotics')</title>
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
            padding-top: 80px; /* IMPORTANT: Ensures content starts below the fixed navbar */
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
        
        /* New logo glow style */
        .neon-image-glow {
            filter: drop-shadow(0 0 4px rgba(255, 255, 255, 0.3))
                    drop-shadow(0 0 8px rgba(88, 154, 105, 0.5));
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
    <nav class="fixed top-0 left-0 right-0 z-10 bg-black neon-shadow p-4 md:flex md:justify-between md:items-center w-full">
        <div class="logo mb-3 md:mb-0 text-center md:text-left">
            <a href="{{ url('/') }}" class="inline-block">
                <img src="{{ asset('pictures/logo.png') }}" 
                     alt="AON Robotics Logo" 
                     class="h-12 neon-image-glow" >
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

    <main class="p-8 max-w-6xl mx-auto min-h-screen">
        @yield('content')
    </main>
</body>
</html>