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
            <form action="{{url('/adminrpl/updatevalidasisuratadm',$asurat->id)}}" method="post">
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
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ $asurat->user->prodi }}" readonly>
                                </div>
                        </div>

                        @if($asurat->user->level == 'dosen')
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ $asurat->user->level }}" readonly>
                                </div>
                        </div>
                        @endif
                        @if($asurat->user->level == 'mahasiswa')

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Semester</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ $asurat->user->semester }}" readonly>
                                </div>
                        </div>

                        @endif

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kode</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" style=width:200px class="form-control" placeholder="{{ $asurat->js->kode_surat }}" readonly>
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

@endsection


