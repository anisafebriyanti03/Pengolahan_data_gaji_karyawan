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
                   Edit Penggajian Detail
                </div>
                <div class="card-body">
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/penggajian_detail/update/{{ $penggajian_detail->id_detail }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Id Penggajian</label>
                            <select class="form-control"  id="id_penggajian" name="id_penggajian" value="{{ $penggajian_detail->id_penggajian }}">{{ $penggajian_detail->nip }}
                                    @foreach($penggajian as $item)
                                       @if($item->id_penggajian==$penggajian_detail->id_penggajian)
                                        <option value="{{ $item->id_penggajian }}" selected>{{ $item->nip}}</option>
                                        @else
                                        <option value="{{$item->id_penggajian}}">{{$item->nip}}</option>
                                        @endif
                                    @endforeach  
                            </select> 
 
                            @if($errors->has('id_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('id_penggajian')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Id Jenis Gaji</label>
                            <select class="form-control"  id="id_jenis_gaji" name="id_jenis_gaji" value="{{ $penggajian_detail->id_jenis_gaji }}">{{ $penggajian_detail->nama }}
                                    @foreach($id_jenis_gaji as $item)
                                       @if($item->id_jenis_gaji==$penggajian_detail->id_jenis_gaji)
                                        <option value="{{ $item->id_jenis_gaji }}" selected>{{ $item->nama}}</option>
                                        @else
                                        <option value="{{$item->id_jenis_gaji}}">{{$item->nama}}</option>
                                        @endif
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
                            <input type="text" name="nominal" class="form-control" placeholder="" value=" {{ $penggajian_detail->nominal }}">
 
                            @if($errors->has('nominal'))
                                <div class="text-danger">
                                    {{ $errors->first('nominal')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-success" value="Simpan">
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
