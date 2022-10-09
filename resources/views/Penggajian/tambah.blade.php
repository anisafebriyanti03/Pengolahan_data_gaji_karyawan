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
        <div class="row mb-2 mt-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Penggajian</h1>
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
            <div class="card mt-3">
            <div class="card-header">
                    <div class="pull-left">
                      <strong><h5>Tambah Data</h5></strong>
                    </div>
                  </div>
                <div class="card-body">
                    <form method="post" action="/penggajian/store">
 
                        {{ csrf_field() }}

                       

                        <div class="form-group">                        
                            <label for="nip">Nama Karyawan</label>
                            <select id="comboA" onchange="getComboA(this)" name="nip" class="form-control">
                                <option selected>Pilih Karyawan</option>
                                    @foreach($karyawan as $item)
                                        <option value="{{ $item->nip }}" {{ !empty($karyawan_detail) ? ($karyawan_detail->nip === $item->nip ? 'selected' : '' ) : ''}}>{{ $item->nama }}</option>
                                    @endforeach
                            </select>
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
                        </div> 
                        
                        <!-- <div class="form-group">
                            <label for="id_penggajian">Id Penggajian</label>
                            <input type="number" name="id_penggajian" class="form-control" placeholder="Masukan id">
                            @if($errors->has('id_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('id_penggajian')}}
                                </div>
                            @endif
                        </div> -->

                        <div class="form-group">
                            <label>Bulan Penggajian</label>
                            {{ date ("F", time()) }}
 
                            @if($errors->has('bulan_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('bulan_penggajian')}}
                                </div>
                            @endif
                        </div>


                        <div class="form-group">
                            <label>Tahun penggajian</label>
                            {{ date ("Y", time()) }}
                            @if($errors->has('tahun_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun_penggajian')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Izin</label>
                                <input type="number" name="jumlah_izin" id="jumlah_izin" onchange="getTotalHadir()" class="form-control" placeholder="Izin">
                                    @if($errors->has('jumlah_izin'))
                                        <div class="text-danger">
                                            {{ $errors->first('jumlah_izin')}}
                                        </div>
                                    @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Sakit</label>
                            <input type="number" name="jumlah_sakit" id="jumlah_sakit" onchange="getTotalHadir()" class="form-control" placeholder="Sakit">
 
                            @if($errors->has('jumlah_sakit'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_sakit')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Alfa</label>
                            <input type="number" name="jumlah_alfa" id="jumlah_alfa" onchange="totalGaji()" class="form-control" placeholder="Alfa">
 
                            @if($errors->has('jumlah_alfa'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_alfa')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Hadir</label>
                            <input type="number" name="jumlah_hadir"  id="jumlah_hadir" class="form-control" placeholder="Hadir">
 
                            @if($errors->has('jumlah_hadir'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_hadir')}}
                                </div>
                            @endif
                        </div>

                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Jabatan</th>
                                    <th>Jenis Gaji</th>
                                    <th>Nominal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jabatan_detail as $i => $p)
                                <tr>
                                <td>{{ $p->jabatan->nm_jabatan ?? '' }}</td>   
                                <td>{{ $p->jenis_gaji->nama ?? '' }}</td>
                                <td>Rp.{{ number_format($p->nominal) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="form-group">
                            <label>Bonus</label>
                            <input type="number" name="bonus" id="bonus" class="form-control" onchange="totalGaji()" placeholder="Bonus" >
 
                            @if($errors->has('bonus'))
                                <div class="text-danger">
                                    {{ $errors->first('bonus')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label> Keterangan Bonus </label>
                           <textarea name="keterangan_bonus" id="keterangan_bonus" class="form-control"></textarea>
 
                            @if($errors->has('keterangan_bonus'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan_bonus')}}
                                </div>
                            @endif
                        </div>


                        <div class="form-group">
                            <label>Pengurangan</label>
                            <input type="number" name="pengurangan" id="total_alfa" class="form-control" onchange="totalGaji()" placeholder="Pengurangan">
 
                            @if($errors->has('pengurangan'))
                                <div class="text-danger">
                                    {{ $errors->first('pengurangan')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label> keterangan Pengurangan</label>
                           <textarea name="keterangan_pengurangan" id="keterangan_pengurangan" class="form-control"></textarea>
 
                            @if($errors->has('keterangan_pengurangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan_pengurangan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Total</label>
                            <input type="hidden" id="hidden_total" class="form-control" value="{{$total}}">
                            <input type="number" name="total" id="total" class="form-control" placeholder="Total" value="{{$total}}"> 
 
                            @if($errors->has('total'))
                                <div class="text-danger">
                                    {{ $errors->first('total')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <a href="/penggajian" class="btn btn-sm btn-success">Kembali</a>
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
        
        let alfa = $('#jumlah_alfa').val();
        getTotalHadir(alfa);
            alfa = alfa === '' ? 0 : parseInt(alfa);
            alfa *= 50000;


        total = total + bonus - pengurangan - alfa

        $('#total').val(total)
    }


    function getTotalHadir(alfa) {
        let dates = new Date();
        var year = dates.getFullYear();
        var month = dates.getMonth();
        var days = Math.round(((new Date(year, month))-(new Date(year, month+1)))/86400000);
        console.log(month+1 + " " + year + "=>" + days);

        let sakit = $('#jumlah_sakit').val();
            sakit = sakit === '' ? 0 : parseInt(sakit);

        let izin = $('#jumlah_izin').val();
            izin = izin === '' ? 0 : parseInt(izin);

        let total = Math.abs(days) - sakit - izin - alfa - 8

        $('#jumlah_hadir').val(total)

        console.log(total);
    }
</script>
</body>
</html>
