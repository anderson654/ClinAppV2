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
							<div class="col-xs-12 form-group">
										
										{!! Form::label('state', 'Estado ', ['class' => 'control-label']) !!}<span class="text-muted"> (Obrigatório)</span>
										
										{!! Form::select('state', $states, old('states'), ['class' => 'form-control', 'placeholder' => 'Escolha...', 'data-error' => 'Estado Obrigatório']) !!}
										
									
										 <p class="help-block"></p>
										@if($errors->has('state'))
											<p class="help-block">
												{{ $errors->first('state') }}
											</p>
										@endif
									</div>
								
								<div class="row">
									<div class="col-xs-12 form-group">
										{!! Form::label('city', 'Cidades:', ['class' => 'control-label']) !!}<span class="text-muted"> (Obrigatório)</span><br>
										<h4>{!! Form::select('city', []) !!}</h4>
									 <p class="help-block"></p>
										@if($errors->has('city'))
											<p class="help-block">
												{{ $errors->first('city') }}
											</p>
										@endif
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
				<h3>{{$totalRating }}</h3>
				
				<p>Avaliação Geral</p>
			</div>			
		</div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<div class="small-box bg-teal">
			<div class="inner">
				<h3>{{$monthlyRating}}</h3>
				<p>Avaliação do mês de {{$mes}}</p>
			</div>
		</div>
	</div><!-- ./col -->
		
</div>
<div class="row">
	<div class="col-sm">
		<div class="col-md-12"  align="center" id="div_ratings">	
			{!! $Lava->render('ColumnChart', 'Ratings', 'div_ratings', true) !!}
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
		
	<script type="text/javascript">
        $('select[name=state]').change(function () {
            var idState = $(this).val();
            $.get('/admin/get-cities/' + idState, function (cities) {
                $('select[name=city]').empty();
                $.each(cities, function (key, value) {
                    $('select[name=city]').append('<option value=' + value.id + '>' + value.city + '</option>');
                });
            });
        });
    </script>
	<script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
		<script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
		
@endsection
<script>
	setTimeout(function(){
	   window.location.reload(1);
	}, 600000
  </script>
  
@endcan('admin_home')