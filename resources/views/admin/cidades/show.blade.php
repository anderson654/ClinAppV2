@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.service-category.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('abrigosoftware.service-category.fields.title')</th>
                            <td field-key='title'><h2><strong>{{ $city->title }}</strong></h2></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab" data-toggle="tab">Clientes</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="users">
	<table class="table table-bordered table-striped {{ count($users) > 0 ? 'datatable' : '' }}">
			<thead>
                    <tr>


                       
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

    <tbody>
        @if (count($users) > 0)
            @foreach ($users as $user)
                <tr data-entry-id="{{ $user->id }}">
                   
                                <td field-key='user_name'>{{ $user->name or '' }}</td>
                                <td field-key='user_created_at'>{{ $user->created_at or '' }}</td>
                                <td field-key='como_chegou'>{{ $user->como_chegou or '' }}</td>
                                <td field-key='email'>{{ $user->email or '' }}</td>
                                <td field-key='role'>{{ $user->função or '' }}</td>
                                 <td field-key='cpf'>{{ $user->cpf }}</td>
                                <td field-key='cellphone'>{{ $user->celphone }}</td>
                                <td field-key='end_time'>{{ $user->address->city->title }}</td>
                                                               <td>
                                    @can('user_view')
                                    <a href="{{ route('admin.users.show',[$user->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
                                    @endcan
                                    @can('user_edit')
                                    <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
                                    @endcan
                                    @can('user_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("abrigosoftware.as_are_you_sure")."');",
                                        'route' => ['admin.users.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('abrigosoftware.as_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="23">@lang('abrigosoftware.as_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.cities.index') }}" class="btn btn-default">@lang('abrigosoftware.as_back_to_list')</a>
        </div>
    </div>
@stop


