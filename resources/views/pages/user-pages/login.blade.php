@extends('layout.master-mini')

@section('content')
<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ url('assets/images/auth/register.jpg') }}); background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <h2 class="text-center mb-4 text-primary">Login</h2>
      <div class="auto-form-wrapper">
        <form action="{{ url('/ceklogin')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" name="nohp" placeholder="No. Phone">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <h6 class="text-center mb-4 text-danger">
              @if(Session::has('error_pass'))
                {{Session::get('error_pass')}}
              @elseif (Session::has('error_not_found'))
                {{Session::get('error_not_found')}}
                <br>
                <a style="font-size: 70%;" href="register">Klik disini untuk daftar</a>
              @endif</h6>
          </div>
          <div class="form-group">
            <input class="btn btn-primary submit-btn btn-block" type="submit" value="Login">
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
@endsection
