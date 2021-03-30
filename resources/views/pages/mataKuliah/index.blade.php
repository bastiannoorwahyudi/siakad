@extends('layouts.master')

@section('title')
    SIAKAD | Mata Kuliah
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Mata Kuliah List</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('mataKuliah')}}">Home</a></li>
                        <li class="breadcrumb-item active">Mata Kuliah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('mataKuliah-create') }}" class="btn btn-info btn-sm">
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
                            <th width="150px">KODE</th>
                            <th width="300px">MATA KULIAH</th>
                            <th width="250px">PROGRAM STUDY</th>
                            <th width="150px">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>MKB1</td>
                            <td>Logika Pemrograman</td>
                            <td>Sistem Informasi</td>
                            <td>
                                <a href="{{route('mataKuliah-edit')}}" class="btn btn-warning btn-sm">
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