@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

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
	<h3 class="page-title">Pagamentos Profissionais</h3>
    
	
	
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
							<p style="font-weight: bold;">Data do Serviço:</p>
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
						<div class="col-md-4 form-group">							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="fail" id="fail" value="1">
									<label class="form-check-label" for="fail"> - Falhou</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>	
						</div>
						<div class="col-md-4 form-group">							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="reversed_bank_transfer" id="reversed_bank_transfer" value="1">
									<label class="form-check-label" for="reversed_bank_transfer"> - Transferência bancária estornada</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>	
						</div>
						<div class="col-md-4 form-group">							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="paused" id="paused" value="1">
									<label class="form-check-label" for="paused"> - Pausadas- Falta Pagamento</label>									
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
	<div class="row">
		<div class="col-md-12">
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>{{'R$ '.number_format($amountToBePaid, 2, ',', '.') }}</h3>
						
						<p>Total em pagamento a Fazer no Período </p>
					</div>			
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-teal">
					<div class="inner">
						<h3>{{'R$ '.number_format($amountPaid, 2, ',', '.') }}</h3>
						<p>Total pago no período</p>
					</div>
				</div>
			</div><!-- ./col -->
		</div>
	</div>
	
	<div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable @can('pay_professional') dt-select @endcan">
                <thead>
                    <tr>
                        @can('pay_professional')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan
						<th>ID</th>
						<th>Data de criação</th>
                        <th>Status</th>
					    <th>Profissional</th>	
						<th>Data do Serviço</th>									
						<th>Valor</th>	
						<th>Desconto</th>						
						<th>Data alteração</th>
						<th>Status message</th>
						<th>message </th>
						<th>updated_at</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
            </table>
		</div>
	
@stop

<!-- //gabriel_errors -->
@section('javascript')
    <script>
		@can('pay_professional')
            window.route_mass_crud_entries_pay = '{{ route('admin.financial.massPayProfessional') }}';
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.financial.professionalPaymentControl') !!}?reversed_bank_transfer={{ request('reversed_bank_transfer') }}&fail={{ request('fail') }}&forwardedBank={{ request('forwardedBank') }}&notPayeds={{ request('notPayeds') }}&payeds={{ request('payeds') }}&start_time_day_start={{ request('start_time_day_start') }}&start_time_day_end={{ request('start_time_day_end') }}&payment_date_day_start={{ request('payment_date_day_start') }}&payment_date_day_end={{ request('payment_date_day_end') }}&professional_id={{ request('professional_id') }}&paused={{ request('paused') }}';
            window.dtDefaultOptions.columns = 
			[
				@can('pay_professional')                
					{data: 'massPay', name: 'id', searchable: false, sortable: false},
                @endcan
				{data: 'id', name: 'id'},
				{data: 'created_at', name: 'created_at'},
				{data: 'payment_status.title', name: 'payment_status.title'},						
				{data: 'user.name', name: 'user.name', sortable: false},		
				{data: 'service.start_time', name: 'service.start_time', searchable: false, sortable: false},	
				
				{data: 'value', name: 'value'},				
				{data: 'discount', name: 'discount'},
				{data: 'payment_date', name: 'payment_date'},
				{data: 'transaction_status', name: 'transaction_status'},
				{data: 'message', name: 'message'},
				{data: 'updated_at', name: 'updated_at', visible: false, searchable: false, sortable: false},
				
				
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