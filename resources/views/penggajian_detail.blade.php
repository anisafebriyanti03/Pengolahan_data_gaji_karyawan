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
                   Detail Data Penggajian
                </div>
                <div class="card-body">
                    <a href="/penggajian" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                   
                        <form method="post" action="/penggajian/index">
    
                            {{ csrf_field() }}
                            
                                <div class="form-group">
                                    <label>NIP</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $penggajian->nip }}</p> 
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <label>ID Jenis Gaji</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $penggajian->id_jenis_gaji }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $penggajian->jumlah }}</p>
                                        </div>
                                    </div>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </body>
</html>