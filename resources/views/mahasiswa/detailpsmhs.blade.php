@extends('template.welcome')
<title> Edit Surat</title>
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('mahasiswa')}}">Home</a></li>
              <li class="breadcrumb-item active">Detail Surat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <nav class="navbar navbar-light bg-light">
                <h1>Detail Pengajuan Surat</h1>
            </nav><br>
            <p>NIM : {{$psurat->user->niuser}}</p>
            <p>Nama : {{$psurat->user->name}}</p>
            <p>Tanggal : {{$psurat->tanggal}}</p>
            <p>Tujuan Surat : {{$psurat->tujuan_surat}}</p>
            <p>Nama Mitra : {{$psurat->nama_mitra}}</p>
            <p>Alamat Mitra : {{$psurat->alamat_mitra}}</p>
            <p>Keterangan : {{$psurat->keterangan}}</p>
            <p>Status : {{ ($psurat->status == 0) ? 'Sedang diproses' : 'Diterima'}}</p>
@endsection
