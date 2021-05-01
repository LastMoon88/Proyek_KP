<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_order_vulkanisir extends Model
{
    protected $table = 'detail_order_vulkanisir';
    protected $primaryKey = 'Id_detail_order_vulkanisir';
    protected $keyType = 'bigint';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable =
    [
     'Id_order_vulkanisir',
     'Id_produk_vulkanisir',
     'Kode_ban',
     'Sub_total'
    ];
}