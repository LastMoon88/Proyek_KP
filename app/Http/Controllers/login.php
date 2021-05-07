<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class login extends Controller
{
    public function ceklogin(Request $request) {
        $nohp = $request->nohp;
        $password = $request->password;

        //masuk admin
        if($nohp == "admin" && $password == "admin") {
            return redirect('/home-admin');
        }
        $cekpass=true;
        $cekuser=true;
        $users = Customers::all();
        foreach($users as $user) {
          if ($user->No_hp_customer == $nohp) {
            if ($user->Password_customer == $password) {
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
