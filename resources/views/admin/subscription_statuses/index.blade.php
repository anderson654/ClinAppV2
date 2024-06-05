@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.subscription-status.title')</h3>
    @can('subscription_status_create')
    <p>
        <a href="{{ route('admin.subscription_statuses.create') }}" class="btn btn-success">@lang('abrigosoftware.as_add_new')</a>
        
    </p>
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($subscription_statuses) > 0 ? 'datatable' : '' }} @can('subscription_status_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('subscription_status_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('abrigosoftware.subscription-status.fields.title')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($subscription_statuses) > 0)
                        @foreach ($subscription_statuses as $subscription_status)
                            <tr data-entry-id="{{ $subscription_status->id }}">
                                @can('subscription_status_delete')
                                    <td></td>
                                @endcan

                                <td field-key='title'>{{ $subscription_status->title }}</td>
                                                                <td>
                                    @can('subscription_status_view')
                                    <a href="{{ route('admin.subscription_statuses.show',[$subscription_status->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
                                    @endcan
                                    @can('subscription_status_edit')
                                    <a href="{{ route('admin.subscription_statuses.edit',[$subscription_status->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
                                    @endcan
                                    @can('subscription_status_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("abrigosoftware.as_are_you_sure")."');",
                                        'route' => ['admin.subscription_statuses.destroy', $subscription_status->id])) !!}
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
        @can('subscription_status_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.subscription_statuses.mass_destroy') }}';
        @endcan

    </script>
@endsection