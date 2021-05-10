@extends('layout.layout2')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
    <h2 style="text-align:center">Home</h2>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="row">
            <div >
                <div class="card-body">
                    <h3>Cara Pemesanan:</h3><br>
                    1.Menentukan produk yang di inginkan lalu menekan tombol order yang terdapat pada produk tersebut <br>
                    <img src="images/1620245160613.jpg" alt="Tutorial1" ><br>
                    2.Mengisi data-data yang telah disiapkan untuk proses selanjutnya setelah itu tekan tombol order <br>
                    <img src="images/1620245200580.jpg" alt="Tutorial2" ><br>

                </div>
            </div>
        </div>
      </div>
    </div>
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <img src="images/1620248147631.jpg" style="width:450px;height:250px;" alt="Tutorial2" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <b>Proses Vulkanisir dingin:</b> <br>
                    Proses vulkanisir dimana ban bekas(casing) yang telah dibuffing telapaknya, ditempel dengan Tread(karet compound yang telah dicetak lebih dahulu(precured tread)). Dimana sebelumnya ditempel dengan karet cushion(cushion gum) yang sangat tipis. Setelah itu dimasukkan kedalam chamber untuk proses persenyawaan antara casing dan tread pada temperature yang relatif rendah, sehingga tidak mengurangi kekuatan casing.
                </div>
            </div>
        </div>
      </div>
    </div>
    <h4>PT. Surya Mas Gembira</h4>
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <img src="assets/images/logo-perusahaan.png" style="width:450px;height:250px;" alt="Tutorial2" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, culpa in ducimus, iusto a quas dicta aspernatur perferendis facilis tempora et at sapiente nostrum dolores nihil nobis recusandae repudiandae vel? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum velit explicabo a esse nihil atque dolor eius? Quasi nesciunt officiis sequi nobis itaque. Accusantium sed modi quam praesentium, est nostrum! Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                </div>
            </div>
            <div>
                <div class="card-body">
                    <b>Contact Person:</b>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-body center" style="text-align: center">
                    Manager <br>
                    asdasd@gmail.com
                    05486845
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-body center" style="text-align: center">
                    Customer Service <br>
                    asdasd@gmail.com
                    05486845
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-body center" style="text-align: center">
                    Pegawai Pengantar <br>
                    asdasd@gmail.com
                    05486845
                </div>
            </div>
        </div>
      </div>
    </div>

@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush
