@extends('layout.app')

@section('title', 'About Us - AON Robotics')

@section('content')
<div class="content-container">

    <h2 class="section-title neon-glow-text">About Us</h2>

    <div class="team-image-container">
        <img src="{{ asset('pictures/team.jpg') }}" alt="AON Robotics Team" class="team-image">
    </div>

    <div class="about-summary-card">
        <p class="summary-text">
            <strong>AON Robotics</strong> is a student-led robotics organization at the <strong>University of Puerto Rico at Mayagüez (UPRM)</strong>. Our mission is to innovate, design, and compete in robotics projects while promoting STEM education and hands-on engineering experiences.
        </p>
    </div>

    <div class="goals-contact-grid">
        <div class="goals-section">
            <h3 class="section-subtitle neon-glow-text">Our Goals</h3>
            <ul class="goal-list">
                <li class="goal-item"><span class="neon-bullet">>></span> Develop cutting-edge robotics projects</li>
                <li class="goal-item"><span class="neon-bullet">>></span> Provide learning opportunities for UPRM students</li>
                <li class="goal-item"><span class="neon-bullet">>></span> Compete in local and international robotics competitions</li>
                <li class="goal-item"><span class="neon-bullet">>></span> Collaborate with industry and research partners</li>
            </ul>
        </div>

        <div class="contact-section">
            <h3 class="section-subtitle neon-glow-text">Contact</h3>
            <p class="contact-text">
                Reach out to us and let's build the future:
            </p>
            <p class="contact-email">
                <a href="mailto:aonrobotics@uprm.edu" class="neon-link">aonrobotics@uprm.edu</a>
            </p>
            <hr class="neon-separator">
        </div>
    </div>
</div>
@endsection