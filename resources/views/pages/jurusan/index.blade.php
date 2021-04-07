@extends('layouts.master')

@section('title')
    SIAKAD | Jurusan
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Jurusan List</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Jurusan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- pesan saat save berhasil --}}
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('jurusan-create') }}" class="btn btn-info btn-sm">
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
                            <th width="200px">KODE JURUSAN</th>
                            <th width="400px">NAMA JURUSAN</th>
                            <th width="100px">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_jurusan as $dj)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dj->KodeJurusan }}</td>
                                <td>{{ $dj->NamaJurusan }}</td>
                                <td>
                                    <a href="{{route('jurusan-edit', $dj->id)}}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{route('jurusan-delete', $dj->id)}}" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                ::
            </div>
        </div>
    </section>
@endsection