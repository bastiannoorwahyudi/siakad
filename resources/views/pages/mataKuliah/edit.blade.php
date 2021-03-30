@extends('layouts.master')

@section('title')
    SIAKAD | Mata Kuliah
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Edit Mata Kuliah</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('mataKuliah')}}">Back</a></li>
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
                                        <label for="">Kode Mata Kuliah</label>
                                        <input type="text" name="kode_matakuliah" class="form-control" value="MKB01">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mata Kuliah</label>
                                        <input type="text" name="nama_matakuliah" class="form-control" value="Logika Pemrograman">
                                    </div>
                                    <div class="form-group">
                                        <label for="">SKS</label>
                                        <select name="" class="form-control">
                                            <option value="">-- Pilih SKS --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Semester</label>
                                        <select name="" class="form-control">
                                            <option value="">-- Pilih Semestaer --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Program Study</label>
                                        <select name="" class="form-control">
                                            <option value="">-- Pilih Prody --</option>
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