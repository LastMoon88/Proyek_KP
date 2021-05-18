@extends('layout.admin-layout')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Update Customer</h4>
        <div class="col-lg-12 mx-auto">
            <div class="auto-form-wrapper">
                <form action="{{ url('/update_customer')}}" method="post">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <small class="designation text-muted">ID Customer:</small>
                        <div class="controls">
                            <input type="text" class="form-control" readonly value="{{$customerupdate->Id_customer}}" name="id" style="width: 40pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Nama Customer:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" value="{{$customerupdate->Nama_customer}}" name="nama" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">No. Telp Customer:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="No. telp" value="{{$customerupdate->No_hp_customer}}" name="nohp" style="width: 100pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Alamat Customer:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Alamat" value="{{$customerupdate->Alamat_customer}}" name="alamat" id="alamat" style="width: 350pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Jenis Customer:</small>
                        <div class="controls dropdown">
                            <select class="form-control btn-outline-primary dropdown-toggle" name="jenis" style="width: 100pt; height: 30px;  padding: 0.375rem 0.75rem; ">
                                @if($customerupdate->Jenis_customer == "Customer")
                                    <option class="dropdown-item" value="Customer" selected>Customer</option>
                                    <option class="dropdown-item" value="Agent">Agent</option>
                                @else
                                    <option class="dropdown-item" value="Customer" >Customer</option>
                                    <option class="dropdown-item" value="Agent" selected>Agent</option>
                                @endif
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
