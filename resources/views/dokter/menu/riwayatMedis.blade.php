@extends('dokter.layouts.app' , ['title' => 'Menu Dokter'])
@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content p-4">
        <div class="container-fluid">
            <h2 class="text-center display-4 fw-bold">Daftar Riwayat Medis</h2>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                <strong> {{$message}} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title p-2 flex-grow-1">Tabel Riwayat Medis</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered" id="tableBlog">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode RM</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan</th>
                            <th>Poli</th>
                            <th>Tgl Berobat</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $index => $item)
                        <tr>
                            <td> {{ $index + 1 }} </td>
                            <td>RM - {{ $item -> id }}</td>
                            <td> {{ $item -> pasien -> nama }} </td>
                            <td> {{ $item -> keluhan }} </td>
                            <td> {{ $item -> poli -> nama }} </td>
                            <td> {{ $item -> created_at }} </td>
                            <td><a class="btn btn-primary" href="rmPasienDokter/{{$item -> pasien -> id}}" role="button">Detail</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            
        </div>
    </section>
</div>

@endsection