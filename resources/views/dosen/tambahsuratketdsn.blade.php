@extends('template.welcome')

<title>Surat Ket MHS</title>
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1></h1>
            </nav>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('mahasiswa')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah Surat Keterangan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{route('simpanmhs')}}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-2">
                            <input type="hidden" class="form-control" style=width:150px id="inputPassword" readonly name="niuser" value="{{ Auth::user()->niuser }}" placeholder="NiAng">
                        </div>
                        <div class="col-3">
                            <input type="hidden" class="form-control" style=width:150px id="inputPassword" readonly name="nmuser" value="{{ Auth::user()->name }}" placeholder="nmAng">
                        </div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="almt_mitra">
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="ket_keg">
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Program Studi</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="lk_keg">
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="lk_keg">
                        </div></div></div>
                    </div>
                <div class="mahasiswa"></div>
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary float-right"  data-dismiss="form">Batal</button>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>

@endsection