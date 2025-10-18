@extends('layout.app')

@section('title', 'About Us - AON Robotics')

@section('content')
  <h2 style="color:var(--neon-green);text-shadow:0 0 8px var(--neon-green);">About Us</h2>

  <div style="text-align:center;margin:20px 0;">
    <img src="{{ asset('pictures/team.jpg') }}" alt="AON Robotics Team"
         style="max-width:100%;height:auto;border-radius:12px;box-shadow:0 0 18px rgba(43,252,15,0.18);">
  </div>

  <p><strong>AON Robotics</strong> is a student-led robotics organization at the <strong>University of Puerto Rico at Mayagüez (UPRM)</strong>. Our mission is to innovate, design, and compete in robotics projects while promoting STEM education and hands-on engineering experiences.</p>

  <h3 style="color:var(--neon-green);">Our Goals</h3>
  <ul style="list-style:none;padding-left:0;">
    <li style="margin:8px 0;"><span style="color:var(--neon-green);margin-right:8px;">•</span>Develop cutting-edge robotics projects</li>
    <li style="margin:8px 0;"><span style="color:var(--neon-green);margin-right:8px;">•</span>Provide learning opportunities for UPRM students</li>
    <li style="margin:8px 0;"><span style="color:var(--neon-green);margin-right:8px;">•</span>Compete in local and international robotics competitions</li>
    <li style="margin:8px 0;"><span style="color:var(--neon-green);margin-right:8px;">•</span>Collaborate with industry and research partners</li>
  </ul>

  <h3 style="color:var(--neon-green);">Contact</h3>
  <p>Reach out: <a href="mailto:aonrobotics@uprm.edu" style="color:var(--neon-green);">aonrobotics@uprm.edu</a></p>

