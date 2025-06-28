<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use Illuminate\Http\Request;

class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $anggota = anggota::all();
        return view('Anggota.index', compact('anggota','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Anggota.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $anggota = new Anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->alamat = $request->alamat;
        $anggota->nohp = $request->nohp;
        $anggota->tgl_daftar = $request->tgl_daftar;
        $anggota->save();

        return redirect('/anggota');
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
         $anggota = Anggota::find($id);
        return view('anggota.edit',compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $anggota = Anggota::find($id);
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->alamat = $request->alamat;
        $anggota->nohp = $request->nohp;
        $anggota->tgl_daftar = $request->tgl_daftar;
        $anggota->save();

        return redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $anggota = Anggota::find($id);
        $anggota->delete();

        return redirect('/anggota');
    }
}
