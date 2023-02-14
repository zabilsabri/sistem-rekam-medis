@extends('admin.layouts.app' , ['title' => 'Menu Admin'])
@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content p-4">
        <div class="container-fluid">
            <h2 class="text-center display-4">Daftar Pasien</h2>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                <strong> {{$message}} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex">
                <h3 class="card-title p-2 flex-grow-1">Tabel Pasien</h3>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Kunjungan Baru
                </button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered" id="tableBlog">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>No. Telp</th>
                            <th>Tanggal Lahir</th>
                            <th>NIK</th>
                            <th style="width: 40px">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>P1</td>
                            <td>Test</td>
                            <td>000000000000</td>
                            <td>10/05/2003</td>
                            <td>000000000000</td>
                            <td><a class="btn btn-primary" href="rmPasien" role="button">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <input id="startDate" class="form-control" type="date" />        
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