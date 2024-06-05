<input type="text" id="client_id" style="display: none">
<div class="panel-body">
    <div class="form-group">
        <label for="clientName">Selecione um cliente</label>
        <select class="form-control" id="clientName" name="clientName">
            @foreach ($clients as $key => $client)
                <option value="{{ $key }}">{{ $client }}</option>
            @endforeach
        </select>
    </div>
</div>
{{-- {!! Form::submit(trans('abrigosoftware.as_save'), ['class' => 'btn btn-danger']) !!} --}}
