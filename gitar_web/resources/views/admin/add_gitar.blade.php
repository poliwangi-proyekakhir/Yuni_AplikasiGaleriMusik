@extends('layout.admin')
@if(\Route::current()->getName()=='gitars.edit')
    @section('title', 'Edit Gitar | Gim')
@else
    @section('title', 'Add Gitar | Gim')
@endif

@php
    $id = "";
    $nama = "";
    $jns = "";
    $mrk = "";
    $harga = "";
    $gambar = "";
@endphp
@if(!empty($post)):
    @foreach($post as $p ):
        @php
            $id = $post->id_gitar;
            $nama = $post->nama;
            $jns = $post->jenis;
            $mrk = $post->merk;
            $harga = $post->harga;
            $gambar = $post->gambar;
        @endphp
    @endforeach
@endif

@section('container')
<section id="dashboard-analytics">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/gitars') }}" class="text-right btn btn-relief-secondary"> <i
                            class="feather icon-chevrons-left"></i>back</a>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        {{-- <p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> --}}
                        <div>
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="col-lg-12">
                                    @if($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                        @endforeach()
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                @if (Route::current()->getName()=='gitars.add')
                                                <h4 class="card-title">Add Master Gitar</h4>
                                                @endif
                                                @if (Route::current()->getName()=='gitars.edit')
                                                <h4 class="card-title">Edit Gitar {{$nama}} </h4>
                                                @endif
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    @if (Route::current()->getName()=='gitars.add')
                                                    <form action="{{ route('gitars.insert') }}" method="POST"
                                                        role="form" enctype="multipart/form-data" 
                                                        class="form form-horizontal">
                                                        @endif
                                                        @if (Route::current()->getName()=='gitars.edit')
                                                        <form action="{{ route('gitars.update',$id) }}" method="POST"
                                                        role="form" enctype="multipart/form-data" 
                                                            class="form form-horizontal">
                                                            @endif
                                                            {{ csrf_field() }}
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    @if(!empty($post)):
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4">
                                                                                <img src="{{ url('/') }}/file_upload/img/{{$gambar}}" alt="avatar" height="200" width="200">
                                                                            </div>
                                                                    </div>
                                                                    @endif
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4">
                                                                                <span>Nama Gitar</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="text" id="fname-icon"
                                                                                        value="{{$nama}}"
                                                                                        class="form-control" name="nama"
                                                                                        placeholder="Nama Gitar">
                                                                                    <div class="form-control-position">
                                                                                        <i
                                                                                            class="feather icon-music"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4">
                                                                                <span>Jenis</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <select class="select2 form-control"
                                                                                    name="jenis">
                                                                                    <option value="-">Pilih Jenis Gitar
                                                                                    </option>
                                                                                    @foreach ($jenis as $j)
                                                                                    <option value="{{$j->id_jenis}}"
                                                                                        {{selectsama($j->id_jenis, $jns)}}>
                                                                                        {{$j->nama_jenis}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4">
                                                                                <span>Merk</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <select class="select2 form-control"
                                                                                    name="merk">
                                                                                    <option value="-">Pilih Merk Gitar
                                                                                    </option>
                                                                                    @foreach ( $merk as $m )
                                                                                    <option value="{{$m->id_merk}}"
                                                                                        {{selectsama($m->id_merk, $mrk)}}>
                                                                                        {{$m->nama_merk}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4">
                                                                                <span>Deskripsi</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="text" id="fname-icon"
                                                                                        class="form-control currency"
                                                                                        name="harga" value="{{$harga}}"
                                                                                        placeholder="Deskripsi">
                                                                                    <div class="form-control-position">
                                                                                        <i
                                                                                            class="feather icon-copy"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4">
                                                                                <span>Link YouTube</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="text" id="fname-icon"
                                                                                        class="form-control currency"
                                                                                        name="link" value=""
                                                                                        placeholder="www.youtube.com/watch?v=">
                                                                                    <div class="form-control-position">
                                                                                        <i
                                                                                            class="feather icon-copy"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4">
                                                                                <span>Gambar</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div class="custom-file">
                                                                                    <input id="profile_image" type="file" class="form-control" name="gambar">
                                                                                    <small class="text-danger">*Gunakan
                                                                                        foto
                                                                                        jenis JPG/PNG dengan resolusi
                                                                                        maks
                                                                                        4000x4000.</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 ">
                                                                        <button type="submit"
                                                                            class="btn btn-relief-primary col-12 waves-effect waves-light">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection