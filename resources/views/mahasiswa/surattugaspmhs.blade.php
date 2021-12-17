@extends('template.welcome')
<title>Surat Tugas Pribadi</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Tambah Surat Tugas Pribadi</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('mahasiswa')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah Surat Tugas Pribadi</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{route('simpansurattugaspmhs')}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="date" id="inputPassword" name="tanggal" style=width:180px class="form-control
                                    @error('tanggal') is-invalid @enderror" value="{{old('tanggal')}}">
                                    @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Sebagai</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="sebagai" class="form-control
                                    @error('sebagai') is-invalid @enderror" value="{{old('sebagai')}}">
                                    @error('sebagai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mitra Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="nama_mitra" class="form-control
                                    @error('nama_mitra') is-invalid @enderror" value="{{old('nama_mitra')}}">
                                    @error('nama_mitra')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Tema Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="tema" class="form-control
                                    @error('tema') is-invalid @enderror" value="{{old('tema')}}">
                                    @error('tema')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="keterangan" class="form-control
                                    @error('keterangan') is-invalid @enderror" value="{{old('keterangan')}}">
                                    @error('keterangan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Lokasi Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="lokasi" class="form-control
                                    @error('lokasi') is-invalid @enderror" value="{{old('lokasi')}}">
                                    @error('lokasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                <div class="mahasiswa"></div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" role="button" href="{{ route('pengajuansuratmhs') }}">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
@endsection