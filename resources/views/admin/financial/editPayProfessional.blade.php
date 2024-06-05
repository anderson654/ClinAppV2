@extends('layouts.app')

@section('content')
    <h3 class="page-title">Editar Pagamento Profissional</h3>
    
    {!! Form::model($professional_payment, ['method' => 'PUT', 'route' => ['admin.financial.updatePayProfessional', $professional_payment->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_edit')
        </div>

        <div class="panel-body">
            <div class="row">
				<div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Nome da Profissional'.'*', ['class' => 'control-label']) !!}
                   
					{!! Form::label('name', $professional_name.'*', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>                   
                </div>
				
				<div class="col-xs-12 form-group">
					{!! Form::label('service_id', 'ID do Serviço'.'*', ['class' => 'control-label']) !!}
                    
                    {!! Form::label('service_id', $service_id.'*', ['class' => 'control-label']) !!}
                    <p class="help-block"></p>                   
                </div>
				
                <div class="col-xs-12 form-group">
                    {!! Form::label('value', 'Valor a pagar'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('value', old('value'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                   
                </div>
				 <div class="col-xs-12 form-group">
                    {!! Form::label('discount', 'Desconto'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('discount', old('discount'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                </div>
				
				<div class="col-xs-12 form-group">
						{!! Form::label('payment_status_id', trans('abrigosoftware.services.fields.service-type').'*', ['class' => 'control-label']) !!}
						{!! Form::select('payment_status_id', $PaymentStatus, old('payment_status_id'), ['class' => 'form-control select2', 'required' => '']) !!}
						<p class="help-block"></p>						
				</div>
				 <div class="col-xs-12 form-group">
                    {!! Form::label('message', 'message'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('message', old('message'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
   
                </div>
				
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


