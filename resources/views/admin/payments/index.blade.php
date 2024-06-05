@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
   
   
	@if (Session::has('admin-mensagem-sucesso'))
		<div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>	
	@endif
	@if (Session::has('admin-mensagem-error'))
	    <div class="alert alert-error"><strong>{{ Session::get('admin-mensagem-error') }}<strong></div>
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
	
	<h3 class="page-title">Cobranças</h3>
    
	
	
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
							<p style="font-weight: bold;">Data de emissão:</p>
							<div class="col-md-5">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									{!! Form::text('release_day_start', old('release_day_start'), ['class' => 'form-control date-start', 'placeholder' => 'De']) !!}
								
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									{!! Form::text('release_day_end', old('release_day_end'), ['class' => 'form-control date-end', 'placeholder' => 'Até']) !!}
								</div>
								<p class="help-block"></p>
							</div>							
						</div>
						<div class="col-md-4 form-group">
							<p style="font-weight: bold;">Data de vencimento:</p>
							<div class="col-md-5">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									{!! Form::text('due_date_day_start', old('due_date_day_start'), ['class' => 'form-control date-start', 'placeholder' => 'De']) !!}
								
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									{!! Form::text('due_date_day_end', old('due_date_day_end'), ['class' => 'form-control date-end', 'placeholder' => 'Até']) !!}
								</div>
								<p class="help-block"></p>
							</div>							
						</div>
						
						<div class="col-md-4 form-group">
							<p style="font-weight: bold;">Data de pagamento:</p>
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
   
						<br>
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
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="overdue" id="overdue" value="1">
									<label class="form-check-label" for="overdue"> - Vencidas</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="not_paid" id="not_paid" value="1">
									<label class="form-check-label" for="not_paid"> - Não pagas</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="not_overdue" id="not_overdue" value="1">
									<label class="form-check-label" for="not_overdue"> - Não vencidas</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="canceled" id="canceled" value="1">
									<label class="form-check-label" for="canceled"> - Canceladas</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="not_canceled" id="not_canceled" value="1">
									<label class="form-check-label" for="not_canceled"> - Não canceladas</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>
						</div>
					</div>
					<hr style="height:1px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;">
					<br><p>Forma de pagamento:</p>
					<div class="row">
						<div class="col-md-4 form-group">
							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="billet" id="billet" value="0">
									<label class="form-check-label" for="billet"> - Boleto Bancário</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="billet" id="billet" value="3">
									<label class="form-check-label" for="billet"> - Boleto PIX</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="credit_card" id="credit_card" value="1">
									<label class="form-check-label" for="credit_card"> - Cartão de Crédito</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>
						</div>
					</div>	
					<hr style="height:1px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;">
					<br><p>Categorias:</p>
					<div class="row">
						<div class="col-md-4 form-group">
							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="avulsa" id="avulsa" value="1">
									<label class="form-check-label" for="avulsa"> - Avulsas</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="quinzenal" id="quinzenal" value="1">
									<label class="form-check-label" for="quinzenal"> - Quinzenal</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="semanal" id="semanal" value="1">
									<label class="form-check-label" for="semanal"> - Semanal</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="multipla" id="multipla" value="1">
									<label class="form-check-label" for="multipla"> - Multipla</label>									
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
            <table class="table table-bordered table-striped ajaxTable @can('subscription_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('subscription_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan
						<th>ID</th>
                        <th>Status</th>
					    <th>Forma</th>
					    <th>Invoice Number</th>
					    <th>Cliente</th>
						<th>Categoria</th>
						<th>Tipo Faxina</th>
						<th>Valor</th>
						<th>Emissão</th>
						<th>Vencimento</th>
						<th>Data Pagamento</th>
						<th>Valor Pago</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
	
@stop

@section('javascript') 
    <script>
      @can('payment_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.payments.mass_destroy') }}';
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.payments.index') !!}?release_day_start={{ request('release_day_start') }}&release_day_end={{ request('release_day_end') }}&due_date_day_start={{ request('due_date_day_start') }}&due_date_day_start={{ request('due_date_day_start') }}&due_date_day_end={{ request('due_date_day_end') }}&payment_date_day_start={{ request('payment_date_day_start') }}&payment_date_day_end={{ request('payment_date_day_end') }}&payeds={{ request('payeds') }}&overdue={{ request('overdue') }}&not_paid={{ request('not_paid') }}&not_overdue={{ request('not_overdue') }}&not_overdue={{ request('not_overdue') }}&credit_card={{ request('credit_card') }}&billet={{ request('billet') }}&not_canceled={{ request('not_canceled') }}&canceled={{ request('canceled') }}&avulsa={{ request('avulsa') }}&quinzenal={{ request('quinzenal') }}&semanal={{ request('semanal') }}&multipla={{ request('multipla') }}';
            window.dtDefaultOptions.columns = 
			[@can('payment_delete')
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endcan
				{data: 'id', name: 'id'},
				{data: 'payment_status.title', name: 'payment_status.title'},
				{data: 'payment_method_id'},
				{data: 'invoiceNumber'},
				{data: 'user.name', name: 'user.name', sortable: false},				
				{data: 'service_category.title', name: 'service_category.title', searchable: false, sortable: false},								
				{data: 'service_type.title', name: 'service_type.title', searchable: false, sortable: false},
				{data: 'value', name: 'value'},
				{data: 'created_at', name: 'created_at'},
				{data: 'due_date', name: 'due_date'},
				{data: 'payment_date', name: 'payment_date'},
				{data: 'payment_amount', name: 'payment_amount'},
				
				
				
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
				
				$('.date').datetimepicker({
					format: "{{ config('app.date_format_moment') }}",
					locale: "{{ App::getLocale() }}",
				});
				$('.date-start').datetimepicker({
					format: 'D/M/Y',
					locale: "{{ App::getLocale() }}",
				});
				$('.date-end').datetimepicker({
					format: 'D/M/Y',
					locale: "{{ App::getLocale() }}",
				});
				$('.date-year').datetimepicker({
					format: "YYYY",
					locale: "{{ App::getLocale() }}",
				});
				
			});
		</script>
 
@endsection