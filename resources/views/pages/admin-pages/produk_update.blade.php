@extends('layout.admin-layout')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Update Produk</h4>
        <div class="col-lg-12 mx-auto">
            <div class="auto-form-wrapper">
                <form action="{{ url('/update_produk')}}" method="post">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <small class="designation text-muted">ID Produk:</small>
                        <div class="controls">
                            <input type="text" class="form-control" readonly value="{{$produkupdate->Id_produk}}" name="id" style="width: 30pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Nama Produk:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" value="{{$produkupdate->Nama_produk}}" name="nama" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Ukuran Produk:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="No. telp" value="{{$produkupdate->Ukuran_produk}}" name="ukuran" style="width: 100pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Merk Produk:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Alamat" value="{{$produkupdate->Merk_produk}}" name="merk" style="width: 150pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Jenis Customer:</small>
                        <div class="controls dropdown">
                            <select class="form-control btn-outline-primary dropdown-toggle" name="jenis" style="width: 100pt; height: 30px;  padding: 0.375rem 0.75rem; ">
                                @if($produkupdate->Jenis_produk == "Customer")
                                    <option class="dropdown-item" value="Lidah Ban" selected>Lidah Ban</option>
                                    <option class="dropdown-item" value="Ban Dalam">Ban Dalam</option>
                                    <option class="dropdown-item" value="Ban Dalam">Ban Original</option>
                                @elseif($produkupdate->Jenis_produk == "Customer")
                                    <option class="dropdown-item" value="Lidah Ban" >Lidah Ban</option>
                                    <option class="dropdown-item" value="Ban Dalam" selected>Ban Dalam</option>
                                    <option class="dropdown-item" value="Ban Dalam">Ban Original</option>
                                @else
                                    <option class="dropdown-item" value="Lidah Ban" >Lidah Ban</option>
                                    <option class="dropdown-item" value="Ban Dalam" >Ban Dalam</option>
                                    <option class="dropdown-item" value="Ban Dalam" selected>Ban Original</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Harga Produk:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Harga" value="{{$produkupdate->Harga_produk}}" name="harga" style="width: 150pt; height: 20px;  padding: 0.375rem 0.75rem; " />
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
