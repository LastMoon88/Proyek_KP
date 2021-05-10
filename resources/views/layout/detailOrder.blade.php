@extends('layout.layout2')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
    <h1 style="text-align: center"> Keterangan Detail Order</h1>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="row">

        <form action="/Order" method="post">
            {{ csrf_field() }}
          @isset($ProdukVulkanisir)
            <h6 class="text-center mb-4 text-danger">
                @if(Session::has('error'))
                {{Session::get('error')}}
                @endif
            </h6>
                @if (isset($userLogin))
                <div class="col-md-10">
                    <div class="card-body">
                        <small class="designation text-muted">Nama :</small>
                        <input type="text" class="form-control" value="{{$userLogin[0]->Nama_customer}}" name="nama" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " /> <br>
                        <small class="designation text-muted">Alamat :</small>
                        <input type="text" class="form-control" value="{{$userLogin[0]->Alamat_customer}}" name="alamat" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " /> <br>
                        <small class="designation text-muted">No. Telp :</small>
                        <input type="text" class="form-control" value="{{$userLogin[0]->No_hp_customer}}" name="noTelp" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                    </div>
                </div>
                @else
                <div class="col-md-10">
                    <div class="card-body">
                        <small class="designation text-muted">Nama :</small>
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " /><br>
                        <small class="designation text-muted">Alamat :</small>
                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " /> <br>
                        <small class="designation text-muted">No. Telp :</small>
                        <input type="text" class="form-control" placeholder="Nomor Telepon" name="noTelp" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                    </div>
                </div>
                @endif
                <div class="col-md-10">
                    <div class="card-body">
                        <small class="designation text-muted">Produk :</small>
                        {{$ProdukVulkanisir[0]->Nama_produk_vulkanisir}} <br><br>
                        <small class="designation text-muted">Sub Total :</small>
                        {{$ProdukVulkanisir[0]->Harga_produk_vulkanisir}}
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <small class="designation text-muted">Tanggal Penjemputan :</small>
                        <input type="date" class="form-control" placeholder="Tanggal Penjemputan" name="tglPenjemputan" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " /><br>
                        <small class="designation text-muted">Tanggal Pengantaran :</small>
                        <input type="date" class="form-control" placeholder="Tanggal Pengantaran" name="tglPengantaran" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " /><br>
                    </div>
                </div>
                <div class="col-md-12" style="text-align: center">
                    <div class="card-body">
                        <input type="hidden" name="Id_produk_vulkanisir" value="{{$ProdukVulkanisir[0]->Id_produk_vulkanisir}}">
                        <input type="submit" class="btn-lg btn-primary btn-block submit-btn" value="Order">
                    </div>
                </div>
                @endisset
            </form>
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
