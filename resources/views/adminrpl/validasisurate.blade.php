@extends('template.welcome')
<title>Validasi Surat Berita Acara</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Validasi Surat Berita Acara</h1>
            </nav>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>

              <li class="breadcrumb-item active">Validasi Surat Berita Acara</li>
            </ol>
          </div></div></div></div>
<section class="content">
      <div class="card card-primary card-outline">
            <div class="card-body">
            <form action="{{url('/adminrpl/updatesuratbcadm',$asurat->id)}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="date" id="inputPassword" value="{{$asurat->tanggal}}" name="tanggal" style=width:180px class="form-control
                                    @error('tanggal') is-invalid @enderror" value="{{old('tanggal')}}">
                                    @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tema Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="{{$asurat->tema}}" name="tema" class="form-control
                                    @error('tema') is-invalid @enderror" value="{{old('tema')}}">
                                    @error('tema')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="{{$asurat->keterangan}}" name="keterangan" class="form-control
                                    @error('keterangan') is-invalid @enderror" value="{{old('keterangan')}}">
                                    @error('keterangan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Peserta Kegiatan </label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="{{$asurat->peserta}}" name="peserta" class="form-control
                                    @error('nama_mitra') is-invalid @enderror" value="{{old('nama_mitra')}}">
                                    @error('nama_mitra')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Lokasi Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="{{$asurat->lokasi}}" name="lokasi" class="form-control
                                    @error('lokasi') is-invalid @enderror" value="{{old('lokasi')}}">
                                    @error('lokasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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