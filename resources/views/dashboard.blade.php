@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">book</i>
              </div>
              <p class="card-category">Total Bibliografi</p>
              <h3 class="card-title">{{$bibliografis->count()}}
                <small>Buku</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-success">add</i>
                <a href="{{route("bibliografis.create")}}">Tambah Biblio</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Total Koleksi</p>
              <h3 class="card-title">{{$koleksis->count()}} <small>Copy</small></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-success">add</i> <a href="{{route("koleksis.create")}}">Tambah Koleksi</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">person_pin</i>
              </div>
              <p class="card-category">Total Member</p>
              <h3 class="card-title">{{$members->count()}} <small>Members</small></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-success">add</i> <a href="{{route("members.create")}}">Tambah Member</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">import_export</i>
              </div>
              <p class="card-category">Total Sirkulasi</p>
              <h3 class="card-title">{{$sirkulasis->count() + $pengembalians->count()}} <small>Sirkulasi</small></h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">keyboard_return</i>
              </div>
              <p class="card-category">Total Pengembalian Buku</p>
              <h3 class="card-title">{{$pengembalians->count()}}
                <small>Buku</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-success">add</i>
                <a href="{{route("pengembalians.create")}}">Tambah Pengembalian Buku</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">subdirectory_arrow_right
                </i>
              </div>
              <p class="card-category">Total Peminjaman Buku</p>
              <h3 class="card-title">{{$sirkulasis->count()}}
                <small>Buku</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-success">add</i>
                <a href="{{route("sirkulasis.create")}}">Tambah Peminjaman</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">folder_shared
                </i>
              </div>
              <p class="card-category">Total Copy yang Tersedia</p>
              <h3 class="card-title">{{$koleksis->where('status_koleksi', 'ada')->count()}}
                <small>Buku</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons text-success">add</i>
                <a href="{{route("bibliografis.create")}}">Tambah Biblio</a>
              </div>
            </div>
          </div>
        </div>

  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush