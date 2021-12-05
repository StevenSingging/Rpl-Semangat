@extends('template.welcome')
<title>Buat Surat Tugas</title>
@section('content')


<title> Buat Surat</title>

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
              <li class="breadcrumb-item"><a href="{{route('dosen')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah Surat Tugas</li>
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
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputPassword" name="tgl_keg" style=width:160px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Mitra Kegiatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="almt_mitra">
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tema Kegiatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="ket_keg">
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Lokasi Kegiatan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="lk_keg">
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tambah Anggota</label>
                        </div>
                        <div class="row">
                        <div class="col-2">
                            <label for="inputPassword">NIAng</label>
                            <input type="text" class="niang form-control"  id="ni_ang[]" id="inputPassword" style=width:150px  name="ni_ang[]" placeholder="NiAng">
                            <div id="ni_anglist[]"></div>
                        </div>
                        <div class="col-3">
                            <label>NamaAng</label>
                            <input type="text" class="form-control" id="nama_ang[]" name="nama_ang[]" placeholder="" >
                        </div>
                        <div class="col-4">
                        <button class="add-more btn btn-success " type="button"><i class="glyphicon glyphicon-plus"></i> Tambah
                        </div>
                    </div>
                <div class="mahasiswa"></div>
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary float-right"  data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>

            
        
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
      $(".add-more").on ('click',function(){ 
         addmhs();
      });
      function addmhs(){
          var mhs =' <div class="control-group"><div class="form-group"><div class="row"><div class="col-2"><label for="inputPassword">NIAng</label><input type="text" class="form-control" style=width:150px id="inputPassword" name="ni_ang[]" placeholder="NiAng"></div><div class="col-3"><label>Nama</label><input type="text" class="form-control" name="nama_ang[]" placeholder="" ></div><div class="col-4"><button class="remove btn btn-danger " type="button"><i class="glyphicon glyphicon-plus"></i> Hapus</div></div></div></div>';
          $('.mahasiswa').append(mhs);
      }

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
      </script>
    </body>

@endsection