@extends('template.welcome')
<title>Tambah Surat Keterangan</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Tambah Surat Keterangan</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah Surat Keterangan</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{route('simpanketerangan')}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">NIM/NIDN</label>
                                <div class="col-sm-10">
                                    <input type="text"  style=width:200px name="niuser"  id="niuser" class="form-control" value="{{old('niuser')}}" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text"  style=width:200px name="id"  id="id" class="form-control" value="{{old('id')}}" readonly hidden>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text"  style=width:200px  name="name" id="name" class="form-control" placeholder=""  readonly>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">

                                    <input type="text"  style=width:200px name="prodi" id="prodi" class="form-control" placeholder=""  readonly>

                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Semester/Waktu Mengajar</label>
                                <div class="col-sm-10">

                                    <input type="text"  style=width:200px name="semester"  id="semester" class="form-control" placeholder="" readonly>

                                </div>
                        </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" role="button" href="{{ route('pengajuansuratadm') }}">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>       
        
        <script type="text/javascript">
                $("#niuser").focusout(function(e){
                // alert($(this).val());
                var niuser = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "{{route('autocomplete')}}",
                    data: {'niuser':niuser},
                    dataType: 'json',
                    success : function(data) {
                        $('#id').val(data.id); 
                        $('#name').val(data.name); 
                        $('#prodi').val(data.prodi);
                        $('#semester').val(data.semester);
                    },
                    error: function(response) {
                        alert(response.responseJSON.message);
                    }
                });
            });
        </script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
@endsection
