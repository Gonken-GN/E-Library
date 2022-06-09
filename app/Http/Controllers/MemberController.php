<?php

namespace App\Http\Controllers;

use App\Models\bibliografi;
use App\Models\member;
use App\Models\koleksi;
use App\Models\sirkulasi;
use App\Models\pengembalian;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $member = member::all();
        $koleksi = koleksi::all();
        return view('member.index', ['members' => $member, 'koleksis' => $koleksi]);
    }
    public function create(){
        $bibliografi = member::all();
        return view('member.create', compact('bibliografi'));
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'first_name' => 'required',
            'last_name' => '',
            'gender' => 'required',
            'status_member' => '',
            'alamat' => '',
            'email_member'=> 'required',
            'nohp_member'=> '',
        ]);
        member::create($validateData);
        return redirect()->route('members.index')->with('pesan', "Penambahan Data {$validateData['first_name']} {{$validateData['last_name']}} berhasil");
    }
    public function show($id){
        // $bibliografis = bibliografi::find(1);
        $member = member::with('sirkulasis')->where('id', $id)->first();
        $member2 = member::where('id', $id)->first();
        $pengembalian = pengembalian::all();
        $sirkulasi = sirkulasi::all();
        $koleksi = koleksi::all();
        $bibliografi = bibliografi::all();
        return view('member.show', ['members' => $member, 'members2' => $member2, 'pengembalians' => $pengembalian, 'sirkulasi' => $sirkulasi]);
        // return view('bibliografi.show', ['bibliografis' => $bibliografis,]);
    }
    public function edit(member $member){
        return view('member.edit', ['member' => $member]);
    }
    public function update(Request $request, member $member){
        $validateData = $request->validate([
            'first_name' => 'required|unique:members,first_name,' . $member->id,
            'last_name' => '',
            'gender' => 'required',
            'status_member' => '',
            'alamat' => '',
            'email_member'=> 'required',
            'nohp_member'=> '',
        ]);
       $member->update($validateData);
        
        return redirect()->route('members.index', ['member' => $member->id])->with('pesan', "Member dengan nama $member->first_name  $member->last_name berhasil ditambah");
    }
    public function destroy(member $member){
        $member->delete();
        return redirect()->route('members.index')->with('pesan', "Hapus data $member->first_name $member->last_name Berhasil");
    }
}
