@extends('template.welcome')
<title> Form Validasi Surat</title>
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
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Form Validasi Surat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <nav class="navbar navbar-light bg-light">
                <h1>Form Validasi Surat</h1>
            </nav>
            <form action="{{url('/adminrpl/updatesuratadm',$asurat->id)}}" method="post">
            {{ csrf_field() }}
            <div class="row">
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputPassword" name="tanggal" style=width:250px value="{{$asurat->tanggal}}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tujuan Surat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="tujuan_surat" style=width:450px value="{{$asurat->tujuan_surat}}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Mitra</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="nama_mitra" style=width:250px value="{{$asurat->nama_mitra}}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat Mitra</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="alamat_mitra" style=width:450px value="{{$asurat->alamat_mitra}}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="keterangan" style=width:250px value="{{$asurat->keterangan}}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                  <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Aksi</label>
                    <div class="form-check">
                    <div class="col-sm-10">
                        <input class="form-check-input" type="radio" name="status" id="status" value="0"
                        @php if (($asurat->status)==0) echo 'checked' @endphp>
                        <label class="form-check-label" for="exampleRadios1">Ditolak</label>
                    </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="1"
                        @php if (($asurat->status)==1) echo 'checked' @endphp>
                        <label class="form-check-label" for="exampleRadios2">Validasi</label>
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
