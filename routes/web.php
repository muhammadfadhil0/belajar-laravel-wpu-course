<?php

use Illuminate\Support\Facades\Route;

//root

//kalau get di dalam "/" berarti mengakses dari url browser
//maksud view itu adalah file yang ada di dalam folder resources/views

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']);
});
