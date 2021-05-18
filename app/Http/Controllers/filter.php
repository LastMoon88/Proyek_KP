<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Models\Order_vulkanisir;
use App\Models\Produk_vulkanisir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class filter extends Controller
{
    public function filter1200()
    {
        $produk = DB::select("select * from produk_vulkanisir where Ukuran_produk_vulkanisir = '1200-20'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filter1100()
    {
        $produk = DB::select("select * from produk_vulkanisir where Ukuran_produk_vulkanisir = '1100-20'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filter1000()
    {
        $produk = DB::select("select * from produk_vulkanisir where Ukuran_produk_vulkanisir = '1000-20'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filter900()
    {
        $produk = DB::select("select * from produk_vulkanisir where Ukuran_produk_vulkanisir = '900-20'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filter75016()
    {
        $produk = DB::select("select * from produk_vulkanisir where Ukuran_produk_vulkanisir = '750-16'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filter75015()
    {
        $produk = DB::select("select * from produk_vulkanisir where Ukuran_produk_vulkanisir = '750-15'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filter700()
    {
        $produk = DB::select("select * from produk_vulkanisir where Ukuran_produk_vulkanisir = '700-16'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterAB()
    {
        $produk = DB::select("select * from produk_vulkanisir where Tread_produk_vulkanisir = 'AB'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterAL()
    {
        $produk = DB::select("select * from produk_vulkanisir where Tread_produk_vulkanisir = 'AL'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterCB()
    {
        $produk = DB::select("select * from produk_vulkanisir where Tread_produk_vulkanisir = 'CB'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterCE()
    {
        $produk = DB::select("select * from produk_vulkanisir where Tread_produk_vulkanisir = 'CE'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterCZ()
    {
        $produk = DB::select("select * from produk_vulkanisir where Tread_produk_vulkanisir = 'CZ'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterTK()
    {
        $produk = DB::select("select * from produk_vulkanisir where Tread_produk_vulkanisir = 'TK'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterVL()
    {
        $produk = DB::select("select * from produk_vulkanisir where Tread_produk_vulkanisir = 'VL'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterELG()
    {
        $produk = DB::select("select * from produk_vulkanisir where Tread_produk_vulkanisir = 'ELG'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterABR()
    {
        $produk = DB::select("select * from produk_vulkanisir where Tread_produk_vulkanisir = 'ABR'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterCBR()
    {
        $produk = DB::select("select * from produk_vulkanisir where Tread_produk_vulkanisir = 'CBR'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterJZR()
    {
        $produk = DB::select("select * from produk_vulkanisir where Tread_produk_vulkanisir = 'JZR'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterCROWN19()
    {
        $produk = DB::select("select * from produk_vulkanisir where Merk_produk_vulkanisir = 'Crown-19'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterCROWNRETREAD()
    {
        $produk = DB::select("select * from produk_vulkanisir where Merk_produk_vulkanisir = 'Crown Retread'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterHEBAT()
    {
        $produk = DB::select("select * from produk_vulkanisir where Merk_produk_vulkanisir = 'Hebat'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterTREADONE()
    {
        $produk = DB::select("select * from produk_vulkanisir where Merk_produk_vulkanisir = 'Tread One'");
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function filterNamaProduct(Request $request)
    {
        $like = $request->filterNamaProduct;
        $produk =Produk_vulkanisir::where('Nama_produk_vulkanisir', 'like', '%'.$like.'%')->get();
        $userLogin = Session::get("user_login");
        $user = customers::find($userLogin);
        return view("layout.produkVulkanisir",[
            "produk"=>$produk,
            "userLogin"=>$userLogin,
            "user"=>$user
        ]);
    }
    public function LaporanPemesananFilter(Request $request)
    {
        $userLogin = Session::get("user_login");
        // $TotalHarga = 0;
        $today = $request->filterNamaProduct;
        $history = Order_vulkanisir::where("Id_customer", $userLogin[0]->Id_customer)->where('tanggal_order', 'like', $today.'%')->get();
        $CountOrder = Order_vulkanisir::where("Id_customer", $userLogin[0]->Id_customer)->where('tanggal_order', 'like', $today.'%')->count();
        $TotalHarga =Order_vulkanisir::where("Id_customer", $userLogin[0]->Id_customer)->where('tanggal_order', 'like', $today.'%')->sum('Total_order_vulkanisir');

        return view("layout.LaporanPemesan",[
            "userLogin"=>$userLogin,
            "history"=>$history,
            "TotalHarga"=>$TotalHarga,
            "CountOrder"=>$CountOrder,
        ]);
    }

}
