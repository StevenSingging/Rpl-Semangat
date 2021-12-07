@extends('template.welcome')

<title>Admin</title>
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
                <h1 class="m-0">Hello, {{ Auth::user()->name }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <ul class="breadcrumb-item"><a href="#">Dashboard</a></ul>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3> </h3>

                <p>Personalia & SK</p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$countstp}}</h3>

                <p>Surat Kegiatan Mahasiswa</p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>

                <p>Surat Undangan & Daftar Hadir Kegiatan</p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3> </h3>

                <p>Surat Tugas & DP3 </p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3></h3>

                <p>Berita Acara Kegiatan</p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
@endsection