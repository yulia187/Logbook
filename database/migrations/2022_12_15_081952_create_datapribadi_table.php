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
        Schema::create('datapribadi', function (Blueprint $table) {
            $table->id();
            $table->string('Nik')->nullable();
            $table->string('Nama_Karyawan');            
            $table->string('Nama_Panggilan');
            $table->text('Alamat_KTP');
            $table->text('Alamat_Tinggal');
            $table->string('NoTelp_Rumah');
            $table->string('No_HP1');                          
            $table->string('NO_HP2');
            $table->string('Email');
            $table->string('Agama');
            $table->string('Status_Karyawan');
            $table->string('NoKartuKeluarga');
            $table->string('Nama_Pasangan');
            $table->string('Jumlah_Anak');
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
        Schema::dropIfExists('datapribadi');
    }
};
