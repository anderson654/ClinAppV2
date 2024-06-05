@extends('layouts.app')

@section('content')

    <h3 class="page-title">@lang('abrigosoftware.users.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.name') </th>
                            <td field-key='name'>{{ $user->professional->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.email')</th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.role')</th>
                            <td field-key='role'>{{ $user->role->title or '' }}</td>
                        </tr>
                        <tr>
                            <th>Data de Criação</th>
                            <td field-key='created_at'>{{ $user->created_at or '' }}</td>
                        </tr>

                        <tr>
                            <th>@lang('abrigosoftware.users.fields.cpf')</th>
                            <td field-key='cpf'>{{ $cpf or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.birthdate')</th>
                            <td field-key='birthdate'>{{ $user->professional->birthdate or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.gender')</th>
                            <td field-key='gender'>{{ $user->professional->gender or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.phone')</th>
                            <td field-key='phone'>{{ $user->contact->phone or '' }}</td>
                        </tr>

                        <tr>
                            <th>@lang('abrigosoftware.users.fields.street')</th>
                            <td field-key='street'>{{ $user->address->street or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.number')</th>
                            <td field-key='number'>{{ $user->address->number or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.zip')</th>
                            <td field-key='zip'>{{ $user->address->zip or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.neighborhood')</th>
                            <td field-key='neighborhood'>{{ $user->address->neighborhood or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.city')</th>
                            <td field-key='city'>{{ $user->address->city->title or 'vazio' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.state')</th>
                            <td field-key='state'>{{ $user->address->city->state->title or 'vazio' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.complement')</th>
                            <td field-key='complement'>{{ $user->address->complement or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('Como Chegou até a Clin?')</th>
                            <td field-key='complement'>{{ $user->como_chegou or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('Possui Produtos')</th>
                            @if ($user->has_products == 1)
                                <td class="text-success"><strong>Sim</td>
                            @else
                                <td class="text-danger"><strong>Não</td>
                            @endif
                        </tr>
                        <tr>
                            <th>Dias disponíveis</th>
                            <td>
                                @foreach ($dias as $dia)
                                    <span class="badge badge-primary">{{ $dia }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Conta Bancária</th>
                            @if (isset($bank_account))
                                <td>Agência: {{ $bank_account->agencia or '' }} / Conta: {{ $bank_account->conta or '' }}
                                    - {{ $bank_account->digito or '' }} <br /> Banco: {{ $bank->title or '' }}</td>
                            @else
                                <td>Nenhuma conta bancária cadastrada</td>

                            @endif
                        </tr>
                        <tr>
                            <th>Dados MEI (Para ISS)</th>
                            <td>CNPJ: {{ $user->professional->mei or '' }} <br /> Usuário:
                                {{ $user->professional->mei_user or '' }} <br /> Senha:
                                {{ $user->professional->mei_passwd or '' }} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a class="btn btn-info" href="{{ URL::current() . '/edit' }}">Editar Cadastro</a></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active"><a href="#services" aria-controls="services" role="tab"
                        data-toggle="tab">Faxinas</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="services">
                    <table class="table table-bordered table-striped {{ count($services) > 0 ? 'datatable' : '' }}">
                        <thead>
                            <tr>
                                <th>@lang('abrigosoftware.services.fields.address-type')</th>
                                <th>@lang('abrigosoftware.services.fields.service-type')</th>
                                <th>@lang('abrigosoftware.services.fields.service-category')</th>
                                <th>@lang('abrigosoftware.services.fields.client')</th>
                                <th>@lang('abrigosoftware.services.fields.status')</th>
                                {{-- <th>@lang('abrigosoftware.services.fields.assigned-to')</th> --}}
                                <th>@lang('abrigosoftware.services.fields.products-included')</th>
                                <th>@lang('abrigosoftware.services.fields.value')</th>
                                <th>@lang('abrigosoftware.services.fields.start-time')</th>
                                <th>@lang('abrigosoftware.services.fields.end-time')</th>
                                <th>@lang('abrigosoftware.services.fields.pet')</th>
                                <th>&nbsp;</th>

                            </tr>
                        </thead>

                        <tbody>
                            @if (count($services) > 0)
                                @foreach ($services as $service)
                                    <tr data-entry-id="{{ $service->id }}">
                                        <td field-key='address_type'>{{ $service->address_type->title or '' }}</td>
                                        <td field-key='service_type'>{{ $service->service_type->title or '' }}</td>
                                        <td field-key='service_category'>{{ $service->service_category->title or '' }}</td>
                                        <td field-key='client'>{{ $service->client->name or '' }}</td>
                                        <td field-key='status'>{{ $service->status->title or '' }}</td>
                                        {{-- <td field-key='assigned_to'>{{ $service->assigned_to->name or '' }}</td> --}}
                                        <td field-key='products_included'>
                                            {{ Form::checkbox('products_included', 1, $service->products_included == 1 ? true : false, ['disabled']) }}
                                        </td>
                                        <td field-key='value'>{{ $service->value }}</td>
                                        <td field-key='start_time'>{{ $service->start_time }}</td>
                                        <td field-key='end_time'>{{ $service->end_time }}</td>
                                        <td field-key='pet'>
                                            {{ Form::checkbox('pet', 1, $service->pet == 1 ? true : false, ['disabled']) }}
                                        </td>
                                        <td>
                                            @can('admin_service_view')
                                                <a href="{{ route('admin.services.show', [$service->id]) }}"
                                                    class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
                                            @endcan
                                            @can('admin_service_edit')
                                                <a href="{{ route('admin.services.edit', [$service->id]) }}"
                                                    class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
                                            @endcan
                                            @can('admin_service_delete')
                                                {!! Form::open([
    'style' => 'display: inline-block;',
    'method' => 'DELETE',
    'onsubmit' => "return confirm('" . trans('abrigosoftware.as_are_you_sure') . "');",
    'route' => ['admin.services.destroy', $service->id],
]) !!}
                                                {!! Form::submit(trans('abrigosoftware.as_delete'), ['class' => 'btn btn-xs btn-danger']) !!}
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

            <a href="{{ url()->previous() }}" class="btn btn-default">@lang('abrigosoftware.as_back_to_list')</a>
        </div>
    </div>

@stop
