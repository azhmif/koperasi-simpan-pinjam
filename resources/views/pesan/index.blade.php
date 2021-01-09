@extends('template.app')

@section('pesan')
    active
@endsection

@section('content')
{{-- <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">Data table</li>
                </ol>
            </div>
        </div>
    </div>
</div> --}}

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tabel Pesan</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Komentar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($pesan as $a)
                                <tr>
                                    <td><center>{{$loop->iteration}}.</center></td>
                                    <td>{{$a->nama}}</td>
                                    <td>{{$a->email}}</td>
                                    <td>{{$a->komentar}}</td>
                                    <td>
                                        @if ($a->status == 'belum')
                                            <a href="/check/{{$a->id}}" class="btn btn-info"><i class="fa fa-check"></i></a>
                                        @else
                                        <span class="badge badge-success">Pesan Telah Dibaca</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection