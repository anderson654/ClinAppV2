@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.services-feedbacks.title')</h3>
    @can('services_feedback_create')
    {{-- <p>
        <a href="{{ route('admin.services_feedbacks.create') }}" class="btn btn-success">@lang('abrigosoftware.as_add_new')</a>
        
    </p> --}}
    @endcan

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable @can('services_feedback_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('services_feedback_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>Cliente</th>
                        <th>@lang('abrigosoftware.services-feedbacks.fields.text')</th>
                        <th>Estrelas</th>
						<th>Data</th>
						<th>Profissional</th>

                                                <th>&nbsp;</th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('services_feedback_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.services_feedbacks.mass_destroy') }}';
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.services_feedbacks.index') !!}';
            window.dtDefaultOptions.columns = [
			
				@can('services_feedback_delete')
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endcan
				
				{data: 'service_id', name: 'service_id'},
                {data: 'text', name: 'text'},
                {data: 'evaluate', name: 'evaluate'},
                {data: 'updated_at', name: 'updated_at'},
				{data: 'professional', name: 'professional'},
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection