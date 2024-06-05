@extends('layouts.app')
@section('content')

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: white;
            text-align: center;
            border-top: 1px solid #ddd;
        }

        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin: 5px 0;
            padding: 5px;
        }

        .no-bullets {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

    </style>

    <h2 class="text-center">
        <i class="fa fa-dollar"></i>
        PAGAMENTOS
    </h2>

    <div class="card">
        <i class="fa fa-check" style="color: green;"></i> Pago <br>
        <i class="fa fa-circle-o-notch" style="color: yellow;"></i> Aguardando Pagamento <br>
        <i class="fa fa-spinner" style="color: blue"></i> Enviado ao banco <br>
        <i class="fa fa-close" style="color: red"></i> Falha no pagamento / Cancelado <br>
        <i class="fa fa-exchange" style="color: orange"></i> Pagamento estornado <br>
    </div>

    <ul class="list-group">
        @if (strlen($services) > 2)
            @foreach ($services as $index => $service)
                <li class="list-group-item">
                    <div class="row toggle" id="dropdown-detail-{{ $index }}"
                        data-toggle="detail-{{ $index }}">
                        <div class="col-xs-10">
                            @if ($service->payment_status)
                                @if ($service->payment_status->id == '1')
                                    <i class="fa fa-circle-o-notch" style="color: yellow;"></i>
                                @elseif($service->payment_status->id == '2')
                                    <i class="fa fa-check" style="color: green;"></i>
                                @elseif($service->payment_status->id == '4')
                                    <i class="fa fa-spinner" style="color: green;"></i>
                                @elseif ($service->payment_status->id == '5' || $service->payment_status->id == '3')
                                    <i class="fa fa-close" style="color: red"></i>
                                @elseif ($service->payment_status->id == '6')
                                    <i class="fa fa-exchange" style="color: orange"></i>
                                @endif
                            @else
                            @endif
                            @if ($service->client)
                                {{ $service->client->name }}
                            @elseif ($service->corporateClient)
                                {{ $service->corporateClient->razao_social }}
                            @else
                                N/A
                            @endif
                        </div>
                        <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            @php
                                $start_time = \Carbon\Carbon::parse($service->start_time)->format('d/m/Y');
                            @endphp
                            <strong>{{ $start_time }}</strong>
                        </div>
                    </div>
                    <div id="detail-{{ $index }}">
                        <hr>
                        <div class="container">
                            <div class="fluid-row">
                                <div class="col-sm-1">
                                    <strong>Detalhes:</strong>
                                </div>
                                <div class="col-sm-5">
                                    <ul class="no-bullets">
                                        <li>ID: {{ $service->id }}</li>
                                        <li>Produto:
                                            @if ($service->products_included == 1)
                                                SIM
                                            @else
                                                NÃO
                                            @endif
                                        </li>
                                        <li>Tempo: {{ $service->total_time }} hrs</li>
                                        @foreach ($service->service_slots as $slot)
                                            @if ($slot->user_id == $user->id)
                                                <li>Valor: {{ $slot->value }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <hr>
                                <p class="text-center">
                                    @if ($service->payment_status)
                                        @if ($service->payment_status->id == '1')
                                            <i class="fa fa-circle-o-notch" style="color: yellow;"></i>
                                        @elseif($service->payment_status->id == '2')
                                            <i class="fa fa-check" style="color: green;"></i>
                                        @elseif($service->payment_status->id == '4')
                                            <i class="fa fa-spinner" style="color: green;"></i>
                                        @elseif ($service->payment_status->id == '5' || $service->payment_status->id == '3')
                                            <i class="fa fa-close" style="color: red"></i>
                                        @elseif ($service->payment_status->id == '6')
                                            <i class="fa fa-exchange" style="color: orange"></i>
                                        @endif
                                    @else
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach

        @endif
    </ul>

    <footer class="footer">
        <div class="text-center">
            <p>Clin</p>
            <p>2021 - All Rights Reserved</p>
        </div>
    </footer>

@endsection
