<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_gaji extends Model
{
    public $timestamps = false;
    protected $table = 'jenis_gaji';
    protected $fillable = ['nama'];

}
