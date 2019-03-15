<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'id_film';
    protected $fillable = [
        'id_kategori_film',
        'judul_film',
        'sutradara',
        'tahun_rilis',
        'sinopsis',
        'tanggal_input_data_film'
      ];
    public $timestamps = false;
}
