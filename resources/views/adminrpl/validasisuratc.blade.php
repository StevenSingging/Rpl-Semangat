@extends('template.welcome')
<title>Validasi Surat Undangan</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Validasi Surat Undangan</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Validasi Tambah Surat</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{url('/adminrpl/updatesuratundadm',$asurat->id)}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="date" id="inputPassword" value="{{$asurat->tanggal}}" name="tanggal" style=width:180px class="form-control">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Waktu Kegiatan</label>
                            <div class="col-2">
                                <div class="input-field">
                                <input type="time" id="inputPassword" value="{{$asurat->waktuml}}" name="waktuml" style=width:180px placeholder="Waktu Mulai"  class="form-control " >
                            </div>
                            </div>
                            <div>
                            <label for="inputPassword" >_</label>
                            </div> 
                            <div class="col-3">
                                <div class="input-field">
                                <input type="time" id="inputPassword" value="{{$asurat->waktusls}}" name="waktusls" style=width:180px placeholder="Waktu Selesai"  class="form-control " >
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tema Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="{{$asurat->tema}}" name="tema" class="form-control">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Kepentingan Mitra</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="{{$asurat->sebagai}}" name="sebagai" class="form-control">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Mitra</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="{{$asurat->nama_mitra}}" name="nama_mitra" class="form-control">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Lokasi Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="{{$asurat->lokasi}}" name="lokasi" class="form-control">
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
                    <a class="btn btn-secondary" role="button" href="{{ route('suratkeluaradm') }}">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            
@endsection