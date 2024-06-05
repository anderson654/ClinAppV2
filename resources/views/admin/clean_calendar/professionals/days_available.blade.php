@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.users.title')</h3>
															
    {!! Form::model($user, ['method' => 'POST', 'route' => ['admin.update_days_available', $user->id]]) !!}
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_edit')
        </div>

        <div class="panel-body">
		
			
            <div class="row">
                <div class="col-xs-12 form-group">
					<p>
					Olá <label for="name" >{{$user->name}}</label>, tudo bem?
					<br>
					Selecione abaixo os dias que gostaria de deixar dispíveis para receber indicação de faxina pela plataforma da Clin.
				
					<input type="hidden" id="name" class="form-control" value={{$user->name}}  name="name">
					</p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>

            <br />
			
		@php
			if ( $user->segunda == 1)
				$segunda = "checked"; 	
			else 
				$segunda = "";
							
			if ( $user->terca == 1)
				$terca = "checked";
			else 
				$terca = "";
			
			if ( $user->quarta == 1)
				$quarta = "checked";
			else 
				$quarta = "";
	
				
			if ( $user->quinta == 1)
				$quinta = "checked";
			else 
				$quinta = "";
			
			if ( $user->sexta == 1)
				$sexta = "checked";
			else 
				$sexta = "";
			
			if ( $user->sabado == 1)
				$sabado = "checked";
			else 
				$sabado = "";
	
			if ( $user->domingo == 1)
				$domingo = "checked";
			else 
				$domingo = "";
		@endphp        
			<div class="row">
							
			</div>			 
				<div class="row">
					<div class="col-xs-12 form-group">
						<span class="button-checkbox">
						<button type="button" class="btn" data-color="success">SEGUNDA-FEIRA</button>
						<input name="segunda" id="segunda" type="checkbox" class="hidden" value="1" {{$segunda}}/>
						</span>
						 <hr />
						@if($errors->has('segunda'))
							<p class="help-block">
								{{ $errors->first('segunda') }}
							</p>
						@endif
					</div>				
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    <span class="button-checkbox">
					<button type="button" class="btn" data-color="success">TERÇA-FEIRA</button>
					<input name="terca" id="terca" type="checkbox" class="hidden" value="1" {{$terca}}/>
					</span>
					 <hr />
                    <p class="help-block"></p>
                    @if($errors->has('terca'))
                        <p class="help-block">
                            {{ $errors->first('terca') }}
                        </p>
                    @endif
				</div>	
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    <span class="button-checkbox">
					<button type="button" class="btn" data-color="success">QUARTA-FEIRA</button>
					<input name="quarta" id="quarta" type="checkbox" class="hidden" value="1" {{$quarta}}/>
					</span>
                    <p class="help-block"></p>
                    @if($errors->has('quarta'))
                        <p class="help-block">
                            {{ $errors->first('quarta') }}
                        </p>
                    @endif
                </div>	
			</div>
			 <hr />
			<div class="row">
				<div class="col-xs-12 form-group">
                   <span class="button-checkbox">
					<button type="button" class="btn" data-color="success">QUINTA-FEIRA</button>
					<input name="quinta" id="quinta" type="checkbox" class="hidden" value="1" {{$quinta}}/>
					</span>
					 <hr />
                    @if($errors->has('quarta'))
                        <p class="help-block">
                            {{ $errors->first('quarta') }}
                        </p>
                    @endif
                </div>
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    <span class="button-checkbox">
					<button type="button" class="btn" data-color="success">SEXTA-FEIRA</button>
					<input name="sexta" id="sexta" type="checkbox" class="hidden" value="1" {{$sexta}}/>
					</span>
					 <hr />
                    @if($errors->has('sexta'))
                        <p class="help-block">
                            {{ $errors->first('sexta') }}
                        </p>
                    @endif
                </div>	
			</div>

			<div class="row">
				<div class="col-xs-12 form-group">
                    <span class="button-checkbox">
					<button type="button" class="btn" data-color="success">SABADO</button>
					<input name="sabado" id="sabado" type="checkbox" class="hidden" value="1" {{$sabado}}/>
					</span>
					 <hr />
                    @if($errors->has('sabado'))
                        <p class="help-block">
                            {{ $errors->first('sabado') }}
                        </p>
                    @endif
                </div>           
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    <span class="button-checkbox">
					<button type="button" class="btn" data-color="success">DOMINGO</button>
					<input name="domingo" id="domingo" type="checkbox" class="hidden" value="1" {{$domingo}}/>
					</span>
					 <hr />
                    @if($errors->has('domingo'))
                        <p class="help-block">
                            {{ $errors->first('domingo') }}
                        </p>
                    @endif
                </div>           
			</div>
		<div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript') 
	
    <script>
$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
    </script>
@endsection
