<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css' )}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/dist/css/adminlte.min.css' )}}">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/bs-stepper/css/bs-stepper.min.css')}}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/dropzone/min/dropzone.min.css')}}">
  <!-- AdminLTE App -->
  <script src="{{asset('AdminLTE-3.2.0/dist/js/adminlte.min.js')}}"></script>
  <!-- Data Tables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('image/Logo-Luwu-Timur.png')}}" alt="" height="70" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="btn btn-dark" href="/logout" role="button">Logout</a>
      </li>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <span class="brand-link">
      <img class="brand-text" style="padding-left: 12px;" src="{{ asset('image/Logo-Luwu-Timur.png') }}" width="42px" alt="logo luwu timur">
      <span class="brand-text font-weight-light fs-6">Puskesmas Wasuponda</span>
    </span>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ asset('image/aAvatar.png') }}" alt="User profile picture" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="{{ route('profil.admin') }}" class="d-block text-light">{{ strtoupper(Auth::user()->nama)}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
                <a href="/kunjunganPasien" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>Kunjungan</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="/riwayatMedis" class="nav-link">
                  <p>Riwayat Medis</p>
                </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <p>
                Data Puskesmas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/dataDokter" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>Dokter</p>
                </a>
            </li>
            <li class="nav-item">
                  <a href="/dataObat" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>Obat</p>
                  </a>
            </li>
            <li class="nav-item">
                  <a href="/dataICD10" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>ICD 10</p>
                  </a>
            </li>
            <li class="nav-item">
                  <a href="/dataPoli" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>Poli</p>
                  </a>
            </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('AdminLTE-3.2.0/plugins/jquery/jquery.min.js ')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js ')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE-3.2.0/dist/js/adminlte.js ')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('AdminLTE-3.2.0/plugins/jquery-mousewheel/jquery.mousewheel.js ')}}"></script>
<script src="{{asset('AdminLTE-3.2.0/plugins/raphael/raphael.min.js ')}}"></script>
<script src="{{asset('AdminLTE-3.2.0/plugins/jquery-mapael/jquery.mapael.min.js ')}}"></script>
<script src="{{asset('AdminLTE-3.2.0/plugins/jquery-mapael/maps/usa_states.min.js ')}}"></script>
<!-- ChartJS -->
<script src="{{asset('AdminLTE-3.2.0/plugins/chart.js/Chart.min.js ')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- datatable -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready( function () {
         $('#tableBlog').DataTable();
      } );
   </script>
</script>

<script>
    var input = document.querySelectorAll('.js-date')[0];
  
    var dateInputMask = function dateInputMask(elm) {
      elm.addEventListener('keypress', function(e) {
        if(e.keyCode < 47 || e.keyCode > 57) {
          e.preventDefault();
        }
        
        var len = elm.value.length;

        if(len !== 1 || len !== 3) {
          if(e.keyCode == 47) {
            e.preventDefault();
          }
        }
        
        if(len === 2) {
          elm.value += '/';
        }
    
        if(len === 5) {
          elm.value += '/';
        }
      });
    };
      
    dateInputMask(input);
  </script>

</body>
</html>