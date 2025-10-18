<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.home');
});

Route::get('/team_members',  function () {
    return view('layout.team_members');
});

Route::get('/sponsors',  function () {
    return view('layout.sponsors');
});

Route::get('/about',  function () {
    return view('layout.about');
});


Route::get('/apply_now',  function () {
    return view('layout.apply_now');
});

Route::get('/project_management',  function () {
    return view('layout.project_management');
});

Route::post('/donate', function (Request $request) {
   
    return back()->with('success', 'Thank you for your donation offer! We will communicate with you soon.');
});