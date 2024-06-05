
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Apex Charts</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Charts</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Apex Charts</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Line Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="line-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Area Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="area-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Column Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="column-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Bar Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="bar-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Line &amp; Column Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="mixed-linecolumn"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Timeline Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="timeline-basic"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Candlestick Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="candlestick-basic"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Boxplot Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="boxplot-basic"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> 3D Bubble Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="bubble-3d"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">  Datetime Scatter Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="scatter-datetime"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">   Heatmap Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="heatmap-basic"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">  Treemap Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="treemap-basic"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Pie Chart</div>
                                    </div>
                                    <div class="card-body mx-auto">
                                        <div id="pie-basic"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Donut Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="donut-simple"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Radial Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="radialbar-basic"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title">Stroked Circular Gauge</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="circular-stroked"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Radar Chart-Multiple Series</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="radar-multiple"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header">
                                        <div class="card-title"> Polar Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="polararea-basic"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	    <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    
        <!---Used In Annotations Chart-->
        <script src="{{asset('build/assets/apexcharts-stock-prices.js')}}"></script>

        <!-- Internal Apex Line Charts JS -->
        @vite('resources/assets/js/apexchart.js')

@endsection
