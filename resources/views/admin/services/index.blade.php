@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.services.title')</h3>
    @can('admin_service_create')
    <p>
        <a href="{{ route('admin.agendamento.admin') }}" class="btn btn-success">@lang('abrigosoftware.as_add_new')</a>
        
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
		
    <div class="row">
		<div class="col-md-12">
			<div class="box box-default box-solid collapsed-box" id="box-widget">
				<div class="box-header with-border">
				  <h3 class="box-title"></h3>

				  <div class="box-tools pull-right">Pesquisar datas
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
								<p style="font-weight: bold;">Pesquisar datas</p>
								<div class="col-md-6">
									{!! Form::label('start_date', trans('abrigosoftware.services.fields.start-time').'*', ['class' => 'control-label']) !!}
									{!! Form::text('start_date', old('start_date'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
									<p class="help-block"></p>
									@if($errors->has('start_date'))
										<p class="help-block">
											{{ $errors->first('start_date') }}
										</p>
									@endif
								</div>
								<div class="col-md-6">
									{!! Form::label('end_date', trans('abrigosoftware.services.fields.end-time').'*', ['class' => 'control-label']) !!}
									{!! Form::text('end_date', old('end_date'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
									<p class="help-block"></p>
									@if($errors->has('end_date'))
										<p class="help-block">
											{{ $errors->first('end_date') }}
										</p>
									@endif
								</div>
							</div>
						</div>
                        <hr style="height:1px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;">
                        <br><p>Tipo de Serviço:</p>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                
                                <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="comum" id="comum" value="1">
                                        <label class="form-check-label" for="comum"> - Faxina Comum</label>									
                                      </div>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="express" id="express" value="1">
                                        <label class="form-check-label" for="express"> - Faxina Express</label>									
                                      </div>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="alto_brilho" id="alto_brilho" value="1">
                                        <label class="form-check-label" for="alto_brilho"> - Faxina Alto Brilho</label>									
                                      </div>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="higienizacao" id="higienizacao" value="1">
                                        <label class="form-check-label" for="higienizacao"> - Higienização</label>									
                                      </div>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="impermeabilizacao" id="impermeabilizacao" value="1">
                                        <label class="form-check-label" for="impermeabilizacao"> - Impermeabilização</label>									
                                      </div>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="automotivo" id="automotivo" value="1">
                                        <label class="form-check-label" for="automotivo"> - Automotivo</label>									
                                      </div>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="sanitizacao" id="sanitizacao" value="1">
                                        <label class="form-check-label" for="sanitizacao"> - Sanitização de ambientes</label>									
                                      </div>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="passadoria" id="passadoria" value="1">
                                        <label class="form-check-label" for="passadoria"> - Passadoria</label>									
                                      </div>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="preMudanca" id="preMudanca" value="1">
                                        <label class="form-check-label" for="preMudanca"> - Pre Mudanca</label>									
                                      </div>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="posMudanca" id="posMudanca" value="1">
                                        <label class="form-check-label" for="posMudanca"> - Pos Mudanca</label>									
                                      </div>
                                    </div>
                                    <p class="help-block"></p>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="retrabalho" id="retrabalho" value="1">
                                        <label class="form-check-label" for="retrabalho"> - Retrabalho</label>									
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
            <table class="table table-bordered table-striped ajaxTable @can('admin_service_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('admin_service_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('abrigosoftware.services.fields.service-type')</th>
                        <th>@lang('abrigosoftware.services.fields.service-category')</th>
                        <th>@lang('abrigosoftware.services.fields.client')</th>
						
						<th>@lang('abrigosoftware.services.fields.status')</th>
						
						
                        <th>@lang('abrigosoftware.services.fields.assigned-to')</th>
                        <th>@lang('abrigosoftware.services.fields.products-included')</th>
                        <th>@lang('abrigosoftware.services.fields.value')</th>
						<th>@lang('abrigosoftware.services.fields.subscription_value')</th>
						<th>@lang('abrigosoftware.services.fields.professional-value')</th>
                        <th>@lang('abrigosoftware.services.fields.start-time')</th>
                        <th>@lang('abrigosoftware.services.fields.end-time')</th>
                       
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('admin_service_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.services.mass_destroy') }}';
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.services.index') !!}?start_date={{ request('start_date') }}&end_date={{ request('end_date') }}&comum={{ request('comum') }}&express={{ request('express') }}&alto_brilho={{ request('alto_brilho') }}&higienizacao={{ request('higienizacao') }}&impermeabilizacao={{ request('impermeabilizacao') }}&passadoria={{ request('passadoria') }}&automotivo={{ request('automotivo') }}&sanitizacao={{ request('sanitizacao') }}&preMudanca={{ request('preMudanca') }}&posMudanca={{ request('posMudanca') }}&retrabalho={{ request('retrabalho') }}&avulsa={{ request('avulsa') }}&quinzenal={{ request('quinzenal') }}&semanal={{ request('semanal') }}&multipla={{ request('multipla') }}';
            window.dtDefaultOptions.columns = 
			[
                @can('admin_service_delete')                
				    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endcan
                
                {data: 'service_type.title', name: 'service_type.title'},
                {data: 'service_category.title', name: 'service_category.title'},                
				        {data: 'client.name',	name: 'client.name',    },							
				//{data: 'payment_status.title', name: 'payment_status.title'},
                {data: 'status.title', name: 'status.title'},				
                {data: 'assigned_to.name', name: 'assigned_to.name'},
                {data: 'products_included', name: 'products_included'},
                {data: 'value', name: 'value'},
				        {data: 'subscription_value', name: 'subscription_value'},
				        {data: 'service_slots.value', name: 'service_slots.value'},
                {data: 'start_time', name: 'start_time'},
                {data: 'end_time', name: 'end_time'},
               
                
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
	 <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
                      
            $('.datetime').datetimepicker({
                date:moment(""),
				format:"DD/MM/YYYY HH:mm",
				sideBySide: true,
				
            });
            
        });
    </script>
@endsection