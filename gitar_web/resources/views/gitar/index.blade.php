@extends('layout.main')
@section('title', 'Web')

{{-- @yield('container') --}}

@section('container')
<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">Gallery Gitar</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-topbar">
                        <ul>
                            <li class="product-view-wrap">
                                <ul class="nav" role="tablist">
                               
                                    <li class="list-view" role="presentation">
                                       
                            <select class="nice-select" id="selection">
                                <option value="">- Select Chord -</option>
            
                                @foreach ( $sampel as $s )
                                <option value="/file_upload/file_tune/{{$s->file}}">{{$s->label}}</option>
                                          
                                @endforeach
            
                                        </select>
                                    
                                    <audio style="padding-left: 1em;margin-top: -0.4em" id="player" controls="controls">
                                        <source id="mp3_src" src="/teachings/2011_01_09_Cut.mp3" type="audio/mp3" />Your browser does not support the audio element.
                                      </audio>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
             
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="grid-view" role="tabpanel"
                            aria-labelledby="grid-view-tab">
                            <div class="product-grid-view row g-y-20">
                                
                                @foreach ( $gitar as $g )
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="{{url("/gitar/detail/".$g->id_gitar)}}">
                                                <img class="primary-img"
                                                    src="file_upload/img/{{$g->gambar}}"
                                                    alt="Product Images">
                                                <img class="secondary-img"
                                                    src="file_upload/img/{{$g->gambar}}"
                                                    alt="Product Images">
                                            </a>
                            
                                            <div class="product-add-action">
                                                <ul>
                                                   
                                                    <li class="quuickview-btn" data-bs-toggle="modal"
                                                        data-bs-target="#quickModal">
                                                        <a href="{{url("/gitar/detail/".$g->id_gitar)}}" data-tippy="Quickview" data-tippy-inertia="true"
                                                            data-tippy-animation="shift-away" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </li>
                
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <a class="product-name" href="single-product-variable.html">{{$g->nama}}</a>
                                       
                                            <div class="price-box pb-1">
                                               
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                  
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="pagination-area">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">&raquo;</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

$('#selection').on('change', function() {
  change($(this).val());
});

});


function change(sourceUrl) {
var audio = document.getElementById("player");
var source = document.getElementById("mp3_src");

audio.pause();

if (sourceUrl) {
  source.src = sourceUrl;
  audio.load();
  audio.play();
}
}

    </script>
@endsection

@section('container')
<div class="container">
    <div class="row">
        <div class="col-l0">
            <h1 class="mt-3">Ini Daftar Gitar!</h1>

            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $gitar as $g )
                    <tr>
                        <td scope="row">{{$loop->iteration}}</td>
                        <td scope="row">{{$g->nama}}</td>
                        <td scope="row">{{$g->merk}}</td>
                        <td scope="row">{{$g->jenis}}</td>
                        <td scope="row">{{$g->harga}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    var opt = $("#selection option").sort(function (a,b) { return a.value.toUpperCase().localeCompare(b.value.toUpperCase()) });
    $("#selection").append(opt);
});
</script>

@endsection