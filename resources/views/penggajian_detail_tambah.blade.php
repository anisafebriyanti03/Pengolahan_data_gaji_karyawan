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
                   Input Penggajian Detail
                </div>
                <div class="card-body">
                    <a href="/penggajian_detail" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/penggajian_detail/store">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>ID detail</label>
                            <input type="text" name="id_detail" class="form-control" placeholder="">
 
                            @if($errors->has('id_detail'))
                                <div class="text-danger">
                                    {{ $errors->first('id_detail')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="">
 
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Bulan penggajian</label>
                            <input type="text" name="bulan_penggajian" class="form-control" placeholder="">
 
                            @if($errors->has('bulan_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('bulan_penggajian')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tahun penggajian</label>
                            <input type="text" name="tahun_penggajian" class="form-control" placeholder="">
 
                            @if($errors->has('tahun_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun_penggajian')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Hadir</label>
                            <input type="text" name="jumlah_hadir" class="form-control" placeholder="">
 
                            @if($errors->has('jumlah_hadir'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_hadir')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Izin</label>
                            <input type="text" name="jumlah_izin" class="form-control" placeholder="">
 
                            @if($errors->has('jumlah_izin'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_izin')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Sakit</label>
                            <input type="text" name="jumlah_sakit" class="form-control" placeholder="">
 
                            @if($errors->has('jumlah_sakit'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_sakit')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Alfa</label>
                            <input type="text" name="jumlah_alfa" class="form-control" placeholder="">
 
                            @if($errors->has('jumlah_alfa'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_alfa')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Total</label>
                            <input type="text" name="total" class="form-control" placeholder="">
 
                            @if($errors->has('total'))
                                <div class="text-danger">
                                    {{ $errors->first('total')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Total Gaji</label>
                            <input type="text" name="total_gaji" class="form-control" placeholder="">
 
                            @if($errors->has('total_gaji'))
                                <div class="text-danger">
                                    {{ $errors->first('total_gaji')}}
                                </div>
                            @endif
                        </div>
 
 
                        <!-- <div class="form-group">
                            <label>Bulan Penggajian</label>
                            <textarea name="bulan_penggajian" class="form-control" placeholder=""></textarea>
 
                             @if($errors->has('nm_jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_jabatan')}}
                                </div>
                            @endif
                        </div> -->
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>