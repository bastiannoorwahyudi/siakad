@extends('layouts.master')

@section('title')
    SIAKAD | Jurusan
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Edit Major</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('jurusan')}}">Back</a></li>
                        <li class="breadcrumb-item active">Edit Post</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-outline card-warning">
                        <div class="card-header">
                            <form action="{{route('jurusan-update', $jurusan->id)}}" method="POST">
                                @method('patch')
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="">Kode Jurusan</label>
                                        <input type="text" name="KodeJurusan" class="form-control" value="{{ $jurusan->KodeJurusan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Jurusan</label>
                                        <input type="text" name="NamaJurusan" class="form-control" value="{{ $jurusan->NamaJurusan }}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning pull-right">
                                    Update Post
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection