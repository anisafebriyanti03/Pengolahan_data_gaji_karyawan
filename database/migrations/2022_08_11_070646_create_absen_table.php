<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen', function (Blueprint $table) {
            $table->integer('id_absen')->primary();
            $table->string('nip',35);
            $table->date('tgl',50);
            $table->time('jam_masuk');
            $table->time('jam_keluar');
            $table->enum('tipe', ['hadir','izin','alfa','sakit']);
            $table->string('keterangan',50);
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
        Schema::dropIfExists('absen');
    }
}
