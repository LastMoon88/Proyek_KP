<?php

namespace App\Http\Controllers;

use App\Models\customers;
use App\Models\Produk;
use App\Models\Produk_vulkanisir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ReportController extends Controller
{
    public function ReportPenjualan(Request $request)
    {
        $tahun = $request->tahun;
        Session::put("tahun",$tahun);

        return redirect("/to_report_penjualan");
    }
    public function to_report_penjualan(Request $request)
    {
        $tahun = Session::get('tahun');

        $DaftarOrder = DB::select("select Nama_order_vulkanisir as nama, No_hp_order_vulkanisir as nohp, count(Nama_order_vulkanisir) as banyak_pesanan , sum(Total_order_vulkanisir) as total_pesanan from order_vulkanisir where YEAR (tanggal_order) = "+$tahun+" and Status_order_vulkanisir = 'no-defects' group by 1,2");

        return view("report.hasil_laporan_pembelian",[
            "DaftarOrder"=>$DaftarOrder
        ]);
    }
    public function PindahReportPenjualan()
    {
        $DaftarOrder = DB::select("select Nama_order_vulkanisir as nama, No_hp_order_vulkanisir as nohp, count(Nama_order_vulkanisir) as banyak_pesanan , sum(Total_order_vulkanisir) as total_pesanan from order_vulkanisir where YEAR (tanggal_order) = 2021 and Status_order_vulkanisir = 'no-defects' group by 1,2");

        return view("report.laporan_pembelian",[
            "DaftarOrder"=>$DaftarOrder
        ]);
    }
}
