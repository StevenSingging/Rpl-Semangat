@extends('template.welcome')
<title>Surat Masuk</title>
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
              <li class="breadcrumb-item active">Surat Masuk</li>
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
                    <h1>Surat Masuk</h1>
                </nav>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr align="center">
                    <th>No</th>
                    <th>ID Surat</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no=1; @endphp
                  @foreach($dsurat as $dsdsn)
                    <tr align="center">
                        <th scope="row"><?php echo e($no++) + (($dsurat->currentPage()-1) * $dsurat->perPage()) ?></th>
                        <td></td>
                        <td>{{date('d-m-Y', strtotime($dsdsn->tanggal))}}</td>
                        <td>{{$dsdsn->keterangan}}</td>
                        <td>
                            <a href="#" role="button"><i class="fas fa-download"></i></a> |
                            <a href="#" role="button"><i class="fas fa-user-edit"></i></a> |
                            <a href="#" onclick="return confirm('Apakah Anda yakin data akan dihapus ?')"
                            role="button"><i class="fas fa-user-minus" style="color : red"></i></a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            @endsection
