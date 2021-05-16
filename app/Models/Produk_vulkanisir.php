<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk_vulkanisir extends Model
{
    protected $table = 'produk_vulkanisir';
    protected $primaryKey = 'Id_produk_vulkanisir';
    protected $keyType = 'bigint';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable =
    [
     'Nama_produk_vulkanisir',
     'Tread_produk_vulkanisir',
     'Ukuran_produk_vulkanisir',
     'Merk_produk_vulkanisir',
     'Harga_produk_vulkanisir'
    ];


}
