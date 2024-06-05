@extends('layouts.app')

@section('content')
    <h3 class="page-title">Cidades:</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.cities.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('city', 'Nome da Cidade'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('city', old('city'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('city'))
                        <p class="help-block">
                            {{ $errors->first('city') }}
                        </p>
                    @endif
                </div>
			 </div>
				<div class="row">
					<div class="col-xs-12">
						{!! Form::label('state', 'Estado:') !!}<br>
						{!! Form::select('state', $states) !!}
						
					</div>
				</div>

            
            
        </div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

