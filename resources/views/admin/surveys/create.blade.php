@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.surveys.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.surveys.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('question', trans('abrigosoftware.surveys.fields.title').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('question', old('question'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('question'))
                        <p class="help-block">
                            {{ $errors->first('question') }}
                        </p>
                    @endif
                </div>
				 <div class="col-xs-12 form-group">
                    {!! Form::label('answer_a', trans('abrigosoftware.surveys.fields.answer_a').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('answer_a', old('answer_a'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('answer_a'))
                        <p class="help-block">
                            {{ $errors->first('answer_a') }}
                        </p>
                    @endif
                </div>
				<div class="col-xs-12 form-group">
                    {!! Form::label('answer_b', trans('abrigosoftware.surveys.fields.answer_b').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('answer_b', old('answer_b'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('answer_b'))
                        <p class="help-block">
                            {{ $errors->first('answer_b') }}
                        </p>
                    @endif
                </div>
				<div class="col-xs-12 form-group">
                    {!! Form::label('answer_c', trans('abrigosoftware.surveys.fields.answer_c').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('answer_c', old('answer_c'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('answer_c'))
                        <p class="help-block">
                            {{ $errors->first('answer_c') }}
                        </p>
                    @endif
                </div>
				<div class="col-xs-12 form-group">
                    {!! Form::label('answer_d', trans('abrigosoftware.surveys.fields.answer_d').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('answer_d', old('answer_d'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('answer_d'))
                        <p class="help-block">
                            {{ $errors->first('answer_d') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('status', trans('abrigosoftware.surveys.fields.status').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('status', ['Ativa', 'Concluída'], ['class' => 'form-control', 'placeholder' => '']) !!}
					  <p class="help-block"></p>
                    @if($errors->has('status'))
                        <p class="help-block">
                            {{ $errors->first('status') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('audience', trans('abrigosoftware.surveys.fields.audience').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('audience', ['Profissionais', 'Clientes'], ['class' => 'form-control', 'placeholder' => '']) !!}
					 <p class="help-block"></p>
                    @if($errors->has('audience'))
                        <p class="help-block">
                            {{ $errors->first('audience') }}
                        </p>
                    @endif
                </div>
			 </div>
				
        </div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

