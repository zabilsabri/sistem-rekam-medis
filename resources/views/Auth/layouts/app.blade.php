<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Puskesmas Wasuponda | {{ $title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.2.0/dist/css/adminlte.min.css')}}">

</head>
<!-- Page Second Navigation -->
<body class="login-page" style="min-height: 496.8px;">
<div class="login-box">
  <div class="login-logo">
    <div class="logo-app">
      <img src="{{ asset('image/Logo-Luwu-Timur.png') }}" width="65px" alt="logo luwu timur">
      <img src="{{ asset('image/logo-puskesmas.png') }}" style="margin-left: 15px" width="65px" alt="logo puskesmas">
    </div>
    <a href="/"><b>Puskesmas</b> Wasuponda</a>
  </div>
  <!-- /.login-logo -->
  @yield('content')

</div>
<!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ asset ('AdminLTE-3.2.0/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset ('AdminLTE-3.2.0/dist/js/adminlte.min.js')}}"></script>  


</body>
</html>