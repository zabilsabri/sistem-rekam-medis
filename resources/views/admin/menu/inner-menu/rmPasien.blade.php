@extends('admin.layouts.app' , ['title' => 'Menu Admin'])
@section('content')

<div class="content-wrapper" style="min-height: 1604.8px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profil Pasien</h1>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">P-1</p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <span>NIK</span> <b class="float-right">000000000000000</b>
                  </li>
                  <li class="list-group-item">
                    <span>Tanggal Lahir</span> <b class="float-right">10/06/2003</b>
                  </li>
                  <li class="list-group-item">
                    <span>Kepala Keluarga</span> <b class="float-right">Michael</b>
                  </li>
                  <li class="list-group-item">
                    <span>Ibu Kandung</span> <b class="float-right">Naba</b>
                  </li>
                  <li class="list-group-item">
                    <span>Status</span> <b class="float-right">Belum Menikah</b>
                  </li>
                  <li class="list-group-item">
                    <span>Pekerjaan</span> <b class="float-right">Pelajar</b>
                  </li>
                  <li class="list-group-item">
                    <span>Jenis Kelamin</span> <b class="float-right">Perempuan</b>
                  </li>
                  <li class="list-group-item">
                    <span>Alamat</span> <b class="float-right">Dg. Tata</b>
                  </li>
                  <li class="list-group-item">
                    <span>Agama</span> <b class="float-right">Islam</b>
                  </li>
                  <li class="list-group-item">
                    <span>No. Telepon</span> <b class="float-right">081145454545</b>
                  </li>
                  <li class="list-group-item">
                    <span>Jenis Asuransi</span> <b class="float-right">Umum</b>
                  </li>
                  <li class="list-group-item">
                    <span>No. Asuransi</span> <b class="float-right">-</b>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
          <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title p-2 flex-grow-1">Tabel Riwayat Medis Pasien</h3>
                <a class="btn bg-gradient-danger p-2 text-light" href="createArticle" role="button">+ Tambah</a>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" id="tableBlog">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode RM</th>
                            <th>Dokter</th>
                            <th>Keluhan</th>
                            <th>Poli</th>
                            <th>Tgl Berobat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>RM-1</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>Umum</td>
                            <td>10/05/2003</td>
                        </tr>
                    </tbody>
                </table>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection