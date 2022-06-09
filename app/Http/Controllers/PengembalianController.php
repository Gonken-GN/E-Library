<?php

namespace App\Http\Controllers;

use App\Models\pengembalian;
use App\Models\bibliografi;
use App\Models\koleksi;
use App\Models\member;
use App\Models\sirkulasi;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bibliografi = bibliografi::all();
        $member = member::all();
        $koleksi = koleksi::all();
        $pengembalian = pengembalian::all();
        $sirkulasi = sirkulasi::all();
        return view('pengembalian.index', ['members' => $member, 'koleksis' => $koleksi, 'pengembalians' => $pengembalian, 'bibliografis' => $bibliografi, 'sirkulasis' => $sirkulasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bibliografi = bibliografi::all();
        $member = member::all();
        $koleksi = koleksi::all();
        $pengembalian = pengembalian::all();
        $sirkulasi = sirkulasi::all();
        return view('pengembalian.create', ['members' => $member, 'koleksis' => $koleksi, 'pengembalians' => $pengembalian, 'bibliografis' => $bibliografi, 'sirkulasis' => $sirkulasi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'sirkulasi_id' => 'required',
            'tanggal_pengembalian' => 'required',
        ]); 
        pengembalian::create($validateData);
        $sirkulasi = sirkulasi::where('id', $validateData['sirkulasi_id'])->first();
        sirkulasi::where('id', $validateData['sirkulasi_id'])->update(['status' => 'N']);
        koleksi::where('id', $sirkulasi->koleksi_id)->update(['status_koleksi' => 'ada']);
        return redirect()->route('pengembalians.index')->with('pesan', "Penambahan Data berhasil");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(pengembalian $pengembalian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(pengembalian $pengembalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengembalian $pengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengembalian $pengembalian)
    {
        $pengembalian->delete();
        return redirect()->route('pengembalians.index')->with('pesan', "1 record pengembalian berhasil dihapus");
    }
}
