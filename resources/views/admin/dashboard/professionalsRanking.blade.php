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
	
	
	
<div class="row">
	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ranking Profissionais</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table">
                <tbody>
					<tr>
					  <th>User ID</th>
					  <th>Nome</th>
					   <th>Classificação</th>
					  <th>Média Avaliações</th>
					  <th>Quantidade de serviços</th>
					  <th>Quantidade de avaliações</th>
					  <th>Pontos</th>					 
					  
					</tr>
			</div>
			@php
				$position = 0;
			@endphp
			@foreach($array_professionals as $array_professional)
				@php
					$position += 1;
				@endphp	
				<tr>
					<td>{{$array_professional['id']}}</td>
					<td>{{$array_professional['name']}}</td>					
					<td>{{$position}}º Lugar</td>
					<td>{{$array_professional['rate']}}</td>
					<td>{{$array_professional['amountOfServices']}}</td>
					<td>{{$array_professional['amountOfRatings']}}</td>
					<td>{{$array_professional['score']}}</td>
				</tr>
			@endforeach
				</tbody>
			</table>
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