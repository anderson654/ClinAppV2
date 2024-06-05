@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.services-feedbacks.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.services_feedbacks.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_create')
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('service_id', trans('abrigosoftware.services-feedbacks.fields.service').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('service_id', $services, old('service_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('service_id'))
                        <p class="help-block">
                            {{ $errors->first('service_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('text', trans('abrigosoftware.services-feedbacks.fields.text').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('text', old('text'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('text'))
                        <p class="help-block">
                            {{ $errors->first('text') }}
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_save'), ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@stop

