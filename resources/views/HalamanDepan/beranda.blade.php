@section("menu","dashboard")
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
            <h1 class="m-0 font-weight-light">Pengolahan Gaji Karyawan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="/beranda">Home</a></li> -->
              <!-- <li class="breadcrumb-item active">Starter Page</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- <div class="col-lg-3 col-6">
            small box
            <div class="small-box bg-info shadow-lg">
              <div class="inner">
                <h3>{{ $jumlah_jenis_gaji}}</h3>

                <p></i>Data Jenis Gaji</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('jenis_gaji')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->

          <!-- small box percobaan -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">
              <span class="info-box-icon bg-lightblue elevation-1"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jenis Gaji</span>
                <span class="info-box-number">
                  {{ $jumlah_jenis_gaji}}
                  <!-- <small>%</small> -->
                </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">
              <span class="info-box-icon bg-purple elevation-1"><i class="fas fa-user-plus"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jabatan</span>
                <span class="info-box-number">
                {{ $jumlah_jabatan }}
                  <!-- <small>%</small> -->
                </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">
              <span class="info-box-icon bg-teal elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Karyawan</span>
                <span class="info-box-number">
                {{ $jumlah_karyawan }}
                  <!-- <small>%</small> -->
                </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">
              <span class="info-box-icon bg-indigo elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Penggajian</span>
                <span class="info-box-number">
                {{ $jumlah_penggajian }}
                  <!-- <small>%</small> -->
                </span>
              </div>
            </div>
          </div>

          
          <!-- end percobaan -->



          <!-- <div class="col-lg-3 col-6">
            small box
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlah_jabatan }}</h3>

                <p>Data Jabatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('jabatan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6">
            small box
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlah_karyawan }}</h3>

                <p>Data Karyawan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('karyawan')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6">
            small box
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlah_penggajian }}</h3>

                <p>Data Penggajian</p>
              </div>
              <div class="icon">
               <i class="bi bi-bar-chart-fill"></i>
              </div>
              <a href="{{route('penggajian')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->

         
          <!-- /.card -->
          <!-- </div> -->
          <!-- /.content-wrapper -->

  

      
          <!-- <div class="card bg-gradient-success">
              <div class="card-header border-10">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3> -->
                <!--Inline Datepicker -->
                <!-- <div id="datepicker-inline"></div> -->
                <!-- tools card -->
                <!-- <div class="card-tools"> -->
                  <!-- button with a dropdown -->
                  <!-- <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                 
                  </script>
                <-- </div> -->
                <!-- /. tools -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- <div class="card-body pt-0"> -->
                <!--The calendar -->
                <!-- <div id="datepicker-inline" style="width: 100%"></div> -->
              <!-- </div> -->
              <!-- /.card-body -->
            <!-- </div> -->
            <!-- /.card -->
          <!-- </section> -->
          <!-- right col -->
        </div>
          <!-- PIE CHART -->
          <br/>
          <div class="card-secondary">
              <div class="card-header col-lg-5 col-10">
                <h3 class="card-title">Jenis Kelamin</h3>
                <div class="card-tools">
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> -->
                </div>
              </div>
              <div class=" card card-body col-lg-5 col-10">
                <canvas id="myChart" style="min-height: 200px; height: 200px; max-height: 200px; max-width: 200%"></canvas>
                <script>
                  var xValues = [ "Laki-Laki", "Perempuan"];
                  var yValues = {{ json_encode($jumlah_karyawan_jenkel) }};
                  var barColors = [
                    "#00aba9",
                    "#e8c3b9"
                  ];

                  new Chart("myChart", {
                    type: "pie",
                    data: {
                      labels: xValues,
                      datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                      }]
                    },
                    options: {
                      title: {
                        display: true,
                        text: "Jenis Kelamin"
                      }
                    }
                  });
                </script>
              </div>
              <!-- /.card-body -->
          </div>
        <!-- /.row (main row) -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
         

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
