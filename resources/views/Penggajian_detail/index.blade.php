@section("menu","mainmenu")
@section("submenu","penggajian_detail")
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
            <h1 class="m-0">Detail Penggajian</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/penggajian_detail/cetak">Cetak Slip Gaji</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol> -->
          </div>
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
                    <form method="post" action="/penggajian_detail/store">
 
                        {{ csrf_field() }}

                        <!-- <div class="form-group">
                            <label for="id_penggajian">NIP</label>
                            <select class="form-control" id="id_penggajian" name="id_penggajian" >
                                <option selected>Pilih </option>
                                @foreach($penggajian as $item)
                                <option value="{{ $item->id_penggajian }}">{{ $item->nip}}</option>    
                                @endforeach  
                            </select>  
 
                            @if($errors->has('id_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('id_penggajian')}}
                                </div>
                            @endif
                        </div>

 
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
                        <button type="submit" class="btn btn-sm btn-success float-right"><i class="fa fa-plus"></i> Add</button> -->
                                <div class="container">
                                    <div class="card card-primary card-outline mt-4">
                                        <!-- <div class="card-header text-center">
                                            Tabel Penggajian
                                        </div> -->
                                        <div class="card-body">
                                                <div class="card-tools">
                                                    <a href="/penggajian_detail/cetak/{{$id}}" class="btn btn-sm btn-primary float-left mb-3 mr-3"><i class="fa fa-print"></i>  Cetak</a>
                                                    <a href="/penggajian" class="btn btn-sm btn-success mb-3">Kembali</a>
                                                    <br/>
                                                </div>
                                        
                                        <!-- seacrch -->
                                            <table class="table table-bordered table-hover table-striped">
                                                <thead>
                                                    <tr class="table-primary">
                                                        <th>No</th>
                                                        <th>NIP</th>
                                                        <th>NAMA</th>
                                                        <th>Bonus</th>
                                                        <th>Pengurangan</th>
                                                        <th>Jenis  Gaji</th>
                                                        <th>Nominal</th>
                                                        <th>Total Gaji</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($penggajian_detail as $i => $p)
                                                    <tr>
                                                        <td>{{ $i+1 }}</td>
                                                        <td>{{ $p->penggajian->nip ?? '' }}</td>
                                                        <td>{{ $p->penggajian->karyawan->nama }}</td>
                                                        <td>{{ $p->penggajian->bonus ?? '' }}</td>
                                                        <td>{{ $p->penggajian->pengurangan ?? '' }}</td>
                                                        <td>{{ $p->jenis_gaji->nama  ?? '' }}</td>
                                                        <td>{{ $p->nominal }}</td>
                                                        <td>{{ $p->penggajian->total ?? '' }}</td>
                                                        <!-- <td style="text-align:center;">
                                                            <a href="/penggajian_detail/delete/{{ $p->id_detail}}/{{ $p->penggajian }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                        </td> -->
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
        

    <!-- bagian tabel -->
       
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
