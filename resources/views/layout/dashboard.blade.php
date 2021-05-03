@extends('layout.layout1')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
    <h1 class="display-1">Vulkanisir</h1>
    <div class="col-12 grid-margin">
      <div class="card">
          {{-- dimulai foreach disini --}}

        <div class="row">
            {{-- for untuk mengambil product --}}
            @isset($vulkan)
                @foreach ($vulkan as $i)
                <div class="col-md-6">
                    <div class="card-body">
                    <h3 class="card-title">{{$i->Nama_produk_vulkanisir}}</h3>
                    <img src="https://photo.jpnn.com/arsip/normal/2019/10/15/ban-bridgestone-emsa-foto-bridgestone-77.jpeg" alt="BAN" style="width:200px;height:142px;">
                    </div>
                </div>
                @endforeach
            @endisset

    <h1 class="display-1">Product</h1>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="row">

          @isset($produk)
                @foreach ($produk as $i)
                <div class="col-md-6">
                    <div class="card-body">
                    <h3 class="card-title">{{$i->Nama_produk}}</h3>
                    <img src="https://photo.jpnn.com/arsip/normal/2019/10/15/ban-bridgestone-emsa-foto-bridgestone-77.jpeg" alt="BAN" style="width:200px;height:142px;">
                    </div>
                </div>
                @endforeach
            @endisset
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
