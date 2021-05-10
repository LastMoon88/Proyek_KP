@extends('layout.layout1')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="row">
            <form action="/detailOrder/{{$i->Id_produk_vulkanisir}}" method="get">
                @csrf
            @isset($produk)
            @foreach ($produk as $i)
            <div class="col-md-4">

                        <div class="card-body">
                        <h3 class="card-title">{{$i->Nama_produk_vulkanisir}}</h3>
                        <img src="https://photo.jpnn.com/arsip/normal/2019/10/15/ban-bridgestone-emsa-foto-bridgestone-77.jpeg" alt="BAN" style="width:200px;height:142px;"> <br>
                        <input type="submit" class="btn-lg btn-primary btn-block submit-btn" value="Order">
                        {{-- <a style="text-decoration: none;" href="login"><button class="btn-lg btn-primary btn-block submit-btn">ORDER</button></a> --}}
                        </div>
                    </div>
                </form>
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
