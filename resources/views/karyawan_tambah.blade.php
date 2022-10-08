<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Karyawan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Tambah Data Karyawan
                </div>
                <div class="card-body">
                    <a href="/karyawan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/karyawan/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="Nomor Induk Pegawai">
 
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="id_jabatan" class="form-control" placeholder="Jabatan">
                            @if($errors->has('id_jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_jabatan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control" placeholder="Nomor induk Kependudukan">
 
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Karyawan</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Karyawan">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tmpt_lahir" class="form-control" placeholder="Tempat Lahir">
 
                            @if($errors->has('tmpt_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tmpt_lahir')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" placeholder="Tempat Lahir">
 
                            @if($errors->has('tgl_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <br>
                            <input type="radio" name="jenkel" value="laki-laki" id="laki-laki" checked>&nbsp Laki-laki
                            <input type="radio" name="jenkel" value="perempuan" id="perempuan">&nbsp Perempuan
 

                            @if($errors->has('jenkel'))
                                <div class="text-danger">
                                    {{ $errors->first('jenkel')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" name="no_tlpn" class="form-control" placeholder="No Telepon">
 
                            @if($errors->has('no_tlpn'))
                                <div class="text-danger">
                                    {{ $errors->first('no_tlpn')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email Addres">
 
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
 
                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
                        </div>

                       

                        <div class="form-group">
                            <label>Tanggal Masuk</label>
                            <input type="date" name="tgl_masuk" class="form-control" placeholder="Tanggal Masuk">
 
                            @if($errors->has('tgl_masuk'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_masuk')}}
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Tanggal Resign</label>
                            <input type="date" name="tgl_resign" class="form-control" placeholder="Tanggal Resign">
 
                            @if($errors->has('tgl_resign'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_resign')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="tipe">
                                <option selected>Open this select menu</option>
                                <option value="ADMIN">ADMIN</option>
                                <option value="USER">USER</option>
                            </select>
 
                            @if($errors->has('tipe'))
                                <div class="text-danger">
                                    {{ $errors->first('tipe')}}
                                </div>
                            @endif
                        </div>

                        
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>