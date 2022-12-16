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
            $table->string('Nama_Perusahaan');
            $table->string('Jenis_Karyawan');
            $table->string('Ninduk')->nullable();
            $table->string('NamKaryawan');            
            $table->date('TanggalMulaiBekerja');
            $table->string('No_KTP')->nullable();
            $table->string('No_NPWP');
            $table->string('Tempat_Lahir');
            $table->date('Tanggal_Lahir');
            $table->enum('Jenis_Kelamin',['L','P']);                             
            $table->string('Lokasi_Penempatan');
            $table->string('Departemen');
            $table->string('Jabatan');
            $table->string('Status_Karyawan');
            $table->string('Upload_Foto');
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
