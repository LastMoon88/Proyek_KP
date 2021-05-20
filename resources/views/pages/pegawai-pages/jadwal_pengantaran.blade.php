@extends('layout.pegawai-layout')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Jadwal Pengantaran Hari Ini</h4>
        @if (isset($alert))
            <script>
              alert("Tidak ada jadwal pengantaran hari ini, silahkan cek di hari besok!");
            </script>
        @else
        <br>
        <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr  class="table-primary">
                  <th> Nama Customer </th>
                  <th> No. Telp Customer </th>
                  <th> Alamat Customer </th>
                  <th> Pesanan Tread Rubber </th>
                  <th> Kode Ban </th>
                  <th class="text-center"> Action </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($DaftarOrder as $order)
                  <tr>
                      <td> {{$order->Nama_order_vulkanisir}} </td>
                      <td> {{$order->No_hp_order_vulkanisir}} </td>
                      <td> {{$order->Alamat_order_vulkanisir}} </td>
                      <td> {{$order->Nama_produk}} </td>
                      <td> {{$order->kode_ban}} </td>
                      <td class="text-center">
                        <button type="button" class="btn btn-inverse-warning btn-rounded btn-fw"><a style="text-decoration: none;" class="text-primary" href="to_update_status_finished/{{$order->Id_order_vulkanisir}}">Finished</a></button>
                      </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
