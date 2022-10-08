<!-- @extends("Template.head") -->
@section("menu","mainmenu")
@section("submenu","karyawan")
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

            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2 mt-2">
                  <div class="col-sm-6">
                    <h1 class="m-0">Data Karyawan</h1>
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
                    <div class="card card-primary card-outline mt-3">
                          <div class="card-header">
                            <!-- <div class="pull-left"> -->
                              <!-- <strong><h5>Data Karyawan</h5></strong> -->
                              <a href="/karyawan/tambah" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>  Add</a>
                            <!-- </div> -->
                          </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped" id="table-data">
                                <thead>
                                    <tr class="table-primary">
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama Karyawan</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Jabatan</th>
                                        <!-- <th>Type</th> -->
                                        <th style="text-align:center;">OPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($karyawan as $i => $p)
                                    <tr>
                                        <td>{{ $i+1 }}</td>
                                        <td>{{ $p->nip }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>{{ $p->no_tlpn }}</td>
                                        <td >{{ $p->jabatan->nm_jabatan }}</td>
                                        <!-- <td>{{ $p->tipe }}</td> -->
                                        <td style="text-align:center;">
                                            <a href="/karyawan/detail/{{ $p->nip}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                            <a href="/karyawan/edit/{{ $p->nip}}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="/karyawan/delete/{{ $p->nip}}" class="btn btn-sm btn-danger" onClick="return confirm('Yakin ingin Hapus?')"><i class="fa fa-trash"></i></a>
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