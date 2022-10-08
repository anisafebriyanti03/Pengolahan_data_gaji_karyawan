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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pengolahan Data Gaji Karyawan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Detail Penggajian Karyawan
                </div>
                <div class="card-body">
                    <br/>
                   
                        <form method="post" action="/penggajian_detail/index">
    
                            {{ csrf_field() }}
                            <div class="mb-3 row">
                              <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="nip" value="{{ $penggajian_detail->nip }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="bulan_penggajian" class="col-sm-2 col-form-label">Bulan Penggajian</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="bulan_penggajian" value="{{ $penggajian_detail->bulan_penggajian }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="total_gaji" class="col-sm-2 col-form-label">Total Gaji</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="total_gaji" value="{{ $penggajian_detail->total_gaji }}">
                                </div>
                            </div>

                            <br>
                                <div class="mb-3 row">
                                  <a href="/penggajian_detail" class="btn btn-sm btn-primary">Kembali</a>
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
