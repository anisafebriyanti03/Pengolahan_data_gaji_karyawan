<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Penggajian</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Edit Data Penggajian Karyawan
                </div>
                <div class="card-body">
                    <a href="/penggajian" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/penggajian/update/{{ $penggajian->id_penggajian }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="Nomor Induk Pengawai" value=" {{ $penggajian->nip }}">
 
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>ID Jenis Gaji</label>
                            <input type="text" name="id_jenis_gaji" class="form-control" placeholder="Id Jenis Gaji" value=" {{ $penggajian->id_jenis_gaji }}">
 
                            @if($errors->has('id_jenis_gaji'))
                                <div class="text-danger">
                                    {{ $errors->first('id_jenis_gaji')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" value=" {{ $penggajian->jumlah }}">
 
                            @if($errors->has('jumlah'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah')}}
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