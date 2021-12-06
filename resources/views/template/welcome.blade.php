<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a class="btn btn-danger" href="{{route('logout')}}"
        onclick="return confirm('Apakah Anda yakin akan logout ?')"
        role="button">Log Out</a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('Admin/dist/img/fti-ukdw.png') }}" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RPL Company</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('Admin/dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            @if(auth()->user()->level == "mahasiswa")
            <li class="nav-item">
                <a href="{{route('pengajuansuratmhs')}}" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                    Pengajuan Surat
                    <i class="right fas fa-angle-right"></i>
                </p>
                </a>
            </li>
            @endif
            @if(auth()->user()->level == "dosen")
            <li class="nav-item">
                <a href="{{route('pengajuansuratdsn')}}" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                    Pengajuan Surat
                    <i class="right fas fa-angle-right"></i>
                </p>
                </a>
            </li>
            @endif
            @if(auth()->user()->level == "admin")
            <li class="nav-item">
                <a href="{{route('pengajuansuratadm')}}" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                    Surat Masuk
                    <i class="right fas fa-angle-right"></i>
                </p>
                </a>
            </li>
            @endif
            @if(auth()->user()->level == "admin")
            <li class="nav-item">
                <a href="{{route('suratkeluaradm')}}" class="nav-link">
                <i class="nav-icon fas fa-envelope"></i>
                <p>
                    Surat Keluar
                    <i class="right fas fa-angle-right"></i>
                </p>
                </a>
            </li>
            @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
</div>
<!-- ./wrapper -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!-- jQuery -->
<script src="{{asset('Admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('Admin/dist/js/demo.js') }}"></script>

</body>
</html>

