<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\customers;
use App\Models\Detail_order_vulkanisir;
use App\Models\Order_vulkanisir;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/test', function (Request $req) {
    $userLogin = Session::get("user_login");
    $user = customers::find($userLogin);
    dd($user[0]->Jenis_customer);
});

Route::post('/Order', 'Home@TerOrder');
Route::get('/detailOrder/{id}','Home@DetailOrder');


Route::get('/', function () {
    return view('pages.user-pages.asking_for_account');
});

Route::get('/home', 'Home@home');
Route::get('/produk', 'Home@Produk');
Route::get('/produkVulkanisir', 'Home@ProdukVulkan');
Route::get('/HistoryPemesanan', 'Home@HistoryPemesanan');
Route::get('/LaporanPemesanan', 'Home@LaporanPemesanan');
Route::get('/GantiPassword', 'Home@GantiPassword');
Route::post('/ChangePassword', 'Home@ChangePassword');
Route::get('/LogOut', 'Home@LogOut');
Route::get('/LaporanPemesanan/Filter', 'filter@LaporanPemesananFilter');
Route::get('/produkVulkanisir/filter1200-20', 'filter@filter1200');
Route::get('/produkVulkanisir/filter1100-20', 'filter@filter1100');
Route::get('/produkVulkanisir/filter1000-20', 'filter@filter1000');
Route::get('/produkVulkanisir/filter900-20', 'filter@filter900');
Route::get('/produkVulkanisir/filter750-16', 'filter@filter75016');
Route::get('/produkVulkanisir/filter750-15', 'filter@filter75015');
Route::get('/produkVulkanisir/filter700-16', 'filter@filter700');
Route::get('/produkVulkanisir/filterAB', 'filter@filterAB');
Route::get('/produkVulkanisir/filterAL', 'filter@filterAL');
Route::get('/produkVulkanisir/filterCB', 'filter@filterCB');
Route::get('/produkVulkanisir/filterCE', 'filter@filterCE');
Route::get('/produkVulkanisir/filterCZ', 'filter@filterCZ');
Route::get('/produkVulkanisir/filterTK', 'filter@filterTK');
Route::get('/produkVulkanisir/filterVL', 'filter@filterVL');
Route::get('/produkVulkanisir/filterELG', 'filter@filterELG');
Route::get('/produkVulkanisir/filterABR', 'filter@filterABR');
Route::get('/produkVulkanisir/filterCBR', 'filter@filterCBR');
Route::get('/produkVulkanisir/filterJZR', 'filter@filterJZR');
Route::get('/produkVulkanisir/filterCROWN-19', 'filter@filterCROWN19');
Route::get('/produkVulkanisir/filterCROWNRETREAD', 'filter@filterCROWNRETREAD');
Route::get('/produkVulkanisir/filterHEBAT', 'filter@filterHEBAT');
Route::get('/produkVulkanisir/filterTREADONE', 'filter@filterTREADONE');
Route::post('/produkVulkanisir/filterNamaProduct', 'filter@filterNamaProduct');
// Route::get('/','DashboardController@index');

    ////////////halaman awal//////////////
Route::get('/asking_for_account', function () {
    return view('pages.user-pages.asking_for_account');
});

Route::get('/asking_for_register', function () {
    return view('pages.user-pages.asking_for_register');
});

Route::get('/login', function () {
    return view('pages.user-pages.login');
});
Route::post('/ceklogin', 'login@ceklogin');

Route::get('/register', function () {
    return view('pages.user-pages.register');
});
Route::post('/cekregister', 'register@cekregister');

    ///////////admin//////////////
Route::get('/home-admin', 'AdminController@PindahCustomer');
Route::get('/customer-admin', 'AdminController@PindahCustomer');
Route::post('/add-customer', 'AdminController@AddCustomer');
Route::get('/to_update_customer/{id}', 'AdminController@PindahUpdateCustomer');
Route::post('/update_customer', 'AdminController@AddCustomer');
Route::get('/to_delete_customer/{id}', 'AdminController@DeleteCustomer');

Route::get('/produk_admin', 'AdminController@PindahProduk');
Route::post('/add_produk', 'AdminController@AddProduk');
Route::get('/to_update_produk/{id}', 'AdminController@PindahUpdateProduk');
Route::post('/update_produk', 'AdminController@UpdateProduk');
Route::get('/to_delete_produk/{id}', 'AdminController@DeleteProduk');

