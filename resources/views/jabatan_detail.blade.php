<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Jabatan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Detail Karyawan
                </div>
                <div class="card-body">
                    <a href="/jabatan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                   
                        <form method="post" action="/jabatan/index">
    
                            {{ csrf_field() }}
                            
                                <div class="form-group">
                                    <label>Id Jabatan</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $jabatan->id_jabatan }}</p> 
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <label>Nama Jabatan</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $jabatan->nm_jabatan }}</p>
                                        </div>
                                    </div>
                                </div>
    
                        </form>
                </div>
            </div>
        </div>
    </body>
</html>