<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Models\Produk;
use App\Models\Produk_vulkanisir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    public function UpdateStatusOrder(Request $request)
    {
        $nama = $request->nama;
        $nohp = $request->nohp;
        $alamat = $request->alamat;
        $jenis = $request->jenis;

        //cek sudah terisi semua
        if($nama == ""){
            $request->session()->flash('error', 'Nama tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($nohp == "") {
            $request->session()->flash('error', 'No Hp tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($alamat == "") {
            $request->session()->flash('error', 'Alamat tidak boleh kosong');
            return Redirect::back();
        }

        //cek no telp
        if(!is_numeric($nohp)){
            $request->session()->flash('error', 'No telp tidak boleh huruf');
            return Redirect::back();
        }
        elseif (strlen($nohp)!=12) {
            $request->session()->flash('error', 'No telp minimal 12 angka');
            return Redirect::back();
        }

        $users = DB::select('select * from customer');
        //cek no telp sudah terdaftar
        foreach($users as $user) {
            if ($user->No_hp_customer == $nohp) {
                $request->session()->flash('error', 'No telp sudah digunakan, silahkan mencoba dengan no telp yang lain');
                return Redirect::back();
            }
        }

        if(Session::has('error')){
            return Redirect::back();
        }
        else{
            $customerupdate = customers::find($request->id);
            $customerupdate->Nama_customer = $request->nama;
            $customerupdate->No_hp_customer = $request->nohp;
            $customerupdate->Alamat_customer = $request->alamat;
            $customerupdate->Jenis_customer = $request->jenis;
            $customerupdate->save();
        }

        $DaftarCustomer = customers::All();
        return view("pages.admin-pages.customer-admin",[
            "DaftarCustomer"=>$DaftarCustomer
        ]);
    }
    public function PindahOrder()
    {
        $DaftarCustomer = customers::All();
        return view("pages.admin-pages.customer-admin",[
            "DaftarCustomer"=>$DaftarCustomer
        ]);
    }
    public function PindahUpdateOrder($id)
    {
        $customerupdate = customers::find($id);
        return view("pages.admin-pages.customer_update",[
            "customerupdate"=>$customerupdate
        ]);
    }

}
