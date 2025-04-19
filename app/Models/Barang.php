<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
  protected $table = 'barang';  //ini namanya properti, artinya mengambil data dari tabel barang

  protected $fillable = [
        'kode',
        'nama',
        'harga',
        'stok',
    ];
}