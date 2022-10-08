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
                   Detail Karyawan
                </div>
                <div class="card-body">
                    <a href="/karyawan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                   
                        <form method="post" action="/karyawan/index">
    
                            {{ csrf_field() }}
                            
                                <div class="form-group">
                                    <label>NIP</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->nip }}</p> 
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <label>ID Jabatan</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->id_jabatan }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>NIK</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->nik }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Nama Karyawan</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->nama }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->tmpt_lahir }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->tgl_lahir }}</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->alamat }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->jenkel }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->no_tlpn }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->email }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->password }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Masuk</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->tgl_masuk }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Keluar</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->tgl_keluar }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Type</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $karyawan->tipe }}</p>
                                        </div>
                                    </div>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </body>
</html>