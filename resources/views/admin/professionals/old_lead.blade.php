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
    <h3 class="page-title">Usuários Leads</h3>

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
            window.dtDefaultOptions.ajax = '{!! route('admin.old.lead') !!}';
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

@endsection