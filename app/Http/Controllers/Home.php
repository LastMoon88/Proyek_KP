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
    }

    public function LaporanPemesanan()
    {
        $userLogin = Session::get("user_login");
        $today = date("Y");
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

    public function DetailOrder($id)
    {
        $ProdukVulkanisir = Produk_vulkanisir::where('Id_produk_vulkanisir', $id)->get();
        $userLogin = Session::get("user_login");
        return view("layout.detailOrder",[
            "ProdukVulkanisir"=>$ProdukVulkanisir,
            "userLogin"=>$userLogin
        ]);
    }

    public function GantiPassword()
    {
        return view("layout.GantiPassword");
    }

    public function ChangePassword(Request $request)
    {
        $userLogin = Session::get("user_login");
        $passwordLama = $request->passwordLama;
        $passwordBaru = $request->passwordBaru;
        $confirmPassword = $request->confirmPassword;
        $Customers = customers::where('Id_customer',$userLogin[0]->Id_customer)->where('Password_customer', $passwordLama)->get();
        if(count($Customers) == 0){
            Session::flash('error', 'Password Lama Salah');
            return redirect()->back();
        }else if($passwordBaru != $confirmPassword){
            Session::flash('error', 'Password Baru Salah');
            return redirect()->back();
        }else{
            $customers = customers::find($userLogin[0]->Id_customer);
            $customers->Password_customer = $passwordBaru;
            $customers->save();
        }
        return redirect('/home');
    }
    public function LogOut()
    {
        Session::flush();
        return redirect("/login");
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
