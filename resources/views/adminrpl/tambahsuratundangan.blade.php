@extends('template.welcome')
<title>Tambah Surat Undangan</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Tambah Surat Undangan</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah Surat</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{route('simpanund')}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="date" id="inputPassword" value="" name="tanggal" style=width:180px class="form-control">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Waktu Kegiatan</label>
                            <div class="col-2">
                                <div class="input-field">
                                <input type="time" id="inputPassword" value="" name="waktuml" style=width:180px placeholder="Waktu Mulai"  class="form-control " >
                            </div>
                            </div>
                            <div>
                            <label for="inputPassword" >_</label>
                            </div> 
                            <div class="col-3">
                                <div class="input-field">
                                <input type="time" id="inputPassword" value="" name="waktusls" style=width:180px placeholder="Waktu Selesai"  class="form-control " >
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tema Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="" name="tema" class="form-control">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kepentingan Mitra</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="" name="sebagai" class="form-control">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Mitra</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="" name="nama_mitra" class="form-control">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Lokasi Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="" name="lokasi" class="form-control">
                                </div>
                        </div>
                        
                        
                <div class="mahasiswa"></div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" role="button" href="{{ route('pengajuansuratadm') }}">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            
@endsection