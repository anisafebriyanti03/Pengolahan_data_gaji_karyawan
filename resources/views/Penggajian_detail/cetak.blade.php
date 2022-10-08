cetak gaji bentuk table 

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
  <style>
    table.static{
        position: relative;
        border: 1px solid #543535;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="">

  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="form-group">
      <p align="center"><b>Data Karyawan</b></p>
                  <!-- seacrch -->
                  <table class="static" align="center" rules="all" style="width: 95%;">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>NIP</th>
                                                        <th>Nama</th>
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
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                </div>
                <script type="text/javascript">
                  window.print();
                </script>
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
