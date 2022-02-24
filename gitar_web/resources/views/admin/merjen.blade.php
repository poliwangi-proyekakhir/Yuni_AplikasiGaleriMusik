@extends('layout.admin')
@section('title', 'Merk&Jenis | Gim')

{{-- @yield('container') --}}

@section('container')
<!-- Dashboard Analytics Start -->
<!-- Nav Filled Starts -->
<section id="nav-filled">
    <div class="row">
        <div class="col-sm-12">
            <div class="card overflow-hidden">
                <div class="card-header">
                    <h4 class="card-title" id="head1">Data Merk Gitar</h4>
                    <a href="{{ url('/merjen/addm') }}" class="text-right btn btn-relief-success" id="plusbt"> <i class="feather icon-plus"></i>Tambah</a>
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
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab" aria-controls="home-fill" aria-selected="true">Merk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" role="tab" aria-controls="profile-fill" aria-selected="false">Jenis</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content pt-1">
                            <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-stripped" id="myTable" role="grid"
                                                aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>#</th>
                                                        <th>Nama Merk</th>
                                                        <th>#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if (!$merk->isEmpty())
                                                    @foreach ( $merk as $g )
                                                    <tr role="row">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td class="sorting_1">{{$g->nama_merk}}</td>
                                                        <td>
                                                            <a href="{{ route('merk.edit', $g->id_merk) }}"
                                                                class="btn btn-icon btn-warning mr-1 mb-1 waves-effect waves-light">
                                                                <i class="feather icon-edit-1"></i></a>
                                                            <a  onclick="return confirm('Hapus data {{$g->nama_merk}}')"  href="{{ route('merk.delete', $g->id_merk) }}"
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
                                                        <th>Nama Merk</th>
                                                        <th>#</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-stripped" id="myTable2" role="grid"
                                                aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th>#</th>
                                                        <th>Nama Jenis</th>
                                                        <th>#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if (!$jenis->isEmpty())
                                                    @foreach ( $jenis as $j )
                                                    <tr role="row">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td class="sorting_1">{{$j->nama_jenis}}</td>
                                                        <td>
                                                            <a href="{{ route('jenis.edit', $j->id_jenis) }}"
                                                                class="btn btn-icon btn-warning mr-1 mb-1 waves-effect waves-light">
                                                                <i class="feather icon-edit-1"></i></a>
                                                            <a  onclick="return confirm('Hapus data {{$j->nama_jenis}}')"  href="{{ route('jenis.delete', $j->id_jenis) }}"
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
                                                        <th>Nama Jenis</th>
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
    </div>
</section>
<!-- Nav Filled Ends -->
@endsection