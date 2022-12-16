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
        Schema::create('logbook', function (Blueprint $table) {
            $table->id();
            $table->string('Nama Perusahaan');
            $table->string('Jenis Karyawan');
            $table->string('Nik')->nullable();
            $table->string('Nama Karyawan');            
            $table->date('Tanggal Mulai Bekerja');
            $table->string('No KTP')->nullable();
            $table->string('No NPWP');
            $table->string('Tempat Lahir');
            $table->date('Tanggal Lahir');
            $table->enum('Jenis Kelamin',['L','P']);                             
            $table->string('Lokasi Penempatan');
            $table->string('Departemen');
            $table->string('Jabatan');
            $table->enum('Status Karyawan',['Aktif','Tidak Aktif']);
            $table->string('Upload Foto');
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
        Schema::dropIfExists('logbook');
    }
};
