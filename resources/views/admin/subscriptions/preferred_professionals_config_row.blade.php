<tr data-index="{{ $index }}">
	<td>{!! Form::select('preferred_professionals['.$index.'][user_id]', $assigned_tos, old('preferred_professionals['.$index.'][user_id]', isset($field) ? $field->user_id: ''), ['class' => 'form-control select']) !!}</td>
    <td>{!! Form::text('preferred_professionals['.$index.'][value]', old('preferred_professionals['.$index.'][value]', isset($field) ? $field->value: $value), ['class' => 'form-control']) !!}</td>
	
    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('abrigosoftware.as_delete')</a>
    </td>
</tr>