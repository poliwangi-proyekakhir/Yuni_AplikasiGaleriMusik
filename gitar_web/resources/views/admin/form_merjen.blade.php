@extends('layout.admin')
@if(\Route::current()->getName()=='merk.add')
    @section('title', 'Add Merk | Gim')
@elseif(\Route::current()->getName()=='jenis.add')
    @section('title', 'Add Jenis | Gim')
@elseif(\Route::current()->getName()=='merk.edit')
    @section('title', 'Edit Merk | Gim')
@elseif(\Route::current()->getName()=='jenis.edit')
    @section('title', 'Edit Jenis | Gim')
@endif

@php
    $id = "";
    $nama = "";
@endphp
{{-- merk --}}
@if(!empty($merk)):
    @foreach($merk as $m ):
        @php
            $id = $merk->id_merk;
            $nama = $merk->nama_merk;
        @endphp
    @endforeach
@endif
{{-- jenis --}}
@if(!empty($jenis)):
    @foreach($jenis as $j ):
        @php
            $id = $jenis->id_jenis;
            $nama = $jenis->nama_jenis;
        @endphp
    @endforeach
@endif

@section('container')
<section id="dashboard-analytics">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/merjen') }}" class="text-right btn btn-relief-secondary"> <i
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
                                                @if(\Route::current()->getName()=='merk.add')
                                                    <h4 class="card-title">Add Merk </h4>
                                                @elseif(\Route::current()->getName()=='jenis.add')
                                                    <h4 class="card-title">Add Jenis </h4>
                                                @elseif(\Route::current()->getName()=='merk.edit')
                                                    <h4 class="card-title">Edit Merk {{$nama}} </h4>
                                                @elseif(\Route::current()->getName()=='jenis.edit')                                                
                                                    <h4 class="card-title">Edit Jenis {{$nama}} </h4>
                                                @endif
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    @if(\Route::current()->getName()=='merk.add')
                                                        <form action="{{ route('merk.insert') }}" method="POST"
                                                            role="form" enctype="multipart/form-data"
                                                            class="form form-horizontal">
                                                    @elseif(\Route::current()->getName()=='jenis.add')
                                                        <form action="{{ route('jenis.insert') }}" method="POST"
                                                            role="form" enctype="multipart/form-data"
                                                            class="form form-horizontal">
                                                    @elseif(\Route::current()->getName()=='merk.edit')
                                                        <form action="{{ route('merk.update',$id) }}" method="POST"
                                                            role="form" enctype="multipart/form-data"
                                                            class="form form-horizontal">
                                                    @elseif(\Route::current()->getName()=='jenis.edit')                                                
                                                        <form action="{{ route('jenis.update',$id) }}" method="POST"
                                                            role="form" enctype="multipart/form-data"
                                                            class="form form-horizontal">
                                                    @endif
                                                            {{ csrf_field() }}
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            @if(\Route::current()->getName()=='merk.add'||\Route::current()->getName()=='merk.edit')
                                                                            <div class="col-md-4">
                                                                                <span>Nama Merk</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="text" id="fname-icon"
                                                                                        value="{{$nama}}"
                                                                                        class="form-control" name="nama_merk"
                                                                                        placeholder="Nama Merk">
                                                                                    <div class="form-control-position">
                                                                                        <i
                                                                                            class="feather icon-tag"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @elseif(\Route::current()->getName()=='jenis.add'||\Route::current()->getName()=='jenis.edit')
                                                                            <div class="col-md-4">
                                                                                <span>Nama Jenis</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="text" id="fname-icon"
                                                                                        value="{{$nama}}"
                                                                                        class="form-control" name="nama_jenis"
                                                                                        placeholder="Nama Jenis">
                                                                                    <div class="form-control-position">
                                                                                        <i
                                                                                            class="feather icon-tag"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>  
                                                                            @endif
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