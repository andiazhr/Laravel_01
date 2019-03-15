<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksiPeminjaman extends Model
{
    protected $table = 'transaksi_peminjaman';
    protected $primaryKey = 'id_transaksi_peminjaman';
    protected $fillable = [
        'id_film',
        'nama_peminjam',
        'no_ktp',
        'foto_ktp',
        'tanggal_pinjam',
        'tanggal_kembali',
        'harga_sewa',
        'status',
        'tanggal_input_data_peminjaman'
      ];
    public $timestamps = false;
}
