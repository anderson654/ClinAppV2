@extends('layouts.app')

@section('content')
@can('admin_home')
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    window.google.charts.load('46', {packages: ['corechart']});
</script>
@if (Session::has('admin-mensagem-sucesso'))
	<div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>	
@endif

<div class="row">	

	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>{{$count_subscriptionsLM}}</h3>

				<p>Total em Assinaturas do  <br> mês de {{$lastMonth}}</p>
			</div>
			<div class="icon">
				<i class="fa fa-address-card-o"></i>
			</div>
			</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-teal">
			<div class="inner">
				<h3>{{$count_new_subscriptionsLM}}</h3>

				<p>Novas Assinaturas no<br> mês de {{$lastMonth}}</p>
			</div>
			<div class="icon">
				<i class="fa fa-briefcase"></i>
			</div>
			</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-ch-red">
			<div class="inner">
				<h3>{{$count_canceled_subscriptionsLM}}</h3>

				<p>Assinaturas canceladas no<br> mês de {{$lastMonth}}</p>
			</div>
			<div class="icon">
				<i class="fa fa-check-circle"></i>
			</div>
			</div>
	</div><!-- ./col -->
	
	
</div>
<div class="row">

	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>{{$count_subscriptionsCM}}</h3>

				<p>R$ Total em Assinaturas do  <br> mês de {{$mes}}</p>
			</div>
			<div class="icon">
				<i class="fa fa-address-card-o"></i>
			</div>
			</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-teal">
			<div class="inner">
				<h3>{{$count_new_subscriptions}}</h3>

				<p>Novas Assinaturas no<br> mês de {{$mes}}</p>
			</div>
			<div class="icon">
				<i class="fa fa-briefcase"></i>
			</div>
			</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-ch-red">
			<div class="inner">
				<h3>{{$count_canceled_subscriptions}}</h3>

				<p>Assinaturas canceladas no<br> mês de {{$mes}}</p>
			</div>
			<div class="icon">
				<i class="fa fa-check-circle"></i>
			</div>
			</div>
	</div><!-- ./col -->
	
	
</div>
<div class="row">
	<div class="col-sm">
		<div class="col-md-10"  align="center" id="subscriptions_div">	
			{!! $Lava->render('ColumnChart', 'Subscriptions', 'subscriptions_div', true) !!}
			<br><br><br><br><br><br><br><br><br><br>
		</div>
		
	</div>
</div>
<br><br>

@endsection
@endcan('admin_home')