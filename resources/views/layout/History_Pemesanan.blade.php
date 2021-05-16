@extends('layout.layout2')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card" style="text-align: center">
      <div class="card-body">
        <h1 class="card-title">History Pemesanan</h1>
        <div class="table-responsive">
          <table class="table">
            <thead class="table table-dark">
              <tr>
                <th> Status Order </th>
                <th> Kode Ban </th>
                <th> Produk </th>
                <th> Tanggal Order </th>
                <th> Subtotal </th>
              </tr>
            </thead>
            <tbody>
                @if (isset($history))
                    @foreach ($history as $i)
                    <tr>
                        <td> {{$i->Status_order_vulkanisir}} </td>
                        <td> {{$i->kode_ban}} </td>
                        <td> {{$i->Nama_produk}} </td>
                        <td> {{$i->tanggal_order}} </td>
                        <td> Rp. {{$i->Total_order_vulkanisir}} </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
