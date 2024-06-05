<tr data-index="{{ $index }}">
	{{--<td>{!! Form::select('service_slots['.$index.'][user_id]', $assigned_tos, old('service_slots['.$index.'][user_id]', isset($field) ? $field->user_id: ''), ['class' => 'form-control select']) !!}</td>--}}
    <td>{!! Form::text('service_slots['.$index.'][value]', old('service_slots['.$index.'][value]', isset($field) ? $field->value: ''), ['class' => 'form-control']) !!}</td>

    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('abrigosoftware.as_delete')</a>
    </td>
</tr>