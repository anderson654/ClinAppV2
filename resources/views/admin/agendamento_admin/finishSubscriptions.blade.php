@extends('layouts.app')

@section('content')
    
    <div class="panel panel-default">
        <div class="panel-heading">
           Assinatura Criada com Sucesso
        </div>
        
        <div class="panel-body">
			 <div class="panel-heading">
				@lang('abrigosoftware.as_create')
			</div>
			
			
			@if (Session::has('admin-mensagem-sucesso'))
				<div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>	
			@endif
			@if (Session::has('admin-mensagem-error'))
				<div class="alert alert-error"><strong>{{ Session::get('admin-mensagem-error') }}<strong></div>
			@endif
			
			@if(session()->has('mensagem-falha'))
				<div class="alert alert-success">
					{{ session()->get('mensagem-falha') }}
				</div>
			@endif        
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 order-md-2 mb-4">
			
					@php
						$start_date = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $service->start_time)->format("d/m/y");
					@endphp
					<h1 style="margin-top: 70px; color:gray">
						<img src="/abrigosoftware/images/that-s-all-folks.png"></a> 	 
					</h1>
					
					<h4 class="d-flex justify-content-between align-items-center mb-3">
						<span class="text-muted"><br>Nova Assinatura Criada com Sucesso Parabéns {{$user_logado->name}}
								Mais uma para a META do Mês de {{$mes}} <br> Bora bater essa META e tomar uns bons Drinks!!!!
							
							<h3> Data de realização do primeiro serviço <strong>{{$start_date}}</strong> </h3>
							
						<span class="badge badge-secondary badge-pill"></span>
						<span class="text-muted"><h5><strong>R$ {{$payment_subscription->value - $service->discount}}<br> Valor do Primeiro mês da Assinatura</strong></h5></span>
					 </h4>
					 <hr/>
				</div>
			</div>

			<div class="row">
		  
				<div class="col-md-6 order-md-2 mb-4">
			  
					<h4 class="d-flex justify-content-between align-items-center mb-3">
						<span class="text-muted">Confira detalhes do seu pedido<br>
							ID da Nova Assinatura - {{$subscription->id}}</span>			
						<span class="badge badge-secondary badge-pill"></span>
								
					</h4>
					<ul class="list-group mb-3">
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							<div>
								
								<h6 class="my-0">
										@if ( $subscription->service_category_id == 2 )
											
											Assinatura 
											@if($subscription->service_type_id == 4 )
													Comercial
											@else
													Residencial
											@endif
											Quinzenal
											
										@elseif ( $subscription->service_category_id == 3 )
											
											Assinatura 
											@if($subscription->service_type_id == 4 )
													Comercial
											@else
													Residencial
											@endif
											Semanal
											
										@else 											
											Assinatura 
											@if($subscription->service_type_id == 4 )
													Comercial
											@else
													Residencial
											@endif
											Multipla
										@endif
										
								</h6>
								<h6 class="my-0">
									@if ( $service->service_type_id == 1 )
										
										Faxina Residencial Comum
										
									@elseif ( $service->service_type_id == 2 )
										
										Faxina Residencial Express
										
									@else 
										
										Faxina Residencial Alto Brilho
									@endif
									
								</h6>
								<small class="text-muted">
							
									@if ( $service->products_included == 1)
									
										Com todos os produtos inclusos
									
									@else 
										
										Sem os produtos
										
									@endif
												
								</small>
							</div>
							<span class="text-muted"><h5><strong>R$ {{$service->value}}<br> Cada Faxina</strong></h5></span>
						</li>
						@if ($service->discount > 0)
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div>
									<h6 class="my-0">
									DESCONTO DE CUPOM: 
									
								</h6>
								<small class="text-muted">						
												
								</small>								
								</div>
								<span class="text-muted"><h5><strong>R$ {{$service->discount}}<br> na primeira faxina</strong></h5></span>
													
							</li>
						@endif
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							<div>
								<h6 class="my-0">Tempo Contratado </h6>
								
							</div>
						   <span class="text-muted"><strong><h5>{{$service->total_time}} horas - Cada Serviço</strong></h5></span>
						</li>
					
						
						@if($service->discount > 0)
							<li class="list-group-item d-flex justify-content-between">
								<h3 style="color:#e6b21f;text-align:center;">
								<strong>
							 
								  @if ($service->service_category_id == 1)
									 
									R$ {{(float)$service->value - (float)$service->discount}}
									
								  @else
									  <span>Valor da 1ª assinatura - </span> 
										R$ {{$subscription->value}} </h3><br>
										
										<span>Valor das proximas assinaturas - </span> 
										R$ {{$subscription->value * $qtde_services}} por mês</h3>
								
								  @endif
							  
								</strong>
							</li>
						@else
							<li class="list-group-item d-flex justify-content-between">
								<span><h3 style="color:#e6b21f;text-align:center;">Valor Total - </span>
								<strong>
							 
								  @if ($service->service_category_id == 1)
									  
									R$ {{$service->value}}
									
								  @else
									  
									R$ {{$payment_subscription->value}} por mês</h3>
								
								  @endif
							  
								</strong>
							</li>
						@endif
						
						@if(isset($payment_subscription->link_boleto))
							<li class="button-print-invoice">
								<a class="btn btn-primary btn-lg btn-block" target="_blank" href="{{$payment_subscription->link_boleto}}" role="button">Imprimir Boleto</a>
							</li>
						@elseif(isset($payment_subscription->checkoutUrl))
							<li class="button-print-invoice">
								<a class="btn btn-primary btn-lg btn-block" target="_blank" href="{{$payment_subscription->checkoutUrl}}" role="button">Link do Checkout para pagamento</a>
							</li>
						@endif
					</ul>
				</div> 
			
			
				<div class="col-md-6 order-md-2 mb-4">
					<h4 class="d-flex justify-content-between align-items-center mb-3">
						<span style="color:#e6b21f">
							<u>*Confira com <strong>ATENÇÃO</strong> as datas e os horários dos agendamentos dos Serviços no mês de {{$mes}}!</u> 
						</span>
					</h4>
					<div>	
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							@foreach($services as $service)
								@php
									$date = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $service->start_time)->format("d/m/Y");
									
									$start_time = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $service->start_time)->format("H:i");
									
									
								@endphp
							
							<h3 style="color:#1e4de8">
								
								<span style="color:#000000" >Data: </span> <strong>{{$date}}</strong>
								
							</h3>
							</br>
							<h3 style="color:#1e4de8"><span style="color:#000000" >Horário de Início: </span><strong> {{$start_time}}</h3>
						@endforeach
						</li> 
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							  <div>
								<h6 class="my-0">
								  Observações: <br/><br/>
								  <span>- O Cancelamento de uma faxina deverá ser realizada com 24 horas de antecendência, podendo ser aplicado uma multa de <strong>R$ 50,00</strong></span>  
								</h6>
							  </div>
						 </li>			
						
					</div><br>
					<h4 class="d-flex justify-content-between align-items-center mb-3">
					<span class="text-muted">Dados do Cliente</span>
				</h4>
				<ul class="list-group mb-3">
					<li class="list-group-item d-flex justify-content-between lh-condensed">
					  <div>
						<h6 class="my-0">
						  Nome
						</h6>
					  </div>
					  <span class="text-muted">
						  @if (isset($user->corporateClient))  
							<td>{{$user->corporateClient->razao_social}}</td>
						  @elseif(isset($user->client))	  
							  <td>{{$user->client->name}}</td>
						  @else
							  <td> ----- </td>	
						  @endif
					  </span>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
					  <div>
						<h6 class="my-0">
						  E-mail
						</h6>
					  </div>
					  <span class="text-muted">{{$user->email}}</span>
					</li>
					<li class="list-group-item d-flex justify-content-between lh-condensed">
					  <div>
						<h6 class="my-0">
						  Telefone
						</h6>
					  </div>
					  <span class="text-muted">{{$user->contact->phone}}</span>
					</li>
						<li class="list-group-item d-flex justify-content-between lh-condensed">
						<div>
							<h6 class="my-0">
								Endereço
							</h6>
						</div>
						<span class="text-muted">{{$user->address->street}}, {{$user->address->number}}</span>
					</li>
				</ul>
				</div>           
			</div>
		</div> 
</div>
		
@stop