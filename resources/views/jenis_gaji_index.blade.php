<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
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
                    <a href="/jenis_gaji/tambah" class="btn btn-primary">Tambah Data Jenis Gaji</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nominal</th>
                                <th>Type</th>
                                <th colspan="3" style="text-align:center;">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jenis_gaji as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->tipe }}</td>
                                <td style="text-align:center;">
                                    <a href="/jenis_gaji/edit/{{ $p->id_jenis_gaji}}" class="btn btn-warning">Edit</a>
                                    <a href="/jenis_gaji/detail/{{ $p->id_jenis_gaji}}" class="btn btn-success">Detail</a>
                                    <a href="/jenis_gaji/delete/{{ $p->id_jenis_gaji}}" class="btn btn-danger">Hapus</a>
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