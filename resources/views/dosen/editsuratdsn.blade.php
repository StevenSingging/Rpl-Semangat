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
              <li class="breadcrumb-item"><a href="{{route('dosen')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Edit Surat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <nav class="navbar navbar-light bg-light">
                <h1>Edit Pengajuan Surat</h1>
            </nav>
            <form action="{{url('/dosen/updatesuratdsn',$dsurat->id)}}" method="post">
            {{ csrf_field() }}
            <div class="row">
                    <div class="col-sm-2">
                      <!-- text input -->
                      <div class="form-group">
                        <label>NID</label>
                        <input type="text" class="form-control" style=width:150px name="niuser" placeholder="NIM" value="{{$dsurat->niuser}}">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name= "name" placeholder="{{auth()->user()->name}}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword" name="tanggal" style=width:250px value="{{$dsurat->tanggal}}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tujuan Surat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="tujuan_surat" style=width:450px value="{{$dsurat->tujuan_surat}}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Mitra</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="nama_mitra" style=width:250px value="{{$dsurat->nama_mitra}}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Mitra</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="alamat_mitra" style=width:450px value="{{$dsurat->alamat_mitra}}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="keterangan" style=width:250px value="{{$dsurat->keterangan}}">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
              </form>
@endsection
