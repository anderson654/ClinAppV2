@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.service-type.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('abrigosoftware.service-type.fields.title')</th>
                            <td field-key='title'>{{ $service_type->title }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#services" aria-controls="services" role="tab" data-toggle="tab">Faxinas</a></li>
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
                        <th>@lang('abrigosoftware.services.fields.assigned-to')</th>
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
                                <td field-key='assigned_to'>{{ $service->assigned_to->name or '' }}</td>
                                <td field-key='products_included'>{{ Form::checkbox("products_included", 1, $service->products_included == 1 ? true : false, ["disabled"]) }}</td>
                                <td field-key='value'>{{ $service->value }}</td>
                                <td field-key='start_time'>{{ $service->start_time }}</td>
                                <td field-key='end_time'>{{ $service->end_time }}</td>
                                <td field-key='pet'>{{ Form::checkbox("pet", 1, $service->pet == 1 ? true : false, ["disabled"]) }}</td>
                                                                <td>
                                    @can('admin_service_view')
                                    <a href="{{ route('admin.services.show',[$service->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
                                    @endcan
                                    @can('admin_service_edit')
                                    <a href="{{ route('admin.services.edit',[$service->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
                                    @endcan
                                    @can('admin_service_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("abrigosoftware.as_are_you_sure")."');",
                                        'route' => ['admin.services.destroy', $service->id])) !!}
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

            <a href="{{ route('admin.service_types.index') }}" class="btn btn-default">@lang('abrigosoftware.as_back_to_list')</a>
        </div>
    </div>
@stop


