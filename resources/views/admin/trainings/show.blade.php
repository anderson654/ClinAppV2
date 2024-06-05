@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.trainings.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-10">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('abrigosoftware.as_name')</th>
                            <td field-key='title'><h3><strong>{{ $training->name }}</strong></h3></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#surveys" aria-controls="surveys" role="tab" data-toggle="tab">@lang('abrigosoftware.trainings.fields.title')</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="surveys">
	<table class="table table-bordered table-striped">
			<thead>
				<tr>                      
					<th>@lang('abrigosoftware.as_name')</th>
					<th>@lang('abrigosoftware.trainings.fields.duration')</th>
					<th>@lang('abrigosoftware.trainings.fields.video_id')</th>
					<th>@lang('abrigosoftware.as_statuses')</th>
					<th>@lang('abrigosoftware.trainings.fields.lifetime')</th>
					<th>@lang('abrigosoftware.trainings.fields.mandatory')</th>
					<th>@lang('abrigosoftware.as_category')</th>
					<th>@lang('abrigosoftware.trainings.fields.release_order')</th>
					<th>@lang('abrigosoftware.trainings.fields.prerequisite')</th>
					<th>&nbsp;</th>

                    </tr>
                </thead>

    <tbody>
        
		<tr data-entry-id="{{ $training->id }}">
					
					<td field-key='user_name'>{{ $training->name or '' }}</td>
					<td field-key='user_name'>{{ $training->duration or '' }}</td>
					<td field-key='user_name'>{{ $training->video_id or '' }}</td>
					<td field-key='user_name'>{{ $training->status->title or '' }}</td>
					<td field-key='user_name'>{{ $training->lifetime or '' }}</td>
					<td field-key='user_name'>{{ $training->mandatory == 1 ? 'sim' : 'não' }}</td>
					<td field-key='user_name'>{{ $training->training_category->title or '' }}</td>
					<td field-key='user_name'>{{ $training->release_order or '' }}</td>
					<td field-key='user_name'>{{ $training->prerequisite->name or '' }}</td>
					<td>
						@can('survey_view')
							<a href="{{ route('admin.surveys.show',[$training->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
						@endcan
						@can('survey_edit')
							<a href="{{ route('admin.surveys.edit',[$training->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
						@endcan
						@can('survey_delete')
							{!! Form::open(array(
								'style' => 'display: inline-block;',
								'method' => 'DELETE',
								'onsubmit' => "return confirm('".trans("abrigosoftware.as_are_you_sure")."');",
								'route' => ['admin.surveys.destroy', $training->id])) !!}
							{!! Form::submit(trans('abrigosoftware.as_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
							{!! Form::close() !!}
							@endcan
					</td>

        </tr> 
		
    </tbody>
</table>
            <p>&nbsp;</p>

            <a href="{{ route('admin.surveys.index') }}" class="btn btn-default">@lang('abrigosoftware.as_back_to_list')</a>
        </div>
    </div>
@stop


