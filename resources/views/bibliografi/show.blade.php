@extends('layouts.app', ['activePage' => 'biblio', 'titlePage' => __('')])
@section('content') 
  <div class="container">
    <div class="flex flex-wrap">
        <div class="w-64 mb-2">
            <div class="bg-grey-light p-12 rounded mt-4">
                <div class="shadow">
                  <img itemprop="image" alt="{{$bibliografis->judul}}"  src="{{ asset('img/' . $bibliografis->gambar) }}"border="0" alt="PostgreSQL : a comprehensive guide to building, programming, and administering PostgreSQL databases" style="width: 200px;"/>                </div>
            </div>
        </div>
        <div class="flex-1 p-0 px-md-4 mt-4">
          
            <blockquote class="blockquote">
                <h4 class="mb-3">{{$bibliografis->judul}}</h4>
                <footer class="blockquote-footer"><a href="?author=%22Douglas%2C+Korry%22&search=Search" title="Click to view others documents with this author">{{$bibliografis->penulis}}</a> </footer>
            </blockquote>
            <hr>
            <p class="text-grey-darker text-justify"> {{$bibliografis->sinopsis}}</p>
            <hr>

            <h5 class="mt-4 mb-1">Availability</h5>
            <a href="{{route("koleksis.create")}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Koleksis</span></a>

          <table class="table table-bordered table-small itemList">
            @forelse($bibliografis->koleksis as $koleksi)
            <tr>
              <td class="biblio-item-code text-center">{{$koleksi->id}}</td>
              <td class="biblio-call-number text-center">{{$koleksi->jenis_koleksi}}</td>
              
              @if($koleksi->status_koleksi == "ada")
                <td width="30%" class="text-center"><a href="#"><b style="background-color: #5bc0de; color: white; padding: 3px;">Available</b></a></td>
              @else
                <td width="30%" class="text-center"><b style="background-color: #F4512E; color: white; padding: 3px;">Not Available</b></td>
              @endif
              @if($koleksi->kondisi_koleksi == "baik")
                <td class="biblio-location text-center"><b style="background-color: #2EF433; color: white; padding: 3px;">Good</b></td>
              @else
              <td class="biblio-location text-center"><b style="background-color: #FFC300; color: white; padding: 3px;">Bad</b></td>
              @endif
              <td class="d-flex text-center">
                <a href="{{route('koleksis.edit', ['koleksi' => $koleksi->id])}}" class="edit text-center"><i class="material-icons text-center" title="Edit">&#xE254;</i></a>
                  <form method="POST" action="{{ route('koleksis.destroy',
                  ['koleksi' => $koleksi->id]) }}">
                  @method('DELETE')
                  @csrf
                  
                  <button type="submit" class="delete border-0 text-center" style="background-color:transparent; "><i class="material-icons text-center" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                </form>
              </td>
            </tr>
            @empty
            <td colspan="13" class="text-center">Tidak ada Koleksi...</td>
            @endforelse
        </table>
            <h5 class="mt-4 mb-1">Detail Information</h5>
            <dl class="row">
                <dt class="col-sm-3">Series Title</dt>
                <dd class="col-sm-9">
                    <div itemprop="alternativeHeadline"
                         property="alternativeHeadline">{{$bibliografis->judul}}</div>
                </dd>

                <dt class="col-sm-3">Call Number</dt>
                <dd class="col-sm-9">
                    <div>005.75/85-22 Kor p</div>
                </dd>
                <dt class="col-sm-3">Publisher</dt>
                <dd class="col-sm-9">
                    <span itemprop="publisher" property="publisher" itemtype="http://schema.org/Organization"
                          itemscope>{{$bibliografis->penerbit}}</span>
                    
                </dd>
                <dt class="col-sm-3">Collation</dt>
                <dd class="col-sm-9">
                    <div itemprop="numberOfPages"
                         property="numberOfPages">{{$bibliografis->jumlah_halaman}} Hal.</div>
                </dd>
                <dt class="col-sm-3">Language</dt>
                <dd class="col-sm-9">
                    <div>
                        <meta itemprop="inLanguage" property="inLanguage"
                              content="English"/>Indonesia</div>
                </dd>
                <dt class="col-sm-3">ISBN/ISSN</dt>
                <dd class="col-sm-9">
                    <div itemprop="isbn" property="isbn">{{$bibliografis->isbn}}</div>
                </dd>
                <dt class="col-sm-3">Stock</dt>
                <dd class="col-sm-9">
                    <div>{{$bibliografis->koleksis->where('bibliografi_id', $bibliografis->id)->count()}} Copy</div>
                </dd>
                <dt class="col-sm-3">Content Type</dt>
                <dd class="col-sm-9">
                    <div itemprop="bookFormat"
                         property="bookFormat">-</div>
                </dd>
                <dt class="col-sm-3">Media Type</dt>
                <dd class="col-sm-9">
                    <div itemprop="bookFormat"
                         property="bookFormat">-</div>
                </dd>
                <dt class="col-sm-3">Carrier Type</dt>
                <dd class="col-sm-9">
                    <div itemprop="bookFormat"
                         property="bookFormat">-</div>
                </dd>
                <dt class="col-sm-3">Edition</dt>
                <dd class="col-sm-9">
                    <div itemprop="bookEdition" property="bookEdition">{{$bibliografis->edisi}}</div>
                </dd>
                <dt class="col-sm-3">Subject(s)</dt>
                <dd class="col-sm-9">
                    <div class="s-subject" itemprop="keywords"
                         property="keywords"><a href="?subject=%22Programming%22&search=Search" title="Click to view others documents with this subject">{{$bibliografis->kategori}}</a><br /></div>
                </dd>
                <dt class="col-sm-3">Specific Detail Info</dt>
                <dd class="col-sm-9">
                    <div>-</div>
                </dd>
                <dt class="col-sm-3">Statement of Responsibility</dt>
                <dd class="col-sm-9">
                    <div itemprop="author" property="author">-</div>
                </dd>
            </dl>
            <h5 class="mt-4">Functions</h5><hr>
            <div class="pt-1 d-flex ">
              
            <div class="d-flex">
              <a href="{{ route('bibliografis.edit',['bibliografi' => $bibliografis->id]) }}" class="btn btn-outline-primary mb-2 mr-2">Edit Bibliografi</a></div>
              <form method="POST" action="{{ route('bibliografis.destroy',
                  ['bibliografi' => $bibliografis->id]) }}">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-outline-danger mb-2">Delete Bibliografi</button>
                </form>
            <br>
            </div>
            </div>
            
            
    </div>
</div>
@endsection
{{-- @include('footer') --}}