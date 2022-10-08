<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->Increments('nip'); 
            $table->integer('id_jabatan');
            $table->string('nik',50);
            $table->string('nama',100);
            $table->string('tmpt_lahir',25);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('jenkel');
            $table->string('no_tlpn',20);
            $table->string('email',100)->unique();
            $table->date('tgl_masuk');
            $table->date('tgl_resign')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan');
    }
}
