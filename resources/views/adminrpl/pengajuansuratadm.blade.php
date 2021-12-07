@extends('template.welcome')
<title>Pengajuan Surat</title>
@section('content')
<link rel="stylesheet" href=".{{asset('Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('Admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>
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
                    <th>Pengirim</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Jenis Surat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($asurat as $asadm)
                  <tr align="center">
                    <th scope="row"><?php echo e($no++) + (($asurat->currentPage()-1) * $asurat->perPage()) ?></th>
                        <td>{{$asadm->user->niuser}} - {{$asadm->user->name}}</td>
                      @if($asadm->jenis_id == 4)
                      <td>{{date('d-m-Y', strtotime($asadm->tanggal))}}</td>
                      @endif
                      @if($asadm->jenis_id == 2)
                      <td>{{date('d-m-Y', strtotime($asadm->created_at))}}</td>
                      @endif
                      <td>{{$asadm->js->jenis}}</td>
                      <?php if($asadm->status == 0){ ?>
                        <td><badge class="badge  badge-warning ">Sedang Diproses</badge></td>
                      <?php }elseif($asadm->status == 1){ ?>
                        <td><badge class="badge  badge-success ">Diterima</badge></td>
                      <?php }elseif($asadm->status == 2){ ?>
                        <td><badge class="badge  badge-danger ">Ditolak</badge></td>
                      <?php } ?>
                      <td>
                        <a href="{{url('/adminrpl/viewsuratadm',$asadm->id)}}" role="button"><i class="fas fa-eye"></i></a> |
                        @if($asadm->jenis_id == 1)
                        <a href="{{url('/adminrpl/editsurata',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($asadm->jenis_id == 2)
                        <a href="{{url('/adminrpl/editsuratb',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($asadm->jenis_id == 3)
                        <a href="{{url('/adminrpl/editsuratc',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($asadm->jenis_id == 4)
                        <a href="{{url('/adminrpl/editsuratd',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($asadm->jenis_id == 5)
                        <a href="{{url('/adminrpl/editsurate',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        <a href="{{url('/adminrpl/deletesuratadm',$asadm->id)}}"
                        onclick="return confirm('Apakah Anda yakin data akan dihapus ?')"
                        role="button"><i class="fas fa-user-minus" style="color : red"></i></a>
                      </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table><br>
                Halaman : {{ $asurat->currentPage() }}<br>
                {{ $asurat->links() }}
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
                            <a class="dropdown-item" href="">Surat Personalia & SK</a>
                            <a class="dropdown-item" href="">Surat Keterangan Kegiatan</a>
                            <a class="dropdown-item" href="">Surat Undangan & Daftar Hadir Kegiatan</a>
                            <a class="dropdown-item" href="">Surat Tugas & DP3</a>
                            <a class="dropdown-item" href="">Berita Acara Kegiatan</a>
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