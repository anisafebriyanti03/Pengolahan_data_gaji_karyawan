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
                   Data Jenis Gaji
                </div>
                <div class="card-body">
                    <a href="/jenis_gaji" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                   
                        <form method="post" action="/jenis_gaji/index">
    
                            {{ csrf_field() }}
                            
                                <div class="form-group">
                                    <label>Nominal</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $jenis_gaji->nama }}</p> 
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <label>Type</label>
                                    <div>
                                        <div class="form-control" type="text" >
                                            <p>{{ $jenis_gaji->tipe }}</p>
                                        </div>
                                    </div>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </body>
</html>