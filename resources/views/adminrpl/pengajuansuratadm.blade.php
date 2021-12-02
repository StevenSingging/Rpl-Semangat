@extends('template.welcome')
<title>Pengajuan Surat</title>
@section('content')
<link rel="stylesheet" href=".{{asset('Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('Admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('adminrpl')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Pengajuan Surat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
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
                    <form method="GET" action="{{ route('searchadm') }}">
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
                    <th>Tujuan Surat</th>
                    <th>Keterangan</th>
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
                      <td>{{date('d-m-Y', strtotime($asadm->tanggal))}}</td>
                      <td>{{$asadm->tujuan_surat}}</td>
                      <td>{{$asadm->keterangan}}</td>
                      <td><badge class="badge {{ ($asadm->status == 0) ? 'badge-warning' :
                          'badge-success'}}">{{ ($asadm->status == 0) ? 'Sedang diproses' :
                          'Validasi'}}</badge></td>
                      <td>
                        <a href="{{url('/adminrpl/viewsuratadm',$asadm->id)}}" role="button"><i class="fas fa-eye"></i></a> |
                        <a href="{{url('/adminrpl/editsuratadm',$asadm->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        <a href="{{url('/adminrpl/deletesuratadm',$asadm->id)}}"
                        onclick="return confirm('Apakah Anda yakin data akan dihapus ?')" role="button">
                        <i class="fas fa-user-minus" style="color : red"></i></a>
                        </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table><br>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <!-- /.card -->
            @endsection
