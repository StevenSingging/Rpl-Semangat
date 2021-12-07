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
                @if($psurat->jenis_id == 2)
                <p>Tanggal Pengajuan : {{date('d-m-Y', strtotime($psurat->created_at))}}</p>
                <p>Program Studi : {{$psurat->user->prodi}}</p>
                <p>Jabatan : {{$psurat->user->level}}</p>
                @endif
                <p>NIK : {{$psurat->user->niuser}}</p>
                <p>Nama : {{$psurat->user->name}}</p>
                @if($psurat->jenis_id == 4)
                <p>Tanggal Kegiatan : {{date('d-m-Y', strtotime($psurat->tanggal))}}</p>
                <p>Sebagai : {{$psurat->sebagai}}</p>
                <p>Mitra Kegiatan : {{$psurat->nama_mitra}}</p>
                <p>Tema Kegiatan : {{$psurat->tema}}</p>
                <p>Keterangan Kegiatan : {{$psurat->keterangan}}</p>
                <p>Lokasi Kegiatan : {{$psurat->lokasi}}</p>
                @if($psurat->ni_ang != null)
                <p>NI Anggota : {{$psurat->ni_ang}}</p>
                <p>Nama Anggota : {{$psurat->nama_ang}}</p>
                @endif
                @endif
                <p>Status : {{ ($psurat->status == 0) ? 'Sedang diproses' : 'Validasi'}}</p>
@endsection