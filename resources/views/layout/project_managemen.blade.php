@extends('layout.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AON ROBOTICS - Project Management</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        :root {
            --neon-green: #2bfc0f;
            --black: #000;
            --silver: #c0c0c0;
        }

        body {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background: linear-gradient(180deg, var(--black) 0%, #1a1a1a 100%);
            color: var(--silver);
            margin: 0;
            padding: 0;
        }

        header {
            background: var(--black);
            color: var(--neon-green);
            padding: 25px;
            text-align: center;
            border-bottom: 2px solid var(--neon-green);
            text-shadow: 0 0 8px var(--neon-green);
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 25px;
            background-color: #121212;
            padding: 12px 0;
            border-bottom: 1px solid var(--silver);
        }

        nav a {
            color: var(--silver);
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        nav a:hover {
            color: var(--neon-green);
            text-shadow: 0 0 8px var(--neon-green);
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: var(--neon-green);
            text-shadow: 0 0 8px var(--neon-green);
            margin-bottom: 30px;
        }

        .project-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .project-card {
            background-color: #181818;
            border: 1px solid var(--silver);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(43, 252, 15, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 15px var(--neon-green);
            border-color: var(--neon-green);
        }

        .project-card h3 {
            color: var(--neon-green);
            margin-bottom: 10px;
        }

        .project-card p {
            color: var(--silver);
            font-size: 0.95rem;
        }

        button {
            background-color: var(--neon-green);
            color: var(--black);
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 0 10px var(--neon-green);
            transition: all 0.3s ease;
            margin-top: 25px;
        }

        button:hover {
            background-color: var(--silver);
            color: var(--black);
            box-shadow: 0 0 20px var(--neon-green);
        }

        footer {
            background: #111;
            color: var(--silver);
            text-align: center;
            padding: 15px;
            border-top: 2px solid var(--neon-green);
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header>
        <h1>AON ROBOTICS - Project Management</h1>
    </header>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/team_members') }}">Team</a>
        <a href="{{ url('/sponsors') }}">Sponsors</a>
        <a href="{{ url('/project_management') }}">Projects</a>
    </nav>

    <div class="container">
        <h2>Active Projects</h2>

        <div class="project-list">
            <div class="project-card">
                <h3>Autonomous Rover</h3>
                <p>Building an autonomous rover capable of terrain mapping and obstacle avoidance using AI-based navigation.</p>
            </div>

            <div class="project-card">
                <h3>Vision System</h3>
                <p>Developing a vision recognition system for real-time object detection and robotic interaction.</p>
            </div>

            <div class="project-card">
                <h3>Control Panel</h3>
                <p>Creating a web dashboard to monitor and control robot activities remotely and securely.</p>
            </div>
        </div>

        <button onclick="window.location.href='{{ url('/add_project') }}'">+ Add New Project</button>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} AON ROBOTICS. All rights reserved.</p>
    </footer>
</body>
</html>
