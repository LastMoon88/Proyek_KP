@extends('layout.layout2')

@push('plugin-styles')
@endpush

@section('content')
<div class="row" >
    <div class="col-lg-12 grid-margin stretch-card" >
        <div class="card" >
            <div class="card-body" style="text-align:center">
                <h1 class="card-title">Ganti Password</h1>
                <h6 class="text-center mb-4 text-danger">
                    @if(Session::has('error'))
                    {{Session::get('error')}}
                    @endif
                </h6>
                <form action="/ChangePassword" method="post">
                        {{ csrf_field() }}
                        <div>
                        <h5 style="width: 120pt; height: 40px;  padding: 0.375rem 0.75rem; ">Password Lama:</h5><input type="password" class="form-control" name="passwordLama" style="width: 300pt; height: 40px;  padding: 0.375rem 0.75rem; "> <br>
                        <h5 style="width: 120pt; height: 40px;  padding: 0.375rem 0.75rem; ">Password Baru:</h5><input type="password" class="form-control" name="passwordBaru" style="width: 300pt; height: 40px;  padding: 0.375rem 0.75rem; "> <br>
                        <h5 style="width: 140pt; height: 40px;  padding: 0.375rem 0.75rem; ">Confirm Password:</h5><input type="password" class="form-control" name="confirmPassword" style="width: 300pt; height: 40px;  padding: 0.375rem 0.75rem; "> <br>
                        <input class="btn btn-primary submit-btn btn-block" type="submit" value="Generate" style="width: 150pt; height: 40px;  padding: 0.375rem 0.75rem; " />
                        </div>
                </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
