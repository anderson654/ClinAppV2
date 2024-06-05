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

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>@lang('abrigosoftware.users.fields.name')</th>
                        <th>@lang('abrigosoftware.users.fields.email')</th>
                        <th>Como Chegou?</th>

                        <th>Telefone</th>
                        <th>Celular</th>
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
            window.dtDefaultOptions.ajax = '{!! route('admin.users.index') !!}?role_id={{ request('role_id') }}';
            window.dtDefaultOptions.columns = [{
                    data: 'id',
                    name: 'id'
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
                    data: 'como_chegou',
                    name: 'como_chegou'
                },

                //{data: 'contact.phone', name: 'contact.phone'},
                {
                    data: 'contact.phone',
                    name: 'contact.phone',
                    className: 'phone',
                    render: function(jsonDate) {
                        if (jsonDate && jsonDate.length <= 11) {
                            let phone = jsonDate.replace(/\D/g, "");
                            phone = "(" + jsonDate.substr(0, 2) + ")" + jsonDate.substr(2, 5) + "-" +
                                jsonDate.substr(7);
                            return phone;
                        } else if (jsonDate && jsonDate.length >= 12) {
                            let phone = jsonDate;
                            phone = jsonDate.replace(/-/gi, '');
                            phone = "(" + jsonDate.substr(0, 3) + ")" + jsonDate.substr(3, 5) + "-" +
                                jsonDate.substr(8);
                            return phone;
                        } else {
                            return "Sem telefone";
                        }
                    },
                    searchable: false,
                    sortable: false
                },
                {
                    data: 'phone',
                    name: 'phone',
                    render: function(jsonDate) {
                        if (jsonDate && jsonDate.length <= 11) {
                            let phone = jsonDate.replace(/\D/g, "");
                            phone = "(" + jsonDate.substr(0, 2) + ")" + jsonDate.substr(2, 5) + "-" +
                                jsonDate.substr(7);
                            return phone;
                        } else if (jsonDate && jsonDate.length >= 12) {
                            let phone = jsonDate;
                            phone = jsonDate.replace(/-/gi, '');
                            phone = "(" + jsonDate.substr(0, 3) + ")" + jsonDate.substr(3, 5) + "-" +
                                jsonDate.substr(8);
                            return phone;
                        } else {
                            return "Sem telefone";
                        }
                    },
                    searchable: false,
                    sortable: false
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

@endsection
