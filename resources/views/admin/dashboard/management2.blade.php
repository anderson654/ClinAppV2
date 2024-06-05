@extends('layouts.app')

@section('content')
    @can('admin_home')

        {{-- <meta http-equiv="refresh" content="60; URL=https://app.clin.app.br/admin/dashboard/management2"> --}}
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            window.google.charts.load('46', {
                packages: ['corechart']
            });
        </script>

        <div class="row">

            @if (Session::has('admin-mensagem-sucesso'))
                <div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>


            @endif

            <div class="col-lg-3 col-xs-6">
                <div @if ($percentaGrowthFirstWeek > 0) class="small-box bg-olive" @elseif($percentaGrowthFirstWeek <= 0) class="small-box bg-ch-red" @endif>
                    <div class="inner">
                        <h3>R$ {{ $totalAmountFirstWeek }}</h3>

                        <p>Valor total da 1ª semana
                            <br> de 01-{{ $mes }} a 07-{{ $mes }}
                        </p>
                    </div>
                    <div class="text-center">
                        <p>
                        <h4><strong>{{ number_format($percentaGrowthFirstWeek, 2, ',', '.') }} % de
                                @if ($percentaGrowthFirstWeek > 0)crescimento
                                @elseif($percentaGrowthFirstWeek <= 0) queda @endif
                            </strong></h4>
                        </p>
                    </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <div @if ($percentaGrowthSecondWeek > 0) class="small-box bg-olive" @elseif($percentaGrowthSecondWeek <= 0) class="small-box bg-ch-red" @endif>
                    <div class="inner">
                        <h3>R$ {{ $totalAmountSecondWeek }}</h3>

                        <p>Valor total da 2ª semana
                            <br> de 08-{{ $mes }} a 14-{{ $mes }}
                        </p>
                    </div>

                    <div class="text-center">
                        <p>
                        <h4><strong>{{ number_format($percentaGrowthSecondWeek, 2, ',', '.') }} % de
                                @if ($percentaGrowthSecondWeek > 0)crescimento
                                @elseif($percentaGrowthSecondWeek <= 0) queda @endif
                            </strong></h4>
                        </p>
                    </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <div @if ($percentaGrowthThreeWeek > 0) class="small-box bg-olive" @elseif($percentaGrowthThreeWeek <= 0) class="small-box bg-ch-red" @endif>
                    <div class="inner">
                        <h3>R$ {{ $totalAmountThreeWeek }}</h3>

                        <p>Valor total da 3ª semana
                            <br> de 15-{{ $mes }} a 21-{{ $mes }}
                        </p>
                    </div>
                    <div class="text-center">
                        <p>
                        <h4><strong>{{ number_format($percentaGrowthThreeWeek, 2, ',', '.') }} % de
                                @if ($percentaGrowthThreeWeek > 0)crescimento
                                @elseif($percentaGrowthThreeWeek <= 0) queda @endif
                            </strong></h4>
                        </p>
                    </div>
                </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
                <div @if ($percentaGrowthFourWeek > 0) class="small-box bg-olive" @elseif($percentaGrowthFourWeek <= 0) class="small-box bg-ch-red" @endif>
                    <div class="inner">
                        <h3>R$ {{ $totalAmountFourWeek }}</h3>

                        <p>Valor total da 4ª semana
                            <br> de 22-{{ $mes }} aa 28-{{ $mes }}
                        </p>
                    </div>
                    <div class="text-center">
                        <p>
                        <h4><strong>{{ number_format($percentaGrowthFourWeek, 2, ',', '.') }} % de
                                @if ($percentaGrowthFourWeek > 0)crescimento
                                @elseif($percentaGrowthFourWeek <= 0) queda @endif
                            </strong></h4>
                        </p>
                    </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <div @if ($percentaGrowthFifthWeek > 0) class="small-box bg-olive" @elseif($percentaGrowthFifthWeek <= 0) class="small-box bg-ch-red" @endif>
                    <div class="inner">
                        <h3>R$ {{ $totalAmountFifthWeek }}</h3>

                        <p>Valor total da 5ª semana
                            <br> de 29-{{ $mes }} a {{ $endCurrentMonth }}
                        </p>
                    </div>
                    <div class="text-center">
                        <p>
                        <h4><strong>{{ number_format($percentaGrowthFifthWeek, 2, ',', '.') }} % de
                                @if ($percentaGrowthFifthWeek > 0)crescimento
                                @elseif($percentaGrowthFifthWeek <= 0) queda @endif
                            </strong></h4>
                        </p>
                    </div>
                </div>
            </div><!-- ./col -->
        </div>



        <div class="row">
            <div class="col-sm">
                <div class="col-md-12" align="center" id="week_div">
                    {!! $Lava->render('LineChart', 'TotalAmountWeek', 'week_div', true) !!}
                    <br><br><br><br><br><br><br><br><br><br>
                </div>

            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm">
                <div class="col-md-12" align="center" id="TotalAmountDay_div">
                    {!! $Lava->render('ColumnChart', 'TotalAmountDay', 'TotalAmountDaydiv', true) !!}
                    <br><br><br><br><br><br><br><br><br><br>
                </div>

            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-sm">
                <div class="col-md-6" align="center" id="TotalCostumers_div">

                    <br><br><br><br><br><br><br><br><br><br>
                </div>
                <div class="col-md-6" align="center" id="TotalCostumersByCategory">


                    <br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    @endsection

    <script>
        setTimeout(function() {
                    window.location.reload(1);
                }, 600000
    </script>
@endcan('admin_home')
