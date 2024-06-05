@extends('layouts.app')

@section('content')

    <style scoped>
        @media (min-width: 992px) {
            .modal-body {
                width: 120%;
                margin-left: 17%;
                max-height: 200px;
                overflow-y: auto;

            }
        }

        .modal-body {
            max-height: 400px;
            overflow-y: auto;
        }

    </style>

    <h3 class="page-title">@lang('abrigosoftware.users.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-4">
                    <table class="table table-hover">
                        <tr>
                            <th>Razão Social </th>
                            <td field-key='name'>{{ $user->corporateClient->razao_social or '' }}</td>
                        </tr>
                        <tr>
                            <th>Nome Fantasia</th>
                            <td field-key='name'>{{ $user->corporateClient->nome_fantasia or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('abrigosoftware.users.fields.email')</th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>

                        <tr>
                            <th>Data de Criação</th>
                            <td field-key='created_at'>{{ $user->created_at or '' }}</td>
                        </tr>
                        <th>Origem</th>
                        <td field-key='como_chegou'>{{ $user->como_chegou or '' }}</td>
                        </tr>
                        <tr>
                            <th>CNPJ</th>
                            <td field-key='cpf'>{{ $cnpj or '' }}</td>
                        </tr>
                        @php
                            $count = 0;
                        @endphp
                        @if ($contacts)
                            @foreach ($contacts as $contact)
                                @php
                                    $count++;
                                @endphp
                                <tr>
                                    <th>@lang('abrigosoftware.users.fields.phone') {{ $count }}</th>
                                    <td field-key='phone'>{{ $contact or '' }}</td>
                                </tr>
                            @endforeach
                        @endif
                        <th>@lang('Como Chegu até a Clin')</th>
                        <td field-key='complement'>{{ $user->como_chegou or '' }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                @if (strlen($addresses) > 2)
                                    <ul class="list-group">
                                        @foreach ($addresses as $index => $address)
                                            <li class="list-group-item">
                                                <div class="row toggle" id="dropdown-detail-1"
                                                    data-toggle="detail-{{ $index }}">
                                                    <div class="col-md-4">
                                                        Endereço {{ $index + 1 }}
                                                    </div>
                                                    <div><i class="fa fa-chevron-down pull-right mr-10"></i></div>
                                                </div>
                                                <div id="detail-{{ $index }}">
                                                    <hr>
                                                    </hr>
                                                    <div class="container" style="width: 100%">
                                                        <div class="fluid-row">
                                                            <ul>
                                                                <li><strong>Rua: </strong>{{ $address->street }}</li>
                                                                <li><strong>Nº: </strong>{{ $address->number }}</li>
                                                                <li><strong>CEP: </strong>{{ $address->zip }}</li>
                                                                <li><strong>Complemento
                                                                    </strong>{{ $address->complement }}</li>
                                                                <li><strong>Bairro:
                                                                    </strong>{{ $address->neighborhood }}</li>
                                                                <li><strong>Cidade:
                                                                        {{-- </strong>{{ $address->city->title }}</li> --}}
                                                            </ul>
                                                            <p type="hidden"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    Endereço não cadastrado!
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
                @if (strlen($cAdvice) > 2)
                    <div class="col-md-8">
                        <h4>
                            <strong>Log de observações</strong>
                        </h4>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Registro</th>
                                    <th scope="col">Inserido por:</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cAdvice as $advice)
                                    <tr>
                                        <th scope="row">{{ $advice->id }}</th>
                                        <td>{{ $advice->advice }}</td>
                                        <td>{{ $advice->inserted_by }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                <div class="col-md-4 offset-md-4 col-lg-6 ml-5" id="logModal">
                    <div class="modal-body">
                        <table id="userlog" class="table table-hover text-center" style="width: 100%;">
                            <thead>
                                <th scope="col" colspan="3">Histórico</th>
                            </thead>
                            <thead>
                                <th scope="col">Ação</th>
                                <th scope="col">ID Alvo</th>
                                <th scope="col">Data</th>
                            </thead>
                            <tbody id="logs" class="log">
                                @foreach ($logs as $log)
                                    <tr>
                                        <td>{{ $log->log }}</td>
                                        <td>{{ $log->target_user }}</td>
                                        <td>{{ $log->created_at }}</td>
                                    <tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
                                        <td field-key='service_category'>{{ $service->service_category->title or '' }}
                                        </td>
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
