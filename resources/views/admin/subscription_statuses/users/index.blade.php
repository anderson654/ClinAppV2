@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.users.title')</h3>
    @can('user_create')
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
    <div class="row">
        <div class="col-xs-6 col-md-2 form-group">
            {!! Form::label('role_id','Função',['class' => 'control-label']) !!}
            {!! Form::select('role_id', $roles, old('role_id',request('role_id')), ['class' => 'form-control']) !!}
        </div>
        <div class="col-xs-4">
            <label class="control-label">&nbsp;</label><br>
            {!! Form::submit('Filtrar',['class' => 'btn btn-info']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable">
                <thead>
                    <tr>


                        <th>@lang('abrigosoftware.users.fields.status')</th>
                        <th>@lang('abrigosoftware.users.fields.name')</th>
						<th>Data de Criação</th>
						<th>Como Chegou?</th>
                        <th>@lang('abrigosoftware.users.fields.email')</th>
                        <th>@lang('abrigosoftware.users.fields.role')</th>						
                        <th>@lang('abrigosoftware.users.fields.cpf')</th>
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
            window.dtDefaultOptions.ajax = '{!! route('admin.users.index') !!}?role_id={{ request('role_id') }}';
            window.dtDefaultOptions.columns = [
				{
                    data: 'status',
                    name: 'status',
                    render: function(jsonDate) {
                        let status = parseInt(jsonDate); 
                        return status == 1 ? "Ativo" : "Desativado";
                    }
                },
                {data: 'name', name: 'name'},
				{data: 'created_at', name: 'created_at'},
                {data: 'como_chegou', name: 'como_chegou'},
                {data: 'email', name: 'email'},
				{data: 'role.title', name: 'role.title', sortable: false},
				{data: 'cpf', name: 'cpf'},
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
                {data: 'city.title', name: 'city', searchable: false, sortable: false},
                
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });

    </script>

@endsection