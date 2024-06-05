<tr data-index="{{ $index }}">

   <td> {!! Form::select('additionals['.$index.'][id]', $additionals, old('additionals['.$index.'][id]', isset($field) ? $field->value: ''), ['class' => 'form-control select2', 'required' => '']) !!}
			
    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('abrigosoftware.as_delete')</a>
    </td>
</tr>