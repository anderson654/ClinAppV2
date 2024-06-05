@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')


@section('content')
@if(count($services) > 0)
<div class="container">
	<div class="col-xs-12">
        <div class="box box-align">
            <div class="box-header">
			  <span>Faxinas Disponíveis (com vagas abertas)</span>
			  <a href="{{ url()->previous() }}" class="btn btn-primary">@lang('abrigosoftware.as_back_to_list')</a>
            </div>
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
						<th>Bairro</th>
						<th>Tipo</th>
						<th>Detalhes</th>
						</tr>
						@foreach($services as $service)
							@php
							{{--$start = \Carbon\Carbon::createFromFormat('d/m/Y H:i:s', $service->created_at);--}}
								$start = $service->start_time;
								$finish = \Carbon\Carbon::now();
								$hours = $finish->diffInHours($start);
								if($service->start_time){
									$start_time = \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $service->start_time)->format("d/m/y H:i"); 
								}
							
							@endphp
							<tr @if($hours <= 18) class="servicehouse-red" @elseif($hours <= 24) class="cleanhouse-yellow" @endif>
								<td>{{$service->id}}</td>
								<td>{{$service->client->name or 'vazio'}}</td>
								<td>{{$service->address->city->title or 'vazio'}}</td>
								<td>{{$start_time or 'vazio'}}</td>
								<td>{{$service->total_time}}</td>
								<td>{{$service->qt_free_slots()}}</td>
								<td>{{$service->address->neighborhood or 'vazio'}}</td>
								<td>@if($service->service_category_id === 1)
										AVULSA
									@elseif ($service->service_category_id === 2)
										QUINZENAL
									@elseif ($service->service_category_id === 3)
										SEMANAL
									@elseif ($service->service_category_id === 4)
										MULTIPLA
									@endif 
									
									</td>
								<td>
									
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
            </div>
        </div>
    </div>
</div>
@endif

@include('partials.javascripts')
@endsection


