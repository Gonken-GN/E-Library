<?php

namespace App\Http\Controllers;
use App\Models\bibliografi;
use App\Models\member;
use App\Models\koleksi;
use App\Models\sirkulasi;
use App\Models\pengembalian;

use Illuminate\Http\Request;

class SirkulasiController extends Controller
{
    public function index(){
        $bibliografi = bibliografi::all();
        $member = member::all();
        $koleksi = koleksi::all();
        $sirkulasi = sirkulasi::where('status', 'Y')->get();
        return view('sirkulasi.index', ['members' => $member, 'koleksis' => $koleksi, 'sirkulasis' => $sirkulasi, 'bibliografis' => $bibliografi]);
    }
    public function create(){
        $bibliografi = bibliografi::all();
        $member = member::all();
        $koleksi = koleksi::all();
        $sirkulasi = sirkulasi::all();
        return view('sirkulasi.create', ['members' => $member, 'koleksis' => $koleksi, 'sirkulasis' => $sirkulasi, 'bibliografis' => $bibliografi]);
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'member_id' => 'required',
            'koleksi_id' => 'required',
            'tanggal_pinjam' => 'required',
            'lama_pinjam' => 'required',
        ]); 
        $sirkulasi = new sirkulasi();
        $sirkulasi->member_id = $validateData['member_id'];
        $sirkulasi->koleksi_id = $validateData['koleksi_id'];
        $sirkulasi->tanggal_pinjam = $validateData['tanggal_pinjam'];
        $sirkulasi->lama_pinjam = $validateData['lama_pinjam'];
        $sirkulasi->status = "Y";
        $sirkulasi->save();
       
        sirkulasi::create($validateData);

        koleksi::where('id', $validateData['koleksi_id'])->update(['status_koleksi' => "pinjam"]);
        return redirect()->route('sirkulasis.index')->with('pesan', "Penambahan Data berhasil");
    }
    public function edit(sirkulasi $sirkulasi){
        $bibliografi = bibliografi::all();
        $member = member::all();
        $koleksi = koleksi::all();
        $sirkulasi = sirkulasi::all();
        return view('sirkulasi.edit', ['sirkulasi' => $sirkulasi, 'member' => $member, 'koleksi' => $koleksi, 'bibliografi' => $bibliografi]);
    }
    public function update(Request $request, sirkulasi $sirkulasi){
        sirkulasi::where('id', $sirkulasi->id)->update(['status' => 'N']);
        koleksi::where('id', $sirkulasi->koleksi_id)->update(['status_koleksi' => 'ada']);
        $pengembalian = new pengembalian();
        $pengembalian->sirkulasi_id = $sirkulasi->id;
        $pengembalian->tanggal_pengembalian = date('Y-m-d');
        $pengembalian->save();
        return redirect()->route('sirkulasis.index', ['sirkulasi' => $sirkulasi->id])->with('pesan', "Berhasil dikembalikan");
    }
    public function destroy(sirkulasi $sirkulasi){
        $sirkulasi->delete();
        return redirect()->route('sirkulasis.index')->with('pesan', "");
    }
}
