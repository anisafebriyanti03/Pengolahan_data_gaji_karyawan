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
            <h1 class="m-0"></h1>
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
    
    <form>                
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9">
              <div class="card card-olive card-outline mt-2">
                  <div class="card-header text-center">
                    Slip Gaji
                  </div>
                <div class="card-body">
                    <div class="card-tools">
                        <!-- <a href="/penggajian_detail/cetak/{{$id}}" class="btn btn-sm btn-primary float-left mb-3 mr-3"><i class="fa fa-print"></i>  Cetak</a> -->
                        <!-- <a href="/penggajian" class="btn btn-sm btn-success mb-3">Kembali</a> -->
                    </div>
                    <div class="mt-20">
                        <label  class="col-sm-4 col-form-label">Nama </label>
                        <b>:</b> {{$arrayResult[0]}}
                    </div>
                    <div class="mt-10">
                        <label  class="col-sm-4 col-form-label">NIP </label>
                        <b>:</b> {{$arrayResult[1]}}
                    </div>
                    <div class="mt-10">
                        <label  class="col-sm-4 col-form-label">Bonus Gaji </label>
                        <b>:</b> {{$arrayResult[2]}}
                    </div>
                    <div class="mt-10">
                        <label  class="col-sm-4 col-form-label">Pengurangan </label>
                        <b>:</b> {{$arrayResult[3]}}
                    </div>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>Keterangan</th>
                                <th>Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                $getData = $arrayResult[5];
                            ?>
                            @foreach ($getData as $value)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$value['jenis_gaji']}}</td>
                                        <td>{{$value['nominal']}}</td>
                                    </tr>
                            @endforeach
                            <tr>
                                <td colspan="2"><b>Total</b></td>
                                <td>{{$arrayResult[4]}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align:center;"><a href="/penggajian" class="btn btn-sm mb-3">Kembali</a></td>
                            </tr>
                        </tbody>
                    </table>
                                        <!--
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
                                                         <td style="text-align:center;">
                                                            <a href="/penggajian_detail/delete/{{ $p->id_detail}}/{{ $p->penggajian }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                        </td> 
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table> -->
                                            </div>
                  </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
          window.print();
        </script>
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
