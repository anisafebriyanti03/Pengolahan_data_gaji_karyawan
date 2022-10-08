@section("menu","mainmenu")
@section("submenu","penggajian")
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       @if(session('Data terhapus'))
        <div class="alert alert-danger" role="alert">
          {{session('Data terhapus')}}
        </div>
        @endif

        @if(session('Data diedit'))
          <div class="alert alert-warning" role="alert">
            {{session('Data diedit')}}
          </div>
          @endif

        @if(session('Data ditambah'))
        <div class="alert alert-info" role="alert">
          {{session('Data ditambah')}}
        </div>
        @endif
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 mt-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Penggajian</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-right">
              <li class="breadcrumb-item"><a href="../penggajian_detail/cetak">Cetak Slip Gaji</a></li>
              <li class="breadcrumb-item active">Per NIP</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <div class="container">
            <div class="card  card-primary card-outline mt-3">
                <div class="card-header ">
                    <a href="/penggajian/tambah" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>  Add</a>
                  </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped" id="table-data">
                        <thead>
                            <tr class="table-primary">
                                <th>No</th>
                                <th>Nama Karyawan</th>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <!-- <th>Hadir</th>
                                <th>Izin</th> -->
                                <th>Jumlah Alfa</th>
                                <!-- <th>Sakit</th> -->
                                <th>Pengurangan</th> 
                                <th>Bonus</th>
                                <th>Total</th>
                                <th style="text-align:center;">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penggajian as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->karyawan->nama ?? ''}}</td>
                                <td>{{ $p->bulan_penggajian }}</td>
                                <td>{{ $p->tahun_penggajian }}</td>
                                <!-- <td>{{ $p->jumlah_hadir }}</td>
                                <td>{{ $p->jumlah_izin }}</td>
                                <td>{{ $p->jumlah_sakit }}</td> -->
                                <td>{{ $p->jumlah_alfa }}</td>
                                <td>Rp.{{ number_format($p->jumlah_alfa *= 50000) }}</td>
                                <td>Rp.{{ number_format($p->bonus) }}</td>
                                <td>Rp.{{ number_format($p->total - $p->jumlah_alfa) }} </td>
                                <td style="text-align:center;">
                                    <!-- <a href="/penggajian_detail/penggajian/{{ $p->id_penggajian}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> </a> -->
                                    <a href="/penggajian_detail/penggajian/{{ $p->id_penggajian}}" class="btn btn-sm btn-info"><i class="fa fa-print"></i></a>
                                    <a href="/penggajian/detail/{{ $p->id_penggajian}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> </a>
                                    <!-- <a href="/penggajian/edit/{{ $p->id_penggajian}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> -->
                                    <a href="/penggajian/delete/{{ $p->id_penggajian}}" class="btn btn-sm btn-danger" onClick="return confirm('Yakin ingin Hapus?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Template.script')
</body>
</html>
