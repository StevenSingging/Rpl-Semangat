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
              <ul class="breadcrumb-item"><a href="#">Beranda</a></ul>
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
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$countsp}} </h3>

                <p>Personalia & SK</p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="{{route('arsipsa')}}" class="small-box-footer">info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$countskm}}</h3>

                <p>Surat Keterangan</p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="{{route('arsipsb')}}" class="small-box-footer">info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$countsud}}</h3>

                <p>Surat Undangan & Daftar Hadir Kegiatan</p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="{{route('arsipsc')}}" class="small-box-footer">info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> {{$countst}} </h3>

                <p>Surat Tugas & DP3 </p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="{{route('arsipsd')}}" class="small-box-footer">info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-4 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{$countsbc}}</h3>

                <p>Berita Acara Kegiatan</p>
              </div>
              <div class="icon">
              <i class="fas fa-envelope"></i>
              </div>
              <a href="{{route('arsipse')}}" class="small-box-footer">info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
@endsection