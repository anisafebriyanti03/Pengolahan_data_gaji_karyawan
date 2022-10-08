<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Penggajian</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Tambah Penggajian
                </div>
                <div class="card-body">
                    <a href="/penggajian" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/penggajian/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="Nomor Induk Kependudukan">
 
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>ID Jenis Gaji</label>
                            <input type="text" name="id_jenis_gaji" class="form-control" placeholder="ID Jenis Gaji">
 
                            @if($errors->has('id_jenis_gaji'))
                                <div class="text-danger">
                                    {{ $errors->first('id_jenis_gaji')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
 
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