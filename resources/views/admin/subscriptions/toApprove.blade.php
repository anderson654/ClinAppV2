@extends('layouts.app');
@section('content')
    @if (count($subscriptions) > 0)
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Assinaturas Aguardando Aprovação (somente Administrador e Moderador)</h3>
                        <h6> Ao aprovar uma assinatura, você irá aprovar todas as cleans dessa assinatura</h6>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Mês referencia boleto</th>
                                    <th>Status</th>
                                    <th>CIDADE</th>
                                    <th>Data da Primeira Clean</th>
                                    <th>Tempo</th>
                                    <th>Valor da Clean</th>
                                    <th>Dia Da semana</th>
                                    <th>FAXINA</th>
                                    <th>Recorrência</th>
                                    <th>Quem AGENDOU</th>
                                    <th>Ações</th>
                                </tr>
                                @foreach ($subscriptions as $subscription)
                                    @php
                                        $now = \Carbon\Carbon::now();
                                        
                                        //subscription date parser
                                        $start_time = $subscription->startTime;
                                        $start_day = $subscription->startDay;
                                        $year = $now->year;
                                        $firstCleanAfterRenew = 'N/A';
                                        $hours = null;
                                        $dayWeek = 'N/A';
                                        $arrayDayWeek = [
                                            0 => 'domingo',
                                            1 => 'segunda',
                                            2 => 'terca',
                                            3 => 'quarta',
                                            4 => 'quinta',
                                            5 => 'sexta',
                                            6 => 'sabado',
                                        ];
                                        
                                        try {
                                            //get subscription payment month reference
                                            $payment = \App\Payment::where('subscription_id', $subscription->id)
                                                ->orderBy('created_at', 'DESC')
                                                ->first();
                                        
                                            //get first clean date
                                            $firstCleanAfterRenew = \App\Clean::where('subscription_id', $subscription->id)
                                                ->where('status_id', 1)
                                                ->orderBy('start_time', 'ASC')
                                                ->first();
                                            $firstCleanAfterRenew = \Carbon\Carbon::parse($firstCleanAfterRenew->start_time)->format('d/m/Y H:i');
                                        
                                            $hours = $now->diffInHours($firstCleanAfterRenew);
                                        
                                            $dayWeek = \App\SubscriptionDayweek::where('subscription_id', $subscription->id)
                                                ->first()
                                                ->value('dayWeek');
                                            $dayWeek = $arrayDayWeek[$dayWeek];
                                        } catch (\Throwable $th) {
                                        }
                                    @endphp
                                    <tr
                                        @if ($hours <= 18) class="cleanhouse-red" @elseif($hours <= 48) class="cleanhouse-yellow" @endif>

                                        @if (isset($subscription->corporateClient))
                                            <td>{{ $subscription->corporateClient->razao_social }}</td>
                                        @elseif(isset($subscription->client))
                                            <td>{{ $subscription->client->name }}</td>
                                        @else
                                            <td> ----- </td>
                                        @endif

                                        <td>{{ $payment->month or '' }}</td>

                                        @if (isset($subscription->status))
                                            <td>{{ $subscription->status->title }}</td>
                                        @else
                                            <td> ----- </td>
                                        @endif

                                        @isset($subscription->user->address->city->title)
                                            <td>{{ $subscription->user->address->city->title }}</td>
                                        @endisset
                                        @empty($subscription->user->address->city->title)
                                            <td> ----- </td>
                                        @endempty

                                        <td> {{ $firstCleanAfterRenew }}
                                        </td>
                                        <td>{{ $subscription->total_time }}</td>
                                        <td>{{ $subscription->value_clean }}</td>

                                        <td> {{ $dayWeek or '' }} </td>

                                        <td>
                                            @if ($subscription->clean_type_id === 1)
                                                COMUM
                                            @elseif ($subscription->clean_type_id === 2)
                                                EXPRESS
                                            @elseif ($subscription->clean_type_id === 3)
                                                ALTO BRILHO
                                            @elseif ($subscription->clean_type_id === 4)
                                                COMERCIAL
                                            @endif
                                        </td>

                                        <td>
                                            @if ($subscription->clean_category_id === 2)
                                                Quinzenal
                                            @elseif ($subscription->clean_category_id === 3)
                                                Semanal
                                            @elseif ($subscription->clean_category_id === 4)
                                                Multipla
                                            @endif
                                        </td>
                                        @isset($subscription->whoScheduled->name)
                                            <td>{{ $subscription->whoScheduled->name }}</td>
                                        @endisset
                                        @empty($subscription->whoScheduled->name)
                                            <td> ----- </td>
                                        @endempty

                                        <td>
                                            <a href="{{ route('admin.subscriptions.show', $subscription->id) }}"
                                                class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>

                                            <a href="{{ route('admin.subscriptions.toAprove', $subscription->id) }}"
                                                class="btn btn-xs btn-success">Aprovar</a>

                                            <a href="{{ route('admin.subscriptions.cancel', $subscription->id) }}"
                                                class="btn btn-xs btn-danger">Cancelar</a>

                                            @if ($subscription->link_boleto != null)
                                                <a target="_blank" href="{{ $subscription->link_boleto }}"
                                                    class="btn btn-warning btn-xs active" role="button"
                                                    aria-pressed="true">Boleto</a>
                                            @endif

                                            @if ($subscription->link_pagamento != null)
                                                <a target="_blank" href="{{ $subscription->link_pagamento }}"
                                                    class="btn btn-warning btn-xs active" role="button"
                                                    aria-pressed="true">Cartão de crédito</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    @endif
@endsection
