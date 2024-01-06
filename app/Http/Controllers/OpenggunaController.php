<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OpenggunaController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('datapengguna', compact('user'));
    }
}
