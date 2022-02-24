@extends('layout.admin')
@section('title', 'User | Gim')

{{-- @yield('container') --}}

@section('container')
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="feather icon-music"></i> Data Master User</h4>
                    <a href="{{ url('/users/add') }}" class="text-right btn btn-relief-success"> <i class="feather icon-plus"></i>Tambah</a>
                </div>
                @if(session('success_msg')!='')
                    <div class="col-12 mt-2">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success_msg')}} 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="feather icon-x-circle"></i></span>
                            </button>
                        </div>
                    </div>
                @endisset
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        {{-- <p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p> --}}
                        <div>
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-stripped" id="myTable" role="grid"
                                            aria-describedby="DataTables_Table_0_info">
                                            <thead>
                                                <tr role="row">
                                                    {{-- <th class="sorting_asc" tabindex="0"
                                                        aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                        style="width: 155.367px;" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">Nama</th> --}}
                                                    <th>#</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Hak Akses</th>
                                                    <th>Tanggal Daftar</th>
                                                    <th>#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!$user->isEmpty())
                                                @foreach ( $user as $g )
                                                <tr role="row">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="sorting_1">{{$g->name}}</td>
                                                    <td>{{$g->email}}</td>
                                                    <td>{{aksesnya($g->role_as)}}</td>
                                                    <td>{{tgl_indo($g->created_at)}}</td>
                                                    <td>
                                                        <a href="{{ route('users.edit', $g->id) }}"
                                                            class="btn btn-icon btn-warning mr-1 mb-1 waves-effect waves-light">
                                                            <i class="feather icon-edit-1"></i></a>
                                                        <a  onclick="return confirm('Hapus data {{$g->name}}')"  href="{{ route('users.delete', $g->id) }}"
                                                            class="btn btn-icon btn-danger mr-1 mb-1 waves-effect waves-light">
                                                            <i class="feather icon-delete"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr role="row">
                                                    <td colspan="7" class="text-center">Data Masih Kosong</td>
                                                </tr>
                                                @endif
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Hak Akses</th>
                                                    <th>Tanggal Daftar</th>
                                                    <th>#</th>
                                                </tr>
                                            </tfoot>
                                        </table>
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