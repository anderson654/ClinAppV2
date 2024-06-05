@extends('layouts.app')

@section('content')
@can('admin_home')


<div class="row">

	@if (Session::has('admin-mensagem-sucesso'))
	<div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>

	
	@endif

<div class="row">
		<div class="col-md-12">
			<div class="box box-default box-solid collapsed-box" id="box-widget">
				<div class="box-header with-border">
				  <h3 class="box-title"></h3>

				  <div class="box-tools pull-right">Filtros
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
					</button>
				  </div>
				  <!-- /.box-tools -->
				</div>
					<!-- /.box-header -->
					{!! Form::open(['method' => 'GET', 'id' => 'search-form']) !!}
					<div class="box-body">
						<div class="row">
							<div class="col-md-12 form-group">
								
								<div class="row">
								
									<div class="col-md-10 form-group">
										<p style="font-weight: bold;">Início Disponibilidade:</p>
										<div class="col-md-5">
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												{!! Form::text('day_start', old('day_start'), ['class' => 'form-control date-start', 'placeholder' => 'De']) !!}
											
											</div>
											<p class="help-block"></p>
										</div>
										<div class="col-md-5">
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												{!! Form::text('day_end', old('day_end'), ['class' => 'form-control date-end', 'placeholder' => 'Até']) !!}
											</div>
											<p class="help-block"></p>
										</div>							
									</div>
									
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
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3></h3>

				<p>Qtde de novos clientes no <br> mês de {{$mes}}</p>
			</div>			
		</div>
	</div><!-- ./col -->
	
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-ch-red">
			<div class="inner">
				<h3></h3>

				<p>Qtde novas assinaturas no <br> mês de {{$mes}}</p>
			</div>			
		</div>
	</div><!-- ./col -->
	
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-teal">
			<div class="inner">
				<h3></h3>

				<p>R$ Total de novos clientes <br> mês de {{$mes}}</p>
			</div>
		</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-olive">
			<div class="inner">
				<h3>
				</h3>

				<p>Quantidade de Clientes Retomados <br></p>
			</div>
			
		</div>
	</div><!-- ./col -->
	
<div class="row">
				<div class="col-sm">
					<div class="col-md-12"  align="center" id="count_div">	
						{!! $Lava->render('ColumnChart', 'SalesDataTable', 'count_div', true) !!}
						<br><br><br><br><br><br><br><br><br><br>
					</div>
					
				</div>
			</div>	
@endsection

@section('javascript') 
<script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
		<script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
		<script>
			$(function(){
				moment.updateLocale('{{ App::getLocale() }}', {
					week: { dow: 1 } // Monday is the first day of the week
				});
				
				
				$('.date-start').datetimepicker({
					format:"DD/MM/YYYY",
					locale: "{{ App::getLocale() }}",
					sideBySide: true,
				});
				$('.date-end').datetimepicker({
					format:"DD/MM/YYYY",
					locale: "{{ App::getLocale() }}",
					sideBySide: true,
				});
				
				
			});
		</script>
@endsection
@endcan('admin_home')