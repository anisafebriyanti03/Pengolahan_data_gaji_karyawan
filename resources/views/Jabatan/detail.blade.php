@section("menu","mainmenu")
@section("submenu","jabatan")
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
            <h1 class="m-0">Detail Jabatan</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div> <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Detail Jabatan
                </div>
                <div class="card-body">
                    <br/>
                    <br/>
                        <form method="post" action="/jabatan/index">
    
                            {{ csrf_field() }}

                            <div class="mb-3 row">
                              <label for="id_jabatan" class="col-sm-2 col-form-label">ID jabatan</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="id_jabatan" value="{{ $jabatan->id_jabatan }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="nm_jabatan" class="col-sm-2 col-form-label">Nama Jabatan</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="nm_jabatan" value="{{ $jabatan->nm_jabatan }}">
                                </div>
                            </div>
                            <br>
                              <div class="mb-3 row">
                                <a href="/jabatan" class="btn btn-sm btn-primary">Kembali</a>
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
