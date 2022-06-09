<?php

namespace App\Http\Controllers;

use App\Models\bibliografi;
use App\Models\koleksi;
use App\Models\member;
use Illuminate\Http\Request;

class BibliografiController extends Controller
{
    public function index(){
        $bibliografis = bibliografi::all();
        $koleksi = koleksi::all();
        $member = member::all();
        return view('bibliografi.index', ['bibliografis' => $bibliografis, 'koleksis' => $koleksi, 'members' => $member]);
    }
    public function create(){
        return view('bibliografi.create');
    }
    public function store(Request $request){
        if($request->hasFile('gambar')){
            $image = $request->file('gambar');
            $file = $request->file('gambar')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $final = $filename.'_'.time().'.'.$extension;
            $image->move(public_path('/img'), $final);
        }else{
            $final = "noimg.jpg";
        }
        
        $validateData = $request->validate([
            'judul' => 'required',
            'edisi' => '',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'isbn' => 'required|size:10',
            'kategori' => '',
            'lokasi' => '',
            'jumlah' => '',
            'sinopsis' => '',
            'gambar' => '',
        ]);
        $bibliografis = new bibliografi();
        $bibliografis->judul = $validateData['judul'];
        $bibliografis->edisi = $validateData['edisi'];
        $bibliografis->penulis = $validateData['penulis'];
        $bibliografis->penerbit = $validateData['penerbit'];
        $bibliografis->tahun = $validateData['tahun'];
        $bibliografis->sinopsis = $validateData['sinopsis'];
        $bibliografis->kategori = $validateData['kategori'];
        $bibliografis->isbn = $validateData['isbn'];
        $bibliografis->lokasi_penyimpanan = $validateData['lokasi'];
        $bibliografis->jumlah_halaman = $validateData['jumlah'];
        $bibliografis->gambar = $final;
        $bibliografis->save();
        return redirect()->route('bibliografis.index')->with('pesan', "Bibliografi dengan judul $bibliografis->judul berhasil ditambah");
    }
    public function show($id){
        // $bibliografis = bibliografi::find(1);
        $bibliografis = bibliografi::with('koleksis')->where('id', $id)->first();
        $bibliografi2 = bibliografi::all();
        return view('bibliografi.show', ['bibliografis' => $bibliografis, 'bibliografi2' => $bibliografi2]);
        // return view('bibliografi.show', ['bibliografis' => $bibliografis,]);
    }
    public function edit(bibliografi $bibliografi){
        return view('bibliografi.edit', ['bibliografi' => $bibliografi]);
    }
    public function update(Request $request, bibliografi $bibliografi){
        if($request->hasFile('gambar')){
            $image = $request->file('gambar');
            $file = $request->file('gambar')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $final = $filename.'_'.time().'.'.$extension;
            $image->move(public_path('/img'), $final);
        }else{
            $final = "noimg.jpg";
        }
        $validateData = $request->validate([
            'judul' => 'required|unique:bibliografis,judul,' .$bibliografi->id,
            'edisi' => '',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'isbn' => 'required|size:10',
            'kategori' => '',
            'lokasi_penyimpanan' => '',
            'jumlah_halaman' => '',
            'sinopsis' => '',
            'gambar' => '',
        ]);
       
        bibliografi::where('id', $bibliografi->id)->update($validateData);
        bibliografi::where('id', $bibliografi->id)->update(['gambar' => $final]);
        return redirect()->route('bibliografis.show', ['bibliografi' => $bibliografi->id])->with('pesan', "Bibliografi dengan judul $bibliografi->judul berhasil ditambah");
    }
    public function destroy(bibliografi $bibliografi){
        $bibliografi->delete();
        return redirect()->route('bibliografis.index')->with('pesan', "Hapus data $bibliografi->judul Berhasil");
    }
}
