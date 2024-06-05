
@extends('layouts.app')

@section('content')
@can('admin_home')

<div class="row">

	
        <div class="panel-body">
			
			
			@if(session()->has('message'))
				<div class="alert alert-error">
					<strong>{{ session()->get('message') }}</strong>
				</div>
			@endif
			@if (Session::has('admin-mensagem-sucesso'))
				<div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>	
			@endif
			@if (Session::has('admin-mensagem-error'))
				<div class="alert alert-error"><strong>{{ Session::get('admin-mensagem-error') }}<strong></div>
			@endif
			@if(session()->has('message'))
				<div class="alert alert-success">
					{{ session()->get('message') }}
				</div>
			@endif   
			<h3 class="page-title">Agendar novo serviço</h3>
			@can('admin_service_create')
			<p>
				<a href="{{ route('admin.agendamento.admin') }}" class="btn btn-success">@lang('abrigosoftware.as_add_new')</a>
				
			</p>
			@endcan
		</div>
		

	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>{{$qtClients}}</h3>

				<p>Clientes Cadastrados</p>
			</div>
			<div class="icon">
				<i class="fa fa-address-card-o"></i>
			</div>
			<a href="{{route('admin.users.index', ['role_id' => 4])}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div><!-- ./col -->
	
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-teal">
			<div class="inner">
				<h3>{{$qtServices}}</h3>

				<p>Faxinas Cadastradas</p>
			</div>
			<div class="icon">
				<i class="fa fa-briefcase"></i>
			</div>
			<a href="{{route('admin.services.index')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div><!-- ./col -->
	
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-olive">
			<div class="inner">
				<h3>{{$qtSubscriptions}}</h3>

				<p>Assinaturas Ativas</p>
			</div>
			<div class="icon">
				<i class="fa fa-check-circle"></i>
			</div>
			<a href="{{route('admin.subscriptions.index')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div><!-- ./col -->
	
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-ch-red">
			<div class="inner">
				<h3>{{$qtProfissionais}}</h3>

				<p>Profissionais Cadastrados(as)</p>
			</div>
			<div class="icon">
				<i class="fa fa-user"></i>
			</div>
			<a href="{{route('admin.professionals.index')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div><!-- ./col -->
	
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-ch-red">
			<div class="inner">
				<h4>{{$ratingLastYear}} 2021   /  {{$ratingLastMonth}} {{$actualyMonth}} </h4>

				<p>Avaliação média Clean</p>
			</div>
			<div class="icon">
				<i class="fa fa-user"></i>
			</div>
			<a href="{{route('admin.dashboard.ratings')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div><!-- ./col -->
	
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-yellow">
			<div class="inner">
				<h3>{{$qtServicesofMonth}}</h3><h6>Total de Cleans no mês</h6>
			</div>
			<div class="icon">
				<i class="fa fa-calendar"></i>
			</div>
			<a href="{{route('admin.services_calendar')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div><!-- ./col -->
	
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-green">
			<div class="inner">
				<h3>R$ {{$totalValueMonth}}</h3>

				<p>Valor total Transacionado PREVISTO para  Mês Atual</p>
			</div>
			<div class="icon">
				<i class="fa fa-smile-o" aria-hidden="true"></i>
			</div>
			</div>
	</div><!-- ./col -->
	
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-green">
			<div class="inner">
				<h3>R$ {{$totalValueMonthToday}}</h3>

				<p>Valor total realizado no Mês Até HOJE</p>
			</div>
			<div class="icon">
				<i class="fa fa-smile-o" aria-hidden="true"></i>
			</div>
			</div>
	</div><!-- ./col -->
				
				
</div>

