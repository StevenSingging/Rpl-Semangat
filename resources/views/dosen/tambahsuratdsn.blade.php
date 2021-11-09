@extends('template.welcome')
<title>Pengajuan Surat</title>
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Tambah Data Pengajuan Surat</h1>
            </nav>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dosen')}}">Home</a></li>
              <li class="breadcrumb-item active">Tambah Surat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{route('simpansuratdsn')}}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-sm-2">
                        <div class="form-group">
                            <label for="inputPassword">NID</label>
                            <input type="text" class="form-control" style=width:150px id="inputPassword" name="niuser" placeholder="{{auth()->user()->niuser}}">
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="{{auth()->user()->name}}" disabled>
                        </div>
                        </div>
                        </div>
                            <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputPassword" name="tanggal" style=width:160px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tujuan Surat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="tujuan_surat">
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Mitra</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="nama_mitra">
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Alamat Mitra</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="alamat_mitra">
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="keterangan">
                        </div></div></div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
@endsection
