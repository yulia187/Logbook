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
        Schema::create('databpjs', function (Blueprint $table) {
            $table->id();
            $table->string('NInduk')->nullable();
            $table->string('NmPegawai');
            $table->string('NoBPJSKesehatan');
            $table->date('TglDaftar');
            $table->string('NoBPJSTK');
            $table->string('TglBPJSTK');
            $table->string('JnsPrgrm');
            $table->string('BlnAktivasi');
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
        Schema::dropIfExists('databpjs');
    }
};
