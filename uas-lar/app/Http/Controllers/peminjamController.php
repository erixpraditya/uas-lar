<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Peminjam;
use App\Models\Perpus;
use Illuminate\Http\Request;

class peminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $nomor = 1;
        $peminjam = peminjam::all();
        return view('Peminjam.index', compact('peminjam','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $perpus = Perpus::all();
        $anggota = Anggota::all();
        return view('Peminjam.form',compact('perpus', 'anggota'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $peminjam = new Peminjam();
        $peminjam->perpuses_id = $request->perpuses;
        $peminjam->anggotas_id = $request->anggotas;
        $peminjam->tgl_pinjam = $request->tgl_pinjam;
        $peminjam->tgl_kembali = $request->tgl_kembali;
        $peminjam->status = $request->status;
        $peminjam->save();

        return redirect('/peminjam');
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
