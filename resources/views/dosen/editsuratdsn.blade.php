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
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tambah Anggota</label>
                        <div class="col-2">
                            <input type="text" class="form-control" id="inputPassword" name="" placeholder="NIK">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control" name="" placeholder="Nama" >
                        </div>
                        <div class="col-4">
                            <button class="add-more btn btn-success " type="button"><i class="glyphicon glyphicon-plus"></i> Tambah
                        </div>
                  </div>
                <div class="dosen"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
              </form>

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script type="text/javascript">
                $(".add-more").on ('click',function(){
                    adddsn();
                });
                function adddsn(){
                    var dsn =' <div class="control-group"><div class="form-group row"><label for="inputPassword" class="col-sm-2 col-form-label"></label><div class="col-2"><input type="text" class="form-control" id="inputPassword" name="" placeholder="NIM"></div><div class="col-3"><input type="text" class="form-control" name="" placeholder="Nama"></div><div class="col-4"><button class="remove btn btn-danger" type="button"><i class="glyphicon glyphicon-plus"></i> Hapus</div>';
                    $('.dosen').append(dsn);
                }
                // saat tombol remove dklik control group akan dihapus
                $("body").on("click",".remove",function(){
                    $(this).parents(".control-group").remove();
                });
            </script>
@endsection
