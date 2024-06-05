@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.service-type.title')</h3>
    
    {!! Form::model($service_type_categorie, ['method' => 'PUT', 'route' => ['admin.service_type_categories.update', $service_type_categorie->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title', trans('abrigosoftware.service-type.fields.title').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title'))
                        <p class="help-block">
                            {{ $errors->first('title') }}
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
            
            
        </div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

