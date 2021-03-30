@extends('layouts.master')

@section('title')
    SIAKAD | Tahun Akademik
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Edit Tahun Akademik</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('tahunAkademik')}}">Back</a></li>
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
                            <form action="#">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="">Tahun Akademik</label>
                                        <input type="text" name="tahun_akademik" class="form-control" value="2020/2021">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Semester</label>
                                        <select name="" class="form-control">
                                            <option value="">-- Pilih Semester --</option>
                                            <option value="">Ganjil</option>
                                            <option value="">Genap</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="" class="form-control">
                                            <option value="">-- Pilih Status --</option>
                                            <option value="">Aktif</option>
                                            <option value="">Tidak Aktif</option>
                                        </select>
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