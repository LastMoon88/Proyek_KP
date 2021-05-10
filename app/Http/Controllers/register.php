<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class register extends Controller
{
    public function cekregister(Request $request) {
        $nama_customer = $request->nama_customer;
        $no_hp_customer = $request->no_hp_customer;
        $password_customer = $request->password_customer;
        $confirm_password_customer = $request->confirm_password_customer;
        $alamat_customer = $request->alamat_customer;

        $users = DB::select('select * from customer');
        //cek no telp INT
        if(!is_numeric($no_hp_customer)){
            $request->session()->flash('error', 'No telp tidak boleh huruf');
            return Redirect::back();
        }

        //cek no telp sudah terdaftar
        foreach($users as $user) {
            if ($user->No_hp_customer == $no_hp_customer) {
                $request->session()->flash('error', 'No telp sudah digunakan, silahkan mencoba dengan no telp yang lain');
                return Redirect::back();
            }
        }

        //cek conpass password
        if($password_customer != $confirm_password_customer){
            $request->session()->flash('error', 'Connfirm password harus sama dengan password');
            return Redirect::back();
        }

        //cek sudah terisi semua
        if($nama_customer == ""){
            $request->session()->flash('error', 'Nama tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($alamat_customer == "") {
            $request->session()->flash('error', 'Alamat tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($password_customer == "") {
            $request->session()->flash('error', 'Password tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($confirm_password_customer == "") {
            $request->session()->flash('error', 'Confirm password tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($no_hp_customer == "") {
            $request->session()->flash('error', 'No hp tidak boleh kosong');
            return Redirect::back();
        }
        else{
            //inserting
            Customers::create([
                'Nama_customer'=>$nama_customer,
                'No_hp_customer'=>$no_hp_customer,
                'Password_customer'=>$password_customer,
                'Alamat_customer'=>$alamat_customer
            ]);
            return Redirect('login');
        }
    }
}
