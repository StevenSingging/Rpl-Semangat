@extends('template.welcome')
<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Buat Berita Acara</title>
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

              <li class="breadcrumb-item active">Tambah SK Dekan</li>
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
                            <label for="inputPassword" class="col-sm-2 col-form-label">Judul SK</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" name="ket_keg">
                        </div></div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Menimbang</label>
                        </div></div>
                        <div class="form-group">
                            <div class="mb-10 row">
                            <textarea class="col-sm-10" id="summernote" name="editordata"></textarea>
                        </div></div>
                       
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mengingat</label>
                        </div></div>
                        <div class="form-group">
                            <div class="mb-10 row">
                            <textarea class="col-sm-10" id="summernote1" name="editordata"></textarea>
                        </div></div>
                        <div class="form-group">
                            <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Menetapkan</label>
                        </div></div>
                        <div class="form-group">
                            <div class="mb-10 row">
                            <textarea class="col-sm-10" id="summernote2" name="editordata"></textarea>
                        </div></div>
                        
                    </div>
                <div class="mahasiswa"></div>
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary float-right"  data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary float-right" >Simpan</button>
                </div>
            </form>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
  $('#summernote').summernote({
    placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
  })
  $('#summernote1').summernote({
    placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
  })
  $('#summernote2').summernote({
    placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
  })
</script>
    </body>
@endsection
