@extends('layout.layout1')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
<div class="row">
    <h1 class="display-1">Vulkanisir</h1>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="row">
            {{-- for untuk mengambil product --}}
          <div class="col-md-6">
            <div class="card-body">
              <h4 class="card-title">Normal buttons</h4>
              <div class="template-demo">
                <button type="button" class="btn btn-primary btn-fw">Primary</button>
                <button type="button" class="btn btn-secondary btn-fw">Secondary</button>
                <button type="button" class="btn btn-success btn-fw">Success</button>
                <button type="button" class="btn btn-danger btn-fw">Danger</button>
                <button type="button" class="btn btn-warning btn-fw">Warning</button>
                <button type="button" class="btn btn-info btn-fw">Info</button>
                <button type="button" class="btn btn-light btn-fw">Light</button>
                <button type="button" class="btn btn-dark btn-fw">Dark</button>
                <button type="button" class="btn btn-link btn-fw">Link</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h4 class="card-title">Fab Buttons</h4>
              <div class="template-demo">
                <button type="button" class="btn btn-icons btn-rounded btn-light">
                  <i class="mdi mdi-home-outline"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-secondary">
                  <i class="mdi mdi-edge"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-success">
                  <i class="mdi mdi-email"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-primary">
                  <i class="mdi mdi-star"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-warning">
                  <i class="mdi mdi-map-marker"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-info">
                  <i class="mdi mdi-code-braces"></i>
                </button>
                <br>
                <button type="button" class="btn btn-icons btn-inverse-light">
                  <i class="mdi mdi-home-outline"></i>
                </button>
                <button type="button" class="btn btn-icons btn-inverse-secondary">
                  <i class="mdi mdi-edge"></i>
                </button>
                <button type="button" class="btn btn-icons btn-inverse-success">
                  <i class="mdi mdi-email"></i>
                </button>
                <button type="button" class="btn btn-icons btn-inverse-primary">
                  <i class="mdi mdi-star"></i>
                </button>
                <button type="button" class="btn btn-icons btn-inverse-warning">
                  <i class="mdi mdi-map-marker"></i>
                </button>
                <button type="button" class="btn btn-icons btn-inverse-info">
                  <i class="mdi mdi-code-braces"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card-body">
              <h4 class="card-title">Outlined buttons</h4>
              <div class="template-demo">
                <button type="button" class="btn btn-outline-primary">Primary</button>
                <button type="button" class="btn btn-outline-secondary">Secondary</button>
                <button type="button" class="btn btn-outline-success">Success</button>
                <button type="button" class="btn btn-outline-danger">Danger</button>
                <button type="button" class="btn btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-outline-info">Info</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h4 class="card-title">Rounded Outlines</h4>
              <div class="template-demo">
                <button type="button" class="btn btn-icons btn-rounded btn-outline-light">
                  <i class="mdi mdi-home-outline"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-outline-secondary">
                  <i class="mdi mdi-edge"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-outline-success">
                  <i class="mdi mdi-email"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-outline-primary">
                  <i class="mdi mdi-star"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-outline-warning">
                  <i class="mdi mdi-map-marker"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-outline-info">
                  <i class="mdi mdi-code-braces"></i>
                </button>
                <br>
                <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-light">
                  <i class="mdi mdi-home-outline"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-secondary">
                  <i class="mdi mdi-edge"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-success">
                  <i class="mdi mdi-email"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-primary">
                  <i class="mdi mdi-star"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-warning">
                  <i class="mdi mdi-map-marker"></i>
                </button>
                <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-info">
                  <i class="mdi mdi-code-braces"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card-body">
              <h4 class="card-title">Inverse buttons</h4>
              <div class="template-demo">
                <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
                <button type="button" class="btn btn-inverse-secondary btn-fw">Secondary</button>
                <button type="button" class="btn btn-inverse-success btn-fw">Success</button>
                <button type="button" class="btn btn-inverse-danger btn-fw">Danger</button>
                <button type="button" class="btn btn-inverse-warning btn-fw">Warning</button>
                <button type="button" class="btn btn-inverse-info btn-fw">Info</button>
                <button type="button" class="btn btn-inverse-light btn-fw">Light</button>
                <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
                <button type="button" class="btn btn-link btn-fw">Link</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h4 class="card-title">Button Sizes</h4>
              <div class="template-demo">
                <button type="button" class="btn btn-light btn-lg">btn-lg</button>
                <button type="button" class="btn btn-light">btn-md</button>
                <button type="button" class="btn btn-light btn-sm">btn-sm</button>
                <br>
                <button type="button" class="btn btn-secondary btn-lg">btn-lg</button>
                <button type="button" class="btn btn-info">btn-md</button>
                <button type="button" class="btn btn-primary btn-sm">btn-sm</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h1 class="display-1">Product</h1>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="row">
          <div class="col-md-6">
            <div class="card-body">
              <h4 class="card-title">Rounded filled Buttons</h4>
              <div class="template-demo">
                <button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button>
                <button type="button" class="btn btn-secondary btn-rounded btn-fw">Secondary</button>
                <button type="button" class="btn btn-success btn-rounded btn-fw">Success</button>
                <button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button>
                <button type="button" class="btn btn-warning btn-rounded btn-fw">Warning</button>
                <button type="button" class="btn btn-info btn-rounded btn-fw">Info</button>
                <button type="button" class="btn btn-light btn-rounded btn-fw">Light</button>
                <button type="button" class="btn btn-dark btn-rounded btn-fw">Dark</button>
                <button type="button" class="btn btn-link btn-rounded btn-fw">Link</button>
              </div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Inverse Rounded buttons</h4>
              <div class="template-demo">
                <button type="button" class="btn btn-inverse-primary btn-rounded btn-fw">Primary</button>
                <button type="button" class="btn btn-inverse-secondary btn-rounded btn-fw">Secondary</button>
                <button type="button" class="btn btn-inverse-success btn-rounded btn-fw">Success</button>
                <button type="button" class="btn btn-inverse-danger btn-rounded btn-fw">Danger</button>
                <button type="button" class="btn btn-inverse-warning btn-rounded btn-fw">Warning</button>
                <button type="button" class="btn btn-inverse-info btn-rounded btn-fw">Info</button>
                <button type="button" class="btn btn-inverse-light btn-rounded btn-fw">Light</button>
                <button type="button" class="btn btn-inverse-dark btn-rounded btn-fw">Dark</button>
                <button type="button" class="btn btn-inverse-link btn-rounded btn-fw">Link</button>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h4 class="card-title">Rounded Outlined</h4>
              <div class="template-demo">
                <button type="button" class="btn btn-outline-primary btn-rounded btn-fw">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-rounded btn-fw">Secondary</button>
                <button type="button" class="btn btn-outline-success btn-rounded btn-fw">Success</button>
                <button type="button" class="btn btn-outline-danger btn-rounded btn-fw">Danger</button>
                <button type="button" class="btn btn-outline-warning btn-rounded btn-fw">Warning</button>
                <button type="button" class="btn btn-outline-info btn-rounded btn-fw">Info</button>
                <button type="button" class="btn btn-outline-light btn-rounded btn-fw">Light</button>
                <button type="button" class="btn btn-outline-dark btn-rounded btn-fw">Dark</button>
                <button type="button" class="btn btn-outline-link btn-rounded btn-fw">Link</button>
              </div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Button Block</h4>
              <div class="template-demo">
                <button type="button" class="btn btn-info btn-block">Block Button</button>
                <button type="button" class="btn btn-light btn-block">Block Button</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush
