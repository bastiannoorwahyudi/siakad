@extends('layouts.master')

@section('title')
    SIAKAD | Program Study
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>New Program Study</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('prody')}}">Back</a></li>
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
                            <form action="#">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="">Kode Prody</label>
                                        <input type="text" name="kode_prody" class="form-control" placeholder="ex. EB">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Program Study</label>
                                        <input type="text" name="nama_prody" class="form-control" placeholder="ex. Ekonomi dan Bisnis">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jurusan</label>
                                        <select name="" class="form-control">
                                            <option value="">-- Pilih Jurusan --</option>
                                            <option value="">Teknik Infomatika</option>
                                            <option value="">Hukum</option>
                                            <option value="">Ekonomi & Bisnis</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info pull-right">
                                    Save Post
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content1')
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Majors Form</h3>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection