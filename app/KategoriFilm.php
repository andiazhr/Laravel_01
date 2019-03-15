<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriFilm extends Model
{
    protected $table = 'kategori_film';
    protected $primaryKey = 'id_kategori_film';
    protected $fillable = [
        'nama_kategori',
        'slug',
        'tanggal_input_data_kategori'
      ];
    public $timestamps = false;
}
