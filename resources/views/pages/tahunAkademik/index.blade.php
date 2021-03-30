@extends('layouts.master')

@section('title')
    SIAKAD | Tahun Akademik
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>
                        Tahun Akademik
                        {{-- <small><i> (Program Study)</i></small> --}}
                    </h3>
                    
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tahun Akademik</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('tahunAkademik-create') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-plus"></i> Add New Post
                </a>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-strip">
                    <thead>
                        <tr>
                            <th width="70px">#</th>
                            <th width="300px">TAHUN AKADEMIK</th>
                            <th width="200px">SEMESTER</th>
                            <th width="150px">STATUS</th>
                            <th width="150px">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2020/2021</td>
                            <td>Ganjil</td>
                            <td>Aktif</td>
                            <td>
                                <a href="{{route('tahunAkademik-edit')}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="#" class="d-inline">
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                ::
            </div>
        </div>
    </section>
@endsection