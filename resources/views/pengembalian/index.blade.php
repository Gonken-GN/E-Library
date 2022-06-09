@extends('layouts.app', ['activePage' => 'pengembalian', 'titlePage' => __('')])
@section('content') 
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Pengembalian Buku</b></h2>
					</div>
					<div class="col-sm-8">
						<a href="{{route("pengembalians.create")}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Pengembalian</span></a>						
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
            <th class="text-center">Tanggal Kembali</th>
            <th class="text-center">Function</th>
					</tr>
				</thead>
				<tbody>
            @forelse ($pengembalians as $pengembalian)
            <tr>
                <th class="text-center">{{$loop->iteration}}</th>
                
                {{-- <td class="text-center"><a href="{{ route('bibliografis.show',['bibliografi' => $bibliografi->id]) }}" style="text-decoration: none;">{{$bibliografi->judul}}</a></td> --}}
                
                <td class="text-center"><a href="{{route('members.show', ['member' => $pengembalian->sirkulasi->member->id])}}">{{$pengembalian->sirkulasi->member->first_name}} {{$pengembalian->sirkulasi->member->last_name}}</a></td>
                <td class="text-center"><a href="{{ route('bibliografis.show',['bibliografi' => $pengembalian->sirkulasi->koleksi->bibliografi->id]) }}" style="text-decoration: none;">{{$pengembalian->sirkulasi->koleksi->bibliografi->judul}}</a></td>
                <td class="text-center">{{$pengembalian->sirkulasi->tanggal_pinjam}}</td>
                <td class="text-center">{{$pengembalian->tanggal_pengembalian}}</td>
              
                
                <td class="text-center">
                  {{-- <a href="{{route('koleksis.edit', ['koleksi' => $koleksi->id])}}" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a> --}}
                  <form method="POST" action="{{ route('pengembalians.destroy',
                  ['pengembalian' => $pengembalian->id]) }}">
                  @method('DELETE')
                  @csrf
                  
                  <button type="submit" class="delete border-0" style="background-color:transparent; "><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                </form>
                
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