@extends('layout.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - AON Robotics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0; }
        header { background: #000; color: white; padding: 20px; text-align: center; }
        nav { margin: 10px 0; text-align: center; }
        nav a { margin: 0 15px; text-decoration: none; color: #01550c; font-weight: bold; }
        .container { padding: 30px; max-width: 1000px; margin: auto; text-align: center; }
        .member-card { width: 200px; text-align: center; border: 1px solid #ccc; padding: 10px; border-radius: 10px; background: #fff; }
        .member-card img { width: 100%; height: auto; border-radius: 50%; }
        .team-grid { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin-top: 20px; }
        footer { margin-top: 40px; background: #064227; color: white; padding: 10px; text-align: center; }
    </style>
</head>
<body>
    <header>
        <h1>AON Robotics - Our Team</h1>
    </header>

        <!-- <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About Us</a>
        <a href="{{ url('/team_members') }}">Team Members</a>
        <a href="{{ url('/sponsors') }}">Sponsors</a>
        <a href="{{ url('/project_management') }}">Poroject Management</a>
        </nav> -->

    <div class="container">
        <h2>Meet Our Team</h2>
        <div class="team-grid">
            <!-- Member 1 -->
            <div class="member-card">
                <img src="{{ asset('images/member1.jpg') }}" alt="Member 1">
                <h4>Juan Perez</h4>
                <p>Mechanical Team</p>
            </div>

            <!-- Member 2 -->
            <div class="member-card">
                <img src="{{ asset('images/member2.jpg') }}" alt="Member 2">
                <h4>Maria Rodriguez</h4>
                <p>Software Team</p>
            </div>

            <!-- Member 3 -->
            <div class="member-card">
                <img src="{{ asset('images/member3.jpg') }}" alt="Member 3">
                <h4>Carlos Rivera</h4>
                <p>Mechanical Team</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} AON Robotics. All rights reserved.</p>
    </footer>
</body>
</html>
