@extends('template.welcome')
<title>Tambah Surat Tugas Kelompok</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Tambah Surat Tugas Kelompok</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah Surat Kelompok</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{route('simpantugaskelompok')}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="date" id="inputPassword" name="tanggal" style=width:180px class="form-control
                                    @error('tanggal') is-invalid @enderror" value="{{old('tanggal')}}">
                                    @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Sebagai</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="sebagai" class="form-control
                                    @error('sebagai') is-invalid @enderror" value="{{old('sebagai')}}">
                                    @error('sebagai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mitra Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="nama_mitra" class="form-control
                                    @error('nama_mitra') is-invalid @enderror" value="{{old('nama_mitra')}}">
                                    @error('nama_mitra')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Tema Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="tema" class="form-control
                                    @error('tema') is-invalid @enderror" value="{{old('tema')}}">
                                    @error('tema')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="keterangan" class="form-control
                                    @error('keterangan') is-invalid @enderror" value="{{old('keterangan')}}">
                                    @error('keterangan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Lokasi Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="lokasi" class="form-control
                                    @error('lokasi') is-invalid @enderror" value="{{old('lokasi')}}">
                                    @error('lokasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row" id="autofill">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tambah Anggota</label>
                            <div class="col-2">
                                <div class="input-field">
                                <input type="text" class="form-control" id="niuser" name="ni_ang[]" placeholder="NIM">
                            </div>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" id="name" name="nama_ang[]" placeholder="Nama" >
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
            <!-- <script type="text/javascript">
                
                // $("#niuser").focusout(function(e){
                //     // alert($(this).val());
                //     var niuser = $(this).val();
                //     var niuser1 = $(this).val();
                //     $.ajax({
                //         type: "GET",
                //         url: "{{route('autocomplete')}}",
                //         data: {'niuser':niuser},
                //         dataType: 'json',
                //         success : function(data) {
                //             $('#name').val(data.name);
                            
                //         },
                //         error: function(response) {
                //             alert(response.responseJSON.message);
                //         }
                //     });

                // });
                // var row = 0;
                // $(".add-more").on ('click',function(){
                    
                //     addmhs(row);
                //     $('#niuser_'+row).focusout(function(e){
                //     // alert($(this).val());
                //     var niuser = $(this).val();
                //     $.ajax({
                //         type: "GET",
                //         url: "{{route('autocomplete')}}",
                //         data: {'niuser_':niuser},
                //         dataType: 'json',
                //         success : function(data) {
                //             $('#name').val(data.name);
                            
                //         },
                //         error: function(response) {
                //             alert(response.responseJSON.message);
                //         }
                //     });

                // });
                // row += 1;
                // });
                function addmhs(row){
                    //var row = 0;
                    var mhs =' <div class="control-group"><div class="form-group row"><label for="inputPassword" class="col-sm-2 col-form-label"></label><div class="col-2"><input type="text" class="form-control" id="niuser" name="ni_ang[]" placeholder="NIM"></div><div class="col-3"><input type="text" class="form-control" id="name" name="nama_ang[]" placeholder="Nama" readonly></div><div class="col-4"><button class="remove btn btn-danger" type="button"><i class="glyphicon glyphicon-plus"></i> Hapus</div>';
                    $('.mahasiswa').append(mhs);
                }
                // saat tombol remove dklik control group akan dihapus
                $("body").on("click",".remove",function(){
                    $(this).parents(".control-group").remove();
                });
            </script>  -->
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
             

@endsection