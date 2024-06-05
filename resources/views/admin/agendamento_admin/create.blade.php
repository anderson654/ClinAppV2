@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@section('content')
    <h3 class="page-title">@lang('abrigosoftware.services.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.create.clean']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('abrigosoftware.as_create')
        </div>
        @if (Session::has('admin-mensagem-sucesso'))
            <div class="alert alert-success"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>
        @endif
        @if (Session::has('admin-mensagem-error'))
            <div class="alert alert-error"><strong>{{ Session::get('admin-mensagem-error') }}<strong></div>
        @endif

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-error">
                <strong>{{ session()->get('error') }}</strong>
            </div>
        @endif


        <div class="panel-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Adicionar novo Cliente
                    </tr>
                </thead>
                <tbody>
                    <tr data-index="1">
                        <td class='col-md-6'>
                            {!! Form::select('client_id', $clients, old('client_id'), ['class' => 'form-control', 'required' => '', 'id' => 'client_id']) !!}
                        </td>
                        <p class="help-block"></p>
                        @if ($errors->has('client_id'))
                            <p class="help-block">
                                {{ $errors->first('client_id') }}
                            </p>
                        @endif
                        <p style="display:none" id="addressError"></p>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalPF">
                                Novo Cliente PF
                            </button>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalPJ">
                                Novo Cliente PJ
                            </button>
                        </td>

                    </tr>
                </tbody>
            </table>

            <div id="addressModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalAddress"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Escolha o endereço do cliente</h3>
                        </div>
                        <div class="modal-body" id="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Salvar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                id="addressDismiss">Calcular</button>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Tipo de residência</th>
                        <th>Tipo de Faxina</th>

                    </tr>
                </thead>
                <tbody id="vagas-em-faxinas">
                    <tr data-index="1">
                        <td class='col-md-6'>
                            {!! Form::select('address_type_id', $address_types, old('address_type_id'), ['class' => 'form-control select2', 'required' => '', 'id' => 'address_type']) !!}
                        <td>
                            {!! Form::select('service_type_id', $service_types, old('service_type_id'), [
    'class' => 'form-control
                            select2',
    'required' => '',
]) !!}

                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th>Recorrência da Serviço</th>
                        <th> {!! Form::label('products_included', trans('abrigosoftware.services.fields.products-included') . '', ['class' => 'control-label']) !!}
                        </th>

                    </tr>
                </thead>
                <tbody id="vagas-em-faxinas">
                    <tr data-index="1">
                        <td class='col-md-6'>
                            {!! Form::select('service_category_id', $service_categories, old('service_category_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                        </td>
                        <td>

                            {!! Form::hidden('products_included', 0) !!}
                            {!! Form::checkbox('products_included', 1, old('products_included', true)) !!}
                            <p class="help-block"></p>
                            @if ($errors->has('products_included'))
                                <p class="help-block">
                                    {{ $errors->first('products_included') }}
                                </p>
                            @endif

                        </td>

                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>

            </table>


            <div class="panel panel-default">
                <div class="panel-heading">
                    Escolha os status Iniciais
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>

                                <th>Pagamento</th>
                                <th>Prazo para pagamento (Em dias)</th>
                            </tr>
                        </thead>
                        <tbody id="itens-adicionais">
                            <tr data-index="1">

                                <td class='col-md-4'>


                                    {!! Form::label('gerar_boleto', 'Pagamento em Boleto ou cartão de Crédito?', ['class' => 'control-label']) !!}

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="BOLETO_PIX"
                                            value="BOLETO_PIX" checked>
                                        <label class="form-check-label" for="BOLETO_PIX">
                                            BOLETO PIX
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="boleto"
                                            value="BOLETO">
                                        <label class="form-check-label" for="boleto">
                                            Boleto
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard"
                                            value="CREDIT_CARD">
                                        <label class="form-check-label" for="creditCard">
                                            Cartão de Crédito
                                        </label>
                                    </div>
                                </td>
                                <td class='col-md-4 align-items-center'>
                                    <div class="form-group multiple-form-group input-group">

                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-danger btn-removeDays_payments">-</button>
                                        </span>

                                        <input type="number" value="1" name="days_payments" id="days_payments"
                                            class="form-control" style="font-size:large;text-align:center;">


                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-addDays_payments">+</button>
                                        </span>
                                    </div>

                                </td>

                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Escolha os itens adicionais
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Item Adicional</th>
                            </tr>
                        </thead>
                        <tbody id="itens-adicionais">
                            <tr data-index="1">
                                <td>
                                    {!! Form::select('additionals[1][id]', $additionals, old('additionals[1][id]', isset($field) ? $field->value : ''), ['class' => 'form-control select2']) !!}

                                </td>
                                <td class='col-md-6'>
                                    @foreach (old('additionals', []) as $index => $data)
                                        @include(
                                            'admin.agendamento_admin.additionals_row',
                                            [
                                                'index' => $index,
                                            ]
                                        )
                                    @endforeach
                                    <p class="help-block"></p>
                                    @if ($errors->has('additionals'))
                                        <p class="help-block">
                                            {{ $errors->first('additionals') }}
                                        </p>
                                    @endif
                                </td>

                            </tr>

                        </tbody>
                    </table>
                    <a href="#" class="btn btn-success pull-right add-new">Adicionar Item Adicional</a>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe o tempo total de cada Serviço e a Quantidade de vagas
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{!! Form::label('total_time', trans('abrigosoftware.services.fields.total-time') . '*', ['class' => 'control-label']) !!}</th>
                                <th> Quantidade de Vagas</th>
                            </tr>
                        </thead>
                        <tbody id="itens-adicionais">
                            <tr data-index="1">

                                <td class='col-md-3 align-items-center'>
                                    <div class="form-group multiple-form-group input-group">

                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-danger btn-removeTotalTime">-</button>
                                        </span>

                                        <input type="number" value="1" name="total_time" id="total_time"
                                            class="form-control" style="font-size:large;text-align:center;">


                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-addTotalTime">+</button>
                                        </span>
                                    </div>

                                </td>
                                <td class='col-md-3 align-items-center '>
                                    <div class="form-group2 multiple-form-group input-group">

                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-danger btn-removeEmployees">-</button>
                                        </span>

                                        <input type="number" value="1" name="qt_employees" id="qt_employees"
                                            class="form-control" style="font-size:large;text-align:center;">


                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-success btn-addEmployees">+</button>
                                        </span>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Valores e descontos
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>{!! Form::label('value', trans('abrigosoftware.services.fields.value') . '*', ['class' => 'control-label']) !!}
                                </th>
                                <th>Cupom de Desconto</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="itens-adicionais">
                            <tr data-index="1">
                                <td class='col-md-6'>
                                    {!! Form::text('value', old('value'), ['class' => 'form-control text', 'required' => '']) !!}

                                    <p class="help-block"></p>
                                    @if ($errors->has('value'))
                                        <p class="help-block">
                                            {{ $errors->first('value') }}
                                        </p>
                                    @endif
                                </td>
                                <td class='col-md-6'>
                                    {!! Form::select('discount_coupon_id', $discountCoupon, old('discount_coupon_id'), ['class' => 'select']) !!}

                                </td>
                                <td class='col-md-6'>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Escolha as datas de realização do serviço
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th> {!! Form::label('start_time', trans('abrigosoftware.services.fields.start-time') . '* - Em horas', ['class' => 'control-label']) !!}</th>
                            </tr>
                        </thead>
                        <tbody id="start_time">
                            <tr data-index="1">
                                <td class='col-md-6'>
                                    {!! Form::text('start_time[1][start_time]', old('start_time[1][start_time]', isset($field) ? $field->start_time : ''), ['class' => 'form-control datetime', 'placeholder' => 'dd/mm/aaaa hh:mm', 'required' => '']) !!}

                                    <p class="help-block"></p>
                                    @if ($errors->has('start_time'))
                                        <p class="help-block">
                                            {{ $errors->first('start_time') }}
                                        </p>
                                    @endif
                                </td>
                                <td class='col-md-6'></td>
                            </tr>
                            @foreach (old('start_time', []) as $index => $data)
                                @include(
                                    'admin.agendamento_admin.start_time_row',
                                    [
                                        'index' => $index,
                                    ]
                                )
                            @endforeach
                        </tbody>
                    </table>
                    <a href="#" class="btn btn-success pull-right add-new" onclick="setDatetime()">Adicionar mais datas</a>
                </div>
            </div>



            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pet', trans('abrigosoftware.services.fields.pet') . '', ['class' => 'control-label']) !!}
                    {!! Form::hidden('pet', 0) !!}
                    {!! Form::checkbox('pet', 1, old('pet', false)) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('pet'))
                        <p class="help-block">
                            {{ $errors->first('pet') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 form-group">
                    {!! Form::label('pet_cautions', 'Observações:', ['class' => 'control-label']) !!}
                    {!! Form::textarea('pet_cautions', old('pet_cautions'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('pet_cautions'))
                        <p class="help-block ">
                            {{ $errors->first('pet_cautions') }}
                        </p>
                    @endif
                </div>
                <div class="col-xs-6 form-group">
                    {!! Form::label('internal_advice', 'Observações Internas:', ['class' => 'control-label']) !!}
                    {!! Form::textarea('internal_advice', old('internal_advice'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if ($errors->has('internal_advice'))
                        <p class="help-block ">
                            {{ $errors->first('internal_advice') }}
                        </p>
                    @endif
                </div>
            </div>

        </div>
    </div>





    {!! Form::submit(trans('abrigosoftware.as_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>




@section('javascript')
    @parent
    <script>
        // if there're query params, autoload fields
        window.onload = () => {

            const urlSearchParams = new URLSearchParams(window.location.search);
            const params = Object.fromEntries(urlSearchParams.entries());

            // document.querySelector('#client_id').click()
            //  document.querySelector('#client_id').value = params.client_name ? params.client_name : null
            document.querySelector('#total_time').value = params.total_time ? params.total_time : 0
            document.querySelector('#qt_employees').value = params.qt_employees ? params.qt_employees : 1
        }

        $.fn.select2.amd.require(
            ['select2/data/array', 'select2/utils'],
            function(ArrayData, Utils) {
                function CustomData($element, options) {
                    CustomData.__super__.constructor.call(this, $element, options);
                }

                function contains(str1, str2) {
                    return new RegExp(str2, "i").test(str1);
                }

                Utils.Extend(CustomData, ArrayData);

                CustomData.prototype.query = function(params, callback) {
                    if (!("page" in params)) {
                        params.page = 1;
                    }
                    var pageSize = 20;
                    var results = this.$element.children().map(function(i, elem) {
                        if (contains(elem.innerText, params.term)) {
                            return {
                                id: [elem.value].join(""),
                                text: elem.innerText
                            };
                        }
                    });
                    callback({
                        results: results.slice((params.page - 1) * pageSize, params.page * pageSize),
                        pagination: {
                            more: results.length >= params.page * pageSize
                        }
                    });
                };

                $("#client_id").select2({
                    ajax: {},
                    allowClear: true,
                    width: "element",
                    dataAdapter: CustomData,
                });
            });


        //end

        function validateUserPF() {
            var inputEmail = document.getElementById('email_pf').value
            $.get(`/admin/agendamentoAdmin/check_user/${inputEmail}`, function(response) {
                if (response.length > 0) {
                    var {
                        email
                    } = responseUser
                    if (email === inputEmail) {
                        document.getElementById('pEmailPF').style = 'none'
                        document.getElementById('pEmailPF').style.color = 'blue'

                        document.getElementById('name_pf').value = responseUser.name
                        document.getElementById('cpf_pf').value = responseUser.cpf
                        document.getElementById('birthdate_pf').value = responseUser.birthdate
                        document.getElementById('phone_pf').value = responseUser.celphone
                        document.getElementById('street_pf').value = responseUser.street
                        document.getElementById('number_pf').value = responseUser.number
                        document.getElementById('complement_pf').value = responseUser.complement
                        document.getElementById('zip_pf').value = responseUser.zip
                        document.getElementById('neighborhood_pf').value = responseUser.neighborhood
                    }
                }
            })
        }

        function validateUserPJ() {
            var inputEmail = document.getElementById('email_pj').value
            $.get(`/admin/agendamentoAdmin/check_user/${inputEmail}`, function(response) {
                const {
                    razao_social,
                    nome_fantasia,
                    inscricao_estadual,
                    inscricao_municipal,
                    cnpj,
                    phone_pj,
                    street_pj,
                    number_pj,
                    complement_pj,
                    zip_pj,
                    neighborhood_pj
                } = document.forms["form_pj"].getElementsByTagName("input")

                if (response.length == 2) {
                    let responseUser = response[0][0]
                    let responseCorporate = response[1][0]
                    var {
                        email
                    } = responseUser
                    if (email === inputEmail) {

                        document.getElementById('pEmailPJ').style = 'none'
                        document.getElementById('pEmailPJ').style.color = 'blue'

                        razao_social.value = responseCorporate.razao_social
                        nome_fantasia.value = responseCorporate.nome_fantasia
                        inscricao_estadual.value = responseCorporate.inscricao_estadual
                        inscricao_municipal.value = responseCorporate.inscricao_municipal
                        cnpj.value = responseCorporate.cnpj
                        phone_pj.value = responseUser.phone
                        street_pj.value = responseUser.street
                        number_pj.value = responseUser.number
                        complement_pj.value = responseUser.complement
                        zip_pj.value = responseUser.zip
                        neighborhood_pj.value = responseUser.neighborhood

                    }
                }
            })
        }

        function setDatetime() {
            setTimeout(function() {
                let inputs = document.getElementsByClassName('datetime')
                for (let i = 1; i < inputs.length; i++) {
                    console.log(inputs[i]);
                    $(inputs[i]).datetimepicker({
                        date: moment(""),
                        format: "DD/MM/YYYY HH:mm",
                        sideBySide: true
                    });
                }
            }, 500);
        }
    </script>




    <script type="text/javascript">
        $(function() {
            var $city = 1;

            $('.select').on("change", function(event1) {

                $value1 = event1.currentTarget.value;


                $("#valor").val($value1);

            });


            $("#valor").val($city);
        });
    </script>

    <script>
        (function($) {
            $(function() {



                var $days_payments = 1;

                var addDays_payments = function(event) {
                    event.preventDefault();

                    var $formGroup = $(this).closest('.form-group');

                    var $formGroupClone = $formGroup;

                    $days_payments += 1;
                    $formGroupClone.find('input').val($days_payments);
                };

                var removeDays_payments = function(event) {
                    event.preventDefault();

                    var $formGroup = $(this).closest('.form-group');

                    var $formGroupClone = $formGroup;

                    if ($days_payments > 1) {
                        $days_payments -= 1;
                    }
                    $formGroupClone.find('input').val($days_payments);

                };
                $(document).on('click', '.btn-addDays_payments', addDays_payments);
                $(document).on('click', '.btn-removeDays_payments', removeDays_payments);

            });



            $(function() {



                var $total_time = 1;

                var addTotalTime = function(event) {
                    event.preventDefault();

                    var $formGroup = $(this).closest('.form-group');

                    var $formGroupClone = $formGroup;

                    $total_time += 1;
                    $formGroupClone.find('input').val($total_time);
                };

                var removeTotalTime = function(event) {
                    event.preventDefault();

                    var $formGroup = $(this).closest('.form-group');

                    var $formGroupClone = $formGroup;

                    if ($total_time > 1) {
                        $total_time -= 1;
                    }
                    $formGroupClone.find('input').val($total_time);

                };
                $(document).on('click', '.btn-addTotalTime', addTotalTime);
                $(document).on('click', '.btn-removeTotalTime', removeTotalTime);

            });

            $(function() {
                var $qt_employees = 1;

                var addEmployees = function(event) {
                    event.preventDefault();

                    var $formGroup = $(this).closest('.form-group2');

                    var $formGroupClone = $formGroup;

                    $qt_employees += 1;
                    $formGroupClone.find('input').val($qt_employees);
                };

                var removeEmployees = function(event) {
                    event.preventDefault();

                    var $formGroup = $(this).closest('.form-group2');

                    var $formGroupClone = $formGroup;

                    if ($qt_employees > 1) {
                        $qt_employees -= 1;
                    }
                    $formGroupClone.find('input').val($qt_employees);

                };
                $(document).on('click', '.btn-addEmployees', addEmployees);
                $(document).on('click', '.btn-removeEmployees', removeEmployees);

            });
        })(jQuery);
    </script>


    <script src="{{ url('adminlte/plugins/datetimepicker/moment-with-locales.min.js') }}"></script>
    <script src="{{ url('adminlte/plugins/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(function() {

            $('.datetime').datetimepicker({
                date: moment(""),
                format: "DD/MM/YYYY HH:mm",
                sideBySide: true,

            });

        });
    </script>

    <script type="text/html" id="vagas-em-faxinas-template">
        @include(
            'admin.agendamento_admin.preferred_professionals_config_row',
            [
                'index' => '_INDEX_',
            ]
        )
    </script>
    <script type="text/html" id="itens-adicionais-template">
        @include(
            'admin.agendamento_admin.itens_adicionais_config_row',
            [
                'index' => '_INDEX_',
            ]
        )
    </script>
    <script type="text/html" id="start_time-template">
        @include('admin.agendamento_admin.start_time_config_row', [
            'index' => '_INDEX_',
        ])
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
    {{-- <script>
        $("#selectbtn-assigned_to").click(function() {
            $("#selectall-assigned_to > option").prop("selected", "selected");
            $("#selectall-assigned_to").trigger("change");
        });
        $("#deselectbtn-assigned_to").click(function() {
            $("#selectall-assigned_to > option").prop("selected", "");
            $("#selectall-assigned_to").trigger("change");
        });

    </script> --}}
@stop

<!-- Modal -->
<div class="modal fade" id="ModalPF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Novo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>@include('create_clientPF')</p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalPJ" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Novo Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>@include('create_clientPJ')</p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- Consulta cep -->
<script src="{{ asset('js/buscaCep.js') }}"></script>
