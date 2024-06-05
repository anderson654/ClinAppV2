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
                    {!! Form::label('cnpj', 'Ou CNPJ', ['class' => 'control-label']) !!}
                    {!! Form::text('cnpj', old('cnpj'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cnpj'))
                        <p class="help-block">
                            {{ $errors->first('cnpj') }}
                        </p>
                    @endif
                </div>
            </div>
			
			<div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('phone', trans('abrigosoftware.users.fields.phone').'', ['class' => 'control-label']) !!}
                    {!! Form::text('phone[]', old('phone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('phone'))
                        <p class="help-block">
                            {{ $errors->first('phone') }}
                        </p>
                    @endif
                </div>
                @if ($contacts != null)
                                @foreach ($contacts as $contact)
                <input type="text" class="form-control" style="display: none;" name="phone_id[]" value="{{ $contact->id }}"
                                        id="" placeholder="Informe o telefone">
                                        @endforeach
                                        @endif
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
					 @isset($client->address->city->title)	  
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
					 @empty($client->address->city->title)
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
			
		</div>
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
