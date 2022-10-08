<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Penggajian Detail</title>
    </head>
    <body>
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Detail Penggajian Karyawan
                </div>
                <div class="card-body">
                    <br/>
                   
                        <form method="post" action="/penggajian_detail/index">
    
                            {{ csrf_field() }}
                            <div class="mb-3 row">
                              <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="nip" value="{{ $penggajian_detail->nip }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="bulan_penggajian" class="col-sm-2 col-form-label">Bulan Penggajian</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="bulan_penggajian" value="{{ $penggajian_detail->bulan_penggajian }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="tahun_penggajian" class="col-sm-2 col-form-label">Tahun Penggajian</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="tahun_penggajian" value="{{ $penggajian_detail->tahun_penggajian }}">
                                </div>
                            </div>

                             <div class="mb-3 row">
                              <label for="jumlah_hadir" class="col-sm-2 col-form-label">Jumlah Hadir</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="jumlah_hadir" value="{{ $penggajian_detail->jumlah_hadir }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="jumlah_izin" class="col-sm-2 col-form-label">Jumlah Izin</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="jumlah_izin" value="{{ $penggajian_detail->jumlah_izin }}">
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                              <label for="jumlah_sakit" class="col-sm-2 col-form-label">Jumlah Sakit</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="jumlah_sakit" value="{{ $penggajian_detail->jumlah_sakit }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="jumlah_alfa" class="col-sm-2 col-form-label">Jumlah Alfa</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="jumlah_alfa" value="{{ $penggajian_detail->jumlah_alfa }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="total" class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="total" value="{{ $penggajian_detail->total }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="total_gaji" class="col-sm-2 col-form-label">Total Gaji</label>
                                <div class="col-sm-10">
                                  <input type="text"  class="form-control" id="total_gaji" value="{{ $penggajian_detail->total_gaji }}">
                                </div>
                            </div>

                            <br>
                                <div class="mb-3 row">
                                  <a href="/penggajian_detail" class="btn btn-primary">Kembali</a>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </body>
</html>