@extends('template.welcome')
<title>Edit Surat</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Edit Surat</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Edit Surat</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{url('/adminrpl/updatesuratadm',$asurat->id)}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ $asurat->user->niuser }}" readonly>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ $asurat->user->name }}" readonly>
                                </div>
                        </div>
<<<<<<< HEAD
                        
=======
>>>>>>> 9c161e039e2f7d9175f16a85a899b53f492332a7
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ $asurat->user->prodi }}" readonly>
                                </div>
                        </div>
<<<<<<< HEAD
      
                        @if($asurat->user->level == 'dosen')
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ $asurat->user->level }}" readonly>
                                </div>
                        </div>
                        @endif
                        @if($asurat->user->level == 'mahasiswa')
=======
>>>>>>> 9c161e039e2f7d9175f16a85a899b53f492332a7
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Semester</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ $asurat->user->semester }}" readonly>
                                </div>
                        </div>
<<<<<<< HEAD
                        @endif
=======
>>>>>>> 9c161e039e2f7d9175f16a85a899b53f492332a7
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kode</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ $asurat->js->kode_surat }}" readonly>
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Aksi</label>
                                <div class="form-check">
                                    <div class="col-sm-10">
                                        <input class="form-check-input" type="radio" name="status" id="status" value="2"
                                        @php if (($asurat->status)==2) echo 'checked' @endphp>
                            <label class="form-check-label" for="exampleRadios2">Ditolak</label>
                                </div>
                            </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status" value="1"
                                @php if (($asurat->status)==1) echo 'checked' @endphp>
                                <label class="form-check-label" for="exampleRadios2">Diterima</label>
                            </div>
                        </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" role="button" href="{{ route('pengajuansuratadm') }}">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 9c161e039e2f7d9175f16a85a899b53f492332a7
