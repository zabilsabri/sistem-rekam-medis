@extends('dokter.layouts.app' , ['title' => 'Menu Dokter'])
@section('content')

<!-- plugin -->
<script src="https://www.virtuosoft.eu/code/bootstrap-duallistbox/bootstrap-duallistbox/v3.0.2/jquery.bootstrap-duallistbox.js"></script>
<link rel="stylesheet" type="text/css" href="https://www.virtuosoft.eu/code/bootstrap-duallistbox/bootstrap-duallistbox/v3.0.2/bootstrap-duallistbox.css">


<div class="content-wrapper" style="min-height: 1604.8px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profil Pasien</h1>
            </div>
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show w-100 mt-3" role="alert">
                <strong> {{$message}} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
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
                @foreach($data as $index => $item)
                  @if ($item -> jk === "l")
                  <img class="profile-user-img img-circle" src="{{asset('image/bAvatar.png')}}" alt="User profile picture">
                  @else
                  <img class="profile-user-img img-circle" src="{{asset('image/gAvatar.png')}}" alt="User profile picture">
                  @endif
                </div>

                <h3 class="profile-username text-center"> {{ $item -> nama }} </h3>

                <p class="text-muted text-center">P - {{ $item -> id }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <span>NIK</span> <b class="float-right">{{ $item -> nik }}</b>
                  </li>
                  <li class="list-group-item">
                    <span>Tanggal Lahir</span> <b class="float-right">{{ $item -> tglLahir }}</b>
                  </li>
                  <li class="list-group-item">
                    <span>Kepala Keluarga</span> <b class="float-right"> {{ $item -> nKepalaKeluarga }} </b>
                  </li>
                  <li class="list-group-item">
                    <span>Ibu Kandung</span> <b class="float-right"> {{ $item -> nIbuKandung }} </b>
                  </li>
                  <li class="list-group-item">
                    <span>Status</span> <b class="float-right">{{ $item -> status }}</b>
                  </li>
                  <li class="list-group-item">
                    <span>Pekerjaan</span> <b class="float-right"> {{ $item -> pekerjaan }} </b>
                  </li>
                  <li class="list-group-item">
                    <span>Jenis Kelamin</span>
                    @if ($item -> jk === "l")
                    <b class="float-right"> Laki - Laki </b>
                    @else
                    <b class="float-right"> Perempuan </b>
                    @endif
                  </li>
                  <li class="list-group-item">
                    <span>Alamat</span> <b class="float-right">{{ $item -> alamat }}</b>
                  </li>
                  <li class="list-group-item">
                    <span>Agama</span> <b class="float-right">{{ $item -> agama }}</b>
                  </li>
                  <li class="list-group-item">
                    <span>No. Telepon</span> <b class="float-right">{{ $item -> noTelp }}</b>
                  </li>
                  <li class="list-group-item">
                    <span>Jenis Asuransi</span> <b class="float-right">{{ $item -> jenis_asuransi }}</b>
                  </li>
                  <li class="list-group-item">
                    <span>No. Asuransi</span> <b class="float-right"> {{ $item -> no_kartu }} </b>
                  </li>
                </ul>

                <!-- Modal Edit Data Pasien -->
                <div class="modal fade" id="editDataPasien{{ $item -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Kunjungan Baru</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="/editDataPasien/{{ $item -> id }}" method="POST">
                          @csrf
                        <div class="form-group">
                            <label for="exampleInputBorder">1. Nama</label>
                            <input type="text" class="form-control" name="nama" value=" {{ $item -> nama }} " placeholder="">        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">2. Nama Kepala Keluarga</label>
                            <input type="text" class="form-control" name="nKepalaKeluarga" value=" {{ $item -> nKepalaKeluarga }} " placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">3. Nama Ibu Kandung</label>
                            <input type="text" class="form-control" name="nIbuKandung" value=" {{ $item -> nIbuKandung }} " placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">4. Kode Desa</label>
                            <input type="text" class="form-control" name="kodeDesa" value=" {{ $item -> kode_desa }} " placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">5. NIK</label>
                            <input type="text" class="form-control" name="nik" value=" {{ $item -> nik }} " placeholder="">        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">6. Agama</label>
                            <input type="text" class="form-control" name="agama" value=" {{ $item -> agama }} " placeholder="">        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">7. Tgl Lahir</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                              </div>
                              <input type="text" class="form-control js-date" name="tglLahir" value="{{ $item -> tglLahir }}" maxlength="10" />                            
                            </div>      
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">8. Jenis Kelamin</label>
                            <select class="form-select" name="jk" aria-label="Default select example">
                                @if ($item -> jk === "l")
                                  <option value="l" selected>Laki - Laki</option>
                                  <option value="p">Perempuan</option>
                                @else
                                <option value="l">Laki - Laki</option>
                                <option value="p" selected>Perempuan</option>
                                @endif
                            </select>         
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">9. Status</label>
                            <input type="text" class="form-control" name="status" value=" {{ $item -> status }} " placeholder="">        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">10. Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" value=" {{ $item -> pekerjaan }} " placeholder="">        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">11. Alamat</label>
                            <input type="text" class="form-control" name="alamat" value=" {{ $item -> alamat }} " placeholder="">        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">12. Nomor Telpon</label>
                            <input type="text" class="form-control" name="noTelp" value=" {{ $item -> noTelp }} " placeholder="">        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">13. Jenis Asuransi</label>
                            <input type="text" class="form-control" name="jenisAsuransi" value=" {{ $item -> jenis_asuransi }} " placeholder="">        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBorder">14. Nomor Asuransi</label>
                            <input type="text" class="form-control" name="noAsuransi" value=" {{ $item -> no_kartu }} " placeholder="">        
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
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
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered" id="tableBlog">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode RM</th>
                            <th>Keluhan</th>
                            <th>Poli</th>
                            <th>Kode ICD 10</th>
                            <th>Obat</th>
                            <th>Tindakan</th>
                            <th>Tgl Berobat</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data2 as $index2 => $item2)
                        <tr>
                            <td> {{ $index2 + 1 }} </td>
                            <td> RM - {{ $item2 -> id }} </td>
                            <td> {{ $item2 -> keluhan }} </td>
                            <td>{{ $item2 -> poli -> nama}}</td>
                            <td> {{ $item2 -> icd10 -> nama ?? '-' }}</td>
                            <td> {{ $item2 -> obat_id ?? '-'}} </td>
                            <td> {{ $item2 -> tindakan ?? '-'}} </td>
                            <td> {{ $item2 -> created_at }} </td>
                            <td>
                              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit{{ $item2 -> id }}">Edit</button>
                            </td>
                        </tr>
                        <!-- Modal Edit Data-->
                        <div class="modal fade" id="edit{{ $item2 -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Riwayat Medis</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form action=" /editRM/{{ $item2 -> id }}/{{ $item -> id }}">
                                    <div class="form-group">
                                        <label for="exampleInputBorder">1. Tindakan</label>
                                        <input type="text" class="form-control" value="{{ $item2 -> tindakan }}" name="tindakan" placeholder="">        
                                    </div>
                                    <!-- using https://github.com/istvan-ujjmeszaros/bootstrap-duallistbox -->

                                      <!-- common libraries -->
                                      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

                                      <!-- plugin -->
                                      <script src="https://www.virtuosoft.eu/code/bootstrap-duallistbox/bootstrap-duallistbox/v3.0.2/jquery.bootstrap-duallistbox.js"></script>

                                      <link rel="stylesheet" type="text/css" href="https://www.virtuosoft.eu/code/bootstrap-duallistbox/bootstrap-duallistbox/v3.0.2/bootstrap-duallistbox.css">

                                      <style>
                                        .moveall,
                                        .removeall {
                                          border: 1px solid #ccc !important;
                                          
                                          &:hover {
                                            background: #efefef;
                                          }
                                        }

                                        .moveall::after {
                                          content: attr(title);
                                          
                                        }

                                        .removeall::after {
                                          content: attr(title);
                                        }
                                        .form-control option {
                                            padding: 10px;
                                            border-bottom: 1px solid #efefef;
                                        }
                                      </style>

                                      <!-- Demo -->
                                      <div class="container">
                                        <div class="row" style="margin-bottom: 40px;">
                                          <div class="col">
                                            <form id="demoform">
                                              <select multiple="multiple" size="10" name="duallistbox_demo1[]" title="duallistbox_demo1[]">
                                                <option value="payee1">Aviva Insurance - Business - 987654</option>
                                                <option value="payee2">Bell Mobility - 66853 (John Smith)</option>
                                                <option value="payee3">Bell Mobility - 75432 (Jane Smith)</option>
                                                <option value="payee4">Bell Mobility - 98765 (Jim Smith)</option>
                                                <option value="payee5">Canadian Tire Commercial Mastercard - **** 5525</option>
                                                <option value="payee6">Canadian Tire Mastercard - **** 3158 (President's Card)</option>
                                                <option value="payee7">FedEx Express Canada - 54321</option>
                                                <option value="payee8">Lowes Canada - 12345</option>
                                                <option value="payee9">Mastercard, PC Financial - **** 5535</option>
                                                <option value="payee10">Qtrade Investor - 12345</option>
                                                <option value="payee11" selected="selected">Servus Mastercard - **** 5545</option>
                                                <option value="payee12">Telus - 123456787 (Calagary  Office)</option>
                                                <option value="payee13">Telus - 123456788 (Edmonton NW Office)</option>
                                                <option value="payee14">Telus - 123456789 (Edmonton SE Office)</option>
                                              </select>
                                              <br>
                                            </form>
                                          </div>
                                        </div>
                                      </div>

                                      <script>
                                        var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({
                                          nonSelectedListLabel: 'Obat',
                                          selectedListLabel: 'Obat Yang Terpilih',
                                          preserveSelectionOnMove: 'moved',
                                          moveAllLabel: 'Move all',
                                          removeAllLabel: 'Remove all'
                                        });
                                        $("#demoform").submit(function() {
                                          alert($('[name="duallistbox_demo1[]"]').val());
                                          return false;
                                        });
                                      </script>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endforeach
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