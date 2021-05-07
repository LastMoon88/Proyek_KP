<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'Id_customer';
    protected $keyType = 'bigint';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable =
    [
     'Nama_customer',
     'No_hp_customer',
     'Password_customer',
     'Alamat_customer',
     'Jenis_customer'
    ];


    // customer has



}
