<?php

namespace App\Http\Controllers;

use App\Models\customers;
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
        $user = Customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }

    public function home()
    {
        $userLogin = Session::get("user_login");
        return view("layout.home",[
            "userLogin"=>$userLogin
        ]);
    }

    public function HistoryPemesanan()
    {

        $userLogin = Session::get("user_login");
        $history = Order_vulkanisir::where("Id_customer", $userLogin[0]->Id_customer)->get();
        return view("layout.History_Pemesanan",[
            "userLogin"=>$userLogin,
            "history"=>$history,
        ]);
        // dd($Produks);
    }

    // public function LaporanPemesanan(Type $var = null)
    // {
    //     # code...
    // }

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

        if(!is_numeric($noTelp)){
            Session::flash('error', 'No telp tidak boleh huruf');
            return redirect()->back();
        }

        if($nama== ""){
            Session::flash('error', 'Nama tidak boleh kosong');
            return redirect()->back();
        }elseif ($alamat == "") {
            Session::flash('error', 'Alamat tidak boleh kosong');
            return redirect()->back();
        }elseif ($noTelp == "") {
            Session::flash('error', 'No hp tidak boleh kosong');
            return redirect()->back();
        }elseif ($tglPengantaran == "") {
            Session::flash('error', 'Tanggal Pengantaran tidak boleh kosong');
            return redirect()->back();
        }elseif ($tglPenjemputan == "") {
            Session::flash('error', 'Tanggal Penjemputan tidak boleh kosong');
            return redirect()->back();
        }else{
            Order_vulkanisir::create([
                'Nama_order_vulkanisir'=>$nama,
                'No_hp_order_vulkanisir'=>$noTelp,
                'Alamat_order_vulkanisir'=>$alamat,
                'Nama_produk'=>$ProdukVulkanisir[0]->Nama_produk_vulkanisir,
                'Total_order_vulkanisir'=>$ProdukVulkanisir[0]->Harga_produk_vulkanisir,
                "Status_order_vulkanisir"=> "pending",
                "Id_customer"=>$userLogin[0]->Id_customer,
                "id_produk_vulkanisir"=>$id_produk,
                "kode_ban"=>0,
                "Tanggal_pengambilan_ban"=>$tglPenjemputan,
                "Tanggal_pengantaran_ban"=>$tglPengantaran,
                "tanggal_order"=>date("Y-m-d")
            ]);

            return redirect('/home');
        }

    }
}
