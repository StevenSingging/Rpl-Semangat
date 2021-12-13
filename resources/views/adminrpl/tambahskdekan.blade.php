@extends('template.welcome')
<title>Pengajuan Surat</title>
<!-- Style -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


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
              <li class="breadcrumb-item"><a href="{{route('dosen')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah Surat</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{route('simpanskdekan')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="date" id="inputPassword" name="tanggal" style=width:180px class="form-control" >
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Judul SK</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="tema" class="form-control" >
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mengingat</label>
                                <div class="col-sm-10">
                                <textarea name="mengingat" id="summernote"></textarea>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Menimbang</label>
                                <div class="col-sm-10">
                                <textarea name="menimbang" id="summernote2"></textarea>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Menetapkan</label>
                                <div class="col-sm-10">
                                <textarea name="menetapkan" id="summernote3"></textarea>
                                </div>
                        </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" role="button" href="{{ route('pengajuansuratadm') }}">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <!-- JS Properti -->
   <!-- JS Properti -->

    <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
      $('#summernote2').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
      $('#summernote3').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>
            
@endsection 