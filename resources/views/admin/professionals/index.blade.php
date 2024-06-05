@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.users.title')</h3>
    {{-- @can('user_create')
    <p>
        <a href="{{ route('admin.professionals.create') }}" class="btn btn-success">@lang('abrigosoftware.as_add_new')</a>
        
    </p>
    @endcan --}}
    @if (Session::has('admin-mensagem-sucesso'))
        <div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>
    @endif
    @if (Session::has('admin-mensagem-error'))
        <div class="alert alert-error"><strong>{{ Session::get('admin-mensagem-error') }}<strong></div>
    @endif

    @if (session()->has('message'))
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
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="box box-default box-solid collapsed-box" id="box-widget">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>

                    <div class="box-tools pull-right">Filtrar por cidade
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div> --}}
    <!-- /.box-header -->
    {{-- {!! Form::open(['method' => 'GET', 'id' => 'search-form']) !!} --}}
    {{-- <div class="box-body">
						<div class="row"> --}}
    {{-- <div class="col-md-4 form-group">
								<p style="font-weight: bold;">Filtrar  por cidade</p>
								<div class="row">
									<div class="col-xs-12 form-group">
										
										{!! Form::label('state', 'Estado ', ['class' => 'control-label']) !!}<span class="text-muted"> (Obrigatório)</span>
										
										{!! Form::select('state', $states, old('states'), ['class' => 'form-control', 'placeholder' => 'Escolha...', 'required' => '', 'data-error' => 'Estado Obrigatório']) !!}
										
									
										 <p class="help-block"></p>
										@if ($errors->has('state'))
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
										@if ($errors->has('city'))
											<p class="help-block">
												{{ $errors->first('city') }}
											</p>
										@endif
									</div>
								</div>
							</div> --}}
    {{-- </div>
					</div> --}}
    {{-- <div class="box-footer">
                    {!! Form::submit('Pesquisar', ['class' => 'btn btn-primary pull-right']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div> --}}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable">
                <thead>
                    <tr>

                        <th>Data de Criação</th>
                        <th>@lang('abrigosoftware.users.fields.status')</th>
                        <th>@lang('abrigosoftware.users.fields.name')</th>
                        <th>@lang('abrigosoftware.users.fields.email')</th>
                        <th>Telefone</th>
                        <th>Cidade</th>
                        <th>Produtos</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript')

    <script>
        $(document).ready(function() {
            window.dtDefaultOptions.ajax = '{!! route('admin.professionals.index') !!}?city_id={{ request('city') }}';
            window.dtDefaultOptions.columns = [{
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'status',
                    name: 'status',
                    render: function(jsonDate) {
                        let status = parseInt(jsonDate);
                        return status == 1 ? "Ativo" : "Desativado";
                    }
                },
                {
                    data: 'name',
                    name: 'name'
                },

                {
                    data: 'email',
                    name: 'email'
                },


                {
                    data: 'contact.phone',
                    name: 'contact.phone'
                        //className:'phone',
                        // render: function(jsonDate) {
                        //if(jsonDate && jsonDate.length <= 11){
                        // let phone = jsonDate.replace(/\D/g,"");
                        // phone ="(" + jsonDate.substr(0,2) + ")" + jsonDate.substr(2,5)+"-"+jsonDate.substr(7);
                        // return phone;
                        //} else if(jsonDate && jsonDate.length >= 12) {
                        // let phone = jsonDate;
                        // phone = jsonDate.replace(/-/gi, '');
                        //phone ="(" + jsonDate.substr(0,3) + ")" + jsonDate.substr(3,5)+"-"+jsonDate.substr(8);
                        // return phone;
                        //} else {
                        //return "Sem telefone";
                        //}
                        //}
                        ,
                    searchable: false,
                    sortable: false
                },
                {
                    data: 'address.city',
                    name: 'city',
                    searchable: false,
                    sortable: false
                },
                {
                    data: 'has_products',
                    name: 'has_products',
                    render: function(jsonDate) {
                        let has_products = parseInt(jsonDate);
                        return has_products == 1 ? "Sim" : "Não";
                    }
                },
                {
                    data: 'actions',
                    name: 'actions',
                    searchable: false,
                    sortable: false
                }
            ];
            processAjaxTables();
        });
    </script>

    {{-- <script type="text/javascript">
        $('select[name=state]').change(function () {
            var idState = $(this).val();
            $.get('/admin/get-cities/' + idState, function (cities) {
                $('select[name=city]').empty();
                $.each(cities, function (key, value) {
                    $('select[name=city]').append('<option value=' + value.id + '>' + value.city + '</option>');
                });
            });
        });
    </script> --}}
@endsection
