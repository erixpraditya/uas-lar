<?php

namespace App\Http\Controllers;

use App\Models\perpus;
use Illuminate\Http\Request;

class perpusController extends Controller
{
    public function index()
    {
         $nomor = 1;
        $perpus = perpus::all();
        return view('Perpus.index', compact('perpus','nomor'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Perpus.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $perpus = new Perpus;
        $perpus->judul = $request->judul;
        $perpus->penulis = $request->penulis;
        $perpus->tahunterbit = $request->tahunterbit;
        $perpus->penerbit = $request->penerbit;
        $perpus->kategori = $request->kategori;
        $perpus->save();

        return redirect('/perpus');
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
    public function edit($id)
    {
        // form edit
        $perpus = Perpus::find($id);
        return view('perpus.edit',compact('perpus'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $perpus = Perpus::find($id);
        $perpus->judul = $request->judul;
        $perpus->penulis = $request->penulis;
        $perpus->tahunterbit = $request->tahunterbit;
        $perpus->penerbit = $request->penerbit;
        $perpus->kategori = $request->kategori;
        $perpus->save();

        return redirect('/perpus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $perpus = Perpus::find($id);
        $perpus->delete();

        return redirect('/perpus');
    }
}
