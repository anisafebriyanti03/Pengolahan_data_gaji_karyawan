<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    public $timestamps = false;
    protected $table = 'penggajian';
    protected $fillable = ['id_penggajian','nip','bulan_penggajian','tahun_penggajian','jumlah_hadir','jumlah_izin','jumlah_sakit','jumlah_alfa','bonus','keterangan_bonus','pengurangan','keterangan_pengurangan','total'];

    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan','nip');
    }

    
    // public function karyawan()
    // {
    // return $this->hasOne('App\Karyawan', 'nip', 'nip')
    //  ->withDefault(['name' => '']);
    // }
    
    // public function jenis_gaji()
    // {
    // 	return $this->belongsToMany('App\Jenis_gaji','Penggajian_detail','id_penggajian','id_jenis_gaji');
    // }
}
