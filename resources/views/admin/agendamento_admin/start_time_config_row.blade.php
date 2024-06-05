<tr data-index="{{ $index }}">

    <td>{!! Form::text('start_time[' . $index . '][start_time]', old('start_time[' . $index . '][start_time]',
        isset($field) ? $field->start_time : $value), ['class' => 'form-control datetime']) !!}


    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('abrigosoftware.as_delete')</a>
    </td>
</tr>
