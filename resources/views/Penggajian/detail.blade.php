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
          <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card mt-4 ">
            <div class="card-header">
                    <div class="pull-left">
                      <strong><h5><center>Detail Data Penggajian</center></h5></strong>
                    </div>
                </div>
                <div class="card-body">
                    <br/>
                        <form method="post" action="/penggajian/index">
    
                            {{ csrf_field() }}

                            <!-- <div class="mb-3 row">
                              <label for="id_penggajian" class="col-sm-2 col-form-label">Id Penggajian</label>
                                <div class="col-sm-10">
                                <b>:</b> {{ $penggajian->id_penggajian }}
                                </div>
                            </div> -->

                            <div class="mb-3 row">
                              <label for="nip" class="col-sm-2 col-form-label">Nama Karyawan</label>
                                <div class="col-sm-10">
                                <b>:</b> {{ $penggajian->karyawan->nama }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="bulan_penggajian" class="col-sm-2 col-form-label">Bulan Penggajian</label>
                                <div class="col-sm-10">
                                <b>:</b> {{ date ("F", strtotime("2022-$penggajian->bulan_penggajian-01 00:00:00")) }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="tahun_penggajian" class="col-sm-2 col-form-label">Tahun Penggajian</label>
                                <div class="col-sm-10">
                                <b>:</b> {{ $penggajian->tahun_penggajian }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="jumlah_izin" class="col-sm-2 col-form-label">Jumlah Izin</label>
                                <div class="col-sm-10">
                                <b>:</b> {{ $penggajian->jumlah_izin }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="jumlah_sakit" class="col-sm-2 col-form-label">Jumlah Sakit</label>
                                <div class="col-sm-10">
                                <b>:</b> {{ $penggajian->jumlah_sakit }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="jumlah_alfa" class="col-sm-2 col-form-label">Jumlah Alfa</label>
                                <div class="col-sm-10">
                                <b>:</b> {{ $penggajian->jumlah_alfa }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="jumlah_hadir" class="col-sm-2 col-form-label">Jumlah Hadir</label>
                                <div class="col-sm-10">
                                <b>:</b> {{ $penggajian->jumlah_hadir }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="bonus" class="col-sm-2 col-form-label">Bonus</label>
                                <div class="col-sm-10">
                                <b>:</b> Rp.{{ number_format($penggajian->bonus) }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="ket_bonus" class="col-sm-2 col-form-label">Keterangan Bonus</label>
                                <div class="col-sm-10">
                                <b>:</b> {{ $penggajian->keterangan_bonus }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="pengurangan" class="col-sm-2 col-form-label">Pengurangan</label>
                                <div class="col-sm-10">
                                <b>:</b> Rp.{{ number_format($penggajian->pengurangan) }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="ket_pengurangan" class="col-sm-2 col-form-label">Keterangan Pengurangan</label>
                                <div class="col-sm-10">
                                <b>:</b> {{ $penggajian->keterangan_pengurangan }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="total" class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-10">
                                <b>:</b> Rp.{{ number_format( $penggajian->total ) }}
                                </div>
                            </div>
                        
                            <div class="col-sm-10 offset-sm-2 ">
                              <a href="/penggajian" class="btn btn-sm btn-success">Kembali</a>
                            </div>
                        </form>
                </div>
            </div>
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

<script>
    function getComboA(selectObject) {
        var value = selectObject.value;  
         console.log('{{URL::to('/penggajian/tambah')}}' + '/' + value);
         window.location = '{{URL::to('/penggajian/tambah')}}' + '/' + value;
    }

    function totalGaji() {
        let total = parseInt($('#hidden_total').val())
        let bonus = $('#bonus').val()
            bonus = bonus === '' ? 0 : parseInt(bonus)
        let pengurangan = $('#pengurangan').val()
            pengurangan = pengurangan === '' ? 0 : parseInt(pengurangan)
        
        total = total + bonus - pengurangan

        $('#total').val(total)
    }
</script>

</body>
</html>
