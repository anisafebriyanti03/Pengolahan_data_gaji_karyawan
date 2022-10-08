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
                   Edit Penggajian Detail
                </div>
                <div class="card-body">
                    <a href="/penggajian_detail" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/penggajian_detail/update/{{ $penggajian_detail->id_detail }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>ID Detail</label>
                            <input type="text" name="id_detail" class="form-control" placeholder="ID Detail" value=" {{ $penggajian_detail->id_detail }}">
 
                            @if($errors->has('id_detail'))
                                <div class="text-danger">
                                    {{ $errors->first('id_detail')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="nip" class="form-control" placeholder="" value=" {{ $penggajian_detail->nip }}">
 
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Bulan Penggajian</label>
                            <input type="text" name="bulan_penggajian" class="form-control" placeholder="" value=" {{ $penggajian_detail->bulan_penggajian }}">
 
                            @if($errors->has('bulan_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('bulan_penggajian')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tahun Penggajian</label>
                            <input type="text" name="tahun_penggajian" class="form-control" placeholder="" value=" {{ $penggajian_detail->tahun_penggajian }}">
 
                            @if($errors->has('tahun_penggajian'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun_penggajian')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Hadir</label>
                            <input type="text" name="jumlah_hadir" class="form-control" placeholder="" value=" {{ $penggajian_detail->jumlah_hadir }}">
 
                            @if($errors->has('jumlah_hadir'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_hadir')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Izin</label>
                            <input type="text" name="jumlah_izin" class="form-control" placeholder="" value=" {{ $penggajian_detail->jumlah_izin }}">
 
                            @if($errors->has('jumlah_izin'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_izin')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jumlah Sakit</label>
                            <input type="text" name="jumlah_sakit" class="form-control" placeholder="" value=" {{ $penggajian_detail->jumlah_sakit }}">

                            @if($errors->has('jumlah_sakit'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_sakit')}}
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label>Jumlah Alfa</label>
                            <input type="text" name="jumlah_alfa" class="form-control" placeholder="" value=" {{ $penggajian_detail->jumlah_alfa }}">
 
                            @if($errors->has('jumlah_alfa'))
                                <div class="text-danger">
                                    {{ $errors->first('jumlah_alfa')}}
                                </div>
                            @endif
                        </div>
 

                        <div class="form-group">
                            <label>Total</label>
                            <input type="text" name="total" class="form-control" placeholder="" value=" {{ $penggajian_detail->total }}">
 
                            @if($errors->has('total'))
                                <div class="text-danger">
                                    {{ $errors->first('total')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Total Gaji</label>
                            <input type="text" name="total_gaji" class="form-control" placeholder="" value=" {{ $penggajian_detail->total_gaji }}">
 
                            @if($errors->has('total_gaji'))
                                <div class="text-danger">
                                    {{ $errors->first('total_gaji')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>