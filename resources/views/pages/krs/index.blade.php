@extends('layouts.master')

@section('title')
    SIAKAD | KRS
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Kartu Rencana Study (KRS)</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Back</a></li>
                        <li class="breadcrumb-item active">New Post</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <form action="{{route('krs-create')}}">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="">NIM</label>
                                        <input type="text" class="form-control" placeholder="ex.1234...">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tahun Akademik & Semester</label>
                                        <select name="" class="form-control">
                                            <option value="">-- Pilih Tahun Akademik --</option>
                                            <option value="">2021/2022 - Genap</option>
                                            <option value="">2021/2022 - Ganjil</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success pull-right">
                                    Proses
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection