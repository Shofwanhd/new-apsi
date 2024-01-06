<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class BtiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('belitiket');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('bukti')) {
            $image = $request->file('bukti');
            $input['bukti'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $input['bukti']);
            $image_path = '/images/' . $input['bukti'];
        } else {
            $image_path = '/images/default.jpg';
        }

        $wisata = new Transaksi();
        $wisata->bukti = $image_path;
        $wisata->id_user = $request->id_user;
        $wisata->nm_transaksi = $request->nm_transaksi;
        $wisata->tgl = $request->tgl;
        $wisata->tgl_exp = $request->tgl;
        $wisata->categori = $request->categori;
        $wisata->status = $request->status;
        $wisata->total = $request->total;
        $wisata->qty = $request->qty;
        $wisata->save();

        return redirect()->route('btiket.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
