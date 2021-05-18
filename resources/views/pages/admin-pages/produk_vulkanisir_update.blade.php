@extends('layout.admin-layout')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Update Produk Vulkanisir</h4>
        <div class="col-lg-12 mx-auto">
            <div class="auto-form-wrapper">
                <form action="{{ url('/update_produk_vulkanisir')}}" method="post">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <small class="designation text-muted">ID Produk Vulkanisir:</small>
                        <div class="controls">
                            <input type="text" class="form-control" readonly value="{{$produkVulkupdate->Id_produk_vulkanisir}}" name="id" style="width: 30pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Nama Produk Vulkanisir:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" value="{{$produkVulkupdate->Nama_produk_vulkanisir}}" name="nama" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Tread Produk Vulkanisir:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="No. telp" value="{{$produkVulkupdate->Tread_produk_vulkanisir}}" name="tread" style="width: 50pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Ukuran Produk Vulkanisir:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="No. telp" value="{{$produkVulkupdate->Ukuran_produk_vulkanisir}}" name="ukuran" style="width: 80pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Merk Produk Vulkanisir:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Alamat" value="{{$produkVulkupdate->Merk_produk_vulkanisir}}" name="merk" style="width: 120pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Harga Produk Vulkanisir:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Harga" value="{{$produkVulkupdate->Harga_produk_vulkanisir}}" name="harga" style="width: 150pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <h6 class="mb-4 text-danger">
                          @if(Session::has('error'))
                            {{Session::get('error')}}
                          @endif
                        </h6>
                    </div>
                    <br>
                    <div class="form-group">
                        <input class="btn btn-primary btn-fw" type="submit" value="Update">
                    </div>
                </form>
            </div>
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
