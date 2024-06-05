@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.services.title')</h3>

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
                            <th>@lang('abrigosoftware.services.fields.payment-id')</th>
                            <td field-key='payment_id'>{{ $service->payment_id }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.address-type')</th>
                            <td field-key='address_type'>{{ $service->address_type->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.service-type')</th>
                            <td field-key='service_type'>{{ $service->service_type->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.service-category')</th>
                            <td field-key='service_category'>{{ $service->service_category->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.client')</th>
                            <td field-key='client'>{{ $service->client->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.email')</th>
                            <td field-key='client'>{{ $service->client->email or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.status')</th>
                            <td field-key='status'>{{ $service->status->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.assigned-to')</th>

							<td field-key='assigned_to'>
                                @foreach ($service->service_slots as $slot)
                                    <span class="label label-info label-many">{{ $slot->user->name or ''}}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.qt-bedrooms')</th>
                            <td field-key='qt_bedrooms'>{{ $service->qt_bedrooms }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.qt-bathrooms')</th>
                            <td field-key='qt_bathrooms'>{{ $service->qt_bathrooms }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.additionals')</th>
                            <td field-key='additionals'>
							@foreach($service_additionals as $additionals)
								
									@if ($additionals->additionals_id == 1)
											Calçada<br>
									@elseif ($additionals->additionals_id == 2)
											Banheira<br>
									@elseif ($additionals->additionals_id == 3)
											Interior de Geladeira<br>
									@elseif ($additionals->additionals_id == 4)
											Área de Churrasqueira<br>
									@elseif ($additionals->additionals_id == 5)
											Área Envidraçada Grande<br>
									@endif
								@endforeach
							{{ $service->additionals }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.total-time')</th>
                            <td field-key='total_time'>{{ $service->total_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.products-included')</th>
                            <td field-key='products_included'>{{$service->products_included == 1 ? "SIM" : "NÃO"}}
							{{-- Form::checkbox("products_included", 1, $service->products_included == 1 ? true : false, ["disabled"]) --}}</td>
                        </tr>
						@can('admin_home')
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.value')</th>
                            <td field-key='value'>{{ $service->value }}</td>
                        </tr>
						 <tr>
                            <th>@lang('abrigosoftware.services.fields.subscription_value')</th>
                            <td field-key='value'>{{ $service->subscription_value }}</td>
                        </tr>
					
						@endcan
						@php ($value = NULL)
						@foreach($service->service_slots as $slot)
							@isset($value)
								@if($value !== $slot->value)
									@php ($value = NULL)
									@break
								@endif
							@endisset
						@php ($value = $slot->value)
						@endforeach
						<tr>
						<th>Valor a Receber</th>
						<td field-key='value'>
						@if($value === NULL)
							@php ($count = 1)
							@foreach($service->service_slots as $slot)
								Vaga {{$count}}: R$ {{ $slot->value }} <br />
							{{--@isset($value)
									@if($value === $slot->value)
										
									@endif
								@endisset
							@php ($value = $slot->value)--}}
							@php ($count++)
							@endforeach
						@else
							R$ {{$value}}
						@endif
						</td>
						</tr>
						{{--<tr>
                            <th>Valor a Receber</th>
							@foreach()
                            <td field-key='value'>{{ $service->value }}</td>
                        </tr>--}}
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.start-time')</th>
                            <td field-key='start_time'>{{ $service->start_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.end-time')</th>
                            <td field-key='end_time'>{{ $service->end_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.pet')</th>
                            <td field-key='pet'>{{$service->pet == 1 ? "SIM" : "NÃO"}}
							{{-- Form::checkbox("pet", 1, $service->pet == 1 ? true : false, ["disabled"]) --}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.services.fields.pet-cautions')</th>
                            <td field-key='pet_cautions'>{!! $service->pet_cautions !!}</td>
                        </tr>
                    </table>
                </div>
				
				<div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.name')</th>
                            <td field-key='name'>{{ $service->client->name or 'vazio'}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.gender')</th>
                            <td field-key='gender'>{{ $service->client->gender  or 'vazio'}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.celphone')</th>
							
							
                            <td field-key='celphone'>{{ $service->contact->phone or 'vazio' }}</td>
                        </tr>
                        {{--<tr>
                            <th>@lang('abrigosoftware.clients.fields.location')</th>
                            <td>
                    <strong>{{ $service->client->location_address }}</strong>
                    <div id='location-map' style='width: 600px;height: 300px;' class='map' data-key='location' data-latitude='{{$service->client->location_latitude}}' data-longitude='{{$service->client->location_longitude}}'></div>
                </td>
                        </tr>--}}
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.street')</th>
                            <td field-key='street'>{{ $service->address->street or 'vazio'}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.number')</th>
                            <td field-key='number'>{{ $service->address->number or 'vazio'}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.zip')</th>
                            <td field-key='zip'>{{ $service->address->zip or 'vazio'}}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.neighborhood')</th>
                            <td field-key='neighborhood'>{{ $service->address->neighborhood or 'vazio' }}</td>
                        </tr>
                      <tr>
                            <th>@lang('abrigosoftware.users.fields.city')</th>
                            <td field-key='city'>{{ $user->address->city->title or 'vazio' }}</td>
                        </tr>
						<tr>
                            <th>@lang('abrigosoftware.users.fields.state')</th>
                            <td field-key='state'>{{ $user->address->city->state->title or 'vazio' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.clients.fields.complement')</th>
                            <td field-key='complement'>{{ $service->address->complement or 'vazio'}}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#services_feedbacks" aria-controls="services_feedbacks" role="tab" data-toggle="tab">Feedback</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="services_feedbacks">
<table class="table table-bordered table-striped {{ count($services_feedbacks) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('abrigosoftware.services-feedbacks.fields.service')</th>
                        <th>@lang('abrigosoftware.services-feedbacks.fields.text')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($services_feedbacks) > 0)
            @foreach ($services_feedbacks as $services_feedback)
                <tr data-entry-id="{{ $services_feedback->id }}">
                    <td field-key='service'>{{ $services_feedback->service->external_id or '' }}</td>
                                <td field-key='text'>{!! $services_feedback->text !!}</td>
                                                                <td>
                                    @can('services_feedback_view')
                                    <a href="{{ route('admin.services_feedbacks.show',[$services_feedback->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
                                    @endcan
                                    @can('services_feedback_edit')
                                    <a href="{{ route('admin.services_feedbacks.edit',[$services_feedback->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
                                    @endcan
                                    @can('services_feedback_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("abrigosoftware.as_are_you_sure")."');",
                                        'route' => ['admin.services_feedbacks.destroy', $services_feedback->id])) !!}
                                    {!! Form::submit(trans('abrigosoftware.as_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('abrigosoftware.as_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>
            <a href="{{ url()->previous() }}" class="btn btn-default">@lang('abrigosoftware.as_back_to_list')</a>
        </div>
    </div>
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
