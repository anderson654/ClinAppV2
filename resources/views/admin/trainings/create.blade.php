@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.trainings.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.trainings.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('abrigosoftware.trainings.title').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
				 <div class="col-xs-12 form-group">
                    {!! Form::label('duration', trans('abrigosoftware.trainings.fields.duration').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('duration', old('duration'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('duration'))
                        <p class="help-block">
                            {{ $errors->first('duration') }}
                        </p>
                    @endif
                </div>
				<div class="col-xs-12 form-group">
                    {!! Form::label('video_id', trans('abrigosoftware.trainings.fields.video_id').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('video_id', old('video_id'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('video_id'))
                        <p class="help-block">
                            {{ $errors->first('video_id') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
						{!! Form::label('status_id', trans('abrigosoftware.services.fields.status') . '*', ['class' => 'control-label']) !!}
						{!! Form::select('status_id', ['Desativado', 'Ativo'], old('status_id'), ['class' => 'form-control select2', 'required' => '']) !!}
						<p class="help-block"></p>
						@if ($errors->has('status_id'))
							<p class="help-block">
								{{ $errors->first('status_id') }}
							</p>
						@endif
				</div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('lifetime', trans('abrigosoftware.trainings.fields.lifetime').' '.trans('abrigosoftware.as_days').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('lifetime', old('lifetime'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('lifetime'))
                        <p class="help-block">
                            {{ $errors->first('lifetime') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('mandatory', trans('abrigosoftware.trainings.fields.mandatory').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('mandatory', ['Não', 'Sim'], old('mandatory'), ['class' => 'form-control select2', 'required' => '']) !!}
					  <p class="help-block"></p>
                    @if($errors->has('mandatory'))
                        <p class="help-block">
                            {{ $errors->first('mandatory') }}
                        </p>
                    @endif
                </div>
				
				
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('training_category_id', trans('abrigosoftware.as_category').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('training_category_id',  $category,  old('training_category_id'),  ['class' => 'form-control select2', 'required' => '']) !!}
					 <p class="help-block"></p>
                    @if($errors->has('training_category_id'))
                        <p class="help-block">
                            {{ $errors->first('training_category_id') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('prerequisite_training_id', trans('abrigosoftware.trainings.fields.prerequisite').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('prerequisite_training_id', $release_order, old('prerequisite_training_id'),  ['class' => 'form-control select2', 'placeholder' => '']) !!}
					 <p class="help-block"></p>
                    @if($errors->has('prerequisite_training_id'))
                        <p class="help-block">
                            {{ $errors->first('prerequisite_training_id') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('author_user_id', trans('abrigosoftware.trainings.fields.author').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('author_user_id',  $author,  old('author_user_id'),  ['class' => 'form-control select2', 'required' => '']) !!}
					 <p class="help-block"></p>
                    @if($errors->has('author_user_id'))
                        <p class="help-block">
                            {{ $errors->first('author_user_id') }}
                        </p>
                    @endif
                </div>
				
				<div class="col-xs-12 form-group">
                    {!! Form::label('responsable_user_id', trans('abrigosoftware.trainings.fields.responsable').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('responsable_user_id',  $responsable,  old('responsable_user_id'),  ['class' => 'form-control select2', 'required' => '']) !!}
					 <p class="help-block"></p>
                    @if($errors->has('responsable_user_id'))
                        <p class="help-block">
                            {{ $errors->first('responsable_user_id') }}
                        </p>
                    @endif
                </div>
				
			 </div>
				
        </div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