Route::get('/produk_vulkanisir_admin', 'AdminController@PindahProdukVulkanisir');
Route::post('/add_produk_vulkanisir', 'AdminController@AddProdukVulkanisir');
Route::get('/to_update_produk_vulkanisir/{id}', 'AdminController@PindahUpdateProdukVulkanisir');
Route::post('/update_produk_vulkanisir', 'AdminController@UpdateProdukVulkanisir');
Route::get('/to_delete_produk_vulkanisir/{id}', 'AdminController@DeleteProdukVulkanisir');

Route::get('/report_penjualan', 'ReportController@PindahReportPenjualan');
Route::post('/report_penjualan', 'ReportController@ReportPenjualan');
Route::get('/to_report_penjualan', 'ReportController@to_report_penjualan');

    ///////////pegawai//////////////
Route::get('/jadwal_penjemputan', 'PegawaiController@PindahJadwalPenjemputan');
Route::get('/to_update_status_pickup/{id}', 'PegawaiController@PindahUpdateStatusPickup');
Route::post('/update_status_pickup', 'PegawaiController@UpdateStatusPickup');

Route::get('/jadwal_pengantaran', 'PegawaiController@PindahJadwalPengantaran');
Route::get('/to_update_status_finished/{id}', 'PegawaiController@PindahUpdateStatusFinished');
Route::post('/update_status_finished', 'PegawaiController@UpdateStatusFinished');








Route::group(['prefix' => 'basic-ui'], function(){
    Route::get('accordions', function () { return view('pages.basic-ui.accordions'); });
    Route::get('buttons', function () { return view('pages.basic-ui.buttons'); });
    Route::get('badges', function () { return view('pages.basic-ui.badges'); });
    Route::get('breadcrumbs', function () { return view('pages.basic-ui.breadcrumbs'); });
    Route::get('dropdowns', function () { return view('pages.basic-ui.dropdowns'); });
    Route::get('modals', function () { return view('pages.basic-ui.modals'); });
    Route::get('progress-bar', function () { return view('pages.basic-ui.progress-bar'); });
    Route::get('pagination', function () { return view('pages.basic-ui.pagination'); });
    Route::get('tabs', function () { return view('pages.basic-ui.tabs'); });
    Route::get('typography', function () { return view('pages.basic-ui.typography'); });
    Route::get('tooltips', function () { return view('pages.basic-ui.tooltips'); });
});

Route::group(['prefix' => 'advanced-ui'], function(){
    Route::get('dragula', function () { return view('pages.advanced-ui.dragula'); });
    Route::get('clipboard', function () { return view('pages.advanced-ui.clipboard'); });
    Route::get('context-menu', function () { return view('pages.advanced-ui.context-menu'); });
    Route::get('popups', function () { return view('pages.advanced-ui.popups'); });
    Route::get('sliders', function () { return view('pages.advanced-ui.sliders'); });
    Route::get('carousel', function () { return view('pages.advanced-ui.carousel'); });
    Route::get('loaders', function () { return view('pages.advanced-ui.loaders'); });
    Route::get('tree-view', function () { return view('pages.advanced-ui.tree-view'); });
});

Route::group(['prefix' => 'forms'], function(){
    Route::get('basic-elements', function () { return view('pages.forms.basic-elements'); });
    Route::get('advanced-elements', function () { return view('pages.forms.advanced-elements'); });
    Route::get('dropify', function () { return view('pages.forms.dropify'); });
    Route::get('form-validation', function () { return view('pages.forms.form-validation'); });
    Route::get('step-wizard', function () { return view('pages.forms.step-wizard'); });
    Route::get('wizard', function () { return view('pages.forms.wizard'); });
});

Route::group(['prefix' => 'editors'], function(){
    Route::get('text-editor', function () { return view('pages.editors.text-editor'); });
    Route::get('code-editor', function () { return view('pages.editors.code-editor'); });
});

