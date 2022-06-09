<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- // load bootstrap style -->
  <link rel="stylesheet" href="{{ asset('template/default/assets/css/bootstrap.min.css') }}">
  <!-- // font awesome -->
  <link rel="stylesheet" href="{{ asset('template/default/assets/plugin/font-awesome/css/fontawesome-all.min.css')}}">
  <!-- Tailwind CSS -->
  <link rel="stylesheet" href="{{ asset('template/default/assets/css/tailwind.min.css')}}">
  <!-- Vegas CSS -->
  <link rel="stylesheet" href="{{ asset('template/default/assets/plugin/vegas/vegas.min.css')}}">
  <link href="{{ asset('/bulian/js/toastr/toastr.min.css?31044444" rel="stylesheet" type="text/css')}}"/>
  <!-- SLiMS CSS -->
  <link rel="stylesheet" href="{{asset('/bulian/js/colorbox/colorbox.css')}}">
  <!-- // Flag css -->
  <link rel="stylesheet" href="{{ asset('template/default/assets/css/flag-icon.min.css')}}">
  <!-- // my custom style -->
  <link rel="stylesheet" href="{{asset('template/default/assets/css/style.css?v=20220518-044444')}}">
  <title>Biodata</title>

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/bibliografis')}}">
              Bibliografi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/contact')}}">
              Contact
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
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
                <label class="form-check-label" for="kondisi_koleksi">Bagus</label>
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
  
</body>
</html>