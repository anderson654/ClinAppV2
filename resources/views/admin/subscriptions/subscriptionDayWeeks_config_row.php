<tr data-index="{{ $index }}">
	<td>{!! Form::select('subscriptionDayWeeks['.$index.'][professional_id]', $professionals, old('subscriptionDayWeeks['.$index.'][professional_id]', isset($field) ? $field->professional_id: ''), ['class' => 'form-control select']) !!}</td>
    <td>{!! Form::text('subscriptionDayWeeks['.$index.'][dayWeek]', old('subscriptionDayWeeks['.$index.'][dayWeek]', isset($field) ? $field->dayWeek: $dayWeek), ['class' => 'form-control']) !!}</td>
	
    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('abrigosoftware.as_delete')</a>
    </td>
</tr>