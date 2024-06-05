@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.users.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.store.lead']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_create')
        </div>
        
        <div class="panel-body">
		
			 <div class="col-xs-12 form-group">
                    {!! Form::label('status', trans('abrigosoftware.services.fields.status').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('status', 0) !!}
                    {!! Form::checkbox('status', 1, old('status', true)) !!}
                    <p class="help-block"></p>
                    @if($errors->has('status'))
                        <p class="help-block">
                            {{ $errors->first('status') }}
                        </p>
                    @endif
              </div>
			  
			
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('abrigosoftware.users.fields.name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('abrigosoftware.users.fields.email').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
           
			
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone', trans('abrigosoftware.users.fields.phone').'', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
            </div>
			
			<div class="row">
                <div class="col-xs-12 form-group">
					
					{!! Form::label('state', 'Estado ', ['class' => 'control-label']) !!}<span class="text-muted"> (Obrigatório)</span>
					
					{!! Form::select('state', $states, old('states'), ['class' => 'form-control', 'placeholder' => 'Escolha...', 'required' => '', 'data-error' => 'Estado Obrigatório']) !!}
					
				
                     <p class="help-block"></p>
                    @if($errors->has('state'))
                        <p class="help-block">
                            {{ $errors->first('state') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
                <div class="col-xs-12 form-group">
					{!! Form::label('city', 'Cidades:', ['class' => 'control-label']) !!}<span class="text-muted"> (Obrigatório)</span><br>
					<h4>{!! Form::select('city', []) !!}</h4>
				 <p class="help-block"></p>
                    @if($errors->has('city'))
                        <p class="help-block">
                            {{ $errors->first('city') }}
                        </p>
                    @endif
                </div>
          
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('como_chegou', trans('Como chegou até a Clin').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('como_chegou', $como_chegou, old('como_chegou'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('como_chegou'))
                        <p class="help-block">
                            {{ $errors->first('como_chegou') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript') 

	<script type="text/javascript">
        $('select[name=state]').change(function () {
            var idState = $(this).val();
            $.get('/admin/get-->address/' + idState, function (->address) {
                $('select[name=city]').empty();
                $.each(->address, function (key, value) {
                    $('select[name=city]').append('<option value=' + value.id + '>' + value.city + '</option>');
                });
            });
        });
    </script>
	
	<script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function(){
            moment.updateLocale('{{ App::getLocale() }}', {
                week: { dow: 1 } // Monday is the first day of the week
            });
            
            $('.date').datetimepicker({
                format: "{{ config('app.date_format_moment') }}",
                locale: "{{ App::getLocale() }}",
            });
            
        });
    </script>
@endsection

