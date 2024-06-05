@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Consulta de Profissionais disponíveis</h3>
   
   
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
    {!! Form::open(['method' => 'get']) !!}
 
    {!! Form::close() !!}
	
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
												{!! Form::text('day_start', old('day_start'), ['class' => 'form-control date', 'placeholder' => 'Data']) !!}
											
											</div>
											<p class="help-block"></p>
										</div>
										<div class="col-md-5">
											<div class="input-group">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												{!! Form::text('hour_start', old('hour_start'), ['class' => 'form-control hour', 'placeholder' => 'DE', 'required' => '']) !!}
												{!! Form::text('hour_end', old('hour_end'), ['class' => 'form-control hour', 'placeholder' => 'ATÈ', 'required' => '']) !!}
											
											</div>
											<p class="help-block"></p>
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
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable">
                <thead>
                    <tr>

						
						<th>@lang('abrigosoftware.users.fields.name')</th>   
						<th>Tem produtos</th>
						<th>Telefone 1</th>                  
                        <th>Telefone 2</th>
                        <th>Cidade</th>
                       
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 

    <script>


        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.professionals.available_list') !!}?city_id={{ request('city') }}&hour_end={{ request('hour_end') }}&hour_start={{ request('hour_start') }}&day_start={{ request('day_start') }}';
            window.dtDefaultOptions.columns = [
				
				{data: 'name', name: 'name'},
				{
                    data: 'has_products',
                    name: 'has_products',
                    render: function(jsonDate) {
                        let status = parseInt(jsonDate); 
                        return status == 1 ? "Tem" : "Não tem";
                    }
				},
				{data: 'celphone', name: 'celphone', searchable: false, sortable: false},
                {data: 'contact.phone', name: 'contact.phone', searchable: false, sortable: false},                
                {data: 'city.title', name: 'city', searchable: false, sortable: false},                
                //{data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
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
		<script>
			$(function(){
				moment.updateLocale('{{ App::getLocale() }}', {
					week: { dow: 1 } // Monday is the first day of the week
				});
				
				
				$('.date').datetimepicker({
					format:"DD/MM/YYYY",
					locale: "{{ App::getLocale() }}",
					sideBySide: true,
				});
				$('.hour').datetimepicker({
					format:"HH:mm",
					locale: "{{ App::getLocale() }}",
					sideBySide: true,
				});
				
				
			});
		</script>
@endsection