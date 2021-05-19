<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Models\Order_vulkanisir;
use App\Models\Produk;
use App\Models\Produk_vulkanisir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    //////////jadwal penjemputan/////////////
    public function UpdateStatusPickup(Request $request)
    {
        $nama = $request->nama;
        $nohp = $request->nohp;
        $alamat = $request->alamat;
        $kodeban = $request->kodeban;

        //cek sudah terisi semua
        if($kodeban == ""){
            $request->session()->flash('error', 'kodeban tidak boleh kosong');
            return Redirect::back();
        }

        if(Session::has('error')){
            return Redirect::back();
        }
        else{
            $orderupdate = Order_vulkanisir::find($request->id);
            $orderupdate->Status_order_vulkanisir = "pick-up";
            $orderupdate->kode_ban = $request->kodeban;
            $orderupdate->save();
        }

        return redirect("/jadwal_penjemputan");
    }
    public function PindahJadwalPenjemputan()
    {
        $DaftarOrder = DB::select("select * from order_vulkanisir where Tanggal_pengambilan_ban = CURDATE() and Status_order_vulkanisir = 'pending'");
        if(count($DaftarOrder) == 0){
            $alert = "Tidak ada jadwal penjemputan hari ini, silahkan cek beberapa jam kemudian!";
            return view("pages.pegawai-pages.jadwal_penjemputan",[
                "alert"=>$alert
            ]);
        }
        else{
            return view("pages.pegawai-pages.jadwal_penjemputan",[
                "DaftarOrder"=>$DaftarOrder
            ]);
        }

    }
    public function PindahUpdateStatusPickup($id)
    {
        $orderupdate = Order_vulkanisir::find($id);
        return view("pages.pegawai-pages.keterangan_penjemputan",[
            "orderupdate"=>$orderupdate
        ]);
    }

    ////////////jadwal pengantaran//////////////
    public function UpdateStatusFinished(Request $request)
    {
        $nama = $request->nama;
        $nohp = $request->nohp;
        $alamat = $request->alamat;
        $kodeban = $request->kodeban;

        //cek sudah terisi semua
        if($kodeban == ""){
            $request->session()->flash('error', 'kodeban tidak boleh kosong');
            return Redirect::back();
        }

        if(Session::has('error')){
            return Redirect::back();
        }
        else{
            $orderupdate = Order_vulkanisir::find($request->id);
            $orderupdate->Status_order_vulkanisir = "pick-up";
            $orderupdate->kode_ban = $request->kodeban;
            $orderupdate->save();
        }

        return redirect("/jadwal_penjemputan");
    }
    public function PindahJadwalPengantaran()
    {
        $DaftarOrder = DB::select("select * from order_vulkanisir where Tanggal_pengambilan_ban = CURDATE() and Status_order_vulkanisir = 'pending'");
        if(count($DaftarOrder) == 0){
            $alert = "Tidak ada jadwal penjemputan hari ini, silahkan cek beberapa jam kemudian!";
            return view("pages.pegawai-pages.jadwal_penjemputan",[
                "alert"=>$alert
            ]);
        }
        else{
            return view("pages.pegawai-pages.jadwal_penjemputan",[
                "DaftarOrder"=>$DaftarOrder
            ]);
        }

    }
    public function PindahUpdateStatusFinished($id)
    {
        $orderupdate = Order_vulkanisir::find($id);
        return view("pages.pegawai-pages.keterangan_penjemputan",[
            "orderupdate"=>$orderupdate
        ]);
    }
}
