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
              <li class="breadcrumb-item"><a href="{{route('mahasiswa')}}">Home</a></li>
              <li class="breadcrumb-item active">Arsip Surat</li>
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
                <a class="btn btn-secondary" href="{{ route('tambahsuratmhs') }}" role="button">Tambah Data</a>
                    <form method="GET" action="{{ route('searchmhs') }}">
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
                  @foreach($psurat as $psmhs)
                  <tr align="center">
                    <th scope="row"><?php echo e($no++) + (($psurat->currentPage()-1) * $psurat->perPage()) ?></th>
                      <td>{{date('d-m-Y', strtotime($psmhs->tanggal))}}</td>
                      <td>{{$psmhs->tujuan_surat}}</td>
                      <td>{{$psmhs->keterangan}}</td>
                      <td><btn class="btn {{ ($psmhs->status == 0) ? 'btn-secondary' :
                          'btn-success'}}">{{ ($psmhs->status == 0) ? 'Sedang diproses' :
                          'Diterima'}}</btn></td>
                      <td>
                        <a class="btn btn-primary" href="{{url('/mahasiswa/viewsuratmhs',$psmhs->id)}}" role="button">View</a>
                        <a class="btn btn-warning" href="{{url('/mahasiswa/editsuratmhs',$psmhs->id)}}" role="button">Edit</a>
                        <a class="btn btn-danger" href="{{url('/mahasiswa/deletesuratmhs',$psmhs->id)}}"
                        onclick="return confirm('Apakah Anda yakin data akan dihapus ?')" role="button">Delete</a>
                        </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table><br>
                Halaman : {{ $psurat->currentPage() }}<br>
                {{ $psurat->links() }}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            @endsection
