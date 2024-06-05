@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">Enquetes </h3>
    
    <p>
        <a href="{{ route('admin.surveys.create') }}" class="btn btn-success">@lang('abrigosoftware.as_add_new')</a>
        
    </p>
   

    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($surveys) > 0 ? 'datatable' : '' }} @can('surveys_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('surveys_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>Questão</th>
						<th>Resposta A</th>
						<th>Resposta B</th>
						<th>Resposta C</th>
						<th>Resposta D</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($surveys) > 0)
                        @foreach ($surveys as $survey)
                            <tr data-entry-id="{{ $survey->id }}">
                                @can('surveys_delete')
                                <td></td>
                                @endcan

                                <td field-key='title'>{{ $survey->question }}</td>
								<td> {{$survey->answer_a}}</td>
								<td> {{$survey->answer_b}}</td>
								<td> {{$survey->answer_c}}</td>
								<td> {{$survey->answer_d}}</td>
								<td> {{$survey->status}}</td>
                                <td> {{$survey->audience}}</td>
								<td>
                                    @can('surveys_view')
                                    <a href="{{ route('admin.surveys.show',[$survey->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
                                    @endcan
                                    @can('surveys_edit')
                                    <a href="{{ route('admin.surveys.edit',[$survey->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
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
