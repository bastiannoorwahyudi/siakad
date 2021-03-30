@extends('layouts.master')

@section('title')
    SIAKAD | Program Study
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Edit Prody</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('prody')}}">Back</a></li>
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
                                        <label for="">Kode Prody</label>
                                        <input type="text" name="kode_prody" class="form-control" value="ex. EB">
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