@extends('layouts.master')

@section('title')
    SIAKAD | Jurusan
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>New Major</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('jurusan')}}">Back</a></li>
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
                            <form action="{{ route('jurusan-store')}}" method="POST">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="">Kode Jurusan</label>
                                        <input type="text" name="KodeJurusan" class="form-control @error('KodeJurusan') is-invalid @enderror" placeholder="ex. EB" value="{{old('KodeJurusan')}}">
                                        {{-- membuat pesan error --}}
                                        @error('KodeJurusan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Jurusan</label>
                                        <input type="text" name="NamaJurusan" class="form-control @error('NamaJurusan') is-invalid @enderror" placeholder="ex. Ekonomi dan Bisnis" value="{{old('NamaJurusan')}}">
                                        @error('NamaJurusan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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