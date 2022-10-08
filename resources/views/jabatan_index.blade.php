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
                     Jabatan Karyawan
                </div>
                <div class="card-body">
                    <a href="/jabatan/tambah" class="btn btn-primary">Tambah Jabatan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jabatan</th>
                                <th colspan="3" style="text-align:center;">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jabatan as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nm_jabatan }}</td>
                                <td style="text-align:center;">
                                    <!-- <a href="/jabatan/edit/{{ $p->id_jabatan}}" class="btn btn-warning">Edit</a> -->
                                    <a href="/jabatan/detail/{{ $p->id_jabatan}}" class="btn btn-success">Detail</a>
                                    <a href="/jabatan/delete/{{ $p->id_jabatan}}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>