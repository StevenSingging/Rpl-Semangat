@extends('template.welcome')
<title>Validasi Surat SK Dekan</title>
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
                <h1>Validasi SK Dekan</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Validasi SK Dekan</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="date" id="inputPassword" name="tanggal" style=width:180px class="form-control" value="{{$asurat->tanggal}}" >
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Judul SK</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" name="tema" class="form-control" value="{{$asurat->tema}}">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mengingat</label>
                                <div class="col-sm-10">
                                <textarea name="mengingat" id="summernote" >{!!$asurat->mengingat!!}</textarea>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Menimbang</label>
                                <div class="col-sm-10">
                                <textarea name="menimbang" id="summernote2">{!!$asurat->menimbang!!}</textarea>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Menetapkan</label>
                                <div class="col-sm-10">
                                <textarea name="menetapkan" id="summernote3">{!!$asurat->menetapkan!!}</textarea>
                                </div>
                        </div>
                        <div class="col-2">
                            <input type="hidden" class="form-control" style=width:150px id="inputPassword" readonly name="validasi" value="1">
                        </div>
                        <div class="col-2">
                            <input type="hidden" class="form-control" style=width:150px id="inputPassword" readonly name="nomor_surat" value="{{$asurat->id}}/{{$asurat->js->kode_surat}}/FTI/{{date('Y', strtotime($asurat->created_at))}}">
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">TTD</label>
                        <div class="col-sm-10">
                            <select name="pejabat_id" class="form-control select2bs4" style="width: 30%;">
                                <option selected="selected">Pilih TTD</option>
                                @foreach($pejabat as $pj)
                                <option value="{{ $pj->id }}">{{ $pj->name }}</option>
                                @endforeach
                            </select>
                        </div></div>
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