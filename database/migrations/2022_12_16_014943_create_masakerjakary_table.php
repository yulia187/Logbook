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
        Schema::create('masakerjakary', function (Blueprint $table) {
            $table->id();
            $table->string('NIndk')->nullable();
            $table->string('NmKary');
            $table->string('NoKKerja');
            $table->date('TglMulaiKerja');
            $table->date('TglAkhirKerja');
            $table->string('StatusKontrak');
            $table->date('TglResign');
            $table->string('StatusKeaktifan');
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
        Schema::dropIfExists('masakerjakary');
    }
};
