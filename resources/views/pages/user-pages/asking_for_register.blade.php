@extends('layout.master-mini')
@section('content')

<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ url('assets/images/auth/login_1.jpg') }}); background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <div class="auto-form-wrapper">
        <div class="form-group">
            <h1 style="text-align: center;" class="primary">Ingin Daftar Akun???</h1>
        </div>
        <div class="form-group">
            <a style="text-decoration: none;" href="register"><button style="font-size:400%;" class="btn-lg btn-primary btn-block submit-btn">Ya</button></a>
        </div>
        <div class="form-group">
            <a style="text-decoration: none;" href="home"><button style="font-size:400%;" class="btn-lg btn-primary btn-block submit-btn">Tidak</button></a>
        </div>
      </div>
      {{-- <ul class="auth-footer">
        <li>
          <a href="#">Conditions</a>
        </li>
        <li>
          <a href="#">Help</a>
        </li>
        <li>
          <a href="#">Terms</a>
        </li>
      </ul> --}}
      <p class="footer-text text-center">copyright © 2021 CV.Surya Mas gembira. All rights reserved.</p>
    </div>
  </div>
</div>

@endsection
