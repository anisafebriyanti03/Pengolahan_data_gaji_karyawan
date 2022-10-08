<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    public $timestamps = false;
    protected $table = 'absen';
    protected $fillable = ['id_absen','nip','tanggal','jam_masuk','jam_keluar','tipe','keterangan'];
}
