@extends('template.welcome')
<title>Tambah Surat Personalia</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Tambah Surat Personalia</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah Surat Personalia</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{route('simpanpersonalia')}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="date" id="inputPassword" value="" name="tanggal" style=width:180px class="form-control
                                    @error('tanggal') is-invalid @enderror" value="{{old('tanggal')}}">
                                    @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="" name="keterangan" class="form-control
                                    @error('keterangan') is-invalid @enderror" value="{{old('keterangan')}}">
                                    @error('keterangan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Mitra</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="" name="nama_mitra" class="form-control
                                    @error('nama_mitra') is-invalid @enderror" value="{{old('nama_mitra')}}">
                                    @error('nama_mitra')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Lokasi Mitra</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="" name="lokasi" class="form-control
                                    @error('lokasi') is-invalid @enderror" value="{{old('lokasi')}}">
                                    @error('lokasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Pihak Tembusan</label>
                            <div class="col-2">
                                <div class="input-field">
                                <input type="text" class="form-control" id="inputPassword" value="" name="ni_ang[]" placeholder="Nik">
                            </div>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" id="inputPassword" value="" name="nama_ang[]" placeholder="Nama">
                            </div>
                            <div class="col-4">
                                <button class="add-more btn btn-success " type="button"><i class="glyphicon glyphicon-plus"></i> Tambah
                            </div>
                        </div>
                <div class="mahasiswa"></div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" role="button" href="{{ route('pengajuansuratadm') }}">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script type="text/javascript">
                $(".add-more").on ('click',function(){
                    addmhs();
                });
                function addmhs(){
                    var mhs =' <div class="control-group"><div class="form-group row"><label for="inputPassword" class="col-sm-2 col-form-label"></label><div class="col-2"><input type="text" class="form-control" id="inputPassword" name="ni_ang[]" placeholder="NIM"></div><div class="col-3"><input type="text" class="form-control" id="inputPassword" name="nama_ang[]" placeholder="Nama"></div><div class="col-4"><button class="remove btn btn-danger" type="button"><i class="glyphicon glyphicon-plus"></i> Hapus</div>';
                    $('.mahasiswa').append(mhs);
                }
                // saat tombol remove dklik control group akan dihapus
                $("body").on("click",".remove",function(){
                    $(this).parents(".control-group").remove();
                });
            </script>
            <script type="text/javascript">
            </script>
@endsection