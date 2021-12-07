@extends('template.welcome')
<title>Edit Surat Tugas</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
            <nav class="navbar navbar-light bg-light">
                <h1>Edit Surat Tugas</h1>
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
            <form action="{{url('/adminrpl/updatevalidasisuratadm',$asurat->id)}}" method="post">
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
                            <label for="inputPassword" class="col-sm-2 col-form-label">Sebagai</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="{{$asurat->sebagai}}" name="sebagai" class="form-control
                                    @error('sebagai') is-invalid @enderror" value="{{old('sebagai')}}">
                                    @error('sebagai')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mitra Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="{{$asurat->nama_mitra}}" name="nama_mitra" class="form-control
                                    @error('nama_mitra') is-invalid @enderror" value="{{old('nama_mitra')}}">
                                    @error('nama_mitra')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Tema Kegiatan</label>
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
                            <label for="exampleFormControlTextArea1" class="col-sm-2 col-form-label">Lokasi Kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="inputPassword" value="{{$asurat->lokasi}}" name="lokasi" class="form-control
                                    @error('lokasi') is-invalid @enderror" value="{{old('lokasi')}}">
                                    @error('lokasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tambah Anggota</label>
                            <div class="col-2">
                                <div class="input-field">
                                <input type="text" class="form-control" id="inputPassword" value="{{$asurat->ni_ang}}" name="ni_ang[]" placeholder="NIM">
                            </div>
                            </div>
                            <div class="col-3">
                                <input type="text" class="form-control" id="inputPassword" value="{{$asurat->nama_ang}}" name="nama_ang[]" placeholder="Nama">
                            </div>
                            <div class="col-4">
                                <button class="add-more btn btn-success " type="button"><i class="glyphicon glyphicon-plus"></i> Tambah
                            </div>
                        </div>
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
                <div class="mahasiswa"></div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" role="button" href="{{ route('pengajuansuratmhs') }}">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script type="text/javascript">
                $(".add-more").on ('click',function(){
                    addmhs();
                });
                function addmhs(){
                    var mhs =' <div class="control-group"><div class="form-group row"><label for="inputPassword" class="col-sm-2 col-form-label"></label><div class="col-2"><input type="text" class="form-control" id="inputPassword" name="ni_ang[]" placeholder="NIM"></div><div class="col-3"><input type="text" class="form-control" id="inputPassword" name="nama_ang[]" placeholder="Nama"></div><div class="col-4"><button class="remove btn btn-danger" type="button"><i class="glyphicon glyphicon-plus"></i> Hapus</div>';
                    $('.mahasiswa').append(mhs);
                }
                // saat tombol remove dklik control group akan dihapus
                $("body").on("click",".remove",function(){
                    $(this).parents(".control-group").remove();
                });
            </script>
            <script type="text/javascript">
            </script>
@endsection