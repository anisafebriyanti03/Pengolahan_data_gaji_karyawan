<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggajian_detail extends Model
{
    public $timestamps = false;
    protected $table = 'penggajian_detail';
    protected $fillable = ['id_penggajian','id_jenis_gaji','nominal'];
    

    public function penggajian()
    {
        return $this->hasOne('App\Penggajian', 'id_penggajian', 'id_penggajian');
       
    }

    public function jenis_gaji()
    {
        return $this->hasOne('App\Jenis_gaji','id_jenis_gaji','id_jenis_gaji');  
    }

    // public function karyawan()
    // {
    //     return $this->hasOne('App\Karyawan','nip','nip');
       
    // }
}
