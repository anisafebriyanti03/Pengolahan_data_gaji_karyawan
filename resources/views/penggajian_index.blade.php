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
                     Penggajian
                </div>
                <div class="card-body">
                    <a href="/penggajian/tambah" class="btn btn-primary">Tambah Jabatan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>ID Jenis Gaji</th>
                                <th>Jumlah</th>
                                <th colspan="3" style="text-align:center;">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penggajian as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nip }}</td>
                                <td>{{ $p->id_jenis_gaji }}</td>
                                <td>{{ $p->jumlah }}</td>
                                <td style="text-align:center;">
                                    <a href="/penggajian/edit/{{ $p->id_penggajian}}" class="btn btn-warning">Edit</a>
                                    <a href="/penggajian/detail/{{ $p->id_penggajian}}" class="btn btn-success">Detail</a>
                                    <a href="/penggajian/delete/{{ $p->id_penggajian}}" class="btn btn-danger">Hapus</a>
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