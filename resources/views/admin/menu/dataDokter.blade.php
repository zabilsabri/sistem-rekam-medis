@extends('admin.layouts.app' , ['title' => 'Menu Admin'])
@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content p-4">
        <div class="container-fluid">
            <h2 class="text-center display-4">Daftar Dokter</h2>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                <strong> {{$message}} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title p-2 flex-grow-1">Tabel Dokter</h3>
                <a class="btn bg-gradient-danger p-2 text-light" href="createArticle" role="button">+ TAMBAH</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered" id="tableBlog">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th style="width: 40px">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>KD1</td>
                            <td>Test</td>
                            <td>test</td>
                            <td><button type="button" class="btn btn-block btn-info">Info</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            
        </div>
    </section>
</div>

@endsection