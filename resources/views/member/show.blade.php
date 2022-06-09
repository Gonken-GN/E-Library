@extends('layouts.app', ['activePage' => 'member', 'titlePage' => __('')])
@section('content') 
<div class="container">
    <div class="main-body">
    
          
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    @if($members->gender == "Laki-laki")

                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    @endif 
                    @if($members->gender == "Perempuan")
                    <img src="https://www.bootdey.com/app/webroot/img/Content/avatar/avatar3.png" alt="Admin" class="rounded-circle" width="150">
                    @endif
                    <div class="mt-3">
                      <h4>{{$members->first_name}}</h4>
                      <p class="text-secondary mb-1">{{$members->status_member}}</p>
                      <p class="text-muted font-size-sm">{{$members->gender}}</p>
                      
                      <a class="btn btn-info" href="{{route('members.edit', ['member' => $members->id])}}">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$members->first_name}} {{$members->last_name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$members->email_member}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$members->nohp_member}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$members->alamat}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-10 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>History Peminjaman</h6>
                      @forelse($members2->sirkulasis as $sirkulasi)
                         <a href="{{route('bibliografis.show', ['bibliografi' => $sirkulasi->koleksi->bibliografi->id])}}"><p style="
                         display:inline-block;
                         white-space: nowrap;
                         overflow: hidden;
                         text-overflow: ellipsis;
                         ">{{$loop->iteration}}. {{$sirkulasi->koleksi->bibliografi->judul}}</p></a>
                         <span class="text-secondary">{{$sirkulasi->tanggal_pinjam}}</span>
                         <br>
                         @empty
                         <p>Member ini belum meminjam buku...</p>
                         @endforelse
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
{{-- @include('footer') --}}