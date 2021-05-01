<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_vulkanisir extends Model
{
    protected $table = 'order_vulkanisir';
    protected $primaryKey = 'Id_order_vulkanisir';
    protected $keyType = 'bigint';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable =
    [
     'Nama_order_vulkanisir',
     'No_hp_order_vulkanisir',
     'Alamat_order_vulkanisir',
     'Total_order_vulkanisir',
     'Status_order_vulkanisir',
     'Id_customer',
     'Tanggal_pengambilan_ban',
     'Tanggal_pengantaran_ban'
    ];
}
