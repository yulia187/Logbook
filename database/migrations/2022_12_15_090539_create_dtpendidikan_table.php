<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtpendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('NoInduk')->nullable();
            $table->string('NamaPegawai');
            $table->string('TingkatPend');
            $table->string('Jurusan');
            $table->string('NamaSekolah');
            $table->string('Status');
            $table->string('TahunLulus');
            $table->string('IPK');
            $table->string('Training');
            $table->string('Sertifikasi');
            $table->string('Keahlian');
            $table->string('Pengalaman');
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
        Schema::dropIfExists('dtpendidikan');
    }
};
