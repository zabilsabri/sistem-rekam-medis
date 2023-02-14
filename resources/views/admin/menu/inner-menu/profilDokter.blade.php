@extends('admin.layouts.app' , ['title' => 'Menu Admin'])
@section('content')

<div class="content-wrapper" style="min-height: 680.917px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
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

                <h3 class="profile-username text-center">Dr. Nina Mcintire</h3>

                <p class="text-muted text-center">Poli : <b>Umum</b></p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Senin</b> <span class="float-right">07.00 - 16.00</span>
                    </li>
                    <li class="list-group-item">
                        <b>Selasa</b> <span class="float-right">07.00 - 16.00</span>
                    </li>
                    <li class="list-group-item">
                        <b>Rabu</b> <span class="float-right">07.00 - 16.00</span>
                    </li>
                    <li class="list-group-item">
                        <b>Kamis</b> <span class="float-right">07.00 - 16.00</span>
                    </li>
                    <li class="list-group-item">
                        <b>Jum'at</b> <span class="float-right">07.00 - 16.00</span>
                    </li>
                    <li class="list-group-item">
                        <b>Sabtu</b> <span class="float-right">07.00 - 16.00</span>
                    </li>
                    <li class="list-group-item">
                        <b>Minggu</b> <span class="float-right">07.00 - 16.00</span>
                    </li>
                    
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Edit Jadwal</b></a>
                
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
                        <tr>
                            <td>1</td>
                            <td>RM-1</td>
                            <td>Test</td>
                            <td>Umum</td>
                            <td>Test</td>
                            <td>Test</td>
                            <td>10/05/2003</td>
                        </tr>
                    </tbody>
                </table>
                  </div>
                  <!-- /.tab-pane -->
                  
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Poli</label>
                        <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                            <option value="umum" selected>Umum</option>
                            <option value="gigi">Gigi</option>
                            <option value="mtbs/anak">MTBS/Anak</option>
                        </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Edit</button>
                        </div>
                      </div>
                    </form>
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