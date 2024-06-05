<tr data-index="{{ $index }}">
	<td>{!! Form::select('professional['.$index.'][user_id]', $professional, old('professional['.$index.'][user_id]', isset($field) ? $field->user_id: ''), ['class' => 'form-control select']) !!}</td>
  
    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('abrigosoftware.as_delete')</a>
    </td>
</tr>