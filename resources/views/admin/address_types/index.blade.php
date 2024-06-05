@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.address-type.title')</h3>
    @can('address_type_create')
    <p>
        <a href="{{ route('admin.address_types.create') }}" class="btn btn-success">@lang('abrigosoftware.as_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($address_types) > 0 ? 'datatable' : '' }} @can('address_type_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('address_type_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('abrigosoftware.address-type.fields.title')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($address_types) > 0)
                        @foreach ($address_types as $address_type)
                            <tr data-entry-id="{{ $address_type->id }}">
                                @can('address_type_delete')
                                    <td></td>
                                @endcan

                                <td field-key='title'>{{ $address_type->title }}</td>
                                                                <td>
                                    @can('address_type_view')
                                    <a href="{{ route('admin.address_types.show',[$address_type->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
                                    @endcan
                                    @can('address_type_edit')
                                    <a href="{{ route('admin.address_types.edit',[$address_type->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
                                    @endcan
                                    @can('address_type_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("abrigosoftware.as_are_you_sure")."');",
                                        'route' => ['admin.address_types.destroy', $address_type->id])) !!}
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
        @can('address_type_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.address_types.mass_destroy') }}';
        @endcan

    </script>
@endsection