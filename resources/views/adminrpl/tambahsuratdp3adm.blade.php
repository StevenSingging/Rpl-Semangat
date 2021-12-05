@extends('template.welcome')

<title>Buat DP3</title>
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
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah DP3</li>
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
                            <input type="date" class="form-control" id="inputPassword" name="" style=width:160px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nilai</label>
                        </div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kejujuran</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputPassword" name="" style=width:160px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kerjasama</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputPassword" name="" style=width:160px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggung Jawab</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputPassword" name="" style=width:160px>
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kepemimpinan</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputPassword" name="" style=width:160px>
                        </div></div></div>
                        <div class="row">
                        <div class="col-2">
                        <label for="inputPassword" >Pihak Penilai</label>
                        </div>
                        <div class="col-3">
                            <label for="inputPassword">NIDN</label>
                            <input type="text" class="niang form-control"  id="" id="inputPassword" style=width:150px  name="" placeholder="">
                            <div id="ni_anglist[]"></div>
                        </div>
                        <div class="col-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="" name="" placeholder="" >
                        </div></div>
                        <div class="row">
                        <div class="col-2">
                        <label for="inputPassword" >Pihak Dinilai</label>
                        </div>
                        <div class="col-3">
                            <label for="inputPassword">NIDN</label>
                            <input type="text" class="niang form-control"  id="" id="inputPassword" style=width:150px  name="" placeholder="">
                            <div id=""></div>
                        </div>
                        <div class="col-4">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="" name="" placeholder="" >
                        </div></div>
                        
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary float-right"  data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>

    </body>
@endsection
