<tr >
	<td>{!! Form::select('service_slots[1][user_id]', $assigned_tos, old('service_slots[1][user_id]', isset($field) ? $field->user_id: ''), ['class' => 'form-control select']) !!}</td>
	<td>{!! Form::text('service_slots[1][value]', old('service_slots[1][value]', isset($field) ? $value: ''), ['class' => 'form-control']) !!}</td>
	
	
	<td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('abrigosoftware.as_delete')</a>
    </td>
</tr>