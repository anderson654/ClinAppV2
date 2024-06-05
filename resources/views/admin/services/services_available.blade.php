@extends('professional.body')

@section('content')

    <style>
        .subheader {
            display: none;
        }

    </style>

    <div class="container">
        @if (isset($services))
            @if (count($services) > 0)

                @foreach ($services as $service)
                    @php$slot = $service->service_slots->where('user_id', null);
                                                foreach ($slot as $s) {
                                                    $slot = $s;
                                                    break;
                                                }
                                                
                                                $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $service->start_time)->format('d/m/y');
                                                $dayWeek = \Carbon\Carbon::parse($service->start_time)->dayOfWeek;
                                                
                                                $start_time = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $service->start_time)->format('H:i');
                                                $end_time = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $service->end_time)->format('H:i');
                                        @endphp ?>




                    <div class="col-md-3 col-sm-6">
                        @if ($service->service_category_id != 1)
                            <h3>Nova Assinatura Disponível</h3>
                            <h6>Ao Aceitar uma nova assinatura, você poderá ser adicionada como Profissional Preferrêncial e
                                atender fixa</h6>
                        @else
                            <h3>Faxinas Disponíveis</h3>
                        @endif
                        <div class="box box-success">
                            <div class="box-body box-profile">
                                <h4 class="profile-username text-center">
                                    @if ($service->service_category_id != 1)Assinatura
                                        {{ $service->service_category->title }}@endif
                                    {{ $service->service_type->title }}
                                    @if ($service->service_category_id == 1)
                                        {{ $service->service_category->title }} @endif
                                    {{-- Faxina @if ($service->service_type_id === 4) Comercial @else Residencial @endif --}}
                                </h4>

                                <p class="text-muted text-center">
                                    {{ $service->products_included ? '(Com Produtos Incluídos)' : '(Sem Produtos Incluídos)' }}
                                </p>

                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>
                                            <p class="text-muted text-center">
                                            <h4 class="profile-username text-center">
                                            @if ($dayWeek == 0)Domingo @elseif($dayWeek
                                            == 1) Segunda @elseif($dayWeek == 2) Terça @elseif($dayWeek == 3) Quarta
                                        @elseif($dayWeek == 4) Quinta @elseif($dayWeek == 5) Sexta
                                        @elseif($dayWeek == 6) Sabado @endif
                                        - {{ $date }}
                                    </h4>
                                    </p>
                                </b> <a class="pull-right large-date">
                                </a>
                            </li>
                            <li class="list-group-item">
                                <b>Cliente </b>
                                <a>
                                    @if (isset($service->corporateClient))
                                        <td>{{ $service->corporateClient->razao_social }}</td>
                                    @elseif(isset($service->client))
                                        <td>{{ $service->client->name }}</td>
                                    @else
                                        <td> ----- </td>
                                    @endif
                                </a>
                            </li>
                            <li class="list-group-item">
                                <b>Bairro</b> <a class="pull-right">{{ $service->address->neighborhood or '' }}</a>
                            </li>

                            <li class="list-group-item">
                                <b>Horario de Início</b> <a class="pull-right large-date">{{ $start_time }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>fim</b> <a class="pull-right large-date">{{ $end_time }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Tempo</b> <a class="pull-right">{{ $service->total_time }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Valor a Receber</b> <a class="pull-right">R$ {{ $slot->value }}</a>
                            </li>
                            {{-- <li class="list-group-item">
								  <b>Quartos</b> <a class="pull-right">{{$service->qt_bedrooms}}</a>
								</li>
								<li class="list-group-item">
								  <b>Banheiros</b> <a class="pull-right">{{$service->qt_bathrooms}}</a>
								</li> --}}
                            <li class="list-group-item">
                                <b>PET</b> <a class="pull-right">{{ $service->pet ? 'SIM' : 'NÃO' }}</a>
                            </li>
                        </ul>


                        <div class="btn-group pull-left service-options">
                            <a href="{{ route('admin.services.show', $service->id) }}"
                                class="btn btn-primary"><b>@lang('abrigosoftware.as_view')</b></a>

                        </div>
                        <div class="btn-group pull-right service-options">
                            <a href="{{ route('admin.services.assign', $slot->id) }}"
                                class="btn btn-success"><b>Aceitar Serviço</b></a>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        @endforeach
</div>
@else
<h4>Não há nenhuma nova faxina disponível no momento</h4>
@endif
@endif

{{-- // Assinatura disponivel --}}
<!-- /Assinatura - Tem prioridade -->
@if (isset($subscription))
<h3>Próxima Assinatura Disponível em que você é Profissional Preferrêncial</h3>
<div class="row">
    @php$slot = $subscription->service_slots->where('user_id', null);
                foreach ($slot as $s) {
                    $slot = $s;
                    break;
                }
                
                $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $subscription->start_time)->format('d/m/y');
                $dayWeek = \Carbon\Carbon::parse($subscription->start_time)->dayOfWeek;
                
                $start_time = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $subscription->start_time)->format('H:i');
                $end_time = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $subscription->end_time)->format('H:i');
        @endphp ?>

    <div class="col-md-3 col-sm-6">
        <div class="box box-success">
            <div class="box-body box-profile">
                <h4 class="profile-username text-center">
                    @if ($subscription->service_category_id != 1)Assinatura
                        {{ $subscription->service_category->title }}@endif
                    {{ $subscription->service_type->title }}
                    @if ($subscription->service_category_id == 1)
                        {{ $subscription->service_category->title }} @endif
                    {{-- Faxina @if ($subscription->service_type_id === 4) Comercial @else Residencial @endif --}}
                </h4>

                <p class="text-muted text-center">
                    {{ $subscription->products_included ? '(Com Produtos Incluídos)' : '(Sem Produtos Incluídos)' }}
                </p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>
                            <p class="text-muted text-center">
                            <h4 class="profile-username text-center">
                            @if ($dayWeek == 0)Domingo @elseif($dayWeek == 1)
                            Segunda @elseif($dayWeek == 2) Terça @elseif($dayWeek == 3) Quarta
                    @elseif($dayWeek == 4) Quinta @elseif($dayWeek == 5) Sexta @elseif($dayWeek ==
                        6) Sabado @endif
                    - {{ $date }}
                </h4>
                </p>
            </b> <a class="pull-right large-date"></a>
        </li>
        <li class="list-group-item">
            <b>Cliente</b>
            <a class="pull-right">
                @if (isset($subscription->corporateClient))
                    <td>{{ $subscription->corporateClient->razao_social }}</td>
                @elseif(isset($subscription->client))
                    <td>{{ $subscription->client->name }}</td>
                @else
                    <td> ----- </td>
                @endif
            </a>
        </li>
        <li class="list-group-item">
            <b>Bairro</b> <a class="pull-right">{{ $subscription->address->neighborhood or '' }}</a>
        </li>

        <li class="list-group-item">
            <b>Horario de Início</b> <a class="pull-right large-date">{{ $start_time }}</a>
        </li>
        <li class="list-group-item">
            <b>fim</b> <a class="pull-right large-date">{{ $end_time }}</a>
        </li>
        <li class="list-group-item">
            <b>Tempo</b> <a class="pull-right">{{ $subscription->total_time }}</a>
        </li>
        <li class="list-group-item">
            <b>Valor a Receber</b> <a class="pull-right">R$ {{ $slot->value }}</a>
        </li>
        <li class="list-group-item">
            <b>PET</b> <a class="pull-right">{{ $subscription->pet ? 'SIM' : 'NÃO' }}</a>
        </li>
    </ul>

    <div class="btn-group pull-left subscription-options">
        <a href="{{ route('admin.services.show', $subscription->id) }}"
            class="btn btn-primary"><b>@lang('abrigosoftware.as_view')</b></a>

    </div>
    <div class="btn-group pull-right subscription-options">
        <a href="{{ route('admin.services.assign', $slot->id) }}" class="btn btn-success"><b>Aceitar
                Serviço</b></a>
    </div>
</div>
</div>
</div>
</div>
@endif
@endsection
