<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Member;
use App\Models\Wisata;
use Illuminate\Http\Request;

class landingpage extends Controller
{
    public function index()
    {
        $wisata = Wisata::all();
        $berita = Berita::all();
        $member = Member::all();
        return view('LandingPage', compact('wisata', 'berita', 'member'));
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
