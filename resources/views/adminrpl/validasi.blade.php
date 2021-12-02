@extends('template.welcome')
<title> Form Validasi Surat</title>
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Form Kirim Surat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <nav class="navbar navbar-light bg-light">
                <h1>Form Validasi Surat</h1>
            </nav>
            <form action="{{url('/adminrpl/updatesuratadm',$asurat->id)}}" method="post">
            {{ csrf_field() }}
            <div class="row">
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tujuan Surat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" name="tujuan_surat" style=width:450px value="{{$asurat->tujuan_surat}}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Kode</label>
                        <div class="col-sm-10">
                            <select name="kodes" class="form-control select2bs4" style="width: 15%;">
                                <option selected="selected">Pilih Kode</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                            </select>
                        </div>
                  </div>
                  <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">TTD</label>
                        <div class="col-sm-10">
                            <select name="ttd" class="form-control select2bs4" style="width: 15%;">
                                <option selected="selected">Pilih TTD</option>
                                <option>Alex</option>
                                <option>Rosalia</option>
                            </select>
                        </div>
                 </div>
                  <div class="mb-3 row">
                    <div class="form-check">
                    <div class="col-sm-10">
                        <input class="form-check-input" type="hidden" name="status" id="validasi" value="0"
                        @php if (($asurat->validasi)==0) echo 'checked' @endphp>
                        <label class="form-check-label" for="exampleRadios1"></label>
                    </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="hidden" name="validasi" id="validasi" value="1"
                        @php if (($asurat->validasi)==1) echo 'checked' @endphp>
                        <label class="form-check-label" for="exampleRadios2"></label>
                    </div>
                    </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
              </form>
@endsection
