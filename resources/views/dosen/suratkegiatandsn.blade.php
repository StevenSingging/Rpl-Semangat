@extends('template.welcome')
<title>Tambah SK</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Tambah SK</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dosen')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah Surat</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{route('simpansuratkegiatandsn')}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ Auth::user()->niuser }}" readonly>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ Auth::user()->name }}" readonly>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px name="prodi" class="form-control" placeholder="{{ Auth::user()->prodi }}" readonly>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px name="semester" class="form-control" placeholder="{{ Auth::user()->level }}" readonly>
                                </div>
                        </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" role="button" href="{{ route('pengajuansuratdsn') }}">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
@endsection