@extends('admin.layouts.app' , ['title' => 'Menu Admin'])
@section('content')

<div class="content-wrapper" style="min-height: 680.917px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Dokter</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      @if ($errors->any())
          <div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
              @foreach($errors->all() as $error)
              <strong> {{$error}} </strong>
              @endforeach
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      @if($message = Session::get('success'))
          <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
              <strong> {{$message}} </strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{ asset('image/dAvatar.png') }}" alt="User profile picture">
                </div>
                @foreach($data as $item)
                <h3 class="profile-username text-center">{{ $item -> nama }}</h3>

                <p class="text-muted text-center">Poli : <b>{{ $item -> poli -> nama }}</b></p>
                @endforeach
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
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="activity">
                  <table class="table table-bordered" id="tableBlog">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode RM</th>
                            <th>Keluhan</th>
                            <th>Poli</th>
                            <th>Obat</th>
                            <th>Tindakan</th>
                            <th>Tgl Berobat</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($data2 as $index2 => $item2)
                        <tr>
                            <td> {{ $index2 + 1 }} </td>
                            <td>RM - {{ $item->id }}</td>
                            <td>{{ $item2 -> keluhan }}</td>
                            <td> {{ $item2 -> poli -> nama }}</td>
                            <td>
                              <ul style="padding-left: 20px;">
                                @foreach($item2->obat_keluhan as $o)
                                <li>
                                  {{ $o -> nama_obat ?? '-' }}
                                </li>
                                @endforeach
                              </ul>
                            </td>
                            <td> {{ $item2 -> tindakan }} </td>
                            <td> {{ $item2 -> created_at }} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                  </div>
                  <!-- /.tab-pane -->
                  
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="/editDataDokter/{{ $item -> id }}" method="POST">
                      @csrf
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="nama" value="{{ $item -> nama }}" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName2" name="email" value="{{ $item -> email }}" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Poli</label>
                        <div class="col-sm-10">
                        <select class="form-select" name="poli" aria-label="Default select example">
                            <option value="{{ $item -> poli -> id }}" selected> -- {{ $item -> poli -> nama }}</option>
                          @foreach ($data3 as $item3)
                            <option value="{{ $item3 -> id }}">{{ $item3 -> nama }}</option>
                          @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="* Tekan Tombol Ubah Password Jika Ingin Mengubah Password" aria-label="Disabled input example" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-warning">Edit</button>
                          <button type="button" data-bs-toggle="modal" data-bs-target="#delete{{ $item -> id }}" class="btn btn-danger">Hapus</button>
                          <button type="button" data-bs-toggle="modal" data-bs-target="#ubahPassword{{ $item -> id }}" class="btn btn-primary">Ubah Password</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- Modal Uabh Password Dokter -->
                  <div class="modal fade" id="ubahPassword{{ $item -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Password</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Masukkan Password Baru Anda: </p>
                          <form action="/ubahPassword/{{ $item -> id }}">
                          <input class="form-control" type="text" name="password" placeholder="password" aria-label="default input example">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- Modal Hapus Akun Dokter -->
                  <div class="modal fade" id="delete{{ $item -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Apakah anda yakin ingin menghapus akun dokter ini?
                        </div>
                        <div class="modal-footer">
                          <a type="button" href="/hapusDataDokter/{{ $item -> id }}" class="btn btn-danger">Confirm</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
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