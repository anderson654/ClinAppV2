@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.service-category.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-10">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('abrigosoftware.surveys.fields.title')</th>
                            <td field-key='title'><h3><strong>{{ $survey->question }}</strong></h3></td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#surveys" aria-controls="surveys" role="tab" data-toggle="tab">@lang('abrigosoftware.surveys.fields.answers')</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="surveys">
	<table class="table table-bordered table-striped">
			<thead>
				<tr>                      
					<th>@lang('abrigosoftware.surveys.fields.answer_a')</th>
					<th>@lang('abrigosoftware.surveys.fields.answer_b')</th>
					<th>@lang('abrigosoftware.surveys.fields.answer_c')</th>
					<th>@lang('abrigosoftware.surveys.fields.answer_d')</th>
					<th>&nbsp;</th>

                    </tr>
                </thead>

    <tbody>
        
		<tr data-entry-id="{{ $survey->id }}">
					
					<td field-key='user_name'>{{ $survey->answer_a or '' }}</td>
					<td field-key='user_name'>{{ $survey->answer_b or '' }}</td>
					<td field-key='user_name'>{{ $survey->answer_c or '' }}</td>
					<td field-key='user_name'>{{ $survey->answer_d or '' }}</td>
					<td>
						@can('survey_view')
							<a href="{{ route('admin.surveys.show',[$survey->id]) }}" class="btn btn-xs btn-primary">@lang('abrigosoftware.as_view')</a>
						@endcan
						@can('survey_edit')
							<a href="{{ route('admin.surveys.edit',[$survey->id]) }}" class="btn btn-xs btn-info">@lang('abrigosoftware.as_edit')</a>
						@endcan
						@can('survey_delete')
							{!! Form::open(array(
								'style' => 'display: inline-block;',
								'method' => 'DELETE',
								'onsubmit' => "return confirm('".trans("abrigosoftware.as_are_you_sure")."');",
								'route' => ['admin.surveys.destroy', $survey->id])) !!}
							{!! Form::submit(trans('abrigosoftware.as_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
							{!! Form::close() !!}
							@endcan
					</td>

        </tr> 
		<tr>
			<td><strong> {{$answer_a}} Votos</strong></td>
			<td><strong> {{$answer_b}} Votos</strong></td>
			<td><strong> {{$answer_c}} Votos</strong></td>
			<td><strong> {{$answer_d}} Votos</strong></td>
		</tr>
		<tr>
			<td><strong> {{$perc_answer_a}} %</strong></td>
			<td><strong> {{$perc_answer_b}} %</strong></td>
			<td><strong> {{$perc_answer_c}} %</strong></td>
			<td><strong> {{$perc_answer_d}} %</strong></td>
		</tr>
		
    </tbody>
</table>

<div class="row">
	<div class="col-sm">
		
		<div class="col-md-12"  align="center" id="answer_div">
		
			{!! $Lava->render('DonutChart', 'IMDB', 'answer_div', true) !!}
			<br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
</div>

</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.surveys.index') }}" class="btn btn-default">@lang('abrigosoftware.as_back_to_list')</a>
        </div>
    </div>
@stop


