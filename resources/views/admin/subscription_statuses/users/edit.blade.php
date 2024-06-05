@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('abrigosoftware.users.title')</h3>
    
    {!! Form::model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_edit')
        </div>

        <div class="panel-body">
		
			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('status', trans('abrigosoftware.users.fields.status').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('status', 0) !!}
                    {!! Form::checkbox('status', 1, old('status', old('status'))) !!}
                    <p class="help-block"></p>
                    @if($errors->has('status'))
                        <p class="help-block">
                            {{ $errors->first('status') }}
                        </p>
                    @endif
                </div>				
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
                    {!! Form::label('password', trans('abrigosoftware.users.fields.password').'*', ['class' => 'control-label']) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('role_id', trans('abrigosoftware.users.fields.role').'*', ['class' => 'control-label']) !!}
                    {!! Form::select('role_id', $roles, old('role_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('role_id'))
                        <p class="help-block">
                            {{ $errors->first('role_id') }}
                        </p>
                    @endif
                </div>
            </div>
			
			
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cpf', trans('abrigosoftware.users.fields.cpf').'', ['class' => 'control-label']) !!}
                    {!! Form::text('cpf', old('cpf'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cpf'))
                        <p class="help-block">
                            {{ $errors->first('cpf') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('birthdate', trans('abrigosoftware.users.fields.birthdate').'', ['class' => 'control-label']) !!}
                    {!! Form::text('birthdate', old('birthdate'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('birthdate'))
                        <p class="help-block">
                            {{ $errors->first('birthdate') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('gender', trans('abrigosoftware.users.fields.gender').'', ['class' => 'control-label']) !!}
                    {!! Form::text('gender', old('gender'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('gender'))
                        <p class="help-block">
                            {{ $errors->first('gender') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone', trans('abrigosoftware.users.fields.phone').'', ['class' => 'control-label']) !!}
                    {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
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
                    {!! Form::label('street', trans('abrigosoftware.users.fields.street').'', ['class' => 'control-label']) !!}
                    {!! Form::text('street', old('street'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('street'))
                        <p class="help-block">
                            {{ $errors->first('street') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('number', trans('abrigosoftware.users.fields.number').'', ['class' => 'control-label']) !!}
                    {!! Form::text('number', old('number'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('number'))
                        <p class="help-block">
                            {{ $errors->first('number') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('zip', trans('abrigosoftware.users.fields.zip').'', ['class' => 'control-label']) !!}
                    {!! Form::text('zip', old('zip'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('zip'))
                        <p class="help-block">
                            {{ $errors->first('zip') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('neighborhood', trans('abrigosoftware.users.fields.neighborhood').'', ['class' => 'control-label']) !!}
                    {!! Form::text('neighborhood', old('neighborhood'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('neighborhood'))
                        <p class="help-block">
                            {{ $errors->first('neighborhood') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
                <div class="col-xs-12 form-group">
					
					{!! Form::label('state', 'Estado ', ['class' => 'control-label']) !!}<span class="text-muted"> (Obrigatório)</span>
					{!! Form::select('state', $states, old('state'), ['class' => 'form-control', 'placeholder' => '']) !!}
					 @isset($client->address->city)	  
					  {!! Form::text('state', $client->address->city->state->id, ['class' => 'form-control hidden', 'placeholder' => '']) !!}</td>
					 @endisset
					 
					
				
				
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
					@isset($client->address->city->title)	  
					  <td>{!! Form::label('city', $client->address->city->title, ['class' => 'form-control', 'placeholder' => '']) !!}
						 {!! Form::text('city', $client->address->city->id, ['class' => 'form-control hidden', 'placeholder' => '']) !!}</td>
					 @endisset
					 @empty($client->city->city)
						  <td> Sem informação </td>	
					 @endempty
					
					
					
					<h4>{!! Form::select('city', [], old('city')) !!}
						
					</h4>
				 <p class="help-block"></p>
                    @if($errors->has('city'))
                        <p class="help-block">
                            {{ $errors->first('city') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('complement', trans('abrigosoftware.users.fields.complement').'', ['class' => 'control-label']) !!}
                    {!! Form::text('complement', old('complement'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('complement'))
                        <p class="help-block">
                            {{ $errors->first('complement') }}
                        </p>
                    @endif
                </div>
            </div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('has_products', trans('abrigosoftware.users.fields.has_products').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('has_products', 0) !!}
                    {!! Form::checkbox('has_products', 1, old('has_products', old('has_products'))) !!}
                    <p class="help-block"></p>
                    @if($errors->has('has_products'))
                        <p class="help-block">
                            {{ $errors->first('has_products') }}
                        </p>
                    @endif
                </div>
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('segunda', trans('abrigosoftware.users.fields.segunda').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('segunda', 0) !!}
                    {!! Form::checkbox('segunda', 1, old('segunda', old('segunda'))) !!}
                    <p class="help-block"></p>
                    @if($errors->has('segunda'))
                        <p class="help-block">
                            {{ $errors->first('segunda') }}
                        </p>
                    @endif
                </div>				
			</div>			 
				<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('terca', trans('abrigosoftware.users.fields.terca').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('terca', 0) !!}
                    {!! Form::checkbox('terca', 1, old('terca', old('terca'))) !!}
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
                    {!! Form::label('quarta', trans('abrigosoftware.users.fields.quarta').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('quarta', 0) !!}
                    {!! Form::checkbox('quarta', 1, old('quarta', old('quarta'))) !!}
                    <p class="help-block"></p>
                    @if($errors->has('quarta'))
                        <p class="help-block">
                            {{ $errors->first('quarta') }}
                        </p>
                    @endif
				</div>	
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('quinta', trans('abrigosoftware.users.fields.quinta').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('quinta', 0) !!}
                    {!! Form::checkbox('quinta', 1, old('quinta', old('quinta'))) !!}
                    <p class="help-block"></p>
                    @if($errors->has('quinta'))
                        <p class="help-block">
                            {{ $errors->first('quinta') }}
                        </p>
                    @endif
                </div>	
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('sexta', trans('abrigosoftware.users.fields.sexta').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('sexta', 0) !!}
                    {!! Form::checkbox('sexta', 1, old('sexta', old('sexta'))) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sexta'))
                        <p class="help-block">
                            {{ $errors->first('sexta') }}
                        </p>
                    @endif
                </div>
			</div>
			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('sabado', trans('abrigosoftware.users.fields.sabado').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('sabado', 0) !!}
                    {!! Form::checkbox('sabado', 1, old('sabado', old('sabado'))) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sabado'))
                        <p class="help-block">
                            {{ $errors->first('sabado') }}
                        </p>
                    @endif
                </div>	
			</div>

			<div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('domingo', trans('abrigosoftware.users.fields.domingo').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('domingo', 0) !!}
                    {!! Form::checkbox('domingo', 1, old('domingo', old('domingo'))) !!}
                    <p class="help-block"></p>
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

<script type="text/javascript">
        $('select[name=state]').change(function () {
            var idState = $(this).val();
            $.get('/admin/get-cities/' + idState, function (cities) {
                $('select[name=city]').empty();
                $.each(cities, function (key, value) {
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
