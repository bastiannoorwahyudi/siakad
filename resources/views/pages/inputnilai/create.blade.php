@extends('layouts.master')

@section('title')
    SIAKAD | INPUT NILAI
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Input Nilai Mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('inputnilai')}}">Back</a></li>
                        <li class="breadcrumb-item active">New MK</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5 col-form-label">Kode Mata Kuliah</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="MKB1" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5 col-form-label">Nama Mata Kuliah</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="Algoritma Pemrograman" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5 col-form-label">SKS</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="4" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5 col-form-label">Tahun Akademik (Semester)</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="2021-2022 (Genap)" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="100">#</th>
                                            <th width="150">NIM</th>
                                            <th width="350">Nama Mahasiswa</th>
                                            <th width="150">Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>12345</td>
                                            <td>Bastian noor wahyudi</td>
                                            <td>
                                                <input type="radio"> A]
                                                <input type="radio"> B]
                                                <input type="radio"> C]
                                                <input type="radio"> D]
                                                <input type="radio"> E]
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>67890</td>
                                            <td>Fathan Al Maisan Zhafar</td>
                                            <td>
                                                <input type="radio"> A]
                                                <input type="radio"> B]
                                                <input type="radio"> C]
                                                <input type="radio"> D]
                                                <input type="radio"> E]
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info pull-right">
                                Save Post
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection