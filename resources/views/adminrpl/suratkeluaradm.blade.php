@extends('template.welcome')
<title>Surat Keluar</title>
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Surat Keluar</li>
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
                    <h1>Data Surat Keluar</h1>
                </nav>
                <nav class="navbar navbar-light">
                <a></a>
                    
                </nav>

                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>Nomor Surat</th>
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
                      @if($asadm->validasi == 1)
                      <td>{{$loop->iteration}}/{{$asadm->js->kode_surat}}/FTI/{{date('Y', strtotime($asadm->created_at))}}</td>
                      @endif
                      @if($asadm->validasi == 0)
                      <td></td>
                      @endif
                      <td>{{$asadm->user->niuser}} - {{$asadm->user->name}}</td>
                      @if($asadm->jenis_id == 4)
                      <td>{{date('d-m-Y', strtotime($asadm->created_at))}}</td>
                      @endif
                      @if($asadm->jenis_id == 2)
                      <td>{{date('d-m-Y', strtotime($asadm->created_at))}}</td>
                      @endif
                      @if($asadm->jenis_id == 3)
                      <td>{{date('d-m-Y', strtotime($asadm->created_at))}}</td>
                      @endif
                      @if($asadm->jenis_id == 1)
                      <td>{{date('d-m-Y', strtotime($asadm->created_at))}}</td>
                      @endif
                      @if($asadm->jenis_id == 5)
                      <td>{{date('d-m-Y', strtotime($asadm->created_at))}}</td>
                      @endif
                      <td>{{$asadm->js->jenis}}</td>
                        <td><badge class="badge {{ ($asadm->validasi == 0) ? 'badge-warning' :
                          'badge-success'}}">{{ ($asadm->validasi == 0) ? 'Belum Ditanda Tangan' :
                          'Sudah Ditanda Tangan'}}</badge></td>
                        <td>
                        <a href="{{url('/adminrpl/viewsuratadm',$asadm->id)}}" role="button"><i class="fas fa-eye"></i></a> |
                        @if($asadm->jenis_id == 1 && $asadm->validasi == 0)
                        @if($asadm->ni_ang != null)
                        <a href="{{url('/adminrpl/validasisuratap',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($asadm->ni_ang == null)
                        <a href="{{url('/adminrpl/validasisurata',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @endif
                        @if($asadm->jenis_id == 2 && $asadm->validasi == 0)
                        <a href="{{url('/adminrpl/validasisuratb',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($asadm->jenis_id == 3 && $asadm->validasi == 0)
                        @if($asadm->ni_ang == null)
                        <a href="{{url('/adminrpl/validasisuratc',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($asadm->ni_ang != null)
                        <a href="{{url('/adminrpl/validasisuratcdf',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @endif
                        @if($asadm->jenis_id == 4 && $asadm->validasi == 0)
                        @if($asadm->ni_ang == null)
                        <a href="{{url('/adminrpl/validasisuratdp',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($asadm->ni_ang != null)
                        <a href="{{url('/adminrpl/validasisuratdk',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @endif
                        @if($asadm->jenis_id == 5 && $asadm->validasi == 0)
                        <a href="{{url('/adminrpl/validasisurate',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
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
  
              </div>
            </div>

            @endsection

