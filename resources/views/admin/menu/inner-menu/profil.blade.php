@extends('admin.layouts.app' , ['title' => 'Menu Admin'])
@section('content')

<div class="content-wrapper" style="min-height: 680.917px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Admin</h1>
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
                  <img class="profile-user-img img-fluid img-circle" src="{{ asset('image/aAvatar.png') }}" alt="User profile picture">
                </div>
                @foreach($data as $item)
                <h3 class="profile-username text-center">{{ $item -> nama }}</h3>
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
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
              </div>
              <div class="card-body">
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="/editDataAdmin/{{ $item -> id }}" method="POST">
                      @csrf
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nama</label>
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
                        <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="* Tekan Tombol Ubah Password Jika Ingin Mengubah Password" aria-label="Disabled input example" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-warning">Edit</button>
                          <button type="button" data-bs-toggle="modal" data-bs-target="#ubahPassword{{ $item -> id }}" class="btn btn-primary">Ubah Password</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- Modal Ubah Password Admin -->
                  <div class="modal fade" id="ubahPassword{{ $item -> id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Password</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Masukkan Password Baru Anda: </p>
                          <form action="/ubahPasswordAdmin/{{ $item -> id }}">
                          <input class="form-control" type="text" name="password" placeholder="password" aria-label="default input example">
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                        </form>
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