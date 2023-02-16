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
                    @foreach($data as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>P - {{ $item->id }}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{ $item -> noTelp }}</td>
                            <td>{{ $item -> tglLahir }}</td>
                            <td>{{ $item -> nik }}</td>
                            <td><a class="btn btn-primary" href="rmPasien/{{$item -> id}}" role="button">Detail</a></td>
                        </tr>
                    @endforeach
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
        <form action="tambahPasien" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputBorder">1. Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">2. Nama Kepala Keluarga</label>
            <input type="text" class="form-control" name="nKepalaKeluarga" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">3. Nama Ibu Kandung</label>
            <input type="text" class="form-control" name="nIbuKandung" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">4. Kode Desa</label>
            <input type="text" class="form-control" name="kodeDesa" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">5. NIK</label>
            <input type="text" class="form-control" name="nik" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">6. Agama</label>
            <input type="text" class="form-control" name="agama" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">7. Tgl Lahir</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="text" class="form-control js-date" name="tglLahir" maxlength="10" />                            
            </div>                           
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">8. Jenis Kelamin</label>
            <select class="form-select" name="jk" aria-label="Default select example">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="l">Laki - Laki</option>
                <option value="p">Perempuan</option>
            </select>        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">9. Status</label>
            <input type="text" class="form-control" name="status" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">10. Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">11. Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">12. Nomor Telpon</label>
            <input type="text" class="form-control" name="noTelp" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">13. Jenis Asuransi</label>
            <input type="text" class="form-control" name="jenisAsuransi" placeholder="">        
        </div>
        <div class="form-group">
            <label for="exampleInputBorder">14. Nomor Asuransi</label>
            <input type="text" class="form-control" name="noAsuransi" placeholder="">        
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