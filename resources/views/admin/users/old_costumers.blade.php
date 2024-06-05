@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.users.title')</h3>
    @can('user_create')
    <p>
        <a href="{{ route('admin.create.lead') }}" class="btn btn-success">@lang('abrigosoftware.as_add_new')</a>
        
    </p>
    @endcan
	@if (Session::has('admin-mensagem-sucesso'))
		<div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>	
	@endif
	@if (Session::has('admin-mensagem-error'))
	    <div class="alert alert-error"><strong>{{ Session::get('admin-mensagem-error') }}<strong></div>
	@endif
    {!! Form::open(['method' => 'get']) !!}
    <h3 class="page-title">Leads - Clientes que nunca contrataram </h3>

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
								<p style="font-weight: bold;">É cliente desde:</p>
								<div class="col-md-5">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										{!! Form::text('start_created_at', old('start_created_at'), ['class' => 'form-control date-start', 'placeholder' => 'De']) !!}
									
									</div>
									<p class="help-block"></p>
								</div>
														
							</div></br>
							<div class="col-md-12 form-group">
								<p style="font-weight: bold;">Não contratou mais, desde:</p>
								<div class="col-md-5">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										{!! Form::text('day_start', old('release_day_start'), ['class' => 'form-control date-start', 'placeholder' => 'De']) !!}
									
									</div>
									<p class="help-block"></p>
								</div>
														
							</div></br>
							<div class="col-md-4 form-group">
								<p style="font-weight: bold;">Filtrar  por cidade</p>
								<div class="row">
									<div class="col-xs-12 form-group">
										
										{!! Form::label('state', 'Estado ', ['class' => 'control-label']) !!}<span class="text-muted"> (Obrigatório)</span>
										
										{!! Form::select('state', $states, old('state'), ['class' => 'form-control', 'placeholder' => 'Escolha...', 'required' => '', 'data-error' => 'Estado Obrigatório']) !!}
										
									
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
                        <th>@lang('abrigosoftware.users.fields.email')</th>						
                        <th>Telefone</th>
                        <th>Cidade</th>
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
            window.dtDefaultOptions.ajax = '{!! route('admin.old.costumers') !!}?day_start={{ request('day_start') }}&start_created_at={{ request('start_created_at') }}&city_id={{ request('city') }}';
            window.dtDefaultOptions.columns = [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {
                    data: 'celphone',
                    name: 'celphone',
                    className:'phone',
                    render: function(jsonDate) {
                        if(jsonDate && jsonDate.length <= 11){
                            let phone = jsonDate.replace(/\D/g,"");
                            phone ="(" + jsonDate.substr(0,2) + ")" + jsonDate.substr(2,5)+"-"+jsonDate.substr(7);
                            return phone;
                        } else if(jsonDate && jsonDate.length >= 12) {
                            let phone = jsonDate;
                            phone = jsonDate.replace(/-/gi, '');
                            phone ="(" + jsonDate.substr(0,3) + ")" + jsonDate.substr(3,5)+"-"+jsonDate.substr(8);
                            return phone;
                        } else {
                            return "Sem telefone";
                        }
                    }
                },
                {data: 'city', name: 'city'},
                
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
					format: 'D/M/Y',
					locale: "{{ App::getLocale() }}",
				});
				$('.date-end').datetimepicker({
					format: 'D/M/Y',
					locale: "{{ App::getLocale() }}",
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
@endsection