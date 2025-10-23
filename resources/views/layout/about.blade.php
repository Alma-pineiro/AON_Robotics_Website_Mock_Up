@extends('layout.app')

@section('title', 'About Us - AON Robotics')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div class="content-container futuristic-bg">

    <!-- Title Section -->
    <h2 class="section-title text-center fade-in-up">
        <span class="text-block"> ABOUT US</span>
    </h2>
    <hr class="soft-divider">

    <!-- Team Image -->
<div style="display: flex; justify-content: center; margin: 2rem 0;">
    <img 
        src="{{ asset('pictures/team.jpg') }}" 
        alt="AON Robotics Team"
        style="width: 50%; max-width: 500px; height: auto; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.3s ease;"
    >
</div>



    <!-- Summary Section -->
    <div class="about-summary-card card-bg rounded-xl p-6 mt-10 fade-in-up delay-2">
        <p class="summary-text monospaced-text leading-relaxed text-gray-700 text-lg">
            <span class="accent">// STATUS: OPERATIONAL</span>
            <br><br>
            <strong class="text-primary">AON Robotics</strong> is a student-led robotics organization at the 
            <strong class="text-accent">University of Puerto Rico at Mayagüez (UPRM)</strong>.
            <br><br>
            Our mission is to <em>// INNOVATE // DESIGN // COMPETE</em> — building intelligent machines, promoting hands-on learning, and inspiring the next generation of engineers.
        </p>
    </div>

    <!-- Goals + Contact Grid -->
    <div class="goals-contact-grid mt-12">
        <!-- Goals Section -->
        <div class="goals-section card-bg rounded-xl p-6 fade-in-up delay-3">
            <h3 class="section-subtitle text-primary mb-4">
                TARGET PROTOCOLS
            </h3>
            <ul class="goal-list monospaced-text space-y-3 text-gray-700">
                <li><span class="arrow">→</span> Develop <strong>cutting-edge robotics</strong> projects</li>
                <li><span class="arrow">→</span> Provide <strong>hands-on learning</strong> opportunities for UPRM students</li>
                <li><span class="arrow">→</span> Compete in <strong>local & international</strong> competitions</li>
                <li><span class="arrow">→</span> Collaborate with <strong>industry & research</strong> partners</li>
            </ul>
        </div>

        <!-- Contact Section -->
        <div class="contact-section card-bg rounded-xl p-6 fade-in-up delay-4">
            <h3 class="section-subtitle text-primary mb-4">
                INITIATE CONNECTION
            </h3>
            <p class="contact-text monospaced-text text-gray-700 mb-3">
                Reach out to us and let's <strong>build the future</strong>_
            </p>
            <p class="contact-email text-lg">
                <a href="mailto:aonrobotics@uprm.edu" class="contact-link">
                    aonrobotics@uprm.edu
                </a>
            </p>
            <hr class="soft-divider mt-4">
        </div>
    </div>
</div>
@endsection
