@extends('layouts.master')

@section('title')
    SIAKAD | Program Study
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>
                        Prody List
                        <small><i> (Program Study)</i></small>
                    </h3>
                    
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Prody</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('prody-create') }}" class="btn btn-info btn-sm">
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
                            <th width="100px">KODE</th>
                            <th width="250px">PRODY</th>
                            <th width="250px">JURUSAN</th>
                            <th width="100px">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>AL</td>
                            <td>Aljabar Linear</td>
                            <td>Teknik Informatika</td>
                            <td>
                                <a href="{{route('prody-edit')}}" class="btn btn-warning btn-sm">
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