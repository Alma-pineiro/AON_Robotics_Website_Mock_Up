<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsors - AON Robotics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 0; padding: 0; }
        header { background: #000; color: white; padding: 20px; text-align: center; }
        nav { margin: 10px 0; text-align: center; }
        nav a { margin: 0 15px; text-decoration: none; color: #01550c; font-weight: bold; }
        .container { padding: 30px; max-width: 1000px; margin: auto; text-align: center; }
        footer { margin-top: 40px; background: #064227; color: white; padding: 10px; text-align: center; }
        
        /* Sponsors Grid */
        .sponsors-grid { display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin-top: 30px; }
        .sponsor-card { width: 200px; height: 120px; background: white; border: 1px solid #ccc; border-radius: 10px; display: flex; justify-content: center; align-items: center; padding: 10px; }
        .sponsor-card img { max-width: 100%; max-height: 100%; object-fit: contain; }

        /* Call to Action */
        .cta { margin-top: 50px; background: #28a745; color: white; padding: 30px; border-radius: 10px; }
        .cta h3 { margin-bottom: 15px; }
        .btn-primary { background-color: #fff; color: #28a745; border: none; padding: 12px 25px; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .btn-primary:hover { background-color: #f1f1f1; }
    </style>
</head>
<body>
    <header>
        <h1>AON Robotics - Sponsors</h1>
    </header>

     <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About Us</a>
        <a href="{{ url('/team_members') }}">Team Members</a>
        <a href="{{ url('/sponsors') }}">Sponsors</a>
        <a href="{{ url('/project_management') }}">Poroject Management</a>
    </nav>
    <div class="container">

        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 20px; text-align: center;">
            {{ session('success') }}
            </div>
        @endif
        <h2>Our Valued Sponsors</h2>
        <p>We are grateful to our sponsors who make our robotics projects and competitions possible.</p>

        <!-- Sponsors Grid -->
        <div class="sponsors-grid">
            <div class="sponsor-card">
                <img src="https://via.placeholder.com/150x80?text=Sponsor+1" alt="Sponsor 1">
            </div>
            <div class="sponsor-card">
                <img src="https://via.placeholder.com/150x80?text=Sponsor+2" alt="Sponsor 2">
            </div>
            <div class="sponsor-card">
                <img src="https://via.placeholder.com/150x80?text=Sponsor+3" alt="Sponsor 3">
            </div>
            <div class="sponsor-card">
                <img src="https://via.placeholder.com/150x80?text=Sponsor+4" alt="Sponsor 4">
            </div>
        </div>
        <!-- Donation Needs Section -->
<div class="donation-section" style="margin-top: 50px; text-align: left;">
    <h2 style="text-align: center;">Support Us with Materials</h2>
    <p style="text-align: center;">Select a specific robot part or material you’d like to donate to help our team succeed.</p>

    <form action="{{ url('/donate') }}" method="POST" style="max-width: 600px; margin: 20px auto; background: #fff; padding: 20px; border-radius: 10px; border: 1px solid #ccc;">
        @csrf
        <label for="material">Choose a material/part:</label>
        <select id="material" name="material" style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc;" required>
            <option value="" disabled selected>Select an item</option>
            <option value="motors">Motors</option>
            <option value="sensors">Sensors</option>
            <option value="microcontrollers">Microcontrollers (Arduino, Raspberry Pi)</option>
            <option value="metal_parts">Metal Parts / Frames</option>
            <option value="wheels">Wheels & Gears</option>
            <option value="batteries">Batteries & Power Units</option>
            <option value="tools">Tools & Workshop Equipment</option>
            <option value="other">Other (specify below)</option>
        </select>

        <label for="other_material">If "Other", please specify:</label>
        <input type="text" id="other_material" name="other_material" placeholder="Enter material..." style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc;">

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" placeholder="Enter quantity" style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc;" required>

        <label for="donor_name">Your Name:</label>
        <input type="text" id="donor_name" name="donor_name" placeholder="Enter your name" style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc;" required>

        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" style="width: 100%; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc;" required>

        <button type="submit" style="background-color: #064227; color: white; border: none; padding: 12px 20px; border-radius: 5px; cursor: pointer; margin-top: 10px;">
            Submit Donation
        </button>
    </form>
</div>

        <!-- Call to Action -->
        <div class="cta">
            <h3>Want to Sponsor Us?</h3>
            <p>Partner with AON Robotics and support the next generation of innovators at UPRM.</p>
            <button class="btn-primary" onclick="window.location.href='{{ url('/contact') }}'">Become a Sponsor</button>
        </div>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} AON Robotics. All rights reserved.</p>
    </footer>
</body>
</html>
