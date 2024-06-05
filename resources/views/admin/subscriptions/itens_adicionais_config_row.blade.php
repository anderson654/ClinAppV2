<tr data-index="{{ $index }}">

	<td>  {!! Form::select('title', $additionals, old('title'), ['class' => 'form-control select2', 'required' => '']) !!}
																
    <td>
        <a href="#" class="remove btn btn-xs btn-danger">@lang('abrigosoftware.as_delete')</a>
    </td>
</tr>