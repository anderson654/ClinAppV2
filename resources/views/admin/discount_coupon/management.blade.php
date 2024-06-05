@extends('layouts.app')
@section('pagina_titulo', 'Cupons de desconto')
	<!--Import Google Icon Font-->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" media="screen,projection">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>{{$totalServicesWithCupons}}</h3>

						<p>Quantidade Total de cupons utilizados no mês de {{$mes}}</p>
					</div>					
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>{{$amountServicesWithCupons}}</h3>

						<p>Valor Total de descontos aplicados no mês de {{$mes}}</p>
					</div>					
				</div>
			</div><!-- ./col -->
		</div>
		
		
		
		
		<div class="row">
			<h3>Lista dos cupons </h3>
			@if (Session::has('admin-mensagem-sucesso'))
	            <div class="card-panel green"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>
	        @endif
			
			<table>
				<thead>
					<tr>
						<th></th>
						<th>ID</th>
						<th>Localizador</th>
						<th>Quantidade de vezes que o cupom foi utilizado</th>
						<th>Valor total de desconto utilizado</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($listCoupons as $coupon)
					<tr>
						<td>
							
						</td>
						<td>{{$coupon['id'] }}</td>
						<td>{{ $coupon['localizador'] }}</td>
						<td>{{ $coupon['qtde']}}</td>
						<td>{{ $coupon['desconto']}}</td>
						
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
			
	</div>

@endsection