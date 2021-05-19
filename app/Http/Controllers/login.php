<?php

namespace App\Http\Controllers;

use App\Models\customers;

use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class login extends Controller
{
    public function ceklogin(Request $request) {
        $nohp = $request->nohp;
        $password = $request->password;

        //masuk adminada
        if($nohp == "admin" && $password == "admin") {
            return redirect('/home-admin');
        }
        if($nohp == "pegawai" && $password == "pegawai") {
            return redirect('/jadwal_penjemputan');
        }
        $cekpass=true;
        $cekuser=true;
        $users = customers::all();
        foreach($users as $user) {
          if ($user->No_hp_customer == $nohp) {
            if ($user->Password_customer == $password) {
              $user_login = customers::where('No_hp_customer',$nohp)->get();
              Session::put("user_login",$user_login);
            //   return ($user_login);
              return redirect('/home');
            }
            else {
              $cekpass = false;
            }
          }
          else{
              $cekuser=false;
          }
        }
        if(!$cekuser){
            $request->session()->flash('error_not_found', 'No telp tidak terdaftar');
            return Redirect::back();
        }
        if(!$cekpass){
            $request->session()->flash('error_pass', 'Password Salah');
            return Redirect::back();
        }
    }
}
