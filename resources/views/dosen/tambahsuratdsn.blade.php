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
                        <div class="col-2">
                            <input type="hidden" class="form-control" style=width:150px id="inputPassword" readonly name="niuser" value="{{ Auth::user()->niuser }}" placeholder="NIK">
                        </div>
                        <div class="col-3">
                            <input type="hidden" class="form-control" style=width:150px id="inputPassword" readonly name="name" value="{{ Auth::user()->name }}" placeholder="Nama">
                        </div></div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="inputPassword" name="tanggal" style=width:160px>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tujuan Surat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="tujuan_surat">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Mitra</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="nama_mitra">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Alamat Mitra</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="alamat_mitra">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="keterangan">
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
            </form>

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script type="text/javascript">
                $(".add-more").on ('click',function(){
                    adddsn();
                });
                function adddsn(){
                    var dsn =' <div class="control-group"><div class="form-group row"><label for="inputPassword" class="col-sm-2 col-form-label"></label><div class="col-2"><input type="text" class="form-control" id="inputPassword" name="" placeholder="NIK"></div><div class="col-3"><input type="text" class="form-control" name="" placeholder="Nama"></div><div class="col-4"><button class="remove btn btn-danger" type="button"><i class="glyphicon glyphicon-plus"></i> Hapus</div>';
                    $('.dosen').append(dsn);
                }
                // saat tombol remove dklik control group akan dihapus
                $("body").on("click",".remove",function(){
                    $(this).parents(".control-group").remove();
                });
            </script>
@endsection
