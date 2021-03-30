@extends('layouts.master')

@section('title')
    SIAKAD | KHS
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Kartu Rencana Study (KHS)</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('khs')}}">Back</a></li>
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
                                        <label for="" class="col-sm-5 col-form-label">NIM</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="12345" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5 col-form-label">Nama Mahasiswa</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="Bastian noor wahyudi" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5 col-form-label">Jurusan</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="Teknik Informatika" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5 col-form-label">Program Studi</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" value="Sistem Informasi" readonly>
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
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fa fa-print"></i> Print
                            </a>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="70px">#</th>
                                            <th width="150px">KodeMK</th>
                                            <th width="300px">Mata Kuliah</th>
                                            <th width="100px">Nilai</th>
                                            <th width="100px">SKS</th>
                                            <th width="100px">Skor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>F09171013</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                            <td>B</td>
                                            <td>4</td>
                                            <td>9</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>F09172134</td>
                                            <td>Aljabar & Linear</td>
                                            <td>B</td>
                                            <td>3</td>
                                            <td>9</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-body table-responsive">
                                <table class="table table-sm" height="50px">
                                    <thead>
                                        <tr>
                                            <th width="70px">Jumlah</th>
                                            <th width="150px"></th>
                                            <th width="300px"></th>
                                            <th width="100px"></th>
                                            <th width="100px">7</th>
                                            <th width="100px"></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection