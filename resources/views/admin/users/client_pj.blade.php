@extends('layouts.app')

@section('content')
    <h3 class="page-title">Clientes Corporativos</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">@lang('abrigosoftware.service-status.fields.title')</th>
                        <th>Email</th>
                        <th>Cnpj</th>
                        <th>Telefone</th>
                        <th>&nbsp;Ações</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $index => $user)
                            <tr>
                                <td field-key='title'>{{ $users[$index]->name }}</td>
                                <td field-key='title'>{{ $users[$index]->email }}</td>
                                <td field-key='title'>{{ $users[$index]->cnpj }}</td>
                                <td field-key='title'>{{ $users[$index]->celphone }}</td>
                                <td><a href="{{ url('admin/users', [$users[$index]->id]) }}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Visualizar</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="1">@lang('abrigosoftware.as_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        {{ $users->links() }}
    </div>
@stop