Route::group(['prefix' => 'charts'], function(){
    Route::get('chartjs', function () { return view('pages.charts.chartjs'); });
    Route::get('morris', function () { return view('pages.charts.morris'); });
    Route::get('flot', function () { return view('pages.charts.flot'); });
    Route::get('google-charts', function () { return view('pages.charts.google-charts'); });
    Route::get('sparklinejs', function () { return view('pages.charts.sparklinejs'); });
    Route::get('c3-charts', function () { return view('pages.charts.c3-charts'); });
    Route::get('chartist', function () { return view('pages.charts.chartist'); });
    Route::get('justgage', function () { return view('pages.charts.justgage'); });
});

Route::group(['prefix' => 'tables'], function(){
    Route::get('basic-table', function () { return view('pages.tables.basic-table'); });
    Route::get('data-table', function () { return view('pages.tables.data-table'); });
    Route::get('js-grid', function () { return view('pages.tables.js-grid'); });
    Route::get('sortable-table', function () { return view('pages.tables.sortable-table'); });
});

Route::get('notifications', function () {
    return view('pages.notifications.index');
});

Route::group(['prefix' => 'icons'], function(){
    Route::get('material', function () { return view('pages.icons.material'); });
    Route::get('flag-icons', function () { return view('pages.icons.flag-icons'); });
    Route::get('font-awesome', function () { return view('pages.icons.font-awesome'); });
    Route::get('simple-line-icons', function () { return view('pages.icons.simple-line-icons'); });
    Route::get('themify', function () { return view('pages.icons.themify'); });
});

Route::group(['prefix' => 'maps'], function(){
    Route::get('vector-map', function () { return view('pages.maps.vector-map'); });
    Route::get('mapael', function () { return view('pages.maps.mapael'); });
    Route::get('google-maps', function () { return view('pages.maps.google-maps'); });
});

Route::group(['prefix' => 'user-pages'], function(){
    Route::get('login', function () { return view('pages.user-pages.login'); });
    Route::get('login-2', function () { return view('pages.user-pages.login-2'); });
    Route::get('multi-step-login', function () { return view('pages.user-pages.multi-step-login'); });
    Route::get('register', function () { return view('pages.user-pages.register'); });
    Route::get('register-2', function () { return view('pages.user-pages.register-2'); });
    Route::get('lock-screen', function () { return view('pages.user-pages.lock-screen'); });
});

Route::group(['prefix' => 'error-pages'], function(){
    Route::get('error-404', function () { return view('pages.error-pages.error-404'); });
    Route::get('error-500', function () { return view('pages.error-pages.error-500'); });
});

Route::group(['prefix' => 'general-pages'], function(){
    Route::get('blank-page', function () { return view('pages.general-pages.blank-page'); });
    Route::get('landing-page', function () { return view('pages.general-pages.landing-page'); });
    Route::get('profile', function () { return view('pages.general-pages.profile'); });
    Route::get('email-templates', function () { return view('pages.general-pages.email-templates'); });
    Route::get('faq', function () { return view('pages.general-pages.faq'); });
    Route::get('faq-2', function () { return view('pages.general-pages.faq-2'); });
    Route::get('news-grid', function () { return view('pages.general-pages.news-grid'); });
    Route::get('timeline', function () { return view('pages.general-pages.timeline'); });
    Route::get('search-results', function () { return view('pages.general-pages.search-results'); });
    Route::get('portfolio', function () { return view('pages.general-pages.portfolio'); });
    Route::get('user-listing', function () { return view('pages.general-pages.user-listing'); });
});

Route::group(['prefix' => 'ecommerce'], function(){
    Route::get('invoice', function () { return view('pages.ecommerce.invoice'); });
    Route::get('invoice-2', function () { return view('pages.ecommerce.invoice-2'); });
    Route::get('pricing', function () { return view('pages.ecommerce.pricing'); });
    Route::get('product-catalogue', function () { return view('pages.ecommerce.product-catalogue'); });
    Route::get('project-list', function () { return view('pages.ecommerce.project-list'); });
    Route::get('orders', function () { return view('pages.ecommerce.orders'); });
});

// For Clear cache
// Route::get('/clear-cache', function() {
//     Artisan::call('cache:clear');
//     return "Cache is cleared";
// });

// // 404 for undefined routes
// Route::any('/{page?}',function(){
//     return View::make('pages.error-pages.error-404');
// })->where('page','.*');
