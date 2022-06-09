@extends('layouts.app', ['activePage' => 'koleksi', 'titlePage' => __('')])
@section('content') 
  <div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Insert Bibliografi</h1>
        <hr>
   
        <form action="{{ route('koleksis.update', ['koleksi' => $koleksi->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
          @csrf
          <div class="mb-3">
            <label class="form-label" for="jenis_koleksi">Jenis Koleksi</label>
            <input type="text" id="jenis_koleksi" name="jenis_koleksi" value="{{ old('jenis_koleksi') ?? $koleksi->jenis_koleksi }}"
              class="form-control @error('jenis_koleksi') is-invalid @enderror">
            @error('jenis_koleksi')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="bibliografi_id">Koleksi Bibliografi</label>
            <select class="form-select" id="bibliografi_id" name="bibliografi_id">
                @foreach ($bibliografi as $biblio)
                   
                   <option value="{{ $biblio->id }}" {{ old('bibliografi_id') ?? $koleksi->bibliografi_id==$biblio->id ? 'selected': '' }}>{{ $biblio->judul }}</option>
                @endforeach
             </select>
           
          </div>
          
          <div class="mb-3">
            <label class="form-label">Status Koleksi</label>
            <div class="d-flex">
              <div class="form-check me-3">
                <input class="form-check-input" type="radio" name="status_koleksi"
                  id="ada" value="ada"
                  {{ old('status_koleksi')??$koleksi->status_koleksi=='ada' ? 'checked': '' }}>
                <label class="form-check-label" for="ada">Tersedia</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status_koleksi"
                  id="pinjam" value="pinjam"
                  {{ old('status_koleksi')??$koleksi->status_koleksi=='pinjam' ? 'checked': '' }}>
                <label class="form-check-label" for="pinjam">Tidak Tersedia (dipinjam)</label>
              </div>
            </div>
            @error('status_koleksi')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Kondisi Koleksi</label>
            <div class="d-flex">
              <div class="form-check me-3">
                <input class="form-check-input" type="radio" name="kondisi_koleksi"
                  id="baik" value="baik"
                  {{ old('kondisi_koleksi')??$koleksi->kondisi_koleksi=='baik' ? 'checked': '' }}>
                <label class="form-check-label" for="baik">Bagus</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="kondisi_koleksi"
                  id="jelek" value="jelek"
                  {{ old('kondisi_koleksi')??$koleksi->kondisi_koleksi=='jelek' ? 'checked': '' }}>
                <label class="form-check-label" for="jelek">Jelek</label>
              </div>
            </div>
            @error('kondisi_koleksi')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary mb-2">Daftar</button>
        </form>
   
      </div>
    </div>
  </div>
  @endsection
@include('footer')