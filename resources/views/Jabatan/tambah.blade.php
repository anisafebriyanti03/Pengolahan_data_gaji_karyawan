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
        <div class="row mb-2 mt-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Data Jabatan</h1> -->
          </div>
          <!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div> -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <div class="container">
            <div class="card mt-3">
                <!-- <div class="card-header text-center">
                   Input Jabatan Karyawan
                </div> -->
                <div class="card-header pull-left">
                    <!-- <div class="pull-left"> -->
                      <strong><h5><center>Tambah Data Jabatan</center></h5></strong>
                    <!-- </div> -->
                </div>
                <div class="card-body ">
                    <form method="post" action="/jabatan/store">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama Jabatan</label>
                            <input type="text" name="nm_jabatan" class="form-control" placeholder="Jabatan">
 
                            @if($errors->has('nm_jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_jabatan')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm  btn-primary" value="Simpan">
                            <a href="/jabatan" class="btn btn-sm  btn-success">Kembali</a>
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
