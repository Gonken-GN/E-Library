<?php

namespace App\Http\Controllers;
use App\Models\bibliografi;
use App\Models\koleksi;
use App\Models\member;
use Illuminate\Http\Request;


class KoleksiController extends Controller
{
    public function index(){
        $bibliografis = bibliografi::all();
        $koleksi = koleksi::all();
        return view('koleksi.index', ['bibliografis' => $bibliografis, 'koleksis' => $koleksi]);
    }
    public function create(){
        $bibliografi = bibliografi::all();
        return view('koleksi.create', compact('bibliografi'));
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'jenis_koleksi' => 'required',
            'bibliografi_id' => '',
            'status_koleksi' => 'required',
            'kondisi_koleksi' => 'required',
        ]);
        koleksi::create($validateData);
        return redirect()->route('bibliografis.index')->with('pesan', "Penambahan Data {$validateData['jenis_koleksi']} berhasil");
    }
    public function edit(koleksi $koleksi){
        $bibliografi = bibliografi::all();
        return view('koleksi.edit', ['koleksi' => $koleksi, 'bibliografi' => $bibliografi]);
    }
    public function update(Request $request, koleksi $koleksi){
        $validateData = $request->validate([
            'jenis_koleksi' => 'required|unique:koleksis,jenis_koleksi,' . $koleksi->id,
            'bibliografi_id' => '',
            'status_koleksi' => 'required',
            'kondisi_koleksi' => 'required',
        ]);
       $koleksi->update($validateData);
        
        return redirect()->route('koleksis.index', ['koleksi' => $koleksi->id])->with('pesan', "Bibliografi dengan judul $koleksi->jenis_koleksi berhasil ditambah");
    }
    public function destroy(koleksi $koleksi){
        $koleksi->delete();
        return redirect()->route('koleksis.index')->with('pesan', "Hapus data $koleksi->jenis_koleksi Berhasil");
    }
}
