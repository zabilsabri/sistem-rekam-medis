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

                <a href="#" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#editDataPasien"><b>Edit</b></a>
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
                <a class="btn bg-gradient-danger p-2 text-light" data-bs-toggle="modal" data-bs-target="#tambahRM" href="createArticle" role="button">+ Tambah</a>
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
                            <th>Obat</th>
                            <th>Tindakan</th>
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
                            <td>Test</td>
                            <td>Test</td>
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

  <!-- Modal Tambah RM -->
<div class="modal fade" id="tambahRM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group">
              <label for="exampleInputBorder">1. Keluhan</label>
              <input type="text" class="form-control" placeholder="">        
          </div>
          <div class="form-group">
              <label for="exampleInputBorder">2. Poli</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="umum">Umum</option>
                <option value="gigi">Gigi</option>
                <option value="mtbs/anak">MTBS/Anak</option>
              </select>
          </div>
          <div class="form-group">
              <label for="exampleInputBorder">3. Dokter</label>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Data Pasien -->
<div class="modal fade" id="editDataPasien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Kunjungan Baru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputBorder">1. Nama</label>
            <input type="text" class="form-control" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">2. Nama Kepala Keluarga</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">3. Nama Ibu Kandung</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">4. Kode Desa</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">5. NIK</label>
            <input type="text" class="form-control" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">6. Agama</label>
            <input type="text" class="form-control" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">7. Tgl Lahir</label>
            <input class="form-control" type="date" />        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">8. Jenis Kelamin</label>
            <input type="text" class="form-control" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">9. Status</label>
            <input type="text" class="form-control" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">10. Pekerjaan</label>
            <input type="text" class="form-control" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">11. Alamat</label>
            <input type="text" class="form-control" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">12. Nomor Telpon</label>
            <input type="text" class="form-control" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">13. Jenis Asuransi</label>
            <input type="text" class="form-control" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">14. Nomor Asuransi</label>
            <input type="text" class="form-control" placeholder="">        
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan Data</button>
      </div>
    </div>
  </div>
</div>

@endsection