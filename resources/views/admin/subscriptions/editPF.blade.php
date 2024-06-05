@extends('layouts.app')

@section('content')
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: ;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #fff;
        }

        .table {
            text-align: initial;
        }

        .hist {
            overflow-y: scroll;
            max-height: 380px;
        }

        .fix_total {
            padding-top: 20px;
        }

    </style>
    <h3 class="page-title">@lang('abrigosoftware.subscriptions.title')</h3>

    {!! Form::model($subscription, ['method' => 'PUT', 'route' => ['admin.subscriptions.update', $subscription->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_edit')
        </div>

        <div class="panel-body">


            <div class="row">
                <div class="col-md-6 form-group">
                    {!! Form::label('service_type_id', trans('abrigosoftware.services.fields.service-type') . '*', ['class' => 'control-label']) !!}
                    {!! Form::select('service_type_id', $service_types, old('service_type_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('service_type_id'))
                        <p class="help-block">
                            {{ $errors->first('service_type_id') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-6 form-group">
                    {!! Form::label('service_category_id', trans('abrigosoftware.services.fields.service-category') . '*', ['class' => 'control-label']) !!}
                    {!! Form::select('service_category_id', $service_categories, old('service_category_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('service_category_id'))
                        <p class="help-block">
                            {{ $errors->first('service_category_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    {!! Form::label('client', trans('abrigosoftware.services.fields.client') . '*', ['class' => 'control-label']) !!}
                    {!! Form::label('name', $subscription->client->name, ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('client_id'))
                        <p class="help-block">
                            {{ $errors->first('client_id') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-6">
                    <label class="control-label">Endereço</label>
                    <div class="col-md-6-12 form-group">
                        @if (isset($addresses))
                            @foreach ($addresses as $index => $address)
                                <li class="list-group-item">
                                    <div class="row toggle" id="dropdown-detail-1"
                                        data-toggle="detail-{{ $index }}">
                                        <div class="col-md-4">
                                            <input type="radio" name="client_address_id" value="{{ $address->id }}"
                                                @if ($subscription->client_address_id == $address->id) checked @endif> Endereço
                                            {{ $index + 1 }}
                                        </div>
                                        <div><i class="fa fa-chevron-down pull-right mr-10"></i></div>
                                    </div>
                                    <div id="detail-{{ $index }}">
                                        <hr>
                                        </hr>
                                        <div class="container" style="width: 100%">
                                            <div class="fluid-row">
                                                <ul>
                                                    <li><strong>Rua: </strong>{{ $address->street }}</li>
                                                    <li><strong>Nº: </strong>{{ $address->number }}</li>
                                                    <li><strong>CEP: </strong>{{ $address->zip }}</li>
                                                    <li><strong>Bairro: </strong>{{ $address->neighborhood }}</li>
                                                </ul>
                                                <p type="hidden"></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            <p>Nenhum endereço cadastrado!</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('status_id', trans('abrigosoftware.services.fields.status') . '*', ['class' => 'control-label']) !!}
                    {!! Form::select('status_id', $statuses, old('status_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('status_id'))
                        <p class="help-block">
                            {{ $errors->first('status_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <!-- Motivo Cancelamento Cliente Faxina -->

            <div class="row">
                <div class="col-xs-6">
                    <div class="card">
                        <div class="card-body form-group">

                            <label for="cbo_reason">Motivo do Cancelamento</label>
                            <select name="opt_reason_subscription_client" id="cbo_reason" class="form-control form-group">
                                <option value="" disabled selected>Selecione um motivo !</option>
                                @foreach ($reasons as $reason)
                                    <option value="{{ $reason->id }}">{{ $reason->id }} -
                                        {{ $reason->description }}</option>
                                @endforeach
                            </select>
                            <label for="cancel_submit">Descrição do Cancelamento</label>
                            <input class="btn btn-warning" type="submit" id="cancel_submit" value="Salvar" style="
                                                            margin-bottom: 7px;
                                                            border-left-width: 0px;
                                                            margin-left: 5px;">

                            <textarea class="form-control" name="cancel_description" id="txtarea_cancel_reason" cols="30" rows="10"
                                style="width:100%;"> </textarea>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card hist">
                        <div class="card-body">
                            <h4 class="card-title"><b>Histórico de observações</b></h4>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Data</th>
                                        <th scope="col">Quem</th>
                                        <th scope="col">Motivo</th>
                                        <th scope="col">observacão</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cancel_history as $history)
                                        <tr>
                                            <td>{{ $history->created_at->format('Y-m-d H:i') }}</td>
                                            <td>{{ $history->infoOperador->name ?? '' }}</td>
                                            <td>{{ $history->motivos->description }}</td>
                                            <td>{{ $history->observation }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fim motivo de Cancelamento Cliente Faxina -->
            {{-- <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('assigned_to_id', trans('abrigosoftware.services.fields.assigned-to').'', ['class' => 'control-label']) !!}
                    {!! Form::select('assigned_to_id', $assigned_tos, old('assigned_to_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('assigned_to_id'))
                        <p class="help-block">
                            {{ $errors->first('assigned_to_id') }}
                        </p>
                    @endif
                </div>
            </div> --}}

            <div class="row">
                <div class="col-md-6 form-group">
                    {!! Form::label('total_time', trans('abrigosoftware.services.fields.total-time') . '*', ['class' => 'control-label fix_total']) !!}
                    {!! Form::text('total_time', old('total_time'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('total_time'))
                        <p class="help-block">
                            {{ $errors->first('total_time') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-6 form-group" style="margin-top: 20px;">
                    {!! Form::label('value_service', 'Valor de cada service*', ['class' => 'control-label']) !!}
                    {!! Form::text('value_service', $subscription->value_service, ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('value_service'))
                        <p class="help-block">
                            {{ $errors->first('value_service') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    {!! Form::label('qt_employees', 'Quantidade de Vagas' . '*', ['class' => 'control-label']) !!}
                    {!! Form::text('qt_employees', old('qt_employees'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('qt_employees'))
                        <p class="help-block">
                            {{ $errors->first('qt_employees') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-6 form-group">
                    {!! Form::label('startDay', 'Dia da Renovação*', ['class' => 'control-label']) !!}
                    {!! Form::text('startDay', old('startDay'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('startDay'))
                        <p class="help-block">
                            {{ $errors->first('startDay') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('startTime', 'Horário de inicio das services*', ['class' => 'control-label']) !!}
                    {!! Form::text('startTime', old('startTime'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('startTime'))
                        <p class="help-block">
                            {{ $errors->first('startTime') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('products_included', trans('abrigosoftware.services.fields.products-included') . '', ['class' => 'control-label']) !!}
                    {!! Form::hidden('products_included', 0) !!}
                    {!! Form::checkbox('products_included', 1, old('products_included', old('products_included'))) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('products_included'))
                        <p class="help-block">
                            {{ $errors->first('products_included') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    Dias Da semana
                </div>
            </div>

            <div class="form-check">
                @if ($segunda == 1)
                    <input type="checkbox" class="form-check-input" value="1" name="segunda" id="segunda" checked>
                @else
                    <input type="checkbox" class="form-check-input" value="1" name="segunda" id="segunda">
                @endif

                <label class="form-check-label" for="segunda">segunda</label>
            </div>
            <div class="form-check">
                @if ($terca == 1)
                    <input type="checkbox" class="form-check-input" value="1" name="terca" id="terca" checked>
                @else
                    <input type="checkbox" class="form-check-input" value="1" name="terca" id="terca">
                @endif

                <label class="form-check-label" for="terca">terca</label>
            </div>
            <div class="form-check">
                @if ($quarta == 1)
                    <input type="checkbox" class="form-check-input" value="1" name="quarta" id="quarta" checked>
                @else
                    <input type="checkbox" class="form-check-input" value="1" name="quarta" id="quarta">
                @endif

                <label class="form-check-label" for="quarta">quarta</label>
            </div>
            <div class="form-check">
                @if ($quinta == 1)
                    <input type="checkbox" class="form-check-input" value="1" name="quinta" id="quinta" checked>
                @else
                    <input type="checkbox" class="form-check-input" value="1" name="quinta" id="quinta">
                @endif

                <label class="form-check-label" for="quinta">quinta</label>
            </div>
            <div class="form-check">
                @if ($sexta == 1)
                    <input type="checkbox" class="form-check-input" value="1" name="sexta" id="sexta" checked>
                @else
                    <input type="checkbox" class="form-check-input" value="1" name="sexta" id="sexta">
                @endif

                <label class="form-check-label" for="sexta">sexta</label>
            </div>


            <div class="form-check">
                @if ($sabado == 1)
                    <input type="checkbox" class="form-check-input" value="1" name="sabado" id="sabado" checked>
                @else
                    <input type="checkbox" class="form-check-input" value="1" name="sabado" id="sabado">
                @endif

                <label class="form-check-label" for="sabado">Sabado</label>
            </div>

            <div class="form-check">
                @if ($domingo == 1)
                    <input type="checkbox" class="form-check-input" value="1" name="domingo" id="domingo" checked>
                @else
                    <input type="checkbox" class="form-check-input" value="1" name="domingo" id="domingo">
                @endif

                <label class="form-check-label" for="Domingo">Domingo</label>
            </div>



        </div>
    </div>
    {!! Form::submit(trans('abrigosoftware.as_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@stop

@section('javascript')
    @parent

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        //Verificacao de cancelamento
        $('select[name=status_id]').change(function() {
            if ($('select[name=status_id]').val() == 2) {
                alert(' Favor preenchcer Motivo e a descrição para o cancelamento !! ');
                $('#cancel_submit').prop('disabled', true);
                $('#cbo_reason').prop('required', true);
                $('textarea[name=cancel_description]').focus();
            }

        });

        $('textarea[name=cancel_description]').change('keydown', function() {
            let tam = $(this).val();
            console.log(tam.length);
            if (tam.length >= 10) {
                $('#cancel_submit').prop('disabled', false);
            } else {
                alert('favor informar uma descrição com no min. 10 caracters');
                $('textarea[name=cancel_description]').focus();
            }
        });
        //Fim Verificacao de cancelamento

        $(function() {


            $('.datetime-start').datetimepicker({

                date: moment("{{ $subscription->start_time }}"),
                format: "DD/MM/YYYY HH:mm",
                sideBySide: true,

            });

        });
        $(function() {


            $('.datetime-end').datetimepicker({

                date: moment("{{ $subscription->end_time }}"),
                format: "DD/MM/YYYY HH:mm",
                sideBySide: true,

            });

        });
    </script>

    <script>
        $('.add-new').click(function() {
            var tableBody = $(this).parent().find('tbody');
            var template = $('#' + tableBody.attr('id') + '-template').html();
            var lastIndex = parseInt(tableBody.find('tr').last().data('index'));
            if (isNaN(lastIndex)) {
                lastIndex = 0;
            }
            tableBody.append(template.replace(/_INDEX_/g, lastIndex + 1));
            return false;
        });
        $(document).on('click', '.remove', function() {
            var row = $(this).parentsUntil('tr').parent();
            row.remove();
            return false;
        });
    </script>
@stop
