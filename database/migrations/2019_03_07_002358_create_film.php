<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->Increments('id_film');
            $table->integer('id_kategori_film');
            $table->string('judul_film', 60);
            $table->string('sutradara', 40);
            $table->string('tahun_rilis', 10);
            $table->text('sinopsis');
            $table->date('tanggal_input_data_film');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
}