@if(count($services) > 0)
<div class="row">
	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Faxinas Aprovadas e Disponíveis (com vagas abertas)</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table">
                <tbody>
					<tr>
					  <th>ID</th>
					  <th>Cliente</th>
					  <th>CIDADE</th>
					  <th>Data e Hora</th>
					  <th>Tempo</th>
					  <th>Vagas</th>					 
					  <th>Tipo</th>
					  <th>Detalhes</th>
					   <th>Quem AGENDOU</th>
					  <th>Ações</th>
					</tr>
				@foreach($services as $service)
					@php
						$city = '-----';
						// dd($service);
						if(isset($service->address->city_id)){
							$city = \App\City::where('id', $service->address->city_id)->value('title');
							//$city = $city->title;
						}
					{{--$start = \Carbon\Carbon::createFromFormat('d/m/Y H:i:s', $service->created_at);--}}
						$start = $service->start_time;
						$finish = \Carbon\Carbon::now();
						$hours = $finish->diffInHours($start);
						$start_time = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $service->start_time)->format("d/m/y H:i"); 
					
					@endphp
				<tr @if($hours <= 18) class="cleanhouse-red" @elseif($hours <= 24) class="cleanhouse-yellow" @endif>
					  <td>{{$service->id}}</td>
					  
					  @if (isset($service->corporateClient))  
						  <td>{{$service->corporateClient->razao_social}}</td>
					  @elseif(isset($service->client))	  
						  <td>{{$service->client->name}}</td>
					  @else
						  <td> ----- </td>	
					  @endif	  
					  <td>{{$city}}</td>
					  <td>{{$start_time}}</td>
					  <td>{{$service->total_time}}</td>
					  <td>{{$service->qt_free_slots()}}</td>		
					  <td>{{ $service->service_category->title }}</td>
					  <td>{{ $service->service_type->title }}</td>
					 
					  @isset($service->whoScheduled->name)	  
					  	<td>{{$service->whoScheduled->name}}</td>
					  @endisset
					  @empty($service->whoScheduled->name)
						  <td> ----- </td>	
					  @endempty
					  <td>
						<a href="{{ route('admin.services.show', $service->id) }}"
							class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
						<a href="{{ route('admin.services.edit', $service->id) }}#config-slots"
							class="btn btn-xs btn-success">Atribuir</a>
					  </td>
					</tr>
				@endforeach
				</tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
</div>
@endif

@if(count($subscriptions) > 0)
<div class="row">
	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Assinaturas Aguardando Aprovação (Apenas novas e com falha)</h3>
			  <h6> Ao aprovar uma assinatura, você irá aprovar todas os serviços dessa assinatura</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table">
                <tbody>
					<tr>
					  <th>Cliente</th>
					  <th>Dt. solicitação</th>
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
				@foreach($subscriptions as $subscription)
					@php
						$now = \Carbon\Carbon::now();

						//subscription date parser
						$start_time = $subscription->startTime;
						$start_day = $subscription->startDay;
						$month = $now->month;
						$year = $now->year;
						$renew_date = Carbon\Carbon::parse("$start_day-$month-$year $start_time");

						$hours = $now->diffInHours($renew_date);
					@endphp
					<tr @if($hours <= 18) class="cleanhouse-red" @elseif($hours <= 48) class="cleanhouse-yellow"@endif>
					
						@if (isset($subscription->corporateClient))  
						  <td>{{$subscription->corporateClient->razao_social}}</td>
						@elseif(isset($subscription->client))	  
						  <td>{{$subscription->client->name}}</td>
						@else
						  <td> ----- </td>	
						@endif
					
						<td>{{ \Carbon\Carbon::parse($subscription->created_at)->format('d/m/Y H:s') }}</td>
						
						@if (isset($subscription->status))
							<td>{{$subscription->status->title}}</td>
						@else						
						 <td> ----- </td>	
						@endif
						
						@isset($subscription->address->city->title)	  
							<td>{{$subscription->address->city->title}}</td>
						@endisset
						@empty($subscription->address->city->title)
							<td> ----- </td>	
						@endempty
						
					  <td>{{$subscription->startDay}}</td>
					  <td>{{$subscription->total_time}}</td>
					  <td>{{$subscription->value_service}}</td>
					  
					  <td>
						@foreach($subscription->subscriptionDayWeeks as $subscriptionDayWeek)
							@if (isset($subscription->subscriptionDayWeek->dayWeek))
								@if($subscription->subscriptionDayWeek->dayWeek === 1)
									Segunda
								@elseif ($subscription->subscriptionDayWeek->dayWeek === 2)
									Terça
								@elseif ($subscription->subscriptionDayWeek->dayWeek === 3)
									Quarta
								@elseif ($subscription->subscriptionDayWeek->dayWeek === 4)
									Quinta
								@elseif ($subscription->subscriptionDayWeek->dayWeek === 5)
									Sexta
								@elseif ($subscription->subscriptionDayWeek->dayWeek === 6)
									Sabado
								@elseif ($subscription->subscriptionDayWeek->dayWeek === 0)
									Domingo
								@endif 	
							
							@endif
						 @endforeach
						</td>
					
						<td>{{ $subscription->service_type->title }}</td>						
						<td>{{  $subscription->service_category->title }}</td>
						@isset($subscription->whoScheduled->name)	  
						  <td>{{$subscription->whoScheduled->name}}</td>
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
						
						@if($subscription->link_boleto != NULL)
						
							<a target="_blank" href="{{$subscription->link_boleto}}" class="btn btn-warning btn-xs active" role="button" aria-pressed="true">Boleto</a>
						@endif
						
						@if($subscription->link_pagamento != NULL)
						
							<a target="_blank" href="{{$subscription->link_pagamento}}" class="btn btn-warning btn-xs active" role="button" aria-pressed="true">Cartão de crédito</a>
						@endif
					  </td>
					</tr>
				@endforeach
				</tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
