<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    public $timestamps = false;
    protected $table = "karyawan";
    protected $fillable = ['nip','id_jabatan','nik','nama','tmpt_lahir','tgl_lahir','alamat','jenkel','no_tlpn','email','tgl_masuk'];
    protected $primaryKey = "nip";

    public function jabatan()
    {
        return $this->belongsTo('App\Jabatan','id_jabatan','id_jabatan');
    }

    public function penggajian()
    {
        return $this->hasMany('App\Penggajian','id_penggajian');
       
    }

    // public function jabatan()
    // {
    //     return $this->belongsTo('App\Jabatan','id_jabatan','nip');
    // }

    // public function penggajian_detail()
    // {
    // 	return $this->hasOne('App\Penggajian_detail');
    // }
}
