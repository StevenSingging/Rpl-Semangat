@extends('template.welcome')
<title>Pengajuan Surat</title>
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('mahasiswa')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Pengajuan Surat</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <nav class="navbar navbar-light bg-light">
                    <h1>Data Pengajuan Surat</h1>
                </nav>
                <nav class="navbar navbar-light">
                <a class="btn btn-secondary" role="button" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
                    <form method="GET" action="{{ route('searchmhs') }}">
                        <input name="key" value="@php echo old('cari') @endphp" placeholder="Search">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </form>
                </nav>

                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Jenis Surat</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($psurat as $psmhs)
                  @if ($psmhs->user_id == Auth::user()->id)
                  <tr align="center">
                    <td>{{$loop->iteration}}</td>
                      <td>{{date('d-m-Y', strtotime($psmhs->tanggal))}}</td>
                      <td>{{$psmhs->js->jenis}}</td>
                      <td>{{$psmhs->keterangan}}</td>
                      <td><badge class="badge {{ ($psmhs->status == 0) ? 'badge-warning' :
                          'badge-success'}}">{{ ($psmhs->status == 0) ? 'Sedang diproses' :
                          'Validasi'}}</badge></td>
                      <td>
                        @if($psmhs->validasi == 1)
                        @if($psmhs->jenis_id == 4)
                        @if($psmhs->ni_ang == null)
                        <a href="{{url('/mahasiswa/cetakpstpmhs',$psmhs->id)}}" role="button"><i class="fas fa-download"></i></a> |
                        
                        @endif
                        @if($psmhs->ni_ang != null)
                        <a href="{{url('/mahasiswa/cetakpstkmhs',$psmhs->id)}}" role="button"><i class="fas fa-download"></i></a> |
                        
                        @endif
                        @endif
                        @if($psmhs->jenis_id == 2)
                        <a href="{{url('/mahasiswa/cetakskmhs',$psmhs->id)}}" role="button"><i class="fas fa-download"></i></a> |
                        @endif
                        @endif
                        @if($psmhs->jenis_id == 2)
                        <a href="{{url('/mahasiswa/viewsuratmhs',$psmhs->id)}}" role="button"><i class="fas fa-eye"></i></a> |
                        @endif
                        @if($psmhs->jenis_id == 4)
                        @if($psmhs->ni_ang == null)
                        <a href="{{url('/mahasiswa/editsurattgspmhs',$psmhs->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($psmhs->ni_ang != null)
                        <a href="{{url('/mahasiswa/editsurattgskmhs',$psmhs->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @endif
                        <a href="{{url('/mahasiswa/deletesuratmhs',$psmhs->id)}}"
                        onclick="return confirm('Apakah Anda yakin data akan dihapus ?')"
                        role="button"><i class="fas fa-user-minus" style="color : red"></i></a>
                      </td>
                  </tr>
                  @endif
                  @endforeach
                  </tbody>
                </table><br>
                <br>
                
              </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Surat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pilih Surat
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('surattugaskmhs') }}">Surat Tugas Kelompok</a>
                            <a class="dropdown-item" href="{{ route('surattugaspmhs') }}">Surat Tugas Pribadi</a>
                            <a class="dropdown-item" href="{{ route('suratkegiatanmhs') }}">Surat Kegiatan Mahasiswa</a>
                        </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
                </div>
            </div>
            </div>
            @endsection
