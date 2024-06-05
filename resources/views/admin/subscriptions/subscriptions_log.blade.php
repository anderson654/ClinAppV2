@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')


<style type="text/css">
	#div.container { 
		max-width: 1200px;
	}
</style>	
@section('content')
   
   
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
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> Não foi possível continuar:
				<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	<h3 class="page-title">Subscriptions LOG</h3>
    
	
	
	<div class="row">
		<div class="col-md-12">
			<div class="box box-default box-solid collapsed-box" id="box-widget">
				<div class="box-header with-border">
				  <h3 class="box-title"></h3>

				  <div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
					</button>
				  </div>
				  <!-- /.box-tools -->
				</div>
				<!-- /.box-header -->
				{!! Form::open(['method' => 'GET', 'id' => 'search-form']) !!}
				<div class="box-body">
					<div class="row">
						<div class="col-md-4 form-group">
							<p style="font-weight: bold;">Data da service:</p>
							<div class="col-md-5">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									{!! Form::text('start_time_day_start', old('start_time_day_start'), ['class' => 'form-control date-start', 'placeholder' => 'De']) !!}
								
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									{!! Form::text('start_time_day_end', old('start_time_day_end'), ['class' => 'form-control date-end', 'placeholder' => 'Até']) !!}
								</div>
								<p class="help-block"></p>
							</div>							
						</div>
						<div class="col-md-4 form-group">
							<p style="font-weight: bold;">Data do pagamento:</p>
							<div class="col-md-5">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									{!! Form::text('payment_date_day_start', old('payment_date_day_start'), ['class' => 'form-control date-start', 'placeholder' => 'De']) !!}
								
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									{!! Form::text('payment_date_day_end', old('payment_date_day_end'), ['class' => 'form-control date-end', 'placeholder' => 'Até']) !!}
								</div>
								<p class="help-block"></p>
							</div>							
						</div>
					</div>	
						
					
					<hr style="height:1px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;">
					</br>
					<div class="row">
						<div class="col-md-4 form-group">
							<p style="font-weight: bold;">Nome da Profissional</p>
							<div class="col-md-5">
								<div class="input-group">
									<div class="input-group-addon">
										{!! Form::select('professional_id', $assigned_tos, old('professional_id'), ['class' => 'form-control select']) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4 form-group">
							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="payeds" id="payeds" value="1">
									<label class="form-check-label" for="payeds"> - Pagas</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>	
						</div>
						<div class="col-md-4 form-group">							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="notPayeds" id="notPayeds" value="1">
									<label class="form-check-label" for="NotPayeds"> - Não Pagas</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>	
						</div>
						<div class="col-md-4 form-group">							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="forwardedBank" id="forwardedBank" value="1">
									<label class="form-check-label" for="forwardedBank"> - Encaminhadas ao Banco</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>	
						</div>
					</div>
					
						
						
					
				</div>
				<div class="box-footer">
					{!! Form::submit('Pesquisar', ['class' => 'btn btn-primary pull-right']) !!}
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>

 <div class="panel panel-default">		
        <div class="panel-body table-responsive">
            <table class="display  responsive ajaxTable nowrap" >
                <thead>
                    <tr>
                       
						<th>ID da Assinatura</th>
						<th>Data de criação</th>
                        <th>Status da Assinatura</th>
					    <th>Cliente</th>	
						<th>Quem alterou</th>						
						<th>Valor</th>	
						
						<th>junoPaymentsId</th>
						<th>chargeId </th>
						<th>statusJuno </th>
						<th>code </th>
						<th>payment_status_id </th>
						<th>message </th>
						<th>error </th>						
						<th>payment_method</th>
						<th>transactionId</th>
						<th>checkoutUrl</th>
						<th>code_boletofacil</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
	
@stop

@section('javascript') 
    <script>
      
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('subscriptions.subscription_log') !!}?forwardedBank={{ request('forwardedBank') }}&notPayeds={{ request('notPayeds') }}&payeds={{ request('payeds') }}&start_time_day_start={{ request('start_time_day_start') }}&start_time_day_end={{ request('start_time_day_end') }}&payment_date_day_start={{ request('payment_date_day_start') }}&payment_date_day_end={{ request('payment_date_day_end') }}&professional_id={{ request('professional_id') }}';
            window.dtDefaultOptions.columns = 
			[
				{data: 'subscription_id', name: 'subscription_id'},
				{data: 'created_at', name: 'created_at'},
				{data: 'subscription_status.title', name: 'subscription_status.title'},						
				{data: 'user.name', name: 'user.name', sortable: false},		
				{data: 'cod_source.name', name: 'cod_source.name', sortable: false},		
				{data: 'value', name: 'value'},				
				
				{data: 'junoPaymentsId', name: 'junoPaymentsId'},	
				{data: 'chargeId', name: 'chargeId'},								
				{data: 'statusJuno', name: 'statusJuno'},				
				{data: 'code', name: 'code'},
				{data: 'payment_status.title', name: 'payment_status.title'},
				{data: 'message', name: 'message'},
				{data: 'aproved', name: 'aproved'},								
				{data: 'payment_method.title', name: 'payment_method.title'},
				{data: 'transactionId', name: 'transactionId'},
				{data: 'checkoutUrl', name: 'checkoutUrl'},
				{data: 'code_boletofacil', name: 'code_boletofacil'},
				
				
				
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
	<script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
		<script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
		<script>
			$(function(){
				moment.updateLocale('{{ App::getLocale() }}', {
					week: { dow: 1 } // Monday is the first day of the week
				});
				
				
				$('.date-start').datetimepicker({
					format: 'D/M/Y 00:00:00',
					locale: "{{ App::getLocale() }}",
				});
				$('.date-end').datetimepicker({
					format: 'D/M/Y 23:59:59',
					locale: "{{ App::getLocale() }}",
				});
				
				
			});
		</script>
 
@endsection