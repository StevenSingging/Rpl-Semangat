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
              <li class="breadcrumb-item"><a href="{{route('dosen')}}">Beranda</a></li>
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
                <a class="btn btn-secondary" href="{{ route('tambahsuratdsn') }}" role="button">Tambah Data</a>
                    <form method="GET" action="{{ route('searchdsn') }}">
                        <input name="key" value="@php echo old('cari') @endphp" placeholder="Search">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </form>
                </nav>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jenis Surat</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($dsurat as $dsdsn)
                  <tr align="center">
                    <th scope="row"><?php echo e($no++) + (($dsurat->currentPage()-1) * $dsurat->perPage()) ?></th>
                      <td>{{date('d-m-Y', strtotime($dsdsn->tanggal))}}</td>
                      <td>{{$dsdsn->tujuan_surat}}</td>
                      <td>{{$dsdsn->keterangan}}</td>
                      <td><badge class="badge {{ ($dsdsn->status == 0) ? 'badge-warning' :
                          'badge-success'}}">{{ ($dsdsn->status == 0) ? 'Sedang diproses' :
                          'Diterima'}}</badge></td>
                      <td align="center">
                        <a href="{{url('/dosen/viewsuratdsn',$dsdsn->id)}}" role="button"><i class="fas fa-eye"></i></a> |
                        <a href="{{url('/dosen/editsuratdsn',$dsdsn->id)}}" role="button"><i class="fas fa-user-edit"></i></a> |
                        <a href="{{url('/dosen/deletesuratdsn',$dsdsn->id)}}"
                        onclick="return confirm('Apakah Anda yakin data akan dihapus ?')"
                        role="button"><i class="fas fa-user-minus" style="color : red"></i></a>
                        </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table><br>
                Halaman : {{ $dsurat->currentPage() }}<br>
                {{ $dsurat->links() }}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            @endsection
