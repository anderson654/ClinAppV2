@extends('layouts.app')

@section('content')
    <h3 class="page-title">Editar Pagamento</h3>

    {!! Form::model($payment, ['method' => 'PUT', 'route' => ['admin.payments.update', $payment->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 form-group">
                    {!! Form::label('value', 'Valor' . '*', ['class' => 'control-label']) !!}
                    {!! Form::text('value', old('value'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('value'))
                        <p class="help-block">
                            {{ $errors->first('value') }}
                        </p>
                    @endif
                    {!! Form::label('due_date', 'Data de vencimento' . '*', ['class' => 'control-label']) !!}
                    {!! Form::text('due_date', old('due_date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('due_date'))
                        <p class="help-block">
                            {{ $errors->first('due_date') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-6 form-group">
                    <label for="descricao" class="control-label">Descrição do boleto</label>
                    <textarea name="descricao" id="descricao" rows="5" class="form-control"
                        placeholder="Descrição"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="BOLETO_PIX" value="BOLETO_PIX"
                            checked>
                        <label class="form-check-label" for="BOLETO_PIX">
                            Boleto e PIX
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="paymentMethod" id="CREDIT_CARD"
                            value="CREDIT_CARD">
                        <label class="form-check-label" for="creditCard">
                            Cartão de Crédito
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function() {
            moment.updateLocale('{{ App::getLocale() }}', {
                week: {
                    dow: 1
                } // Monday is the first day of the week
            });

            $('.date').datetimepicker({
                format: "{{ config('app.date_format_moment') }}",
                locale: "{{ App::getLocale() }}",
            });

        });
    </script>

@endsection
