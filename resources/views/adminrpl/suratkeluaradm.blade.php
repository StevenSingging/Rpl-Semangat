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
                <a></a>
                    <form method="GET" action="{{ route('searchmhs') }}">
                        <input name="key" value="@php echo old('cari') @endphp" placeholder="Search">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </form>
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
                      <td>{{date('d-m-Y', strtotime($asadm->tanggal))}}</td>
                      @endif
                      @if($asadm->jenis_id == 2)
                      <td>{{date('d-m-Y', strtotime($asadm->created_at))}}</td>
                      @endif
                      <td>{{$asadm->js->jenis}}</td>
                        <td><badge class="badge {{ ($asadm->validasi == 0) ? 'badge-warning' :
                          'badge-success'}}">{{ ($asadm->validasi == 0) ? 'Belum Ditanda Tangan' :
                          'Sudah Ditanda Tangan'}}</badge></td>
                        <td>
                        <a href="{{url('/adminrpl/viewsuratadm',$asadm->id)}}" role="button"><i class="fas fa-eye"></i></a> |
                        @if($asadm->jenis_id == 1 && $asadm->validasi == 0)
                        <a href="{{url('/adminrpl/validasisurata',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($asadm->jenis_id == 2 && $asadm->validasi == 0)
                        <a href="{{url('/adminrpl/validasisuratb',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($asadm->jenis_id == 3 && $asadm->validasi == 0)
                        <a href="{{url('/adminrpl/validasisuratc',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        @endif
                        @if($asadm->jenis_id == 4 && $asadm->validasi == 0)
                        <a href="{{url('/adminrpl/validasisuratd',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
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
                {{ $asurat->links() }}
              </div>
            </div>
            @endsection
