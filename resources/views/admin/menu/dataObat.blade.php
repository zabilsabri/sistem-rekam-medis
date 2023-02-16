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
                      @foreach($data as $index => $item)
                        <tr>
                            <td> {{ $index + 1 }} </td>
                            <td>O - {{ $item -> id}}</td>
                            <td>{{ $item -> nama }}</td>
                            <td> {{ $item -> jenis_obat }} </td>
                            <td>{{ $item -> deskripsi }}</td>
                            <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editObat{{ $item -> id }}">Edit</button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $item -> id }}">Delete</button>
                            </td>
                        </tr>
                        <!-- Modal Edit Data Obat-->
                        <div class="modal fade" id="editObat{{ $item -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="editDataObat/{{ $item -> id }}" method="POST">
                                @csrf
                              <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Obat: </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="{{ $item -> nama }}" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Jenis Obat: </label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="jenis" value="{{ $item -> jenis_obat }}" placeholder="">
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInputValue" name="deskripsi" placeholder="{{ $item -> deskripsi }}" value="{{ $item -> deskripsi }}">
                                    <label for="floatingInputValue">Deskripsi: </label>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Edit</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <!-- Modal Delete Data-->
                        <div class="modal fade" id="delete{{ $item -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah anda yakin ingin menghapus data ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a type="button" href="/deleteDataObat/{{ $item -> id }}" class="btn btn-danger">Delete</a>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->  
        </div>
    </section>
</div>

<!-- Modal Tambah Data Obat-->
<div class="modal fade" id="tambahObat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="tambahDataObat" method="POST">
        @csrf
      <div class="modal-body">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Obat: </label>
            <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jenis Obat: </label>
            <input type="text" class="form-control" name="jenis" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" name="deskripsi" id="floatingTextarea" style="height: 100px"></textarea>
            <label for="floatingTextarea">Deskripsi: </label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection