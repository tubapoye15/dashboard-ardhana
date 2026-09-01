@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
  <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget">
      <div class="dash-widgetimg"><span><img src="{{ asset('assets/img/icons/dash1.svg') }}" alt="img"></span></div>
      <div class="dash-widgetcontent">
        <h5>{{ $stats['pendingPreorders'] ?? 0 }}</h5>
        <h6>Pending Preorders</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget dash1">
      <div class="dash-widgetimg"><span><img src="{{ asset('assets/img/icons/dash2.svg') }}" alt="img"></span></div>
      <div class="dash-widgetcontent">
        <h5>{{ $stats['confirmedPreorders'] ?? 0 }}</h5>
        <h6>Confirmed Preorders</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget dash2">
      <div class="dash-widgetimg"><span><img src="{{ asset('assets/img/icons/dash3.svg') }}" alt="img"></span></div>
      <div class="dash-widgetcontent">
        <h5>{{ $stats['products'] ?? 0 }}</h5>
        <h6>Products in Catalog</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget dash3">
      <div class="dash-widgetimg"><span><img src="{{ asset('assets/img/icons/dash4.svg') }}" alt="img"></span></div>
      <div class="dash-widgetcontent">
        <h5>{{ $stats['customers'] ?? 0 }}</h5>
        <h6>Customers</h6>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="mb-3">Welcome, {{ auth()->user()->name }}</h5>
        <p class="text-muted mb-0">
          This is your base dashboard, converted from the template. Once the Products,
          Preorders, and Customers modules are built, their real numbers and tables will
          replace the placeholders above.
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
