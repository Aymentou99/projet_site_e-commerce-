@extends('layouts.admin')

@section('css')
<!--  Owl-carousel css-->
<link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />



 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['order', 'percentage'],

          ['all order',{{ $count_all }} ],

        ]);

        var options = {
          title: 'order'

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>










<!-- Maps css -->
<link href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(255, 26, 104, 1);
    }

    .chartMenu p {
        padding: 10px;
        font-size: 20px;
    }

    .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(255, 26, 104, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chartBox {
        width: 700px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(255, 26, 104, 1);
        background: white;
    }
</style>
@endsection
@section('content')
<!-- row -->
<div class="row row-sm ">
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-primary-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white"> order completed / pending</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">

                                total price : {{ number_format(\App\Models\Order::sum('totalprice'), 2)}}$
                            </h4>
                            <p class="mb-0 tx-12 text-white op-7">How Many :{{ \App\Models\Order::count() }}</p>
                        </div>
                        <span class="float-right my-auto mr-auto">
                            <i class="fas fa-arrow-circle-up text-white"></i>
                            <span class="text-white op-7">100%</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-danger-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">Order completed</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h3 class="tx-20 font-weight-bold mb-1 text-white">
                                total price :
                                {{ number_format(\App\Models\Order::where('status', '1')->sum('totalprice'), 2) }}$

                            </h3>
                            <p class="mb-0 tx-12 text-white op-7"> How Many : {{ \App\Models\Order::where('status', '1')->count() }}
                            </p>
                        </div>
                        <span class="float-right my-auto mr-auto">
                            <i class="fas fa-arrow-circle-down text-white"></i>
                            <span class="text-white op-7">

                                @php
                                $count_all= \App\Models\Order::count();
                                $count_order = \App\Models\Order::where('status', '1')->count();
                                if($count_order == 0){
                                echo $count_order = 0;
                                }
                                else{
                                echo $count_order = $count_order / $count_all *100;
                                }
                                @endphp

                            </span>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-success-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">order pending</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">

                                total price : {{ number_format(\App\Models\Order::where('status', 0)->sum('totalprice'), 2) }}$</h4>

                            <p class="mb-0 tx-12 text-white op-7">
                                How Many : {{ \App\Models\Order::where('status', '0')->count() }}
                            </p>
                        </div>
                        <span class="float-right my-auto mr-auto">
                            <i class="fas fa-arrow-circle-up text-white"></i>
                            <span class="text-white op-7">
                                @php
                                $count_all= \App\Models\Order::count();
                                $count_invoices1 =\App\Models\Order::where('status', '0')->count();
                                if($count_invoices1 == 0){
                                echo $count_invoices1 = 0;
                                }
                                else{
                                echo $count_invoices1 = $count_invoices1 / $count_all *100;
                                }
                                @endphp
                            </span>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- row closed -->

<!-- row opened -->
<div class="row row-sm">
    <div class="col-md-12 col-lg-12 col-xl-7">
        <div class="card">
            <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">order graph</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>

            </div>
            <div class="card-body" style="width:50%">

  <div id="piechart" style="width:900px; height: 500px;"></div>
            </div>
        </div>
    </div>








            </div>
        </div>
    </div>
</div>
<!-- row closed -->
</div>
</div>

@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!--Internal  Chart.bundle js -->
<script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
<!-- Moment js -->
<script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
<!--Internal  Flot js-->
<script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('assets/js/dashboard.sampledata.js') }}"></script>
<script src="{{ asset('assets/js/chart.flot.sampledata.js') }}"></script>
<!--Internal Apexchart js-->
<script src="{{ asset('assets/js/apexcharts.js') }}"></script>
<!-- Internal Map -->
<script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('assets/js/modal-popup.js') }}"></script>
<!--Internal  index js -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="{{ asset('assets/js/index.js') }}"></script>
<script src="{{ asset('assets/js/jquery.vmap.sampledata.js') }}"></script>
@endsection
