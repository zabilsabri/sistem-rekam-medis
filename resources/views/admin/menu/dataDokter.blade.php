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
                <a class="btn bg-gradient-danger p-2 text-light" data-bs-toggle="modal" data-bs-target="#tambah" role="button">+ TAMBAH</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered" id="tableBlog">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Poli</th>
                            <th style="width: 40px">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $index => $item)
                        <tr>
                            <td> {{ $index + 1 }} </td>
                            <td> D - {{ $item -> id }} </td>
                            <td> {{ $item -> nama }}</td>
                            <td> {{ $item -> poli -> nama }} </td>
                            <td><a type="button" href="/profilDokter/{{ $item -> id }}" class="btn btn-block btn-info">Info</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            
        </div>
    </section>
</div>

    <!-- Modal Tambah Data Dokter-->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Dokter</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="tambahDataDokter" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputBorder">1. Nama</label>
                    <input type="text" class="form-control" name="nama">        
                </div>
                <div class="form-group">
                    <label for="exampleInputBorder">2. Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputBorder">3. Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputBorder">4. Poli</label>
                    <select class="form-select" name="poli" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        @foreach($data2 as $index2 => $item2)
                            <option value="{{ $item2 -> id }}">{{ $item2 -> nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
            </form>
            </div>
        </div>
    </div>

@endsection