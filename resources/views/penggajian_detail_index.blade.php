<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Penggajian Detail</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data Penggajian_detail
                </div>
                <div class="card-body">
                    <a href="/penggajian_detail/tambah" class="btn btn-primary">Tambah Data Penggajian Detail</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Bulan penggajian</th>
                                <th>Tahun penggajian</th>
                                <th>Total</th>
                                <th>Total gaji</th>
                                <th colspan="3" style="text-align:center;">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penggajian_detail as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nip }}</td>
                                <td>{{ $p->bulan_penggajian }}</td>
                                <td>{{ $p->tahun_penggajian }}</td>
                                <td>{{ $p->total }}</td>
                                <td>{{ $p->total_gaji }}</td>
                                <td style="text-align:center;">
                                    <a href="/penggajian_detail/edit/{{ $p->id_detail}}" class="btn btn-warning">Edit</a>
                                    <a href="/penggajian_detail/detail/{{ $p->id_detail}}" class="btn btn-success">Detail</a>
                                    <a href="/penggajian_detail/delete/{{ $p->id_detail}}" class="btn btn-danger">Hapus</a>
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