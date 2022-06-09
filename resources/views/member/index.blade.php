@extends('layouts.app', ['activePage' => 'member', 'titlePage' => __('')])
@section('content') 
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Member</b></h2>
					</div>
					<div class="col-sm-8">
						<a href="{{route("members.create")}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Member</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="text-center">Nomor</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Status</th>
            <th class="text-center">Email</th>
            <th class="text-center">No HP</th>
            <th class="text-center">Function</th>
					</tr>
				</thead>
				<tbody>
            @forelse ($members as $member)
            <tr>
                <th class="text-center">{{$loop->iteration}}</th>
                <td class="text-center"><a href="{{ route('members.show',['member' => $member->id]) }}" style="text-decoration: none;">{{$member->first_name}} {{$member->last_name}}</a></td>
                <td class="text-center">{{$member->status_member}}</td>
                <td class="text-center">{{$member->email_member}}</td>
                <td class="text-center">{{$member->nohp_member}}</td>

                <td class="text-center">
                  <a href="{{route('members.edit', ['member' => $member->id])}}" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>
                  <form method="POST" action="{{ route('members.destroy',
                  ['member' => $member->id]) }}">
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
@include('footer')
