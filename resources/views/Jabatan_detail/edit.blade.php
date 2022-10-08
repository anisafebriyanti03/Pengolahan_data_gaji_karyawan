@section("menu","mainmenu")
@section("submenu","jabatan_detail")
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
          <!-- <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div> -->
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
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Edit
                </div>
                <div class="card-body">
                   
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/jabatan_detail/update/{{ $jabatan_detail->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>ID Jabatan</label>
                            <input type="text" name="id_jabatan" class="form-control" placeholder="" value=" {{ $jabatan_detail->id_jabatan}}">
 
                            @if($errors->has('id_jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_jabatan')}}
                                </div>
                            @endif
                        </div>
                        

                        <div class="form-group">
                            <label>Id Jenis Gaji</label>
                            <input type="text" name="id_jenis_gaji" class="form-control" placeholder="" value=" {{ $jabatan_detail->id_jenis_gaji}}">
 
                            @if($errors->has('id_jenis_gaji'))
                                <div class="text-danger">
                                    {{ $errors->first('id_jenis_gaji')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Nominal</label>
                            <input type="text" name="nominal" class="form-control" placeholder="" value=" {{ $jabatan_detail->nominal }}">
 
                            @if($errors->has('nominal'))
                                <div class="text-danger">
                                    {{ $errors->first('nominal')}}
                                </div>
                            @endif
 
                        </div>
 
                        
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                            <a href="/jabatan_detail" class="btn btn-sm btn-primary">Kembali</a>
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
