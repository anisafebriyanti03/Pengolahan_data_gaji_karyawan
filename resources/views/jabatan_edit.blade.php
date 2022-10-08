<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Jabatan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Edit
                </div>
                <div class="card-body">
                    <a href="/jabatan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/jabatan/update/{{ $jabatan->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>ID Jabatan</label>
                            <input type="text" name="id_jabatan" class="form-control" placeholder="ID Jabatan" value=" {{ $jabatan->id_jabatan }}">
 
                            @if($errors->has('id_jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('id_jabatan')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Jabatan</label>
                            <textarea name="nm_jabatan" class="form-control" placeholder="Nama Jabatan .."> {{ $jabatan->nm_jabatan }} </textarea>
 
                             @if($errors->has('nm_jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_jabatan')}}
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