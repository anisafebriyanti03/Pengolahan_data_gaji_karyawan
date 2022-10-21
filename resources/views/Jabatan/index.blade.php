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
            <h1 class="m-0 font-weight-light">Data Jabatan</h1>
          </div><!-- /.col -->
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
        <div class="container">
              <div class="card card-olive card-outline mt-3">
                  <!-- <div class="card-header mt-2">
                    <div class="col-6">
                      <strong><h5>Data Jabatan</h5></strong>
                    </div>
                  </div> -->
                  
                  <div class="card-body">
                  <a href="/jabatan/tambah" class="btn btn-sm btn-primary  float-left mb-3"><i class="fa fa-plus"></i> Tambah</a>
                      <br/>
                      <table class="table table-bordered table-hover table-striped  ">
                          <thead>
                              <tr class="table-secondary">
                                  <th>No</th>
                                  <th>Jabatan</th>
                                  <th colspan="3" style="text-align:center;">OPSI</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($jabatan as $i => $p)
                              <tr>
                                  <td>{{ $i+1 }}</td>
                                  <td>{{ $p->nm_jabatan }}</td>
                                
                                  <td style="text-align:center;">
                                    <!-- <a href="/jabatan_detail/{{ $p->id_jabatan}}" class="btn btn-sm btn-default"><i class="fa fa-dollar-sign"></i></a> -->
                                    <a href="/jabatan_detail/jabatan/{{ $p->id_jabatan}}" class="btn btn-sm btn-info"><i class="fa fa-dollar-sign" data-toggle="tooltip" title="Rincian"></i></a>
                                    <a href="/jabatan/edit/{{ $p->id_jabatan}}" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="/jabatan/delete/{{ $p->id_jabatan}}" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus" onClick="return confirm('Yakin ingin Hapus?')"><i class="fa fa-trash"></i></a>
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
