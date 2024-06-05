<tr data-index="{{ $index }}">
	<td>{!! Form::select('professional_DayWeek['.$index.'][user_id]', $professionals, old('professional_DayWeek['.$index.'][user_id]', isset($field) ? $field->user_id: ''), ['class' => 'form-control select']) !!}</td>
    <td>{!! Form::select('dayWeek['.$index.'][id]', $professional_DayWeek, old('dayWeek['.$index.'][id]'), ['class' => 'form-control select2', 'required' => '']) !!}
	</td>	
    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('abrigosoftware.as_delete')</a>
    </td>
</tr>