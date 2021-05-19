@extends('layout.admin-layout')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Laporan Pembelian Customer</h4>
        <div class="table-responsive">
            <form action="{{ url('/report_penjualan')}}" method="post">
                {{ csrf_field() }}
                <div class="control-group">
                    <small class="designation text-muted">Tahun:</small>
                    <input type="text" class="form-control" placeholder="Tahun" name="tahun" style="width: 50pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                    <br>
                    <input class="btn btn-primary btn-fw" type="submit" value="Generate">
                </div>
            </form>
            <br>
            <small class="designation text-muted">Contoh Report</small>
          <table class="table table-striped">
            <thead>
              <tr  class="table-primary">
                <th> Nama </th>
                <th> No. Telp</th>
                <th> Banyak Pesanan </th>
                <th> Total </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($DaftarOrder as $order)
                <tr>
                    <td> {{$order->nama}} </td>
                    <td> {{$order->nohp}} </td>
                    <td> {{$order->banyak_pesanan}} </td>
                    <td> {{$order->total_pesanan}} </td>
                </tr>
              @endforeach
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
