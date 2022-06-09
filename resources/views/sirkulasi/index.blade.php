@extends('layouts.app', ['activePage' => 'sirkulasi', 'titlePage' => __('')])
@section('content') 
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-8">
						<h2>Manage <b>Sirkulasi</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{route("sirkulasis.create")}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Sirkulasi</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="text-center">Nomor</th>
            <th class="text-center">Member</th>
            <th class="text-center">Koleksi</th>
            <th class="text-center">Tanggal Pinjam</th>
            <th class="text-center">Due Date</th>
            <th class="text-center">Status</th>
            <th class="text-center">Function</th>
					</tr>
				</thead>
				<tbody>
            @forelse ($sirkulasis as $sirkulasi)
            <tr>
                <th class="text-center">{{$loop->iteration}}</th>
                
                {{-- <td class="text-center"><a href="{{ route('bibliografis.show',['bibliografi' => $bibliografi->id]) }}" style="text-decoration: none;">{{$bibliografi->judul}}</a></td> --}}
                
                <td class="text-center"><a href="{{route('members.show', ['member' => $sirkulasi->member->id])}}">{{$sirkulasi->member->first_name}} {{$sirkulasi->member->last_name}}</a></td>
                  <td class="text-center"><a href="{{ route('bibliografis.show',['bibliografi' => $sirkulasi->koleksi->bibliografi->id]) }}" style="text-decoration: none;">{{$sirkulasi->koleksi->bibliografi->judul}}</a></td>
                {{-- <td class="text-center">{{$sirkulasi->koleksi->bibliografi->judul}}</td> --}}
                <td class="text-center">{{$sirkulasi->tanggal_pinjam}}</td>
                @php
               $date = $sirkulasi->tanggal_pinjam; 
               $lama= null;
               $lama = "+ " . strval($sirkulasi->lama_pinjam) ." days";
               $date = date('Y-m-d', strtotime($date. $lama));
               $today = date('Y-m-d');
                @endphp
                <td class="text-center text-danger">{{$date}}</td>
                @if($date < $today)
                <td class="text-center text-danger">DueDate</td>
                @endif
                @if($date > $today)
                <td class="text-center">Pinjam</td>
                @endif
                @if($date == $today)
                <td class="text-center text-warning">Pinjam</td>
                @endif
                {{-- <td class="text-center"><a href="{{route('bibliografis.show', ['bibliografi' => $koleksi->bibliografi->id])}}" style="text-decoration: none;">{{$koleksi->bibliografi->judul}}</a></td> --}}
                <td class="text-center">
                  <form method="POST" action="{{ route('sirkulasis.update',
                  ['sirkulasi' => $sirkulasi->id]) }}">
                  @method('PUT')
                  @csrf
                  
                  <button type="submit" class="delete border-0" style="background-color:transparent; "><i class="material-icons" title="Edit">&#xE254;</i></button>
                </form> 
                  
                  <form method="POST" action="{{ route('sirkulasis.destroy',
                  ['sirkulasi' => $sirkulasi->id]) }}">
                  @method('DELETE')
                  @csrf
                  
                  <button type="submit" class="delete border-0" style="background-color:transparent; "><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                </form> 
                  {{-- <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> --}}
                </td>
              </tr>
            @empty
            <td colspan="13" class="text-center">Tidak ada data...</td>
            @endforelse
           
					
				</tbody>
			</table>
	</div>        
</div>
@endsection
{{-- @include('footer') --}}