@extends('layouts.app')

@section('content')
@can('admin_home')


<div class="row">

	@if (Session::has('admin-mensagem-sucesso'))
	<div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>

	
	@endif

	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>{{$count_newCostumers}}</h3>

				<p>Qtde de novos clientes no <br> mês de {{$mes}}</p>
			</div>			
		</div>
	</div><!-- ./col -->	
	
	
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-teal">
			<div class="inner">
				<h3>{{  'R$ '.number_format($sum_services, 2, ',', '.') }}</h3>

				<p>R$ Total de novos clientes <br> mês de {{$mes}}</p>
			</div>
		</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-olive">
			<div class="inner">
				<h3>{{  $returned_customers_count }}  
				</h3>

				<p>Quantidade de Clientes Retomados <br></p>
			</div>
			
		</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-ch-red">
			<div class="inner">
				<h3>{{$sum_services_returned}}</h3>

				<p>R$ total de clientes retomados <br> mês de {{$mes}}</p>
			</div>			
		</div>
	</div><!-- ./col -->
	
	
	<div class="row">
		<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista novos Clientes Agendados no mes de {{$mes}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table">
                <tbody>
					<tr>
					  
					  <th>Nome Cliente</th>
					  <th>CIDADE</th>
					  <th>Data do agendamento</th>
					  
					</tr>
				@foreach($newCostumers as $newCostumer)
					
					<tr >
						
					  @if (isset($newCostumer->corporateClient))  
						  <td>{{$newCostumer->corporateClient->razao_social}}</td>
					  @elseif(isset($newCostumer->client))	  
						  <td>{{$newCostumer->client->name}}</td>
					  @else
						  <td> ----- </td>	
					  @endif
					
					
					  
						@isset($newCostumer->address->city->title)	  
					  <td>{{$newCostumer->address->city->title}}</td>
						 @endisset
						 @empty($newCostumer->address->city->title)
						  <td> ----- </td>	
						@endempty
					  <td>{{$newCostumer->created_at}}</td>
					</tr>
				@endforeach
			  </tbody>
		     </table>
			</div>
		</div>
	</div>	
</div>

<div class="row">
		<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Clientes retornados no mes de {{$mes}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table">
                <tbody>
					<tr>
					  
					  <th>Nome Cliente</th>
					  <th>CIDADE</th>
					  <th>Data do agendamento</th>
					  
					</tr>
				@foreach($returned_customers as $returned_customer)
					
					<tr >
					  <td>{{$returned_customer->name}}</td>
					  @isset($returned_customer->address->city->title)	  
					  <td>{{$returned_customer->address->city->title}}</td>
					 @endisset
					 @empty($returned_customer->address->city->title)
						  <td> ----- </td>	
					 @endempty
					  <td>{{$returned_customer->created_at}}</td>
					</tr>
				@endforeach
			  </tbody>
		     </table>
			</div>
		</div>
	</div>	
</div>
@endsection
@endcan('admin_home')