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
        <!-- @if($errors->any())
          @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
              {{$error}}
            </div>
          @endforeach
        @endif -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 mt-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Data Karyawan</h1> -->
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
                      <strong><h5><center>Edit Data Karyawan</center> </h5></strong>
                    </div>
                </div>
                <div class="card-body">
                    <br/>
                    <form method="post" action="/karyawan/update/{{ $karyawan->nip }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" name="nip" class="form-control" placeholder="nip" value=" {{ $karyawan->nip }}" disabled>
        
                                    @if($errors->has('nip'))
                                        <div class="text-danger">
                                            {{ $errors->first('nip')}}
                                        </div>
                                    @endif
                                </div>  
                            </div>

                            <div class="col-md">
                                <div class="form-group">
                                    <label for="id_jabatan">Jabatan</label>
                                    <select class="form-control" id="id_jabatan" name="id_jabatan" value="{{ $karyawan->jabatan->nm_jabatan }}">
                                            @foreach($jabatan as $item)
                                                @if($item->id_jabatan==$karyawan->id_jabatan)
                                                <option value={{$item->id_jabatan}} selected>{{$item->nm_jabatan}}</optiion>
                                                @else
                                                <option value={{$item->id_jabatan}}>{{$item->nm_jabatan}}</option>
                                                @endif
                                            @endforeach       
                                    </select> 
                                    @if($errors->has('id_jabatan'))
                                        <div class="text-danger">
                                            {{ $errors->first('id_jabatan')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="number" name="nik" class="form-control" placeholder="nik" value="{{ $karyawan->nik }}">
        
                                    @if($errors->has('nik'))
                                        <div class="text-danger">
                                            {{ $errors->first('nik')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="form-group">
                                    <label>Nama Karyawan</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Karyawan" value="{{ $karyawan->nama }}">
        
                                    @if($errors->has('nama'))
                                        <div class="text-danger">
                                            {{ $errors->first('nama')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tmpt_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ $karyawan->tmpt_lahir }}">
        
                                    @if($errors->has('tmpt_lahir'))
                                        <div class="text-danger">
                                            {{ $errors->first('tmpt_lahir')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $karyawan->tgl_lahir }}">
        
                                    @if($errors->has('nama'))
                                        <div class="text-danger">
                                            {{ $errors->first('nama')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" placeholder="Alamat .."> {{ $karyawan->alamat }} </textarea>
        
                                    @if($errors->has('alamat'))
                                        <div class="text-danger">
                                            {{ $errors->first('alamat')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="form-group">
                                        <label for="jenkel">Jenis Kelamin </label> <br> 
                                        @if($karyawan->jenkel == "laki-laki")
                                        <div class="form-check form-check-inline">
                                            <label for="jenis_kelamin">
                                                <input type="radio" name="jenkel" value="laki-laki" id="jenkel" checked> Laki-Laki
                                                <input type="radio" name="jenkel" value="perempuan" id="jenkel"> Perempuan
                                            </label>
                                        </div>
                                        @elseif($karyawan->jenkel == "perempuan")
                                        <div class="form-check form-check-inline">
                                            <label for="jenis_kelamin">
                                                <input type="radio" name="jenkel" value="laki-laki" id="jenkel"> Laki-Laki
                                                <input type="radio" name="jenkel" value="perempuan" id="jenkel" checked> Perempuan
                                            </label>
                                        </div>
                                        @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <input type="number" name="no_tlpn" class="form-control" placeholder="No Telepon" value="{{ $karyawan->no_tlpn }}">
        
                                    @if($errors->has('no_tlpn'))
                                        <div class="text-danger">
                                            {{ $errors->first('no_tlpn')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-md">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $karyawan->email }}">
        
                                    @if($errors->has('email'))
                                        <div class="text-danger">
                                            {{ $errors->first('email')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label>Tanggal Masuk</label>
                                    <input type="date" name="tgl_masuk" class="form-control" placeholder="Tanggal Masuk" value="{{ $karyawan->tgl_masuk }}">
        
                                    @if($errors->has('tgl_masuk'))
                                        <div class="text-danger">
                                            {{ $errors->first('tgl_masuk')}}
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md">
                                <div class="form-group">
                                    <label>Tanggal Resign</label>
                                    <input type="date" name="tgl_resign" class="form-control" placeholder="Tanggal Resign" value="{{ $karyawan->tgl_resign }}">
        
                                    @if($errors->has('tgl_resign'))
                                        <div class="text-danger">
                                            {{ $errors->first('tgl_resign')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-sm btn-primary" value="  Edit  ">
                            <a href="/karyawan" class="btn btn-sm btn-success">Kembali</a>
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
