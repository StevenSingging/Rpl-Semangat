@extends('template.welcome')
<title>Form Pengiriman Surat</title>
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
              <li class="breadcrumb-item active">Form Pengiriman Surat</li>
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
                    <h1>Form Pengiriman Surat</h1>
                </nav>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jenis Surat</th>
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
                      <td>{{date('d-m-Y', strtotime($asadm->tanggal))}}</td>
                      <td>{{$asadm->tujuan_surat}}</td>
                      <td>{{$asadm->keterangan}}</td>
                      <td><badge class="badge {{ ($asadm->status == 0) ? 'badge-warning' :
                          'badge-success'}}">{{ ($asadm->status == 0) ? 'Sedang diproses' :
                          'Validasi'}}</badge></td>
                      <td>
                        <a href="{{route('simpansuratdsn')}}"
                        onclick="return confirm('Apakah Anda yakin data akan dikirim ?')" role="button">Kirim<a>
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