</div>
@endif

@if(count($servicesWithOutPayments) > 0)
<div class="row" id="faxinas_aprovacao">
	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Faxinas Aguardando Aprovação (somente Administrador e Moderador)</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table">
                <tbody>
					<tr>
					  <th>Cliente</th>
					  <th>dt Solicit.</th>
					  <th>Como Chegou</th>
					  <th>CIDADE</th>
					  <th>Data e Hora</th>
					  <th>Tempo</th>					  
					  <th>Valor da Clean</th>					  
					  <th>FAXINA</th>
					  <th>Recorrência</th>
					  <th>Quem AGENDOU</th>
					  <th>Ações</th>
					</tr>
				@foreach($servicesWithOutPayments as $service)
					@php
						$created_at = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $service->created_at)->format("d/m/y H:i"); 
						$start = $service->start_time;
						$finish = \Carbon\Carbon::now();
						$hours = $finish->diffInHours($start);
					@endphp
					<tr @if($hours <= 18) class="cleanhouse-red" @elseif($hours <= 24) class="cleanhouse-yellow" @elseif($start < $finish) class="cleanhouse-red" @endif>
					
						@if (isset($service->corporateClient))  
						  <td>{{$service->corporateClient->razao_social}}</td>
						@elseif(isset($service->client))	  
						  <td>{{$service->client->name}}</td>
						@else
						  <td> ----- </td>	
						@endif
					
						<td>{{$created_at}}</td>
					  
						@if (isset($service->user->como_chegou))
							<td>{{$service->user->como_chegou}}</td>
						@else						
						 <td> ----- </td>	
						@endif
						 
					  @isset($service->address->city->title)	  
					  <td>{{$service->address->city->title}}</td>
					 @endisset
					 @empty($service->address->city->title)
						  <td> ----- </td>	
					 @endempty
					  <td>{{\Carbon\Carbon::parse($start)->format('d/m/Y H:i')}}</td>
					  <td>{{$service->total_time}}</td>
					  <td>{{$service->value}}</td>
					  <td>{{ $service->service_type->title }}</td>
					 <td>{{ $service->service_category->title }}</td>
						@isset($service->whoScheduled->name)	  
						  <td>{{$service->whoScheduled->name}}</td>
						  @endisset
						  @empty($service->whoScheduled->name)
							  <td> ----- </td>	
						 @endempty
					  
					  
					  <td>
						<a href="{{ route('admin.services.show', $service->id) }}"
							class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
						<!--a href="{{ route('admin.services.edit', $service->id) }}"
							class="btn btn-xs btn-success">Atribuir</a-->
							
						<!--<button class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal" data-service-id="{{$service->id}}" data-backdrop="static">Confirmar</button>-->
						<a href="{{ route('admin.services.toAprove', $service->id) }}"
							class="btn btn-xs btn-success">Aprovar</a>
							
						<a href="{{ route('admin.services.cancel', $service->id) }}"
							class="btn btn-xs btn-danger">Cancelar</a>
						
						@if($service->link_boleto != NULL)
						
							<a target="_blank" href="{{$service->link_boleto}}" class="btn btn-warning btn-xs active" role="button" aria-pressed="true">Boleto</a>
						@endif
						
						@if($service->link_pagamento != NULL)
						
							<a target="_blank" href="{{$service->link_pagamento}}" class="btn btn-warning btn-xs active" role="button" aria-pressed="true">Cartão de crédito</a>
						@endif
					  </td>
					</tr>
				@endforeach
				</tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
