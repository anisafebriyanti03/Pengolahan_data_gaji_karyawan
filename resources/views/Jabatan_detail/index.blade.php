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
            <h1 class="m-0">Detail Jabatan</h1>
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
    <div class="container">
            <div class="card  card-primary card-outline mt-3">
            <!-- <div class="card-header mt-2">
                    <div class="pull-left">
                      <strong><h5>Detail Jabatan</h5></strong>
                    </div>
                  </div> -->
                <div class="card-body ">

                    <form method="post" action="/jabatan_detail/store">
                        {{ csrf_field() }}

 
                        <!-- <div class="form-group">
                            <label>Nama Jabatan</label>
                            <select class="form-control" id="id_jabatan" name="id_jabatan" >
                                <option selected>Pilih Jabatan</option>
                                @foreach($jabatan as $item)
                                <option value="{{ $item->id_jabatan }}">{{ $item->nm_jabatan }}</option>
                                @endforeach
                            </select>  
                            @if($errors->has('id_jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_jabatan')}}
                                </div>
                            @endif
                        </div> -->

                        <input type="hidden" name="id_jabatan" value="{{$id}}" />
                        <div class="form-group">
                            <label>Jenis Gaji</label>
                            <select class="form-control" id="id_jenis_gaji" name="id_jenis_gaji" >
                                <option selected>Pilih Jenis Gaji</option>
                                @foreach($jenis_gaji as $item)
                                <option value="{{ $item->id_jenis_gaji }}">{{ $item->nama }}</option>    
                                @endforeach  
                            </select>  
                            @if($errors->has('id_jenis_gaji'))
                                <div class="text-danger">
                                    {{ $errors->first('id_jenis_gaji')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Nominal</label>
                            <input type="text" name="nominal" class="form-control" placeholder="Nominal">
 
                            @if($errors->has('nominal'))
                                <div class="text-danger">
                                    {{ $errors->first('nominal')}}
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary float-left">Simpan</button>
                        <a href="/jabatan" class="btn btn-sm btn-success ml-2 mb-3">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
        
<!-- Awal Card Table -->
    <div class="container">
    @if(session('Data terhapus'))
        <div class="alert alert-danger" role="alert">
          {{session('Data terhapus')}}
        </div>
    @endif
            <div class="card card-primary card-outline mt-5">
                <div class="card-body"><br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr class="table-primary">
                                <th>No</th>
                                <!-- <th> Nama Jabatan</th> -->
                                <th> Jenis Gaji</th>
                                <th> Nominal</th>
                                <th colspan="3" style="text-align:center;">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jabatan_detail as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <!-- <td> {{ $p->jabatan->nm_jabatan }}</td> -->
                                <td>{{ $p->jenis_gaji->nama ?? '' }}</td>
                                <td>{{ $p->nominal }}</td>
                                <td style="text-align:center;">
                                    <!-- <a href="/jabatan_detail/detail/{{ $p->id}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a> -->
                                    <!-- <a href="/jabatan_detail/edit/{{ $p->id}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> -->
                                    <!-- <a href="/jabatan_detail/delete/{{ $p->id}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> -->
                                    <a href="/jabatan_detail/delete/{{ $p->id}}/{{ $p->id_jabatan }}" class="btn btn-sm btn-danger" onClick="return confirm('Yakin ingin Hapus?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </br> 
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
