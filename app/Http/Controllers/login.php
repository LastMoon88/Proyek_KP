<?php

namespace App\Http\Controllers;

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

        $users = DB::select('select * from customer');
        foreach($users as $user) {
          if ($user->No_hp_customer == $nohp) {
            if ($user->Password_customer == $password) {
              return redirect('/home');
            }
            else {
              // Jika password salah, berikan pesan error
              $request->session()->flash('error_pass', 'Password Salah');
              return Redirect::back();
              //return 'Wrong password';
            }
          }
          else{
              $request->session()->flash('error_not_found', 'No telp tidak terdaftar');
              return Redirect::back();
              //return 'user not found';
          }
        }
    }
}
