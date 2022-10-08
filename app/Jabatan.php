<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    public $timestamps = false;
    protected $table = "jabatan";
    protected $primaryKey = "id_jabatan";
    protected $fillable = ['id_jabatan','nm_jabatan'];

    public function karyawan() 
    {
        return $this->hasMany('App\Karyawan');
    }
}
