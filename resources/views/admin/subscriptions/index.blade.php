@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.subscriptions.title')</h3>
    @can('admin_service_create')
    <p>
        <a href="{{ route('admin.subscriptions.create') }}" class="btn btn-success">@lang('abrigosoftware.as_add_new')</a>
        
    </p>
	<p>
        <a href="{{ route('admin.subscriptions.list_renew_subscriptions') }}" class="btn btn-danger">Exibir Assinaturas para renovar</a>
        
    </p>

    @endcan
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
							<p style="font-weight: bold;">Data de renovação</p>
							<div class="col-md-4">
								{!! Form::label('startDay', 'DE: ', ['class' => 'control-label']) !!}
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									{!! Form::text('startDay', old('startDay'), ['class' => 'form-control date-day', 'placeholder' => '']) !!}
								</div>
								<p class="help-block"></p>
							</div>
							<div class="col-md-4">
								{!! Form::label('endStartDay', 'ATÉ: ', ['class' => 'control-label']) !!}
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									{!! Form::text('endStartDay', old('endStartDay'), ['class' => 'form-control date-day', 'placeholder' => '']) !!}
								</div>
								<p class="help-block"></p>
							</div>
							
							
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4 form-group">
							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="active" id="active" value="1">
									<label class="form-check-label" for="active"> - Ativas</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>	
						</div>
						<div class="col-md-4 form-group">							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="canceleds" id="canceleds" value="1">
									<label class="form-check-label" for="canceleds"> - Canceladas</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>	
						</div>
						<div class="col-md-4 form-group">							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="pauseds" id="pauseds" value="1">
									<label class="form-check-label" for="pauseds"> - Pausadas</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>	
						</div>
						<div class="col-md-4 form-group">							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="awaitingAapproval" id="awaitingAapproval" value="1">
									<label class="form-check-label" for="awaitingAapproval"> - Aguardando aprovação</label>									
								  </div>
								</div>
								<p class="help-block"></p>
							</div>	
						</div>
						<div class="col-md-4 form-group">							
							<div class="col-md-5">
								<div class="input-group">
								  <div class="form-check">
									<input type="checkbox" class="form-check-input" name="renewalFailed" id="renewalFailed" value="1">
									<label class="form-check-label" for="renewalFailed"> - Falha na renovação</label>									
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
            <table class="table table-bordered table-striped ajaxTable ">
                <thead>
                    <tr>
                        {{--  @can('subscription_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan  --}}
						<th>ID</th>
                        <th>Data de Criação</th>
                        <th>@lang('abrigosoftware.subscriptions.fields.service-type')</th>
                        <th>@lang('abrigosoftware.subscriptions.fields.service-category')</th>
                        <th>@lang('abrigosoftware.subscriptions.fields.status')</th>
						<th>@lang('abrigosoftware.services.fields.client')</th>
						<th>@lang('abrigosoftware.subscriptions.fields.products-included')</th>
                        <th>@lang('abrigosoftware.subscriptions.fields.startTime')</th>
                        <th>@lang('abrigosoftware.subscriptions.fields.startDay')</th>
						<th>Valor serviço</th>
						<th>Qtde profissionais serviço</th>
                       
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        {{--  @can('subscription_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.subscriptions.mass_destroy') }}';
        @endcan  --}}
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.subscriptions.index') !!}?endStartDay={{ request('endStartDay') }}&startDay={{ request('startDay') }}&renewalFailed={{ request('renewalFailed') }}&awaitingAapproval={{ request('awaitingAapproval') }}&pauseds={{ request('pauseds') }}&canceleds={{ request('canceleds') }}&active={{ request('active') }}';
            window.dtDefaultOptions.columns = 
			[
				{{--  @can('subscription_delete')
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endcan  --}}
				
				{data: 'id', name: 'id'},
				{data: 'created_at', name: 'created_at'},
                {data: 'service_type.title', name: 'service_type.title'},
                {data: 'service_category.title', name: 'service_type.title'},
                {data: 'status.title', name: 'status.title', searchable: false, sortable: false},
				{data: 'user.name', name: 'user.name'},
                {data: 'products_included', name: 'products_included'},
                {data: 'startTime', name: 'startTime'},
                {data: 'startDay', name: 'startDay'},
				{data: 'value_service', name: 'value_service'},
                {data: 'qt_employees', name: 'qt_employees'},
               
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
			$('.date-day').datetimepicker({
                format: "D",
                locale: "{{ App::getLocale() }}",
            });
			$('.date-month').datetimepicker({
                format: "M",
                locale: "{{ App::getLocale() }}",
            });
			$('.date-year').datetimepicker({
                format: "YYYY",
                locale: "{{ App::getLocale() }}",
            });
            
        });
    </script>
@endsection