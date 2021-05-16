@extends('layout.admin-layout')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Insert Produk</h4>
        <div class="col-lg-12 mx-auto">
            <div class="auto-form-wrapper">
                <form action="{{ url('/add_produk')}}" method="post">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <small class="designation text-muted">Nama Produk:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Nama Produk" name="nama" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Ukuran Produk:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Ukuran" name="ukuran" style="width: 100pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Merk Produk:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Merk" name="merk" style="width: 100pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Jenis Produk:</small>
                        <div class="controls dropdown">
                            <select class="form-control btn-outline-primary dropdown-toggle" name="jenis" style="width: 100pt; height: 30px;  padding: 0.375rem 0.75rem; ">
                                <option class="dropdown-item" value="Lidah Ban" selected>Lidah Ban</option>
                                <option class="dropdown-item" value="Ban Dalam">Ban Dalam</option>
                                <option class="dropdown-item" value="Ban Dalam">Ban Original</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Harga Produk:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Harga" name="harga" style="width: 350pt; height: 20px;  padding: 0.375rem 0.75rem; " />
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
                        <input class="btn btn-primary btn-fw" type="submit" value="Insert">
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Produk Table</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr  class="table-primary">
                <th> Foto </th>
                <th> Nama </th>
                <th> Ukuran </th>
                <th> Merk </th>
                <th> Jenis </th>
                <th> Harga </th>
                <th class="text-center"> Update </th>
                <th class="text-center"> Delete </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($DaftarProduk as $produk)
                <tr>
                    <td class="py-1">
                    <img src="{{ url('assets/images/faces-clipart/pic-1.png') }}" alt="image" />
                    </td>
                    <td> {{$produk->Nama_produk}} </td>
                    <td> {{$produk->Ukuran_produk}} </td>
                    <td> {{$produk->Merk_produk}} </td>
                    <td> {{$produk->Jenis_produk}} </td>
                    <td> {{$produk->Harga_produk}} </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-inverse-warning btn-rounded btn-fw"><a style="text-decoration: none;" class="text-warning" href="to_update_produk/{{$produk->Id_produk}}">Update</a></button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-inverse-danger btn-rounded btn-fw">Delete</button>
                    </td>
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