</div>
@endif



@if(count($leads) > 0)
<div class="row">
	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">LEADS Simulação de Valores - Aguardando Confirmação - Entrar em Contato (somente Administrador e Moderador)</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table">
                <tbody>
					<tr>
					  <th>Cliente</th>
					  <th>dt Solicit.</th>
					  <th>Como Chegou</th>
					  <th>Telefone</th>
					  <th>CIDADE</th>
					  <th>Data e Hora</th>
					  <th>Valor da Clean</th>
					  <th>Desconto</th>
					  <th>FAXINA</th>
					  <th>Recorrência</th>
					   <th>Quem AGENDOU</th>
					  <th>Ações</th>
					</tr>
				@foreach($leads as $lead)
					@php
						$created_at = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $lead->created_at)->format("d/m/y H:i"); 
						$start = $lead->start_time;
						$finish = \Carbon\Carbon::now();
						$hours = $finish->diffInHours($start);
					@endphp
					<tr @if($hours <= 18) class="cleanhouse-red" @elseif($hours <= 24) class="cleanhouse-yellow" @endif>
					
					<td>{{$lead->corporateClient->razao_social or $lead->client->name}}</td>
					 <td>{{$created_at}}</td>
					 <td>{{$lead->user->como_chegou or ''}}</td>
					 <td>{{$lead->contact->phone or ''}}</td>	
					 <td>{{$lead->address->city->title or ''}}</td>					
					 <td>{{$start}}</td>					
					 <td>{{$lead->value}}</td>					  
					 <td>{{$lead->discount or ''}}</td>
					 <td>{{ $lead->service_type->title or ''}}</td>
					 <td>{{ $lead->service_category->title or ''}}</td>
					 <td>{{$lead->whoScheduled->name or ''}}</td>
					  <td>
						<a href="{{ route('admin.services.show', $lead->id) }}"
							class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
						<!--a href="{{ route('admin.services.edit', $lead->id) }}"
							class="btn btn-xs btn-success">Atribuir</a-->
							
						<button class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal" data-service-id="{{$lead->id}}" data-backdrop="static">Confirmar</button>
						
						<a href="{{ route('admin.services.note', $lead->id) }}" class="btn btn-warning btn-xs" role="button" aria-pressed="true">Visualizado</a>

						@if($lead->link_boleto != NULL)
						
							<a target="_blank" href="{{$lead->link_boleto}}" class="btn btn-warning btn-xs active" role="button" aria-pressed="true">Boleto</a>
						@endif
						
						@if($lead->link_pagamento != NULL)
						
							<a target="_blank" href="{{$lead->link_pagamento}}" class="btn btn-warning btn-xs active" role="button" aria-pressed="true">Cartão de crédito</a>
						@endif

						@isset($lead->contact->phone)
					  	
							@if($lead->service_type_id == 4)
								<a target="_blank"  href="https://api.whatsapp.com/send?phone=55{{$lead->contact->phone}}&text=Olá meu nome é {{$operador_logado->name}}, você fez uma simulação em nosso site, para contração de diarista e limpeza para o seu escritório, e não finalizou o seu agendamento. Ficou alguma duvida? Algo em que eu possa lhe Ajudar?"
									class="btn btn-xs btn-success" >Enviar WhatsApp</a>
							@else
								<a target="_blank"  href="https://api.whatsapp.com/send?phone=55{{$lead->contact->phone}}&text=Olá meu nome é {{$operador_logado->name}}, você fez uma simulação em nosso site, para contração de diarista e limpeza para o seu lar, e não finalizou o seu agendamento. Ficou alguma duvida? Algo em que eu possa lhe Ajudar?"
									class="btn btn-xs btn-success" >Enviar WhatsApp</a>
							@endif
						@endisset


					  </td>
					</tr>
				@endforeach
				</tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
