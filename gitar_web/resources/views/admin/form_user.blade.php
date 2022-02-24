@extends('layout.admin')
@if(\Route::current()->getName()=='users.edit')
    @section('title', 'Edit User | Gim')
@else
    @section('title', 'Add User | Gim')
@endif

@php
    $id = "";
    $nama = "";
    $email = "";
    $password = "";
    $role_as = "";
@endphp
@if(!empty($post)):
    @foreach($post as $p ):
        @php
            $id = $post->id;
            $nama = $post->name;
            $email = $post->email;
            $password = $post->password;
            $role_as = $post->role_as;
        @endphp
    @endforeach
@endif

@section('container')
<section id="dashboard-analytics">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/users') }}" class="text-right btn btn-relief-secondary"> <i
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
                                                @if (Route::current()->getName()=='users.add')
                                                <h4 class="card-title">Add Master User</h4>
                                                @endif
                                                @if (Route::current()->getName()=='users.edit')
                                                <h4 class="card-title">Edit User {{$nama}} </h4>
                                                @endif
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    @if (Route::current()->getName()=='users.add')
                                                    <form action="{{ route('users.insert') }}" method="POST"
                                                        role="form" enctype="multipart/form-data" 
                                                        class="form form-horizontal">
                                                        @endif
                                                        @if (Route::current()->getName()=='users.edit')
                                                        <form action="{{ route('users.update',$id) }}" method="POST"
                                                        role="form" enctype="multipart/form-data" 
                                                            class="form form-horizontal">
                                                            @endif
                                                            {{ csrf_field() }}
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4">
                                                                                <span>Nama User</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="text" id="fname-icon"
                                                                                        value="{{$nama}}"
                                                                                        class="form-control" name="name"
                                                                                        placeholder="Nama User">
                                                                                    <div class="form-control-position">
                                                                                        <i
                                                                                            class="feather icon-user"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4">
                                                                                <span>E-mail</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="email" id="fname-icon"
                                                                                        value="{{$email}}"
                                                                                        class="form-control" name="email"
                                                                                        placeholder="Email">
                                                                                    <div class="form-control-position">
                                                                                        <i
                                                                                            class="feather icon-at-sign"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group row">
                                                                            <div class="col-md-4">
                                                                                <span>Password</span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <div
                                                                                    class="position-relative has-icon-left">
                                                                                    <input type="password" id="fname-icon"
                                                                                        class="form-control" name="password"
                                                                                        placeholder="Password">
                                                                                    <div class="form-control-position">
                                                                                        <i
                                                                                            class="feather icon-lock"></i>
                                                                                    </div>
                                                                                    @if(!empty($post)):
                                                                                    <small class="text-danger">*Kosongi password jika tidak ingin merubah password.</small>
                                                                                    @endif
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
                                                                                    name="role_as">
                                                                                    <option value="-">Pilih Jenis User
                                                                                    </option>
                                                                                    <option value="1">Admin</option>
                                                                                    <option value="0">Pengunjung</option>
                                                                                </select>
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