<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtransaksiController extends Controller
{
    public function index()
    {
        $owner = Transaksi::all();
        $user = Transaksi::where('id_user', '=', Auth::user()->id)->get();

        return view('datatransaksi', compact('owner', 'user'));
    }
}
