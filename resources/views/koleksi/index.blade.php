@extends('layouts.app', ['activePage' => 'koleksi', 'titlePage' => __('')])
@section('content') 
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Koleksi</b></h2>
					</div>
					<div class="col-sm-8">
						<a href="{{route("koleksis.create")}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Koleksi</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="text-center">Nomor</th>
                        <th class="text-center">Jenis Koleksi</th>
                        <th class="text-center">Bibliografi</th>
                        <th class="text-center">Status Koleksi</th>
                        <th class="text-center">Kondisi Koleksi</th>
                        <th class="text-center">Function</th>
					</tr>
				</thead>
				<tbody>
            @forelse ($koleksis as $koleksi)
            <tr>
                <th class="text-center">{{$loop->iteration}}</th>
                
                {{-- <td class="text-center"><a href="{{ route('bibliografis.show',['bibliografi' => $bibliografi->id]) }}" style="text-decoration: none;">{{$bibliografi->judul}}</a></td> --}}
                
                <td class="text-center">{{$koleksi->jenis_koleksi}}</td>
                <td class="text-center"><a href="{{route('bibliografis.show', ['bibliografi' => $koleksi->bibliografi->id])}}" style="text-decoration: none;">{{$koleksi->bibliografi->judul}}</a></td>
                @if($koleksi->status_koleksi == "ada")
                    <td><span class="status text-success text-center">&bull;</span> Tersedia</td>
                @else
                <td><span class="status text-danger text-center">&bull;</span> Dipinjam</td>
                @endif  
                <td class="text-center">{{$koleksi->kondisi_koleksi}}</td>
                <td class="text-center">
                  <a href="{{route('koleksis.edit', ['koleksi' => $koleksi->id])}}" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>
                  <form method="POST" action="{{ route('koleksis.destroy',
                  ['koleksi' => $koleksi->id]) }}">
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
