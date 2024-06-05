@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.service-category.title')</h3>
    @can('service_category_create')
    <p>
        <a href="{{ route('admin.service_categories.create') }}" class="btn btn-success">@lang('abrigosoftware.as_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($service_categories) > 0 ? 'datatable' : '' }} @can('service_category_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('service_category_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('abrigosoftware.service-category.fields.title')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($service_categories) > 0)
                        @foreach ($service_categories as $service_category)
                            <tr data-entry-id="{{ $service_category->id }}">
                                @can('service_category_delete')
                                    <td></td>
                                @endcan

                                <td field-key='title'>{{ $service_category->title }}</td>
                                                                <td>
                                    @can('service_category_view')
                                    <a href="{{ route('admin.service_categories.show',[$service_category->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
                                    @endcan
                                    @can('service_category_edit')
                                    <a href="{{ route('admin.service_categories.edit',[$service_category->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
                                    @endcan
                                    @can('service_category_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("abrigosoftware.as_are_you_sure")."');",
                                        'route' => ['admin.service_categories.destroy', $service_category->id])) !!}
                                    {!! Form::submit(trans('abrigosoftware.as_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('abrigosoftware.as_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('service_category_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.service_categories.mass_destroy') }}';
        @endcan

    </script>
@endsection