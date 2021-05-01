@extends('layout.master-mini')

@section('content')
<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ url('assets/images/auth/register.jpg') }}); background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <h2 class="text-center mb-4 text-primary">Register</h2>
      <div class="auto-form-wrapper">
        <form action="{{ url('/cekregister')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name="nama_customer" placeholder="Nama">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name="no_hp_customer" placeholder="No hp">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" name="password_customer" placeholder="Password">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" name="confirm_password_customer" placeholder="Confirm Password">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name="alamat_customer" placeholder="Alamat">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <h6 class="text-center mb-4 text-danger">
              @if(Session::has('error'))
                {{Session::get('error')}}
              @endif
            </h6>
          </div>
          <div class="form-group">
            <input class="btn btn-primary submit-btn btn-block" type="submit" value="Register">
          </div>
          <div class="text-block text-center my-3">
            <span class="text-small font-weight-semibold">Sudah punya akun ?</span>
            <a href="{{ url('/user-pages/login') }}" class="text-black text-small">Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
