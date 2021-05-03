<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function HomeToBuy()
    {
        $vulkan = DB::select('select * from produk_vulkanisir');
        $produk = DB::select('select * from produk');
        return view("layout.dashboard",[
            "vulkan"=>$vulkan,
            "produk"=>$produk
        ]);
    }
}
