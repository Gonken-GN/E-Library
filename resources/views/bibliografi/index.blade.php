@extends('layouts.app', ['activePage' => 'biblio', 'titlePage' => __('')])
@section('content') 
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Bibliografi</b></h2>
					</div>
					<div class="col-sm-8">
						<a href="{{route("bibliografis.create")}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Bibliografi</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="text-center">Nomor</th>
            <th class="text-center">Judul</th>
            <th class="text-center">Edisi</th>
            <th class="text-center">Penulis</th>
            <th class="text-center">Penerbit</th>
            <th class="text-center">Tahun</th>
            <th class="text-center">Kategori</th>
            <th class="text-center">Lokasi Penyimpanan</th>
            <th class="text-center">Jumlah Stock</th>
            <th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
            @forelse ($bibliografis as $bibliografi)
            <tr>
                <th class="text-center">{{$loop->iteration}}</th>
                
                <td class="text-center"><a href="{{ route('bibliografis.show',['bibliografi' => $bibliografi->id]) }}" style="text-decoration: none;">{{$bibliografi->judul}}</a></td>
                
                <td class="text-center">{{$bibliografi->edisi}}</td>
                <td class="text-center">{{$bibliografi->penulis}}</td>
                <td class="text-center">{{$bibliografi->penerbit}}</td>
                <td class="text-center">{{$bibliografi->tahun}}</td>
                <td class="text-center">{{$bibliografi->kategori}}</td>
                <td class="text-center">{{$bibliografi->lokasi_penyimpanan}}</td>
                <td class="text-center">{{$koleksis->where('bibliografi_id', $bibliografi->id)->count()}}</td>
                <td class="text-center">
                  <a href="{{route('bibliografis.edit', ['bibliografi' => $bibliografi->id])}}" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>
                  <form method="POST" action="{{ route('bibliografis.destroy',
                  ['bibliografi' => $bibliografi->id]) }}">
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
