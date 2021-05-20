@extends('layout.admin-layout')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Insert Customer</h4>
        <div class="col-lg-12 mx-auto">
            <div class="auto-form-wrapper">
                <form action="{{ url('/add-customer')}}" method="post">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <small class="designation text-muted">Nama Customer:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">No. Telp Customer:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="No. telp" name="nohp" style="width: 100pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Alamat Customer:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat" id="alamat" style="width: 350pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Jenis Customer:</small>
                        <div class="controls dropdown">
                            <select class="form-control btn-outline-primary dropdown-toggle" name="jenis" style="width: 100pt; height: 30px;  padding: 0.375rem 0.75rem; ">
                                <option class="dropdown-item" value="Customer" selected>Customer</option>
                                <option class="dropdown-item" value="Agent">Agent</option>
                            </select>
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
        <h4 class="card-title text-primary">Customer Table</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr  class="table-primary">
                <th> User </th>
                <th> Nama </th>
                <th> No. Telp </th>
                <th> Alamat </th>
                <th> Jenis </th>
                <th class="text-center"> Update </th>
                <th class="text-center"> Delete </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($DaftarCustomer as $cust)
                <tr>
                    <td class="py-1">
                    <img src="{{ url('assets/images/faces-clipart/pic-1.png') }}" alt="image" />
                    </td>
                    <td> {{$cust->Nama_customer}} </td>
                    <td> {{$cust->No_hp_customer}} </td>
                    <td> {{$cust->Alamat_customer}} </td>
                    <td> {{$cust->Jenis_customer}} </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-inverse-warning btn-rounded btn-fw"><a style="text-decoration: none;" class="text-warning" href="to_update_customer/{{$cust->Id_customer}}">Update</a></button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-inverse-danger btn-rounded btn-fw"><a style="text-decoration: none;" class="text-danger" href="to_delete_customer/{{$cust->Id_customer}}">Delete</a></button>
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
