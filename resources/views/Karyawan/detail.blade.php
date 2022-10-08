@section("menu","mainmenu")
@section("submenu","karyawan")
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 mt-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Karyawan</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <div class="container ">
            <div class="card mt-3">
            <div class="card-header">
                    <div class="pull-left">
                      <strong><h5>Detail Data</h5></strong>
                    </div>
                </div>
                <div class="card-body">
                   <br/>
                        <form method="post" action="/karyawan/index">
    
                            {{ csrf_field() }}
                            <div class="mb-3 row">
                              <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $karyawan->nip }} 
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="id_jabatan" class="col-sm-2 col-form-label"> Jabatan</label>
                                <div class="col-sm-10">
                                 <b>:</b> {{ $karyawan->jabatan->nm_jabatan }}  
                                </div>
                            </div>
                           
                            <div class="mb-3 row">
                              <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $karyawan->nik }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="nama" class="col-sm-2 col-form-label">Nama Karyawan</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $karyawan->nama }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="tmpt_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $karyawan->tmpt_lahir }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $karyawan->tgl_lahir }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $karyawan->alamat }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                <b>:</b> {{ $karyawan->jenkel }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="no_tlpn" class="col-sm-2 col-form-label">No Telepon</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $karyawan->no_tlpn }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $karyawan->email }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $karyawan->tgl_masuk }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="tgl_resign" class="col-sm-2 col-form-label">Tanggal Resign</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $karyawan->tgl_resign }}
                                </div>
                            </div>
                                <div class="col-sm-10 offset-sm-2 mb-2 mt-2">
                                  <a href="/karyawan" class="btn btn-sm btn-success">Kembali</a>
                                </div>
                        </form>
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
