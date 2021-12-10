@extends('template.welcome')
<title>Tambah SK</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Tambah SK</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Tambah Surat</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{route('simpanpersonalia')}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">NIM/NIDN</label>
                                <div class="col-sm-10">
                                    <input type="text"  style=width:200px name="niuser"  id="niuser" class="form-control" placeholder="" required>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px  name="name" id="name" class="form-control" placeholder="" disabled>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">

                                    <input type="text" id="inputPassword" style=width:200px name="prodi" class="form-control" placeholder="" disabled>

                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Semester/Waktu Mengajar</label>
                                <div class="col-sm-10">

                                    <input type="text" id="inputPassword" style=width:200px name="semester" class="form-control" placeholder="" disabled>

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
                            success : function(e) {
                                if(e.length === 0){
                                    $('.flash-message').html('Data not found');
                                    $('#niuser').val('');
                                }
                                else {
                                    $('.flash-message').html('Data found');
                                    r = $.parseJSON(e); //convert json to array
                                    $('#name').val(r.name); 

                                    //$("#niuser").html(e); //-> I dont realy understand why you use this part of code?

                                }
                            }
                            
                        });
                });
        </script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
@endsection
