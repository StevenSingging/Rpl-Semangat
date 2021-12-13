@extends('template.welcome')
<title>Surat Tugas Pribadi</title>
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
                  @foreach($psurat as $psmhs)
                  @if ($psmhs->user_id == Auth::user()->id)
                  <tr align="center">
                    <th scope="row"><?php echo e($no++) + (($psurat->currentPage()-1) * $psurat->perPage()) ?></th>
                      <td>{{$psmhs->nomor_surat}}</td>  
                      <td>{{date('d-m-Y', strtotime($psmhs->tanggal))}}</td>
                      <td>{{$psmhs->js->jenis}}</td>
                      <?php if($psmhs->status == 0){ ?>
                        <td><badge class="badge  badge-warning ">Sedang Diproses</badge></td>
                      <?php }elseif($psmhs->status == 1){ ?>
                        <td><badge class="badge  badge-success ">Validasi</badge></td>
                      <?php }elseif($psmhs->status == 2){ ?>
                        <td><badge class="badge  badge-danger ">Ditolak</badge></td>
                      <?php } ?>
                        <td>
                        <a href="{{url('/mahasiswa/cetakpstpmhs',$psmhs->id)}}" role="button"><i class="fas fa-download"></i></a> |
                        <a href="{{url('/mahasiswa/deletesuratmhs',$psmhs->id)}}"
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

