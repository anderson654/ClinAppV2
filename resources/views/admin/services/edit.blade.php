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

        .mt-4 {
            margin-top: 4px;
        }

        span .select2-selection,
        span .select2 {
            border-radius: 9.5px !important;
        }

    </style>

    <input type="hidden" id="status_name" name="status_name" value="{{ $service->status->title }}">

    <h3 class="page-title">@lang('abrigosoftware.services.title')</h3>

    {!! Form::model($service, ['method' => 'PUT', 'route' => ['admin.services.update', $service->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_edit')
        </div>

        <div class="panel-body">

            <div class="row">
                <div class="col-md-12">
                    <button id="report_problem" type="button" class="btn btn-primary pull-right" data-toggle="modal"
                        data-target="#modal_constructor">Relatar
                        problema</button>
                </div>
            </div>

            @if ($service->status->title == 'Finalizada')
                <div class="row">
                    {{-- MODAL --}}
                    {{-- RELATAR --}}
                    {{-- PROBLEMA --}}

                    {{-- header --}}
                    @section('modal-header')
                        <h3>Relatar um problema</h3>
                    @endsection

                    {{-- body --}}
                    @section('modal-body')
                        @if (isset($service->service_slots))
                            <div class="row">
                                <div class="col-md-6">

                                    <label for="professionals_ids" class="control-label">Profissionais</label>
                                    <select name="professionals_ids[]" id="professionals_ids" class="form-control select2"
                                        style="width: 100%;" multiple="multiple">
                                        @foreach ($service->service_slots as $slot)
                                            <option value="{{ $slot->professional->id }}">
                                                {{ $slot->professional->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <br>
                            <div class="row" id="modal-body-report-section">
                                <div class="col-md-6">

                                    <label for="professionals_ids" class="control-label">Motivo</label>
                                    <select class="form-control" name="problem_id" id="problem_id">
                                        <option value="0">Selecione um motivo</option>
                                        <option value="1">Faxina não ocorreu</option>
                                        <option value="2">Objetos danificados</option>
                                        <option value="3">Necessário retrabalho</option>
                                    </select>

                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">

                                    <label for="professionals_ids" class="control-label">Criar novo pagamento</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="credit" name="payment_method"
                                            value="credit" checked>
                                        <label class="form-check-label" for="credit">
                                            Crédito
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="debit" name="payment_method"
                                            value="debit">
                                        <label class="form-check-label" for="debit">
                                            Débito
                                        </label>
                                    </div>

                                </div>
                            </div>
                        @else
                            <p>Oops! Tivemos um problema aqui! Tente novamente mais tarde</p>
                        @endif
                    @endsection

                    {{-- footer --}}
                    @section('modal-footer')
                        <div class="row">
                            <div class="col-md-12">
                                <button id="modal_constuctor_cancel_btn" type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Cancelar</button>
                                <button id="modal_constuctor_save_btn" type="button" class="btn btn-primary"
                                    onclick="saveReport()">Salvar</button>
                            </div>
                        </div>
                    @endsection
                    {{-- END --}}

                    @include('modal.modal')
                </div>
            @endif

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
                    <label for="client">Cliente</label>
                    <input type="text" class="form-control" name="client" id="client" value="{{ $client->name }}"
                        disabled>
                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                </div>
                <div class="col-md-6">
                    <label class="control-label">Endereço</label>
                    <div class="col-md-6-12 form-group">
                        @foreach ($addresses as $index => $address)
                            <li class="list-group-item">
                                <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-{{ $index }}">
                                    <div class="col-md-4">
                                        <input type="radio" name="client_address_id" value="{{ $address->id }}"
                                            @if ($service->client_address_id == $address->id) checked @endif> Endereço {{ $index + 1 }}
                                    </div>
                                    <div><i class="fa fa-chevron-down pull-right mr-10"></i></div>
                                </div>
                                <div id="detail-{{ $index }}">
                                    <hr>
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
                            <select name="opt_reason_service_client" id="cbo_reason" class="form-control form-group">
                                <option value="" disabled selected>Selecione um motivo !</option>
                                @foreach ($reasons as $reason)
                                    <option value="{{ $reason->id }}">{{ $reason->id }} -
                                        {{ $reason->description }}</option>
                                @endforeach
                            </select>
                            <label for="cancel_submit">Descrição do Cancelamento</label>
                            <input class="btn btn-warning" type="submit" id="cancel_submit" value="Salvar"
                                style="margin-bottom: 7px;border-left-width: 0px;margin-left: 5px;">
                            <textarea class="form-control" name="cancel_description" id="txtarea_cancel_reason" cols="30"
                                rows="10" style="width:100%;"> </textarea>

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
                                            <td>{{ $history->infoOperador->name }}</td>
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
            <div class="row">
                <div class="col-md-6 form-group">
                    {!! Form::label('total_time', trans('abrigosoftware.services.fields.total-time') . '*', ['class' => 'control-label']) !!}
                    {!! Form::text('total_time', old('total_time'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('total_time'))
                        <p class="help-block">
                            {{ $errors->first('total_time') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-6 form-group">
                    {!! Form::label('qt_employees', 'Quantidade de Profissionais ' . '*', ['class' => 'control-label']) !!}
                    {!! Form::text('qt_employees', old('qt_employees'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('qt_employees'))
                        <p class="help-block">
                            {{ $errors->first('qt_employees') }}
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
                <div class="col-md-6 form-group">
                    {!! Form::label('value', trans('abrigosoftware.services.fields.value') . '*', ['class' => 'control-label']) !!}
                    {!! Form::text('value', old('value'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('value'))
                        <p class="help-block">
                            {{ $errors->first('value') }}
                        </p>
                    @endif
                </div>
                <div class="col-md-6 form-group">
                    {!! Form::label('start_time', trans('abrigosoftware.services.fields.start-time') . '*', ['class' => 'control-label']) !!}
                    {!! Form::text('start_time', old('start_time'), ['class' => 'form-control datetime-start', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('start_time'))
                        <p class="help-block">
                            {{ $errors->first('start_time') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pet_cautions', trans('abrigosoftware.services.fields.pet-cautions') . '', ['class' => 'control-label']) !!}
                    {!! Form::textarea('pet_cautions', old('pet_cautions'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('pet_cautions'))
                        <p class="help-block">
                            {{ $errors->first('pet_cautions') }}
                        </p>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <div class="panel panel-default" id="config-slots">
        <div class="panel-heading">
            Vaga(s) na Faxina e Profissional(is) Responsável(is)
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>@lang('abrigosoftware.service-slots.fields.user')</th>
                        <th>@lang('abrigosoftware.service-slots.fields.value')</th>

                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody id="vagas-em-faxinas">
                    @forelse(old('service_slots', []) as $index => $data)
                        @include('admin.services.service_slots_config_row', [
                        'index' => $index,
                        'value' => $item->value
                        ])
                    @empty
                        @foreach ($service->service_slots as $item)
                            @include('admin.services.service_slots_config_row', [
                            'index' => 'id-' . $item->id,
                            'field' => $item,
                            'value' => $item->value
                            ])
                        @endforeach
                    @endforelse
                </tbody>
            </table>
            <a href="#" class="btn btn-success pull-right add-new">@lang('abrigosoftware.as_add_new')</a>
        </div>
    </div>

    {!! Form::submit(trans('abrigosoftware.as_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent

    <script type="text/html" id="vagas-em-faxinas-template">
        @include('admin.services.service_slots_config_row',
        [
        'index' => '_INDEX_',
        ])
    </script>

    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        /**
         * Este trecho desabilita os botões, inputs e selects da blade caso o status da faxina seja Finalizada
         */
        window.onload = () => {
            let status = document.querySelector('#status_name').value;

            /**
             * Lista de IDS que não devem ser bloqueados caso a faxina esteja finalizada
             */
            let offset = ['report_problem', 'problem_id', 'modal_constuctor_cancel_btn', 'modal_constuctor_save_btn',
                'professionals_ids', 'debit', 'credit'
            ];

            /** 
             * Inicia a tag select com classe select2 para multiselect das profissionais 
             */
            $('#professionals_ids').select2({
                placeholder: 'Selecione'
            });

            if (status == 'Finalizada') {
                document.querySelectorAll('input, button, select, a').forEach(element => {
                    if (!offset.includes(element.id)) {
                        element.setAttribute('disabled', 'disabled');
                    }
                });

                let select = document.querySelector('#problem_id');

                select.addEventListener('change', (e) => {
                    if (select.value == 0) {

                        document.querySelector('#modal-body-report-section')
                            .removeChild(document.querySelector('#modal_constructor .modal-body .second'));

                        window.alert('Por favor, selecione um motivo');
                        return false;
                    } else if (select.value == 1) {

                        let html = '<div class="col-md-6 second"> \n';
                        html += '<label class="control-label">Segundo motivo</label> \n';
                        html +=
                            '<select class="form-control" name="second_problem_id" id="second_problem_id"> \n';
                        html += '<option value="0">Selecione um motivo</option> \n';
                        html += '<option value="1">Cliente não estava em casa</option> \n';
                        html += '<option value="2">Profissional não foi</option> \n';
                        html += '<option value="2">Outros</option> \n';
                        html += '</select> \n';
                        html += '</div> \n';

                        $('#modal-body-report-section').append(html);

                    } else {

                        document.querySelector('#modal-body-report-section')
                            .removeChild(document.querySelector('#modal_constructor .modal-body .second'));

                        saveReport();
                    }
                })

            }
        }

        /*
         * Função para salvar o relato do problema com a faxina
         */
        function saveReport() {

            /**
             * Inicia variaveis
             */
            let select = document.querySelector('#problem_id');
            let second_problem_id = document.querySelector('#second_problem_id');
            let payment_method = document.querySelector('input[name="payment_method"]:checked').value;
            let professionals_ids = $('#professionals_ids');

            /**
             * Validação
             */
            if (select.value == 0) {

                document.querySelector('#modal_constructor .modal-body')
                    .removeChild(document.querySelector('#modal_constructor .modal-body .second'));

                window.alert('Por favor, selecione um motivo');
                select.focus();
                return false;
            } else if (select.value = 1) {

                if (second_problem_id != null) {
                    if (second_problem_id.value == 0) {
                        window.alert('Por favor, selecione um motivo');
                        select2.focus();
                        return false;
                    }
                }
            }

            if (professionals_ids.select2('val').length = 0) {
                window.alert('Por favor, selecione uma profissional');
                professionals_ids.focus();
                return false;
            }

            /**
             * Faz a requisição para o back-end
             */
            fetch(`${window.location.protocol}//${window.location.host}/api/v1/save_report`, {
                method: 'POST',
                headers: {
                    Accept: 'application/json',
                    "Content-Type": 'application/json',
                    Authorization: "{{ @csrf_token() }}"
                },
                body: JSON.stringify({
                    service_id: "{{ $service->id }}",
                    report_id: select.value,
                    professionals_ids: professionals_ids.select2("val"),
                    payment_method: payment_method,
                    second_report_id: second_problem_id != null ||
                        second_problem_id !=
                        undefined ?
                        second_problem_id : null,
                })
            }).then((response) => {
                if (response.status == 200) {
                    /**
                     * Estilização botão
                     */
                    let button = document.querySelector('#modal_constuctor_save_btn');
                    button.setAttribute('readonly', true);
                    button.classList.remove('btn-primary');
                    button.classList.add('btn-success');
                    button.innerText = 'Sucesso!';

                    /** Recarrega a pag */
                    window.location.reload();
                }
            });
        }

        //Verificacao de cancelamento
        $('select[name=status_id]').change(function() {
            if ($('select[name=status_id]').val() == 5) {
                alert(' Favor preenchcer Motivo e a descrição para o cancelamento !! ');
                $('#cancel_submit').prop('disabled', true);
                $('#cbo_reason').prop('required', true);
                $('textarea[name=cancel_description]').focus();
            }

        });

        $('textarea[name=cancel_description]').change('keydown', function() {
            let tam = $(this).val();
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

                date: moment("{{ $service->start_time }}"),
                format: "DD/MM/YYYY HH:mm",
                sideBySide: true,

            });

        });
        $(function() {


            $('.datetime-end').datetimepicker({

                date: moment("{{ $service->end_time }}"),
                format: "DD/MM/YYYY HH:mm",
                sideBySide: true,

            });

        });

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

        /**
         * Remove a profissional selecionada
         */
        $(document).on('click', '.remove', async function() {

            let id = this.parentNode.parentNode.dataset.index.replace("id-", "");

            /**
             * Faz a requisição para o back-end
             */
            await fetch(`${window.location.protocol}//${window.location.host}/api/v1/remove_professional`, {
                method: 'POST',
                headers: {
                    Accept: 'application/json',
                    "Content-Type": 'application/json',
                    Authorization: "{{ @csrf_token() }}"
                },
                body: JSON.stringify({
                    id: id,
                    replicate: true
                })
            }).then((response) => {
                if (response.status == 200) {
                    var row = $(this).parentsUntil('tr').parent();
                    row.remove();
                } else {
                    window.alert('Falha ao excluir profissional!');
                }
            });
        });
    </script>
@stop
