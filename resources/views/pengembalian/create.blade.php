@extends('layouts.app', ['activePage' => 'pengembalian', 'titlePage' => __('')])
@section('content') 
<div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Insert Sirkulasi</h1>
        <hr>
   
        <form action="{{ route('pengembalians.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="mb-3">
            <label class="form-label" for="sirkulasi_id">Member</label>
            <select class="form-select" id="sirkulasi_id" name="sirkulasi_id">
                @foreach ($sirkulasis as $sirkulasi)
                   @if($sirkulasi->status == "Y")
                   <option value="{{ $sirkulasi->id }}" {{ old('sirkulasi_id')==$sirkulasi->id ? 'selected': '' }}>{{$sirkulasi->koleksi->id}} - {{ $sirkulasi->koleksi->bibliografi->judul}} </option>
                 
                   @endif
                
                @endforeach
             </select>
          </div>
        
          <div class="mb-3">
            <label class="form-label" for="tanggal_pengembalian">Tanggal Pengembalian</label>
            <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" value="{{ old('tanggal_pengembalian') }}"
              class="form-control @error('tanggal_pengembalian') is-invalid @enderror" min="{{now()->toDateString('Y-m-d')}}">
            @error('tanggal_pengembalian')
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