@extends('template.welcome')

<title>Dosen</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
                <h1 class="m-0">Selamat Datang, {{ Auth::user()->name }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <ul class="breadcrumb-item"><a href="#">Beranda</a></ul>
            </ol>
          </div>
        </div>
      </div>
    </div>

<section class="content">
      <div class="container-fluid">
        <div class="row">

            <div class="col-sm-4 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$countstp}}</h3>
                        <p>Surat Tugas Pribadi</p>
                    </div>
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                    <a href="{{route('arsipstpdsn')}}" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-sm-4 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$countstk}}</h3>
                        <p>Surat Tugas Kelompok</p>
                    </div>
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                    <a href="{{route('arsipstkdsn')}}" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-sm-4 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$countskm}}</h3>
                        <p>Surat Keterangan Dosen</p>
                    </div>
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                    <a href="{{route('arsipskmdsn')}}" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
@endsection