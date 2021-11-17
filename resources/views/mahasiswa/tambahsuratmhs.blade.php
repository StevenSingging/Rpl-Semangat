@extends('template.welcome')
<title>Pengajuan Surat</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Tambah Data Pengajuan Surat</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('mahasiswa')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah Surat</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{route('simpansuratmhs')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="inputPassword" name="tanggal" style=width:160px>
                                    </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tujuan Surat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword" name="tujuan_surat">
                                    </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Nama Mitra</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword" name="nama_mitra">
                                    </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Alamat Mitra</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword" name="alamat_mitra">
                                    </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword" name="keterangan">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tambah Anggota</label>
                        </div>
                        <div class="row">
                        <div class="col-2">
                            <label for="inputPassword">NIM</label>
                            <input type="text" class="form-control" style=width:150px id="inputPassword" name="ni_ang[]" placeholder="NIM">
                        </div>
                        <div class="col-3">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama_ang[]" placeholder="Nama" >
                        </div>
                        <div class="col-4">
                        <button class="add-more btn btn-success " type="button"><i class="glyphicon glyphicon-plus"></i> Tambah
                        </div>
                    </div>
                <div class="mahasiswa"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script type="text/javascript">
                $(".add-more").on ('click',function(){
                    addmhs();
                });
                function addmhs(){
                    var mhs ='<div class="control-group"><div class="form-group"><div class="row"><div class="col-2"><label for="inputPassword">NIAng</label><input type="text" class="form-control" style=width:150px id="inputPassword" name="ni_ang[]" placeholder="NIM"></div><div class="col-3"><label>Nama</label><input type="text" class="form-control" name="nama_ang[]" placeholder="Nama" ></div><div class="col-4"><button class="remove btn btn-danger " type="button"><i class="glyphicon glyphicon-plus"></i> Hapus</div></div></div></div>';
                    $('.mahasiswa').append(mhs);
                }
                // saat tombol remove dklik control group akan dihapus
                $("body").on("click",".remove",function(){
                    $(this).parents(".control-group").remove();
                });
            </script>
@endsection
