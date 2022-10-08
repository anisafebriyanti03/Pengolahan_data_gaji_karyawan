<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan_detail extends Model
{
    public $timestamps = false;
    protected $table = "jabatan_detail";
    protected $primaryKey = "id";
    protected $fillable = ['id_jabatan','id_jenis_gaji','nominal'];

    public function jabatan()
    {
        return $this->hasOne('App\Jabatan', 'id_jabatan', 'id_jabatan');
       
    }

    public function jenis_gaji()
    {
        return $this->hasOne('App\Jenis_gaji','id_jenis_gaji','id_jenis_gaji');
       
    }
}
