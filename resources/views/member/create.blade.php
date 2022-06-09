@extends('layouts.app', ['activePage' => 'member', 'titlePage' => __('')])
@section('content') 
  <div class="container pt-4 bg-white">
    <div class="row">
      <div class="col-md-8 col-xl-6">
        <h1>Insert Bibliografi</h1>
        <hr>
   
        <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col mb-3">
                <label class="form-label" for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                  class="form-control @error('first_name') is-invalid @enderror">
                @error('first_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col mb-3">
                <label class="form-label" for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                  class="form-control @error('last_name') is-invalid @enderror">
                @error('last_name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
          </div>
         
          <div class="mb-3">
            <label class="form-label">Gender</label>
            <div class="d-flex">
              <div class="form-check me-3">
                <input class="form-check-input" type="radio" name="gender"
                  id="Laki-laki" value="Laki-laki"
                  {{ old('gender')=='Laki-laki' ? 'checked': '' }}>
                <label class="form-check-label" for="Laki-laki">Laki-laki</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender"
                  id="Perempuan" value="Perempuan"
                  {{ old('gender')=='pinjam' ? 'checked': '' }}>
                <label class="form-check-label" for="Perempuan">Perempuan</label>
              </div>
            </div>
            @error('gender')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          @php
          $status = ["Umum", "Siswa", "Mahasiswa", "Pegawai", "Guru", "Dosen"];
        @endphp
          <div class="mb-3">
            <label class="form-label" for="status_member">Pekerjaan Member</label>
            <select class="form-select" id="status_member" name="status_member">
                @foreach ($status as $data)
                   
                   <option value="{{ $data }}" {{ old('status_member')==$data ? 'selected': '' }}>{{ $data}}</option>
                @endforeach
             </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" value="{{ old('alamat') }}"
              class="form-control @error('alamat') is-invalid @enderror">
            @error('alamat')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="email_member">Email</label>
            <input type="email" id="email_member" name="email_member" value="{{ old('email_member') }}"
              class="form-control @error('email_member') is-invalid @enderror">
            @error('email_member')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="nohp_member">No Handphone</label>
            <input type="number" id="nohp_member" name="nohp_member" value="{{ old('nohp_member') }}"
              class="form-control @error('nohp_member') is-invalid @enderror">
            @error('nohp_member')
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