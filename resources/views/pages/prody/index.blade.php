@extends('layouts.master')

@section('title')
    SIAKAD | Program Study
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>
                        Prody List
                        <small><i> (Program Study)</i></small>
                    </h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Prody</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- pesan saat save berhasil --}}
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <section class="content">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('prody-create') }}" class="btn btn-info btn-sm">
                    <i class="fa fa-plus"></i> Add New Post
                </a>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-strip w-100" id="crudTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>KODE PRODY</th>
                            <th>PROGRAM STUDY</th>
                            <th>JURUSAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            <div class="card-footer">
                ::
            </div>
        </div>
    </section>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url : '{!! url()->current() !!}',
            },
            columns: [
                {data: 'DT_RowIndex', orderable: false, searcable: false},
                {data: 'KodePrody', name: 'KodePrody'},
                {data: 'ProgramStudy', name: 'ProgramStudy'},
                {data: 'jurusan.NamaJurusan', name: 'jurusan.NamaJurusan'},
                {
                    data: 'action',
                    name:'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        })
    </script>
@endpush