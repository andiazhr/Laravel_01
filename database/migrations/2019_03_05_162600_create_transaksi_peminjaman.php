<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_peminjaman', function (Blueprint $table) {
            $table->Increments('id_transaksi_peminjaman');
            $table->integer('id_film', 11);
            $table->string('nama_peminjam', 60);
            $table->string('no_ktp', 100);
            $table->string('foto_ktp', 100);
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->string('harga_sewa', 100);
            $table->enum('status', ['Tersedia', 'Disewa'])->default('Tersedia');
            $table->date('tanggal_input_data_peminjaman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_peminjaman');
    }
}
