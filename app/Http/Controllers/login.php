<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
              return 'Wrong password';
            }
          }
          else{
              return 'user not found';
          }
        }
    }
}