</div>
@endif


<div class="row">
	<div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Últimos 10 Clientes Cadastrados</div>

                <div class="panel-body table-responsive">
                    <table class="table table-bordered table-striped ajaxTable">
                        <thead>
                        <tr>
                            
                            <th> @lang('abrigosoftware.users.fields.name')</th> 
                            <th> @lang('abrigosoftware.users.fields.email')</th> 
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        @foreach($clients as $client)
                            <tr>
                               
                                <td>{{ $client->name }} </td> 
                                
                                <td>

                                    @can('client_view')
                                    <a href="{{ route('admin.users.show',[$client->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
                                    @endcan

                                    @can('client_edit')
                                    <a href="{{ route('admin.users.edit',[$client->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
                                    @endcan
                                
								</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
	</div>

 <div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">Últimas 10 Faxinas Solicitadas com Responsável</div>

			<div class="panel-body table-responsive">
				<table class="table table-bordered table-striped ajaxTable">
					<thead>
					<tr>
						<th> Responsável</th> 
						<th> Cliente</th> 
						<th> Data e Hora</th> 
						<th> Tempo (horas)</th> 
						<th> Bairro</th> 
						<th> Status</th> 
						<th>&nbsp;</th>
					</tr>
					</thead>
					@foreach($lastServices as $service)
						<tr>
							
							<td>@foreach($service->service_slots as $c)
								{{$c->client->name or '---'}} 
							@endforeach</td> 
							
							@if (isset($service->corporateClient))  
								  <td>{{$service->corporateClient->razao_social}}</td>
							  @elseif(isset($service->client))	  
								  <td>{{$service->client->name}}</td>
							  @else
								  <td> ----- </td>	
							  @endif
							
							<td>{{$service->start_time}}</td>
							<td>{{$service->total_time}} </td> 
							
							 @isset($service->address->neighborhood)	  
							  <td>{{$service->address->neighborhood}}</td>
							  @endisset
							  @empty($service->address->neighborhood)
								  <td> ----- </td>	
							  @endempty
							  
							@if(isset($service->status->title))
								<td>{{$service->status->title}} </td> 
							@else
								<td> ----- </td>
							@endif
							<td>

								@can('service_view')
								<a href="{{ route('admin.services.show',[$service->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
								@endcan

								@can('service_edit')
								<a href="{{ route('admin.services.edit',[$service->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
								@endcan                                
							</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
 </div>


</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Abertura de Vagas para a Faxina</h4>
	  </div>
	  {!! Form::open(['method' => 'POST', 'route' => ['admin.services.config']]) !!}
	  <input type="hidden" name="id" id="id">
	  <div class="modal-body" id="load-modal">
		
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
		{!! Form::submit(trans('abrigosoftware.as_save'), ['class' => 'btn btn-success', 'id' => 'modal-save']) !!}
		{!! Form::close() !!}
	  </div>
	</div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endcan
@endsection

	

@can('admin_home')
@section('javascript')

<script>

/*var backup = "";
	$('#modal').on('show.bs.modal', function (event) {
		//backup = $('#vagas-em-faxinas').html();
		var button = $(event.relatedTarget); // Button that triggered the modal
		var id = button.data('service-id');
		$('#id').val(id);
		$.get( "{{url('admin/services_load_config')}}" + "/" + id, function( data ) {
            console.log(data);
        });
		
	});
	$('#modal').on('hide.bs.modal', function (event) {
		$("#vagas-em-faxinas").html(backup);
	});*/
	
	$('[data-toggle="modal"]').click(function(e) {
		var id = e.currentTarget.dataset.serviceId;
		$('#id').val(id);
		$.get( "{{url('admin/services_load_config')}}" + "/" + id, function( data ) {
            $("#load-modal").html(data);
        });
	});
</script>

@stop
@endcan

