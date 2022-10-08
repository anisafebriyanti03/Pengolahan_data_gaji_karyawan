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
                      <strong><h5>Edit Data</h5></strong>
                    </div>
                </div>
                <div class="card-body">         
                    <form method="post" action="/penggajian/update/{{ $penggajian->id_penggajian }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Id Penggajian</label>
                            <input type="number" name="id_penggajian" class="form-control"  value="{{ $penggajian->id_penggajian }}">
 
                            @if($errors->has('id_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('id_penggajian')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="nip">Nama Karyawan</label>
                            <select class="form-control"  id="nip" name="nip" value="{{ $penggajian->nip }}">{{ $penggajian->nama }}
                                    @foreach($karyawan as $item)
                                       @if($item->nip==$penggajian->nip)
                                        <option value="{{ $item->nip }}" selected>{{ $item->nama}}</option>
                                        @else
                                        <option value={{$item->nip}}>{{$item->nama}}</option>
                                        @endif
                                    @endforeach  
                            </select> 
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="bulan_penggajian">Bulan</label>
                            <select class="form-control" name="bulan_penggajian" id="bulan_penggajian">
                                <option selected>Bulan</option>
                                <option value="1" @if($penggajian->bulan_penggajian == '1') selected @endif>Januari</option>
                                <option value="2" @if($penggajian->bulan_penggajian == '2') selected @endif>Februari</option>
                                <option value="3" @if($penggajian->bulan_penggajian == '3') selected @endif>Maret</option>
                                <option value="4" @if($penggajian->bulan_penggajian == '4') selected @endif>April</option>
                                <option value="5" @if($penggajian->bulan_penggajian == '5') selected @endif>Mei</option>
                                <option value="6" @if($penggajian->bulan_penggajian == '6') selected @endif>Juni</option>
                                <option value="7" @if($penggajian->bulan_penggajian == '7') selected @endif>Juli</option>
                                <option value="8" @if($penggajian->bulan_penggajian == '8') selected @endif>Agustus</option>
                                <option value="9" @if($penggajian->bulan_penggajian == '9') selected @endif>September</option>
                                <option value="10" @if($penggajian->bulan_penggajian == '10') selected @endif>Oktober</option>
                                <option value="11" @if($penggajian->bulan_penggajian == '11') selected @endif>November</option>
                                <option value="12" @if($penggajian->bulan_penggajian == '12') selected @endif>Desember</option>
                            </select>
 
                            @if($errors->has('bulan_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('bulan_penggajian')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="tahun_penggajian">Tahun</label>
                            <select class="form-control" name="tahun_penggajian" id="tahun_penggajian">
                                <option selected>Tahun</option>
                                <option value="2000" @if($penggajian->tahun_penggajian == '2000') selected @endif>2000</option>
                                <option value="2001" @if($penggajian->tahun_penggajian == '2001') selected @endif>2001</option>
                                <option value="2002" @if($penggajian->tahun_penggajian == '2002') selected @endif>2002</option>
                                <option value="2003" @if($penggajian->tahun_penggajian == '2003') selected @endif>2003</option>
                                <option value="2004" @if($penggajian->tahun_penggajian == '2004') selected @endif>2004</option>
                                <option value="2005" @if($penggajian->tahun_penggajian == '2005') selected @endif>2005</option>
                                <option value="2006" @if($penggajian->tahun_penggajian == '2006') selected @endif>2006</option>
                                <option value="2007" @if($penggajian->tahun_penggajian == '2007') selected @endif>2007</option>
                                <option value="2008" @if($penggajian->tahun_penggajian == '2008') selected @endif>2008</option>
                                <option value="2009" @if($penggajian->tahun_penggajian == '2009') selected @endif>2009</option>
                                <option value="2010" @if($penggajian->tahun_penggajian == '2010') selected @endif>2010</option>
                                <option value="2011" @if($penggajian->tahun_penggajian == '2011') selected @endif>2011</option>
                                <option value="2012" @if($penggajian->tahun_penggajian == '2012') selected @endif>2012</option>
                                <option value="2013" @if($penggajian->tahun_penggajian == '2013') selected @endif>2013</option>
                                <option value="2014" @if($penggajian->tahun_penggajian == '2014') selected @endif>2014</option>
                                <option value="2015" @if($penggajian->tahun_penggajian == '2015') selected @endif>2015</option>
                                <option value="2016" @if($penggajian->tahun_penggajian == '2016') selected @endif>2016</option>
                                <option value="2017" @if($penggajian->tahun_penggajian == '2017') selected @endif>2017</option>
                                <option value="2018" @if($penggajian->tahun_penggajian == '2018') selected @endif>2018</option>
                                <option value="2019" @if($penggajian->tahun_penggajian == '2019') selected @endif>2019</option>
                                <option value="2020" @if($penggajian->tahun_penggajian == '2020') selected @endif>2020</option>
                                <option value="2021" @if($penggajian->tahun_penggajian == '2021') selected @endif>2021</option>
                                <option value="2022" @if($penggajian->tahun_penggajian == '2022') selected @endif>2022</option>
                            </select>
 
                            @if($errors->has('tahun_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun_penggajian')}}
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Jumlah Hadir</label>
                            <input type="number" name="jumlah_hadir" class="form-control" placeholder="Hadir" value="{{ $penggajian->jumlah_hadir }}">
 
                            @if($errors->has('jumlah_hadir'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_hadir')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Izin</label>
                            <input type="number" name="jumlah_izin" class="form-control" placeholder="Izin" value="{{ $penggajian->jumlah_izin }}">
 
                            @if($errors->has('jumlah_izin'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_izin')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Jumlah Sakit</label>
                            <input type="number" name="jumlah_sakit" class="form-control" placeholder="Sakit" value="{{ $penggajian->jumlah_sakit }}">
 
                            @if($errors->has('jumlah_sakit'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_sakit')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Jumlah Alfa</label>
                            <input type="number" name="jumlah_alfa" class="form-control" placeholder="Alfa" value="{{ $penggajian->jumlah_alfa }}">
 
                            @if($errors->has('jumlah_alfa'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_alfa')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Bonus</label>
                            <input type="text" name="bonus" class="form-control"   onchange="totalGaji()" placeholder="Bonus" value=" {{ $penggajian->bonus }}">
 
                            @if($errors->has('bonus'))
                                <div class="text-danger">
                                    {{ $errors->first('bonus')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label> Keterangan Bonus</label>
                           <textarea name="keterangan_bonus" id="keterangan_bonus" class="form-control"> {{ $penggajian->keterangan_bonus }}</textarea>
 
                            @if($errors->has('keterangan_bonus'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan_bonus')}}
                                </div>
                            @endif
                        </div>


                        <div class="form-group">
                            <label>Pengurangan</label>
                            <input type="text" name="pengurangan" class="form-control"  onchange="totalGaji()" placeholder="Pengurangan" value=" {{ $penggajian->pengurangan }}">
 
                            @if($errors->has('pengurangan'))
                                <div class="text-danger">
                                    {{ $errors->first('pengurangan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label> keterangan Pengurangan</label>
                           <textarea name="keterangan_pengurangan" id="keterangan_pengurangan" class="form-control"> {{ $penggajian->keterangan_pengurangan }}</textarea>
 
                            @if($errors->has('keterangan_pengurangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan_pengurangan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Total</label>
                            <!-- <input type="text" id="total" name="total" class="form-control" placeholder="Total" value=" {{ $penggajian->total }}"> -->
                            <input type="text" id="total" name="total" class="form-control" placeholder="Total" value=" {{ $total }}">
 
                            @if($errors->has('total'))
                                <div class="text-danger">
                                    {{ $errors->first('total')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-primary" value="  Edit  ">
                            <a href="/penggajian" class="btn btn-sm btn-secondary">Kembali</a>
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
        
        total = total + bonus - pengurangan

        $('#total').val(total)
    }
</script>

</body>
</html>
