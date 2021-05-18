@extends('layout.layout2')

@push('plugin-styles')
@endpush

@section('content')
<div class="row" >
    <div class="col-lg-12 grid-margin stretch-card" >
        <div class="card" >
            <div class="card-body" style="text-align:center">
                <h1 class="card-title">History Pemesanan</h1>
                <form action="/LaporanPemesanan/Filter" method="get">
                        {{ csrf_field() }}
                        <div class="row">
                        <h5 style="width: 80pt; height: 40px;  padding: 0.375rem 0.75rem; ">Tahun:</h5><input type="text" class="form-control" name="filterNamaProduct" placeholder="2021" style="width: 300pt; height: 40px;  padding: 0.375rem 0.75rem; ">
                        <input class="btn btn-primary submit-btn btn-block" type="submit" value="Generate" style="width: 150pt; height: 40px;  padding: 0.375rem 0.75rem; " />
                        </div>
                </form>
        <div class="table-responsive">
          <table class="table">
            <thead class="table table-dark">
              <tr>
                <th> Kode Ban </th>
                <th> Produk </th>
                <th> Tanggal Pemesanan </th>
                <th> Subtotal </th>
              </tr>
            </thead>
            <tbody>
                @if (isset($history))
                    @foreach ($history as $i)
                    <tr>
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
        <div class="card-body" style="text-align:right">
            Total Pengeluaran:
            @if (isset($TotalHarga))
                Rp.{{$TotalHarga}} <br>
            @endif
            Total Produk:
            @if (isset($CountOrder))
                {{$CountOrder}} Produk <br>
            @endif
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
