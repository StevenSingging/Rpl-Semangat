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
                @if($asurat->jenis_id == 2)
                <p>Tanggal Pengajuan : {{date('d-m-Y', strtotime($asurat->created_at))}}</p>
                <p>Program Studi : {{$asurat->user->prodi}}</p>

                @if($asurat->user->level == 'mahasiswa')
                <p>Semester : {{$asurat->user->semester}}</p>
                @endif
                @if($asurat->user->level == 'dosen')
                <p>Jabatan : {{$asurat->user->level}}</p>
                @endif
                @endif
                <p>Pengirim : {{$asurat->user->niuser}} - {{$asurat->user->name}}</p>
                @if($asurat->jenis_id == 4)
                <p>Tanggal Kegiatan : {{date('d-m-Y', strtotime($asurat->tanggal))}}</p>
                <p>Sebagai : {{$asurat->sebagai}}</p>
                <p>Mitra Kegiatan : {{$asurat->nama_mitra}}</p>
                <p>Tema Kegiatan : {{$asurat->tema}}</p>
                <p>Keterangan Kegiatan : {{$asurat->keterangan}}</p>
                <p>Lokasi Kegiatan : {{$asurat->lokasi}}</p>
                @if($asurat->ni_ang != null)
                <p>NI Anggota : {{$asurat->ni_ang}}</p>
                <p>Nama Anggota : {{$asurat->nama_ang}}</p>
                @endif
                @endif
                <p>Status : {{ ($asurat->status == 0) ? 'Sedang diproses' : 'Validasi'}}</p>

@endsection

