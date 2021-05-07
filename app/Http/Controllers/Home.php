<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    public function Produk()
    {
        $produk = DB::select('select * from produk');
        return view("layout.produk",[
            "produk"=>$produk
        ]);
    }
    public function ProdukVulkan()
    {
        $produk = DB::select('select * from produk_vulkanisir');
        return view("layout.produkVulkanisir",[
            "produk"=>$produk
        ]);
    }
    // public function HistoryPemesanan()
    // {
    //     $produk = DB::select('select * from order_vulkanisir');
    //     $detailOrder = DB::select("select * from detail_order_vulkanisir");
    //     foreach ($i as $key => $value) {
    //         # code...
    //     }

    //     return view("layout.produkVulkanisir",[
    //         "produk"=>$produk
    //     ]);
    // }
    public function home()
    {
        return view("layout.home");
    }
}
