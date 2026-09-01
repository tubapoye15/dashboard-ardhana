@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
{{--
  NOTE: Every number on this page is DUMMY DATA for now, styled to match the
  template's demo dashboard. Once the Products / Preorders / Customers /
  Suppliers modules exist, swap these hardcoded values for real queries
  (see DashboardController@__invoke) — search "DUMMY" to find every spot.
--}}

<div class="row">
  <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget">
      <div class="dash-widgetimg"><span><img src="{{ asset('assets/img/icons/dash1.svg') }}" alt="img"></span></div>
      <div class="dash-widgetcontent">
        <h5>$ <span class="counters" data-count="12480.00">12,480.00</span></h5>
        <h6>Outstanding Payments</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget dash1">
      <div class="dash-widgetimg"><span><img src="{{ asset('assets/img/icons/dash2.svg') }}" alt="img"></span></div>
      <div class="dash-widgetcontent">
        <h5>$ <span class="counters" data-count="3260.00">3,260.00</span></h5>
        <h6>Deposits Received</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget dash2">
      <div class="dash-widgetimg"><span><img src="{{ asset('assets/img/icons/dash3.svg') }}" alt="img"></span></div>
      <div class="dash-widgetcontent">
        <h5>$ <span class="counters" data-count="48250.00">48,250.00</span></h5>
        <h6>Total Preorder Value</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-12">
    <div class="dash-widget dash3">
      <div class="dash-widgetimg"><span><img src="{{ asset('assets/img/icons/dash4.svg') }}" alt="img"></span></div>
      <div class="dash-widgetcontent">
        <h5>$ <span class="counters" data-count="36700.00">36,700.00</span></h5>
        <h6>Total Fulfilled Value</h6>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count">
      <div class="dash-counts">
        <h4>{{ $stats['customers'] }}</h4>
        <h5>Customers</h5>
      </div>
      <div class="dash-imgs"><i data-feather="user"></i></div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count das1">
      <div class="dash-counts">
        <h4>{{ $stats['suppliers'] }}</h4>
        <h5>Suppliers</h5>
      </div>
      <div class="dash-imgs"><i data-feather="user-check"></i></div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count das2">
      <div class="dash-counts">
        <h4>{{ $stats['pendingPreorders'] }}</h4>
        <h5>Pending Preorders</h5>
      </div>
      <div class="dash-imgs"><i data-feather="clock"></i></div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6 col-12 d-flex">
    <div class="dash-count das3">
      <div class="dash-counts">
        <h4>{{ $stats['confirmedPreorders'] }}</h4>
        <h5>Confirmed Preorders</h5>
      </div>
      <div class="dash-imgs"><i data-feather="check-circle"></i></div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-7 col-sm-12 col-12 d-flex">
    <div class="card flex-fill">
      <div class="card-header pb-0 d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Preorders Overview</h5>
        <div class="graph-sets">
          <ul>
            <li><span>New</span></li>
            <li><span>Fulfilled</span></li>
          </ul>
          <div class="dropdown">
            <button class="btn btn-white btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
              {{ now()->year }} <img src="{{ asset('assets/img/icons/dropdown.svg') }}" alt="img" class="ms-2">
            </button>
            <ul class="dropdown-menu">
              <li><a href="javascript:void(0);" class="dropdown-item">{{ now()->year }}</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item">{{ now()->year - 1 }}</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="sales_charts"></div>
      </div>
    </div>
  </div>

  <div class="col-lg-5 col-sm-12 col-12 d-flex">
    <div class="card flex-fill">
      <div class="card-header pb-0 d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0">Recently Added Products</h4>
        <div class="dropdown">
          <a href="javascript:void(0);" data-bs-toggle="dropdown" class="dropset"><i class="fa fa-ellipsis-v"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#" class="dropdown-item">Product List</a></li>
            <li><a href="#" class="dropdown-item">Product Add</a></li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive dataview">
          <table class="table datatable">
            <thead>
              <tr><th>Sno</th><th>Products</th><th>Price</th></tr>
            </thead>
            <tbody>
              {{-- DUMMY --}}
              <tr>
                <td>1</td>
                <td class="productimgname">
                  <a href="#" class="product-img"><img src="{{ asset('assets/img/product/product2.jpg') }}" alt="product"></a>
                  <a href="#">Oranges (crate)</a>
                </td>
                <td>$18.50</td>
              </tr>
              <tr>
                <td>2</td>
                <td class="productimgname">
                  <a href="#" class="product-img"><img src="{{ asset('assets/img/product/product3.jpg') }}" alt="product"></a>
                  <a href="#">Pineapple</a>
                </td>
                <td>$4.20</td>
              </tr>
              <tr>
                <td>3</td>
                <td class="productimgname">
                  <a href="#" class="product-img"><img src="{{ asset('assets/img/product/product4.jpg') }}" alt="product"></a>
                  <a href="#">Strawberries (box)</a>
                </td>
                <td>$6.75</td>
              </tr>
              <tr>
                <td>4</td>
                <td class="productimgname">
                  <a href="#" class="product-img"><img src="{{ asset('assets/img/product/product5.jpg') }}" alt="product"></a>
                  <a href="#">Avocados (bag)</a>
                </td>
                <td>$9.10</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card mb-0">
  <div class="card-body">
    <h4 class="card-title">Upcoming Preorders</h4>
    <div class="table-responsive dataview">
      <table class="table datatable">
        <thead>
          <tr>
            <th>SNo</th>
            <th>Preorder Code</th>
            <th>Customer</th>
            <th>Items</th>
            <th>Pickup Date</th>
          </tr>
        </thead>
        <tbody>
          {{-- DUMMY --}}
          <tr>
            <td>1</td>
            <td><a href="javascript:void(0);">PO0001</a></td>
            <td class="productimgname"><a href="#">Green Leaf Cafe</a></td>
            <td>N/D</td>
            <td>12-09-2026</td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="javascript:void(0);">PO0002</a></td>
            <td class="productimgname"><a href="#">Riverside Bistro</a></td>
            <td>N/D</td>
            <td>13-09-2026</td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="javascript:void(0);">PO0003</a></td>
            <td class="productimgname"><a href="#">Sunday Farmers Market</a></td>
            <td>N/D</td>
            <td>14-09-2026</td>
          </tr>
          <tr>
            <td>4</td>
            <td><a href="javascript:void(0);">PO0004</a></td>
            <td class="productimgname"><a href="#">Maple &amp; Co. Grocers</a></td>
            <td>N/D</td>
            <td>15-09-2026</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@push('scripts')
  <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>
@endpush
