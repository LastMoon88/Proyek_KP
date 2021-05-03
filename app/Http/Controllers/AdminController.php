<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AddCustomer()
    {


        $DaftarCustomer = Customers::All();
        return view("pages.admin-pages.customer-admin",[
            "DaftarCustomer"=>$DaftarCustomer
        ]);
    }
    public function PindahCustomer()
    {
        $DaftarCustomer = Customers::All();
        return view("pages.admin-pages.customer-admin",[
            "DaftarCustomer"=>$DaftarCustomer
        ]);
    }
}
