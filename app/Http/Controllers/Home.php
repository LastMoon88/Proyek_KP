<?php

namespace App\Http\Controllers;

use App\Models\Order_vulkanisir;
use App\Models\Produk_vulkanisir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Home extends Controller
{
    public function Produk()
    {
        $produk = DB::select('select * from produk');
        $userLogin = Session::get("user_login");
        return view("layout.produk",[
            "produk"=>$produk,
            "userLogin"=>$userLogin
        ]);
    }
    public function ProdukVulkan()
    {
        $produk = DB::select('select * from produk_vulkanisir');
        $userLogin = Session::get("user_login");
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin
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
        $userLogin = Session::get("user_login");
        return view("layout.home",[
            "userLogin"=>$userLogin
        ]);
    }

    public function DetailOrder($id)
    {
        $ProdukVulkanisir = Produk_vulkanisir::where('Id_produk_vulkanisir', $id)->get();
        $userLogin = Session::get("user_login");
        return view("layout.detailOrder",[
            "ProdukVulkanisir"=>$ProdukVulkanisir,
            "userLogin"=>$userLogin
        ]);
    }

    public function TerOrder(Request $data)
    {
        $nama = $data->nama;
        $alamat = $data->alamat;
        $noTelp = $data->noTelp;
        $tglPenjemputan = $data->tglPenjemputan;
        $tglPengantaran = $data->tglPengantaran;
        $id_produk = $data->Id_produk_vulkanisir;
        $ProdukVulkanisir = Produk_vulkanisir::where('Id_produk_vulkanisir', $id_produk)->get();
        $userLogin = Session::get("user_login");

        Order_vulkanisir::create([
            'Nama_order_vulkanisir'=>$nama,
            'No_hp_order_vulkanisir'=>$noTelp,
            'Alamat_order_vulkanisir'=>$alamat,
            'Total_order_vulkanisir'=>$ProdukVulkanisir[0]->Harga_produk_vulkanisir,
            "Status_order_vulkanisir"=> "pending",
            "Id_customer"=>$userLogin[0]->Id_customer,
            "Id_produk_vulkanisir"=>$id_produk,
            "Tanggal_pengambilan_ban"=>$tglPenjemputan,
            "Tanggal_pengantaran_ban"=>$tglPengantaran,
        ]);

        return redirect('/home');
    }
}
