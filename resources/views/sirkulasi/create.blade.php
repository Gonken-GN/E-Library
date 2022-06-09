@extends('layouts.app', ['activePage' => 'sirkulasi', 'titlePage' => __('')])
@section('content') 
<div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Insert Sirkulasi</h1>
        <hr>
   
        <form action="{{ route('sirkulasis.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="mb-3">
            <label class="form-label" for="member_id">Member</label>
            <select class="form-select" id="member_id" name="member_id">
                @foreach ($members as $member)  
                   <option value="{{ $member->id }}" {{ old('member_id')==$member->id ? 'selected': '' }}>{{ $member->first_name}} {{$member->last_name}}</option>
                @endforeach
             </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="koleksi_id">Koleksi yang Tersedia</label>
            <select class="form-select" id="koleksi_id" name="koleksi_id">
                @foreach ($koleksis as $koleksi)
                   @if($koleksi->status_koleksi == "ada" && $koleksi->kondisi_koleksi == "baik")
                   <option value="{{ $koleksi->id }}" {{ old('koleksi_id')==$koleksi->id ? 'selected': '' }}>{{ $koleksi->bibliografi->judul}} {{$member->last_name}}</option>
                   @endif
                @endforeach
             </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="tanggal_pinjam">Tanggal Pinjam</label>
            <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}" 
              class="form-control @error('tanggal_pinjam') is-invalid @enderror">
            @error('tanggal_pinjam')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="lama_pinjam">Lama Peminjaman (hari)</label>
            <input type="number" id="lama_pinjam" name="lama_pinjam" value="{{ old('lama_pinjam') }}"
              class="form-control @error('lama_pinjam') is-invalid @enderror">
            @error('lama_pinjam')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mb-2">Daftar</button>
        </form>
   
      </div>
    </div>
  </div>
  @endsection
{{-- @include('footer') --}}