@extends('layout.pegawai-layout')

@push('plugin-styles')
@endpush

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-primary">Keterangan Detail Penjemputan Ban</h4>
        <div class="col-lg-12 mx-auto">
            <div class="auto-form-wrapper">
                <form action="{{ url('/update_status_finished')}}" method="post">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <small class="designation text-muted">Id Order:</small>
                        <div class="controls">
                            <input type="text" class="form-control" readonly value="{{$orderupdate->Id_order_vulkanisir}}" placeholder="Nama Lengkap" name="id" style="width: 40pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Nama Customer:</small>
                        <div class="controls">
                            <input type="text" class="form-control" readonly value="{{$orderupdate->Nama_order_vulkanisir}}" placeholder="Nama Lengkap" name="nama" style="width: 200pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">No. Telp Customer:</small>
                        <div class="controls">
                            <input type="text" class="form-control" readonly value="{{$orderupdate->No_hp_order_vulkanisir}}" placeholder="No. telp" name="nohp" style="width: 100pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Alamat Customer:</small>
                        <div class="controls">
                            <input type="text" class="form-control" readonly value="{{$orderupdate->Alamat_order_vulkanisir}}" placeholder="Alamat" name="alamat" id="alamat" style="width: 350pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Kode Ban:</small>
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Kode Ban"  readonly value="{{$orderupdate->kode_ban}}" name="kodeban" style="width: 60pt; height: 20px;  padding: 0.375rem 0.75rem; " />
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <small class="designation text-muted">Kondisi Ban:</small>
                        <div class="controls dropdown">
                            <select class="form-control btn-outline-primary dropdown-toggle" name="kondisi" style="width: 100pt; height: 30px;  padding: 0.375rem 0.75rem; ">

                                    <option class="dropdown-item" value="defect" >Defect</option>
                                    <option class="dropdown-item" value="no-defect" >No Defect</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <h6 class="mb-4 text-danger">
                          @if(Session::has('error'))
                            {{Session::get('error')}}
                          @endif
                        </h6>
                    </div>
                    <br>
                    <div class="form-group">
                        <input class="btn btn-primary btn-fw" type="submit" value="Submit">
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
