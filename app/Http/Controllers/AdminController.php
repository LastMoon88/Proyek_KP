<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Models\Produk;
use App\Models\Produk_vulkanisir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /////////////////////////////////////////////////////////////////
    //               customer             //////////////////////////////
    //////////////////////////////////////////////////////////////////
    public function AddCustomer(Request $request)
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
            customers::create([
                'Nama_customer'=>$nama,
                'No_hp_customer'=>$nohp,
                'Password_customer'=>"password123",
                'Alamat_customer'=>$alamat,
                'Jenis_customer'=>$jenis
            ]);
        }

        $DaftarCustomer = customers::All();
        return view("pages.admin-pages.customer-admin",[
            "DaftarCustomer"=>$DaftarCustomer
        ]);
    }
    public function UpdateCustomer(Request $request)
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
    public function PindahCustomer()
    {
        $DaftarCustomer = customers::All();
        return view("pages.admin-pages.customer-admin",[
            "DaftarCustomer"=>$DaftarCustomer
        ]);
    }
    public function PindahUpdateCustomer($id)
    {
        $customerupdate = customers::find($id);
        return view("pages.admin-pages.customer_update",[
            "customerupdate"=>$customerupdate
        ]);
    }

    /////////////////////////////////////////////////////////////////
    //               produk             //////////////////////////////
    //////////////////////////////////////////////////////////////////
    public function AddProduk(Request $request)
    {
        $nama = $request->nama;
        $ukuran = $request->ukuran;
        $merk = $request->merk;
        $jenis = $request->jenis;
        $harga = $request->harga;

        //cek sudah terisi semua
        if($nama == ""){
            $request->session()->flash('error', 'Nama tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($ukuran == "") {
            $request->session()->flash('error', 'Ukuran tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($merk == "") {
            $request->session()->flash('error', 'Merk tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($harga == "") {
            $request->session()->flash('error', 'Harga tidak boleh kosong');
            return Redirect::back();
        }

        //cek harga
        if(!is_numeric($harga)){
            $request->session()->flash('error', 'Harga tidak boleh huruf');
            return Redirect::back();
        }

        if(Session::has('error')){
            return Redirect::back();
        }
        else{
            Produk::create([
                'Nama_produk'=>$nama,
                'Ukuran_produk'=>$ukuran,
                'Merk_produk'=>$merk,
                'Jenis_produk'=>$jenis,
                'Harga_produk'=>$harga
            ]);
        }

        $DaftarProduk = Produk::All();
        return view("pages.admin-pages.produk_admin",[
            "DaftarProduk"=>$DaftarProduk
        ]);
    }
    public function UpdateProduk(Request $request)
    {
        $nama = $request->nama;
        $ukuran = $request->ukuran;
        $merk = $request->merk;
        $jenis = $request->jenis;
        $harga = $request->harga;

        //cek sudah terisi semua
        if($nama == ""){
            $request->session()->flash('error', 'Nama tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($ukuran == "") {
            $request->session()->flash('error', 'Ukuran tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($merk == "") {
            $request->session()->flash('error', 'Merk tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($harga == "") {
            $request->session()->flash('error', 'Harga tidak boleh kosong');
            return Redirect::back();
        }

        //cek harga
        if(!is_numeric($harga)){
            $request->session()->flash('error', 'Harga tidak boleh huruf');
            return Redirect::back();
        }

        if(Session::has('error')){
            return Redirect::back();
        }
        else{
            $produkupdate = Produk::find($request->id);
            $produkupdate->Nama_produk = $request->nama;
            $produkupdate->Ukuran_produk = $request->ukuran;
            $produkupdate->Merk_produk = $request->merk;
            $produkupdate->Jenis_produk = $request->jenis;
            $produkupdate->Harga_produk = $request->harga;
            $produkupdate->save();
        }

        $DaftarProduk = Produk::All();
        return view("pages.admin-pages.produk_admin",[
            "DaftarProduk"=>$DaftarProduk
        ]);
    }
    public function PindahProduk()
    {
        $DaftarProduk = Produk::All();
        return view("pages.admin-pages.produk_admin",[
            "DaftarProduk"=>$DaftarProduk
        ]);
    }
    public function PindahUpdateProduk($id)
    {
        $produkupdate = Produk::find($id);
        return view("pages.admin-pages.produk_update",[
            "produkupdate"=>$produkupdate
        ]);
    }

    /////////////////////////////////////////////////////////////////
    //               produk vulkanisir             //////////////////////////////
    //////////////////////////////////////////////////////////////////
    public function AddProdukVulkanisir(Request $request)
    {
        $nama = $request->nama;
        $tread = $request->tread;
        $ukuran = $request->ukuran;
        $merk = $request->merk;
        $harga = $request->harga;

        //cek sudah terisi semua
        if($nama == ""){
            $request->session()->flash('error', 'Nama tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($tread == "") {
            $request->session()->flash('error', 'Tread tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($ukuran == "") {
            $request->session()->flash('error', 'Ukuran tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($merk == "") {
            $request->session()->flash('error', 'Merk tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($harga == "") {
            $request->session()->flash('error', 'Harga tidak boleh kosong');
            return Redirect::back();
        }

        //cek harga
        if(!is_numeric($harga)){
            $request->session()->flash('error', 'Harga tidak boleh huruf');
            return Redirect::back();
        }

        if(Session::has('error')){
            return Redirect::back();
        }
        else{
            Produk_vulkanisir::create([
                'Nama_produk_vulkanisir'=>$nama,
                'Tread_produk_vulkanisir'=>$tread,
                'Ukuran_produk_vulkanisir'=>$ukuran,
                'Merk_produk_vulkanisir'=>$merk,
                'Harga_produk_vulkanisir'=>$harga
            ]);
        }

        $DaftarProdukVulkanisir = Produk_vulkanisir::All();
        return view("pages.admin-pages.produk_vulkanisir_admin",[
            "DaftarProdukVulkanisir"=>$DaftarProdukVulkanisir
        ]);
    }
    public function UpdateProdukVulkanisir(Request $request)
    {
        $nama = $request->nama;
        $tread = $request->tread;
        $ukuran = $request->ukuran;
        $merk = $request->merk;
        $harga = $request->harga;

        //cek sudah terisi semua
        if($nama == ""){
            $request->session()->flash('error', 'Nama tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($tread == "") {
            $request->session()->flash('error', 'Tread tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($ukuran == "") {
            $request->session()->flash('error', 'Ukuran tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($merk == "") {
            $request->session()->flash('error', 'Merk tidak boleh kosong');
            return Redirect::back();
        }
        elseif ($harga == "") {
            $request->session()->flash('error', 'Harga tidak boleh kosong');
            return Redirect::back();
        }

        //cek harga
        if(!is_numeric($harga)){
            $request->session()->flash('error', 'Harga tidak boleh huruf');
            return Redirect::back();
        }

        if(Session::has('error')){
            return Redirect::back();
        }
        else{
            $produkupdate = Produk_vulkanisir::find($request->id);
            $produkupdate->Nama_produk_vulkanisir = $request->nama;
            $produkupdate->Tread_produk_vulkanisir = $request->tread;
            $produkupdate->Ukuran_produk_vulkanisir = $request->ukuran;
            $produkupdate->Merk_produk_vulkanisir = $request->merk;
            $produkupdate->Harga_produk_vulkanisir = $request->harga;
            $produkupdate->save();
        }

        $DaftarProdukVulkanisir = Produk_vulkanisir::All();
        return view("pages.admin-pages.produk_vulkanisir_admin",[
            "DaftarProdukVulkanisir"=>$DaftarProdukVulkanisir
        ]);
    }
    public function PindahProdukVulkanisir()
    {
        $DaftarProdukVulkanisir = Produk_vulkanisir::All();
        return view("pages.admin-pages.produk_vulkanisir_admin",[
            "DaftarProdukVulkanisir"=>$DaftarProdukVulkanisir
        ]);
    }
    public function PindahUpdateProdukVulkanisir($id)
    {
        $produkVulkupdate = Produk_vulkanisir::find($id);
        return view("pages.admin-pages.produk_vulkanisir_update",[
            "produkVulkupdate"=>$produkVulkupdate
        ]);
    }
}
