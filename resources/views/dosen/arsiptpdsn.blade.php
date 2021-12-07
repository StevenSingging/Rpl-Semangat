@extends('template.welcome')
<title>Surat Tugas Pribadi</title>
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
              <li class="breadcrumb-item"><a href="{{route('dosen')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Surat Tugas Pribadi</li>
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
                    <h1>Surat Tugas Pribadi</h1>
                </nav>

                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Jenis Surat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($psurat as $psdsn)
                  @if ($psdsn->user_id == Auth::user()->id)
                  <tr align="center">
                    <th scope="row"><?php echo e($no++) + (($psurat->currentPage()-1) * $psurat->perPage()) ?></th>
                      <td>{{$psdsn->nomor_surat}}</td>
                      @if($psdsn->jenis_id == 4)
                      <td>{{date('d-m-Y', strtotime($psdsn->tanggal))}}</td>
                      @endif
                      @if($psdsn->jenis_id == 2)
                      <td>{{date('d-m-Y', strtotime($psdsn->created_at))}}</td>
                      @endif
                      <td>{{$psdsn->js->jenis}}</td>
                      <?php if($psdsn->status == 0){ ?>
                        <td><badge class="badge  badge-warning ">Sedang Diproses</badge></td>
                      <?php }elseif($psdsn->status == 1){ ?>
                        <td><badge class="badge  badge-success ">Diterima</badge></td>
                      <?php }elseif($psdsn->status == 2){ ?>
                        <td><badge class="badge  badge-danger ">Ditolak</badge></td>
                      <?php } ?>
                        <td>
                        <a href="{{url('/mahasiswa/viewsuratmhs',$psdsn->id)}}" role="button"><i class="fas fa-download"></i></a> |
                        <a href="{{url('/mahasiswa/deletesuratmhs',$psdsn->id)}}"
                        onclick="return confirm('Apakah Anda yakin data akan dihapus ?')"
                        role="button"><i class="fas fa-user-minus" style="color : red"></i></a>
                        </td>
                  </tr>
                  @endif
                  @endforeach
                  </tbody>
                </table><br>
                Halaman : {{ $psurat->currentPage() }}<br>
                {{ $psurat->links() }}
              </div>
            </div>
            @endsection