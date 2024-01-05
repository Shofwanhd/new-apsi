<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingpage extends Controller
{
    public function index()
    {
        return view('LandingPage');
    }
    public function wisata()
    {
        return view('wisata');
    }
    public function membership()
    {
        return view('membership');
    }
    public function berita()
    {
        return view('berita');
    }
}
