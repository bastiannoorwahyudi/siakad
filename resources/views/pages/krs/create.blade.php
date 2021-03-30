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
                        <li class="breadcrumb-item"><a href="{{route('krs')}}">Back</a></li>
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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#mataKuliahModal">
                                <i class="fa fa-plus"></i> Tambah MK
                            </button>
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fa fa-print"></i> Print
                            </a>
                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="70px">#</th>
                                            <th width="150px">KodeMK</th>
                                            <th width="250px">Mata Kuliah</th>
                                            <th width="300px">Dosen</th>
                                            <th width="100px">SKS</th>
                                            <th width="100px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>F09171013</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                            <td>Fathan Al Maisan Zhafar M.Kom</td>
                                            <td>4</td>
                                            <td>
                                                <form action="#" class="d-inline">
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>F09172134</td>
                                            <td>Aljabar & Linear</td>
                                            <td>Sultan Ibrahim Al Haqqi M.Kom</td>
                                            <td>3</td>
                                            <td>
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
                        </div>
                        <div class="card-footer">
                            <div class="card-body table-responsive">
                                <table class="table table-sm" height="50px">
                                    <thead>
                                        <tr>
                                            <th width="70px"></th>
                                            <th width="150px"></th>
                                            <th width="250px"></th>
                                            <th width="300px">Jumlah SKS</th>
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
    
    <!-- Modal -->
    <div class="modal fade" id="mataKuliahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mata Kuliah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th width="70px">#</th>
                                    <th width="150px">KodeMK</th>
                                    <th width="250px">Mata Kuliah</th>
                                    <th width="300px">Dosen</th>
                                    <th width="100px">SKS</th>
                                    <th width="100px" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>F09171013</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                    <td>Fathan Al Maisan Zhafar M.Kom</td>
                                    <td>4</td>
                                    <td class="text-center">
                                        <input type="checkbox">
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>F09172134</td>
                                    <td>Aljabar & Linear</td>
                                    <td>Sultan Ibrahim Al Haqqi M.Kom</td>
                                    <td>3</td>
                                    <td class="text-center">
                                        <input type="checkbox">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection