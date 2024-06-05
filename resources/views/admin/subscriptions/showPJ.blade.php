@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.subscriptions.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_view')
        </div>
		@if (Session::has('admin-mensagem-sucesso'))
	            <div class="card-panel green"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>
	        @endif
			@if (Session::has('admin-mensagem-error'))
	            <div class="card-panel red"><strong>{{ Session::get('admin-mensagem-error') }}<strong></div>
	        @endif
        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                       
                        <tr>
                            <th>@lang('abrigosoftware.subscriptions.fields.service-type')</th>
                            <td field-key='service_type'>{{ $subscription->service_type->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.subscriptions.fields.service-category')</th>
                            <td field-key='service_category'>{{ $subscription->service_category->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.subscriptions.fields.client')</th>
                            <td field-key='client'>{{ $subscription->corporateClient->razao_social or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.subscriptions.fields.email')</th>
                            <td field-key='client'>{{ $subscription->user->email or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.subscriptions.fields.status')</th>
                            <td field-key='status'>{{ $subscription->status->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.subscriptions.fields.assigned-to')</th>

							
                        </tr>
                      
                        <tr>
                            <th>@lang('abrigosoftware.subscriptions.fields.total-time')</th>
                            <td field-key='total_time'>{{ $subscription->total_time or ''}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.subscriptions.fields.products-included')</th>
                            <td field-key='products_included'>{{$subscription->products_included == 1 ? "SIM" : "NÃO"}}
							{{-- Form::checkbox("products_included", 1, $subscription->products_included == 1 ? true : false, ["disabled"]) --}}</td>
                        </tr>
						
						
						
                        <tr>
                            <th>@lang('abrigosoftware.subscriptions.fields.startTime')</th>
                            <td field-key='start_time'>{{ $subscription->startTime or ''}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.subscriptions.fields.startDay')</th>
                            <td field-key='end_time'>{{ $subscription->startDay or '' }}</td>
                        </tr>
                       
                    </table>
                </div>
				
				<div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.name')</th>
                            <td field-key='name'>{{ $subscription->corporateClient->razao_social or ''}}</td>
                        </tr>
                      
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.celphone')</th>
                            <td field-key='celphone'>{{ $subscription->contact->phone or '' }}</td>
                        </tr>
                        
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.street')</th>
                            <td field-key='street'>{{ $subscription->address->street or ''}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.number')</th>
                            <td field-key='number'>{{ $subscription->address->number or ''}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.zip')</th>
                            <td field-key='zip'>{{ $subscription->address->zip }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.neighborhood')</th>
                            <td field-key='neighborhood'>{{ $subscription->address->neighborhood or '' }}</td>
                        </tr>
						<tr>
                            <th>@lang('abrigosoftware.clients.fields.complement')</th>
                            <td field-key='complement'>{{ $subscription->address->complement or ''}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.city')</th>
                            <td field-key='city'>{{ $subscription->address->city->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.state')</th>
                            <td field-key='state'>{{ $subscription->address->city->state->title or '' }}</td>
                        </tr>
                        
                    </table>
                </div>
            </div><!-- Nav tabs -->
<div class="row">							
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Dias da Semana e Profissionais Preferrênciais</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
				<table class="table">
					<tbody>
						<tr>
							<th>ID</th>
							<th>Dia Da Semana</th>
							<th>Nome da Profissional</th>	
							<th>Ações</th>
						</tr>						
					</tbody>
				</table>
			</div>           
		</div>
	</div>
</div>
@foreach ($subscription->subscriptionDayWeeks as $subscriptionDayWeek) 						  
	<form method="GET" action="{{ route('admin.subscriptions.storeDayWeekPP', $subscriptionDayWeek->dayWeek) }}">	 
		<div class="row">							
			<div class="col-xs-12">
				<div class="box">				
					<div class="box-body table-responsive no-padding">
						<table class="table">
							<tbody>								
								<tr>
									<td>{{$subscriptionDayWeek->id}}</td>					  
								  
									<td field-key='text'>
										@if($subscriptionDayWeek->dayWeek == 0)Domingo
										@elseif($subscriptionDayWeek->dayWeek == 1)Segunda
										@elseif($subscriptionDayWeek->dayWeek == 2)Terça
										@elseif($subscriptionDayWeek->dayWeek == 3)Quarta
										@elseif($subscriptionDayWeek->dayWeek == 4)Quinta
										@elseif($subscriptionDayWeek->dayWeek == 5)Sexta
										@elseif($subscriptionDayWeek->dayWeek == 6)Sabado
										@endif
									</td>
									<td field-key='text'>
										
										
										@if($subscriptionDayWeek->preferred_professional)
											
											{!! $subscriptionDayWeek->preferred_professional->professional->name  or '<strong>PROBLEMA</strong> - Sem Profissional Preferrencial Para este DayWeek'!!}
											
											
										@else
											<input type=hidden id="subscription_id" name="subscription_id" value={{ $subscription->id }}></input>
											
											{!! Form::select('user_id', $professionals, old('user_id'), ['class' => 'form-control select', 'required' => '']) !!}
										
											<td>
												<button type="submit" class="btn btn-primary">Adicionar</button>								   
											</td>
										@endif
									</td>
																
								</tr>
							</tbody>
						</table>
					</div>           
				</div>
			</div>
		</div>
	</form>
	
@endforeach
	<br><br>			  
	<form method="GET" action="{{ route('admin.subscriptions.storePP') }}">	 
		
		<div class="row">							
			<div class="col-xs-12">
				<div class="box">		
					<div class="box-header"><br><br>	
						<h3 class="box-title">Profissionais Preferrênciais - Sem dia da semana específico</h3>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<input type=hidden id="subscription_id" name="subscription_id" value={{ $subscription->id }}></input>
																	
								{!! Form::select('user_id', $professionals, old('user_id'), ['class' => 'form-control select', 'required' => '']) !!}
																
								<td>
									<button type="submit" class="btn btn-primary">Adicionar</button>								   
								</td>
						</div>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table">
							<tbody>	
								<tr>
									<th>ID</th>
									<th>Nome da Profissional</th>	
									
								</tr>
								@foreach ($preferred_professional_WithOut_DayWeek as $preferred_professional)												
								<tr>								
									<td>{{$preferred_professional->id}}</td>					  
									<td field-key='text'>	
										
											{!! $preferred_professional->professional->name  or ''!!}
										
									</td>																
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>           
				</div>
			</div>
		</div>
	</form>

@stop

@section('javascript')
    @parent

	{{--<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
 
    <script>
        function initialize() {
            const maps = document.getElementsByClassName("map");
            for (let i = 0; i < maps.length; i++) {
                const field = maps[i]
                const fieldKey = field.dataset.key;
                const latitude = parseFloat(field.dataset.latitude) || -25.4342;
                const longitude = parseFloat(field.dataset.longitude) || -49.2714;
        
                const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
                    center: {lat: latitude, lng: longitude},
                    zoom: 13
                });
                const marker = new google.maps.Marker({
                    map: map,
                    position: {lat: latitude, lng: longitude},
                });
        
                marker.setVisible(true);
            }    
              
          }
    </script>--}}
    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.datetime').datetimepicker({
                format: "{{ config('app.datetime_format_moment') }}",
                locale: "{{ App::getLocale() }}",
                sideBySide: true,
            });
            
        });
    </script>
            
@stop
