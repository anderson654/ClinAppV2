
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">ChartJs</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ChartJs</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- Start::row-1 -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Chartjs Line Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjs-line" class="chartjs-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Chartjs Bar Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjs-bar" class="chartjs-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Chartjs Pie Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjs-pie" class="chartjs-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Chartjs Doughnut Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjs-doughnut" class="chartjs-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Chartjs Mixed Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjs-mixed" class="chartjs-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Chartjs Polar Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjs-polar" class="chartjs-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Chartjs Radial Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjs-radar" class="chartjs-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Chartjs Scatter Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjs-scatter" class="chartjs-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Chartjs Bubble Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjs-bubble" class="chartjs-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End::row-1 -->
                    </div>
                    <!-- CONTAINER CLOSE -->

@endsection

@section('scripts')
	
	    <!-- Chartjs Chart JS -->
        <script src="{{asset('build/assets/libs/chart.js/chart.min.js')}}"></script>

        <!-- Imternal Chartjs JS -->
        @vite('resources/assets/js/chartjs-charts.js')

@endsection
