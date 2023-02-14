@extends('admin.layouts.app' , ['title' => 'Menu Admin'])
@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content p-4">
        <div class="container-fluid">
            <h2 class="text-center display-4">Daftar Obat</h2>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                <strong> {{$message}} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title p-2 flex-grow-1">Tabel Obat</h3>
                <a class="btn bg-gradient-primary p-2 text-light" role="button" data-bs-toggle="modal" data-bs-target="#tambahObat">+ TAMBAH</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered" id="tableBlog">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Deskripsi</th>
                            <th style="width: 130px">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>KD1</td>
                            <td>Test</td>
                            <td>test</td>
                            <td>TEst tsetsteajwr akwkadwk ahjwhd awkdag wkgd</td>
                            <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#detailObat">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->  
        </div>
    </section>
</div>

<!-- Modal Edit Data Obat-->
<div class="modal fade" id="detailObat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Obat: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Obat: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jenis Obat: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
            <label for="floatingTextarea">Deskripsi: </label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Tambah Data Obat-->
<div class="modal fade" id="tambahObat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Obat: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Obat: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jenis Obat: </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
            <label for="floatingTextarea">Deskripsi: </label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

@endsection