@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.services.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.services.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_create')
        </div>
        
        <div class="panel-body">
			{{--<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('assigned_to', trans('abrigosoftware.services.fields.assigned-to').'', ['class' => 'control-label']) !!}
                    <button type="button" class="btn btn-primary btn-xs" id="selectbtn-assigned_to">
                        {{ trans('abrigosoftware.as_select_all') }}
                    </button>
                    <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-assigned_to">
                        {{ trans('abrigosoftware.as_deselect_all') }}
                    </button>
                    {!! Form::select('assigned_to[]', $assigned_tos, old('assigned_to'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-assigned_to' ]) !!}
                    <p class="help-block"></p>
                    @if($errors->has('assigned_to'))
                        <p class="help-block">
                            {{ $errors->first('assigned_to') }}
                        </p>
                    @endif
                </div>
            </div>--}}
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('external_id', trans('abrigosoftware.services.fields.external-id').'', ['class' => 'control-label']) !!}
                    {!! Form::number('external_id', old('external_id'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('external_id'))
                        <p class="help-block">
                            {{ $errors->first('external_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('payment_id', trans('abrigosoftware.services.fields.payment-id').'', ['class' => 'control-label']) !!}
                    {!! Form::number('payment_id', old('payment_id'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('payment_id'))
                        <p class="help-block">
                            {{ $errors->first('payment_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('address_type_id', trans('abrigosoftware.services.fields.address-type').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('address_type_id', $address_types, old('address_type_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('address_type_id'))
                        <p class="help-block">
                            {{ $errors->first('address_type_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('service_type_id', trans('abrigosoftware.services.fields.service-type').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('service_type_id', $service_types, old('service_type_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('service_type_id'))
                        <p class="help-block">
                            {{ $errors->first('service_type_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('service_category_id', trans('abrigosoftware.services.fields.service-category').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('service_category_id', $service_categories, old('service_category_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('service_category_id'))
                        <p class="help-block">
                            {{ $errors->first('service_category_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('client_id', trans('abrigosoftware.services.fields.client').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('client_id', $clients, old('client_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('client_id'))
                        <p class="help-block">
                            {{ $errors->first('client_id') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('payment_status_id', trans('abrigosoftware.services.fields.payment-status').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('payment_status_id', $payment_statuses, old('payment_status_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('payment_status_id'))
                        <p class="help-block">
                            {{ $errors->first('payment_status_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('status_id', trans('abrigosoftware.services.fields.status').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('status_id', $statuses, old('status_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('status_id'))
                        <p class="help-block">
                            {{ $errors->first('status_id') }}
                        </p>
                    @endif
                </div>
            </div>
            {{--<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('assigned_to_id', trans('abrigosoftware.services.fields.assigned-to').'', ['class' => 'control-label']) !!}
                    {!! Form::select('assigned_to_id', $assigned_tos, old('assigned_to_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('assigned_to_id'))
                        <p class="help-block">
                            {{ $errors->first('assigned_to_id') }}
                        </p>
                    @endif
                </div>
            </div>--}}
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('qt_bedrooms', trans('abrigosoftware.services.fields.qt-bedrooms').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('qt_bedrooms', old('qt_bedrooms'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('qt_bedrooms'))
                        <p class="help-block">
                            {{ $errors->first('qt_bedrooms') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('qt_bathrooms', trans('abrigosoftware.services.fields.qt-bathrooms').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('qt_bathrooms', old('qt_bathrooms'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('qt_bathrooms'))
                        <p class="help-block">
                            {{ $errors->first('qt_bathrooms') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('additionals', trans('abrigosoftware.services.fields.additionals').'', ['class' => 'control-label']) !!}
                    {!! Form::text('additionals', old('additionals'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('additionals'))
                        <p class="help-block">
                            {{ $errors->first('additionals') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('total_time', trans('abrigosoftware.services.fields.total-time').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('total_time', old('total_time'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('total_time'))
                        <p class="help-block">
                            {{ $errors->first('total_time') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('products_included', trans('abrigosoftware.services.fields.products-included').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('products_included', 0) !!}
                    {!! Form::checkbox('products_included', 1, old('products_included', true)) !!}
                    <p class="help-block"></p>
                    @if($errors->has('products_included'))
                        <p class="help-block">
                            {{ $errors->first('products_included') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('value', trans('abrigosoftware.services.fields.value').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('value', old('value'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('value'))
                        <p class="help-block">
                            {{ $errors->first('value') }}
                        </p>
                    @endif
                </div>
            </div>
			  <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('subscription_value', trans('abrigosoftware.services.fields.subscription_value').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('subscription_value', old('subscription _value'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('subscription_value'))
                        <p class="help-block">
                            {{ $errors->first('subscription_value') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('start_time', trans('abrigosoftware.services.fields.start-time').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('start_time', old('start_time'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('start_time'))
                        <p class="help-block">
                            {{ $errors->first('start_time') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('end_time', trans('abrigosoftware.services.fields.end-time').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('end_time', old('end_time'), ['class' => 'form-control datetime', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('end_time'))
                        <p class="help-block">
                            {{ $errors->first('end_time') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pet', trans('abrigosoftware.services.fields.pet').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('pet', 0) !!}
                    {!! Form::checkbox('pet', 1, old('pet', false)) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pet'))
                        <p class="help-block">
                            {{ $errors->first('pet') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pet_cautions', trans('abrigosoftware.services.fields.pet-cautions').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('pet_cautions', old('pet_cautions'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pet_cautions'))
                        <p class="help-block">
                            {{ $errors->first('pet_cautions') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>
	
	<div class="panel panel-default">
        <div class="panel-heading">
            Vaga(s) na Faxina
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
					<th>@lang('abrigosoftware.service-slots.fields.user')</th>
                    <th>@lang('abrigosoftware.service-slots.fields.value')</th>
                        
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody id="vagas-em-faxinas">
					<tr data-index="1">
						<td class='col-md-7'>{!! Form::select('service_slots[1][user_id]', $assigned_tos, old('service_slots[1][user_id]', isset($field) ? $field->user_id: ''), ['class' => 'form-control select2']) !!}</td>
						<td>{!! Form::text('service_slots[1][value]', old('service_slots[1][value]', isset($field) ? $field->value: ''), ['class' => 'form-control']) !!}</td>
						<td>
						</td>
					</tr>
                    @foreach(old('service_slots', []) as $index => $data)
                        @include('admin.services.service_slots_row', [
                            'index' => $index
                        ])
                    @endforeach
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('abrigosoftware.as_add_new')</a>
        </div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

{{--@section('javascript')
    @parent

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.datetime').datetimepicker({
                format: "{{ config('app.datetime_format_moment') }}",
                locale: "{{ App::getLocale() }}",
                sideBySide: true,
            });
            
        });
    </script>
            
@stop--}}

@section('javascript')
    @parent

    <script type="text/html" id="vagas-em-faxinas-template">
        @include('admin.services.service_slots_config_row',
                [
                    'index' => '_INDEX_',
                ])
               </script > 

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
                      
            $('.datetime').datetimepicker({
                date:moment(""),
				format:"DD/MM/YYYY HH:mm",
				sideBySide: true,
				
            });
            
        });
    </script>
            
            <script>
        $('.add-new').click(function () {
            var tableBody = $(this).parent().find('tbody');
            var template = $('#' + tableBody.attr('id') + '-template').html();
            var lastIndex = parseInt(tableBody.find('tr').last().data('index'));
            if (isNaN(lastIndex)) {
                lastIndex = 0;
            }
            tableBody.append(template.replace(/_INDEX_/g, lastIndex + 1));
            return false;
        });
        $(document).on('click', '.remove', function () {
            var row = $(this).parentsUntil('tr').parent();
            row.remove();
            return false;
        });
        </script>
		{{--<script>
        $("#selectbtn-assigned_to").click(function(){
            $("#selectall-assigned_to > option").prop("selected","selected");
            $("#selectall-assigned_to").trigger("change");
        });
        $("#deselectbtn-assigned_to").click(function(){
            $("#selectall-assigned_to > option").prop("selected","");
            $("#selectall-assigned_to").trigger("change");
        });
		</script>--}}
@stop