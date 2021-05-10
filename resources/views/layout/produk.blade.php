@extends('layout.layout1')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="row">

          @isset($produk)
                @foreach ($produk as $i)
                <div class="col-md-6">
                    <div class="card-body">
                    <h1 class="card-title">{{$i->Nama_produk}}</h1>
                    <img src="https://photo.jpnn.com/arsip/normal/2019/10/15/ban-bridgestone-emsa-foto-bridgestone-77.jpeg" alt="BAN" style="width:200px;height:142px;"><br>
                    Merk Ban: <i> {{$i->Ukuran_produk}} </i><br>
                    Ukuran Ban:<i> {{$i->Ukuran_produk}} </i><br>
                    Jenis Ban:<i> {{$i->Jenis_produk}} </i><br>
                    Harga Ban: <i>{{$i->Harga_produk}} </i><br>
                    </div>
                </div>
                @endforeach
            @endisset
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
