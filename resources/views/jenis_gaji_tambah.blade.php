<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Jenis Gaji</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Tambah Data Jenis Gaji
                </div>
                <div class="card-body">
                    <a href="/jenis_gaji" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/jenis_gaji/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nominal</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nominal">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control" name="tipe">
                                <option selected>Open this select menu</option>
                                <option value="tunjangan makan">tunjangan makan</option>
                                <option value="tunjangan transportasi">tunjangan transportasi</option>
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