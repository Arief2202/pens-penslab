<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangan', function (Blueprint $table) {
            $table->id();
            $table->String('nama_ruangan');
            $table->String('gedung');
            $table->String('lantai');
            $table->String('kepala_lab');
            $table->text('fasilitas');
            // $table->String('gambar_ruangan1')->nullable();
            // $table->String('gambar_ruangan2')->nullable();
            // $table->String('gambar_ruangan3')->nullable();
            $table->String('denah')->nullable();
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
        Schema::dropIfExists('ruangans');
    }
}
