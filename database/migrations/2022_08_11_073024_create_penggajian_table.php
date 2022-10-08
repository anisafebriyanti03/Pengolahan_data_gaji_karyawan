<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggajianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggajian', function (Blueprint $table) {
            $table->increments('id_penggajian');
            $table->integer('nip');
            $table->integer('bulan_penggajian');
            $table->string('tahun_penggajian');
            $table->integer('jumlah_hadir');
            $table->integer('jumlah_izin');
            $table->integer('jumlah_sakit');
            $table->integer('jumlah_alfa');
            $table->double('bonus')->nullable();
            $table->string('keterangan_bonus',100)->nullable();
            $table->double('pengurangan')->nullable();
            $table->string('keterangan_pengurangan',100)->nullable();
            $table->double('total');
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
        Schema::dropIfExists('penggajian');
    }
}
