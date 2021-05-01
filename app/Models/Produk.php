<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'Id_produk';
    protected $keyType = 'bigint';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable =
    [
     'Nama_produk',
     'Ukuran_produk',
     'Merk_produk',
     'Jenis_produk',
     'Harga_produk'
    ];
}
