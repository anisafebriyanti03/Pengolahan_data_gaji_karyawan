<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Karyawan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data Karyawan
                </div>
                <div class="card-body">
                    <a href="/karyawan/tambah" class="btn btn-primary">Tambah Data Karyawan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Karyawan</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th colspan="3" style="text-align:center;">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($karyawan as $i => $p)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $p->nip }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->tipe }}</td>
                                <td style="text-align:center;">
                                    <a href="/karyawan/edit/{{ $p->nip}}" class="btn btn-warning">Edit</a>
                                    <a href="/karyawan/detail/{{ $p->nip}}" class="btn btn-success">Detail</a>
                                    <a href="/karyawan/delete/{{ $p->nip}}" class="btn btn-danger">Hapus</a>
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