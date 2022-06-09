<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('template/table.css')}}" class="rel">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
    <!-- Fontawesome 5.15.3-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  <title>Sistem Informasi Mahasiswa</title>
</head>
<body>
  
  
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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
            Bibliografis
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/koleksis')}}">
            Koleksi
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/members')}}">
              Member
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/sirkulasis')}}">
              Sirkulasi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/pengembalians')}}">
              Pengembalian
            </a>
          </li>
      </ul>
    </div>
  </div>
</nav>
@if(session()->has('pesan'))
<div class="alert alert-success">
  {{ session()->get('pesan')}}
</div>
@endif 