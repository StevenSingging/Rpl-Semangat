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
              <li class="breadcrumb-item"><a href="{{route('mahasiswa')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Pengajuan Surat</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
<section class="content">
    <div class="container">
    @if(session('create'))
    <div class="alert alert-success" role="alert">
        {{session('create')}}
    </div>
    @endif
    @if(session('edit'))
    <div class="alert alert-success" role="alert">
        {{session('edit')}}
    </div>
    @endif
    @if(session('delete'))
    <div class="alert alert-success" role="alert">
        {{session('delete')}}
    </div>
    @endif
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
                </nav>

                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>No</th>
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
                      @if($psmhs->jenis_id == 4)
                      <td>{{date('d-m-Y', strtotime($psmhs->tanggal))}}</td>
                      @endif
                      @if($psmhs->jenis_id == 2)
                      <td>{{date('d-m-Y', strtotime($psmhs->created_at))}}</td>
                      @endif
                      <td>{{$psmhs->js->jenis}}</td>
                      <?php if($psmhs->status == 0){ ?>
                        <td><badge class="badge  badge-warning ">Sedang Diproses</badge></td>
                      <?php }elseif($psmhs->status == 1){ ?>
                        <td><badge class="badge  badge-success ">Validasi</badge></td>
                      <?php }elseif($psmhs->status == 2){ ?>
                        <td><badge class="badge  badge-danger ">Ditolak</badge><br>
                        Keterangan : <b>{{$psmhs->ket_tolak}}</b>
                      </td>
                      <?php } ?>
                      <td>
                        @if($psmhs->status == 1)
                        <a href="{{url('/mahasiswa/viewsuratmhs',$psmhs->id)}}" role="button"><i class="fas fa-eye"></i></a>
                        @endif
                        @if($psmhs->status != 1)
                        <a href="{{url('/mahasiswa/viewsuratmhs',$psmhs->id)}}" role="button"><i class="fas fa-eye"></i></a> |
                        @endif
                        @if($psmhs->jenis_id == 4 && $psmhs->status == 2)
                        @if($psmhs->ni_ang == null)
                        <a href="{{url('/mahasiswa/editsurattgspmhs',$psmhs->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($psmhs->ni_ang != null)
                        <a href="{{url('/mahasiswa/editsurattgskmhs',$psmhs->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @endif


                        @if($psmhs->jenis_id == 4 && $psmhs->status == null)
                        @if($psmhs->ni_ang == null)
                        <a href="{{url('/mahasiswa/editsurattgspmhs',$psmhs->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($psmhs->ni_ang != null)
                        <a href="{{url('/mahasiswa/editsurattgskmhs',$psmhs->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @endif
                        @if($psmhs->status != 1)
                        <a href="{{url('/mahasiswa/deletesuratmhs',$psmhs->id)}}"
                        onclick="return confirm('Apakah Anda yakin data akan dihapus ?')"
                        role="button"><i class="fas fa-user-minus" style="color : red"></i></a>
                        @endif
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
                            <a class="dropdown-item" href="{{route('surattugaspmhs')}}">Surat Tugas Pribadi</a>
                            <a class="dropdown-item" href="{{route('surattugaskmhs')}}">Surat Tugas Kelompok</a>
                            <a class="dropdown-item" href="{{route('suratkegiatanmhs')}}">Surat Kegiatan Mahasiswa</a>
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