@extends('layouts.app')

@section('content')
@can('admin_home')
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    window.google.charts.load('46', {packages: ['corechart']});
</script>

<div class="row">

	@if (Session::has('admin-mensagem-sucesso'))
	<div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>

	
	@endif

	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>{{'R$ '.number_format($balance, 2, ',', '.') }}</h3>

				<p>Saldo Disponível na para Saque na JUNO</p>
			</div>
			<div class="icon">
				<i class="fa fa-address-card-o"></i>
			</div>
			</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-teal">
			<div class="inner">
				<h3>{{'R$ '.number_format($sumTotalAmountToBeReceived, 2, ',', '.') }}</h3>

				<p>Valor total a Receber</p>
			</div>
			<div class="icon">
				<i class="fa fa-briefcase"></i>
			</div>
			</div>
	</div><!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-olive">
			<div class="inner">
				<h3></h3>

				<p>Solicitar Transferrência do Saldo total da Juno</p>
			</div>
			<a href="{{ route('admin.financial.request_transfer') }}" class="small-box-footer"><h4>Solicitar Transferrência do saldo total <i class="fa fa-arrow-circle-right"></i></h4></a>
	
			</div>
	</div><!-- ./col -->	
</div>

@endcan('admin_home')
@endsection