@extends('admin.agendamento_admin_new.partials.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
    .newClient {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: flex;
        margin-bottom: 15px;
    }

    .saveAddress {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        margin-bottom: 15px;
    }

    .newClientAddress {
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: flex;
        margin-bottom: 15px;
    }

    .btnSubmit {
        width: 100%;
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
        padding: 0px 15px 15px 15px;
    }

    .d-none {
        display: none;
    }

    .bg-color-blue {
        background: #8aaac5 !important;
        color: #fff !important;
    }

    [data-section] {
        animation: slide 0.4s forwards;
    }

    [data-panelUser] {
        animation: slide 0.4s backwards;
    }

    .alertPanel {
        background: red !important;
        color: #fff !important;
    }

    .sucessPanel {
        background: #00a65A !important;
        color: #fff !important;
    }

    [data-headingUser] {
        position: relative;
    }

    .titleModal {}

    .modal-header {
        background: #337ab7 !important;
        color: #fff !important;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .close {
        color: #fff !important;
        opacity: 1 !important;
    }

    .modal-content {
        border-radius: 10px !important;
    }

    .container-recurrence {
        display: grid;
        padding: 0px 15px;
        grid-template-columns: repeat(1, 1fr);
        row-gap: 20px;
        justify-content: center !important;
        align-items: center;
    }

    .far.fa-check-circle {
        font-size: 32px;
    }

    .far.fa-circle {
        font-size: 32px;
    }

    .container-step-two {
        display: grid;
        padding: 40px 15px;
        grid-template-columns: repeat(1, 1fr);
        row-gap: 20px;
        justify-content: center !important;
        align-items: center;
    }

    @keyframes slide {
        from {
            transform: translateX(100px);
            opacity: 0;
        }

        to {
            transform: translateX(0px);
            opacity: 1;
        }
    }

    .alert {
        position: relative;
    }

    [data-alert] {
        position: fixed;
        top: 0;
    }

    .card {
        border-radius: 10px;
        padding: 10px 10px 33px 10px;
        box-sizing: border-box;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .3) !important;
        width: 90%;
        min-height: 150px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;

    }

    .container-cards {
        display: grid;
        padding: 40px 15px;
        grid-template-columns: repeat(1, 1fr);
        row-gap: 20px;
        justify-content: center !important;
        align-items: center;
    }

    .container-flex-card {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media (min-width: 576px) {
        .container-cards {
            grid-template-columns: repeat(2, 1fr);
        }

        .container-step-two {
            grid-template-columns: repeat(1, 1fr);
        }

        .container-recurrence {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    @media (min-width: 768px) {
        .container-cards {
            grid-template-columns: repeat(3, 1fr);
        }

        .container-step-two {
            grid-template-columns: repeat(2, 1fr);
        }

        .container-recurrence {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 992px) {
        .container-cards {
            grid-template-columns: repeat(3, 1fr);
            row-gap: 30px;
        }

        .container-step-two {
            grid-template-columns: repeat(2, 1fr);
        }

        .container-recurrence {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1200px) {
        .container-cards {
            grid-template-columns: repeat(4, 1fr);
            row-gap: 40px;
        }

        .container-step-two {
            grid-template-columns: repeat(2, 1fr);
        }

        .container-recurrence {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .container-info-user {
        background: #fff;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .12) !important;
        border-radius: 10px;
        margin: 15px;
        border: solid 2px #337ab7;

    }

    .icon-client {
        padding: 15px;
        display: flex;
        color: #337ab7;
    }

    .icon-user {
        font-size: 50px;
        margin-right: 10px;
    }

    .icon-edit {
        background: #337ab7;
    }

    .container-title {
        display: flex;
        justify-content: center;
    }

    .card-type-two {
        display: flex;
        border: solid 1px #337ab7;
        padding: 10px;
        align-items: center;
        justify-content: center;
        width: 300px;
        flex-direction: column;
        border-radius: 5px;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .1) !important;
    }

    .sum-subtraction-container {
        display: flex;
        flex-direction: row;
    }

    .sum-subtraction-container div.title {
        font-size: 20px;
    }

    .sum-subtraction-container input {
        width: 50px;
        text-align: center;
        border: none;
        font-size: 20px;
    }

    .sum-subtraction-container button {
        border-radius: 50%;
    }

    .container-payment {
        padding: 15px 30px;
    }

    .card-type-payment {
        display: flex;
        flex-direction: row;
        box-shadow: 0 0 0.5rem rgba(0, 0, 0, .1) !important;
        border-radius: 10px;
        min-height: 90px;
        align-items: center;
        padding: 10px;
        box-sizing: border-box;
        margin: 20px 0px;
        cursor: pointer;

    }

    .card-type-payment:hover {
        transform: scale(1.02)
    }

    .container-icon-credit-card {
        font-size: 4rem;
        margin-left: 10px;
    }

    .title-type-payment {
        flex: 1;
        text-align: center;
        font-weight: bold;
        font-size: 1.5rem;
    }

    .card-type-payment:hover {
        transform: scale(1.02)
    }

    .card-type-payment:hover .title-type-payment {
        transform: scale(1.02)
    }

    .checked {
        background: #337ab7;
        color: white;
    }

    .unchecked {
        color: #337ab7;
    }

</style>
@section('content')
    <input type="hidden" value="{{ $token }}" data-token>
    {{-- <h3 class="page-title">@lang('abrigosoftware.services.title')</h3> --}}
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

    <div class="alert alert-error hidden" data-errorsDefault>
        <strong>Erro ao salvar endereço desejado</strong>
    </div>

    <div class="newClient">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalPF">Cadastrar novo
            usuario</button>
    </div>
    <div class="newClientAddress hidden">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalRegisterAddress">Novo
            endereço</button>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" data-titlePainel>
            Agendamento de serviço
        </div>
        {!! Form::open(['method' => 'POST', 'route' => ['admin.create.clean']]) !!}
        <div data-section='1'>
            @include('admin.agendamento_admin_new.selectUser')
        </div>
        <div data-section="2" class="d-none">
            @include('admin.agendamento_admin_new.selectAddress')
        </div>
        <div data-section="3">
            @include('admin.agendamento_admin_new.home')
        </div>
        <div data-section="4">
            @include(
                'admin.agendamento_admin_new.cleans.cleansStepOne'
            )
        </div>
        <div data-section="5">
            @include(
                'admin.agendamento_admin_new.cleans.cleanStepTwo'
            )
        </div>
        <div data-section="6">
            @include(
                'admin.agendamento_admin_new.cleans.cleansStepTree'
            )
        </div>
        <div data-section="7">
            @include(
                'admin.agendamento_admin_new.payment.typePayment'
            )
        </div>
        <div data-section="8">
            @include(
                'admin.agendamento_admin_new.payment.descriptionPayment'
            )
        </div>
        <div class="btnSubmit">
            <button type="button" class="btn btn-success" data-next disabled>Proximo</button>
            <button type="button" class="btn btn-primary hidden" data-back>Voltar</button>
        </div>
        {!! Form::close() !!}
    </div>
    <div class="panel panel-default hidden" data-panelUser>
        <div class="panel-heading" data-headingUser>
            Informaçoes do cliente<br>
            <strong data-alertUser class="hidden">1 - (Por favor complete as informaçoes do cliente!!!)</strong>
            <br>
            <strong data-alertUserExist class="hidden">2 - (Cliente já existe por favor crie um endereço para ele em
                sua
                franquia clicando em proximo!!!)</strong>
        </div>
        @include('admin.agendamento_admin_new.showUser')
    </div>
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

                $("#clientName").select2({
                    ajax: {},
                    width: "element",
                    dataAdapter: CustomData,
                });
            });

        ////
        const client_id = document.querySelector('#client_id');
        const addres_id = document.querySelector('#addres_id');
        const btnNext = document.querySelector('[data-next]');
        const btnBack = document.querySelector('[data-back]');
        const section = document.querySelectorAll('[data-section]');
        const templateButtomAddress = document.querySelector('[data-templateButtomAddress]');
        const bodyAddresses = document.querySelector('[data-bodyAddresses]');
        // const btnsAddres = document.querySelectorAll('[data-addres]');
        const inputShowEmail = document.querySelector('[data-showEmail]');
        const inputShowCpf = document.querySelector('[data-showCpf]');
        const panelUser = document.querySelector('[data-panelUser]');
        const dataHeadingUser = document.querySelector('[data-headingUser]');
        const dataAlertUser = document.querySelector('[data-alertUser]');
        const alertUserExist = document.querySelector('[data-alertUserExist]');
        const divButtomNewClient = document.querySelector('.newClient');
        const divButtomNewAddress = document.querySelector('.newClientAddress');
        const modalPf = document.querySelector('#ModalPF');
        const buttomSaveClient = document.querySelector('[data-saveClient]');
        const btnEditUser = document.querySelector('[data-btnEditUser]');
        const InputEmailShowUser = document.querySelector('#emailShowUser');
        const InputCpfShowUser = document.querySelector('#cpfShowUser');
        const titlePainel = document.querySelector('[data-titlePainel]');
        const containerBtnSubmit = document.querySelector('.btnSubmit');
        const buttomsServices = document.querySelectorAll('[data-buttomTypeServices]');
        const additionalsButtons = document.querySelectorAll('[data-additionals]');
        const recurrence = document.querySelector('[data-recurrence]');
        const buttomsRecurrence = document.querySelectorAll('[data-cardRecurrence]');
        const buttomsSum = document.querySelectorAll('[data-buttomSum]');
        const buttomsSubtraction = document.querySelectorAll('[data-buttomSubtraction]');
        const inputHours = document.querySelector('[name="totalHours"]');
        const inputProfessionals = document.querySelector('[name="totalProfessionais"]');
        const inputCupom = document.querySelector('[data-cupom]');
        const buttonsPayment = document.querySelectorAll('[data-buttonPayment]');
        //variaveis form create newUser
        const name = document.querySelector('[data-name]')
        const email = document.querySelector('[data-email]');
        const cpf = document.querySelector('[data-cpf]');
        const birthdate = document.querySelector('[data-birthdate]');
        const phone = document.querySelector('[data-phone]');
        //variaveis de nomes e titulos
        const innerTextUserName = document.querySelectorAll('[data-name-user]');
        const innerTextCepName = document.querySelectorAll('[data-cep-user]');
        //valor da faxina
        const valueClean = document.querySelector('[data-valueClean]');
        //payment
        const typePayment = document.querySelector('#typePayment');
        const typeService = document.querySelector('[name="typeService"]');

        //Qt.quartos Qt.banheiros
        const totalBedrooms = document.querySelector('[name="totalBedrooms"]');
        const totalBathrooms = document.querySelector('[name="totalBathrooms"]');
        const buttonsTypeAddres = document.querySelectorAll('[data-cardTypeAddres]');
        const typeAddres = document.querySelectorAll('[name="typeAddres"]');

        const InputProductsIncluded = document.querySelector('[name="products"]');
        const ckeckedButtom = document.querySelector('#flexCheckDefault');
        const productsIncluded = document.querySelector('[name="productsIncluded"]');

        const token = document.querySelector('[data-token]');

        const dataTime = document.querySelector('[data-dataTime]');

        const codeBoleto = document.querySelector('[data-codeBoleto]');
        const linkBoleto = document.querySelector('[data-linkAsaas]');
        const buttonCopyLink = document.querySelector('[data-copyButtom]');
        const buttonSaveAddres = document.querySelector('[data-buttomSaveAddres]');

        const numberAddres = document.querySelector('#number');

        const errorsDefault = document.querySelector('[data-errorsDefault]');

        console.log(buttonSaveAddres);

        buttonSaveAddres.onclick = () => {

            saveAddres()
        }

        InputProductsIncluded.onclick = () => {
            if (ckeckedButtom.checked) {
                productsIncluded.value = 1;
            } else {
                productsIncluded.value = 0;
            }
        }

        let sectionVisible = 1;
        let orderId = false;
        btnNext.addEventListener('click', nextStep);
        btnBack.addEventListener('click', backStep);
        // sectionVisible = verifyStep(sectionVisible);
        let additionals = [];

        function activateCurrentStep() {
            section.forEach(element => {
                element.classList.add('d-none');
            });
            document.querySelector(`[data-section = '${sectionVisible}']`).classList.remove('d-none');
            verifyStep();
        }
        activateCurrentStep();

        function activateCurrentStepForId(id) {
            section.forEach(element => {
                element.classList.add('d-none');
            });
            document.querySelector(`[data-section = '${id}']`).classList.remove('d-none');
            verifyStep(id);
        }

        function nextStep() {
            sectionVisible != section.length ? ++sectionVisible : sectionVisible;
            activateCurrentStep();
        }

        function backStep() {
            sectionVisible != 1 ? --sectionVisible : sectionVisible;
            activateCurrentStep();
        }


        function verifyStep(id) {
            if (id) {
                sectionVisible = id
            }
            switch (id || sectionVisible) {
                case 1:
                    client_id.value && panelUser.classList.remove('hidden');
                    divButtomNewClient.classList.remove('hidden');
                    divButtomNewAddress.classList.add('hidden');
                    btnBack.classList.add('hidden');
                    break;
                case 2:
                    // if (addres_id.value) {
                    //     removeAttributeDisabled(btnNext);
                    // } else {
                    //     addAttributeDisabled(btnNext);
                    // }
                    panelUser.classList.add('hidden');
                    divButtomNewClient.classList.add('hidden');
                    divButtomNewAddress.classList.remove('hidden');
                    btnBack.classList.remove('hidden');
                    break;
                case 3:
                    containerBtnSubmit.classList.add('hidden');
                    titlePainel.innerHTML = 'Selecione um serviço';
                    divButtomNewAddress.classList.add('hidden');
                    errorsDefault.classList.add('hidden');
                    break;
                case 4:
                    containerBtnSubmit.classList.remove('hidden');
                    break;
                case 5:
                    break;
                case 6:
                    getPriceCleanNewModel();
                    break;
                case 7:
                    storeServices();
                    break;
                case 8:
                    createServicePayment();
                default:
                    break;
            }
        }

        //select selecione um cliente
        $(function() {
            $('#clientName').on("change", function(client) {
                $client_id = client.currentTarget.value;
                $("#client_id").val($client_id);
                if ($client_id) {
                    addAttributeDisabled(btnNext);
                    setInfoClient();
                } else {
                    addAttributeDisabled(btnNext);
                    addHiddenClass(panelUser);
                }
            });
        });

        function setInfoClient() {
            getClient();
            getAddressesClient();
        }

        function addAttributeDisabled(element) {
            element.setAttribute("disabled", "disabled");
        }

        function removeAttributeDisabled(element) {
            element.removeAttribute('disabled');
        }

        function addHiddenClass(element) {
            panelUser.classList.add('hidden');
        }

        function removeHiddenClass(element) {
            panelUser.classList.remove('hidden');
        }


        async function getClient() {
            const response = await fetch(`${window.location.origin}/api/v1/client/${client_id.value}`);
            const json = await response.json();
            setClient(json);
        }

        function setClient(json) {
            setPanelUser(json);
            if (!!inputShowEmail.value && !!inputShowCpf.value) {
                statusClientTrue();
            } else {
                statusClientFalse();
            }
        }

        function setPanelUser({
            id,
            email,
            cpf,
            name
        }) {
            client_id.value = id;
            inputShowEmail.value = email;
            inputShowCpf.value = cpf;
            const selectUser = document.querySelector('#select2-clientName-container');
            selectUser.innerText = name;

            //apos setar os parametros mostra o painel de info do user
            panelUser.classList.remove('hidden');
            //função temporaria setar user.... de nome
            //trocar a função de set por searchInfoClient
            setInfoClient1(name);
        }

        function setInfoClient1(name) {
            innerTextUserName.forEach(dataUsers => {
                dataUsers.innerText = name;
            });
        }

        function statusClientTrue() {
            removeAttributeDisabled(btnNext);
            dataHeadingUser.classList.remove('alertPanel');
            dataHeadingUser.classList.add('sucessPanel');
            dataAlertUser.classList.add('hidden');
        }

        function statusClientFalse() {
            dataHeadingUser.classList.add('alertPanel');
            dataHeadingUser.classList.remove('sucessPanel');
            dataAlertUser.classList.remove('hidden');
            alertUserExist.classList.add('hidden');
        }

        async function getAddressesClient() {
            const response = await fetch(`${window.location.origin}/api/v1/client/addresses/${client_id.value}`);
            const json = await response.json();
            generateButtomAddres(json);
        }

        function generateButtomAddres(addresses) {
            const button = templateButtomAddress.content.querySelector('[data-addres]');
            bodyAddresses.innerHTML = "";

            addresses.forEach((address) => {
                let newButtom = button.cloneNode(true);
                newButtom.value = address.id;
                newButtom.innerHTML =
                    `<span>Bairro: ${address.neighborhood}</span><br><span>Rua: ${address.street}</span><br><span>CEP: ${address.zip}</span><br><span>Complemento: ${address.complement}</span>`;
                newButtom.addEventListener('click', () => {
                    setAddress(address.id);
                    setTextCep(address.zip);
                })
                bodyAddresses.appendChild(newButtom);
            });
        }

        function setAddress(addresId) {
            addres_id.value = addresId;
            setColorButtons();
        }

        function setTextCep(cep) {
            innerTextCepName.forEach(textCep => {
                textCep.innerText = cep;
            });
        }

        function setColorButtons() {
            const btnsAddres = document.querySelectorAll('[data-addres]');
            btnsAddres.forEach((btnAddres) => {
                btnAddres.classList.remove('bg-color-blue');
                btnAddres.value == addres_id.value && btnAddres.classList.add('bg-color-blue');
            });
        }

        //modal addClient
        name.onblur = () => {
            checkFormCreateNewUser();
        }
        email.onblur = () => {
            checkExistClient();
            checkFormCreateNewUser();
        }
        cpf.onblur = () => {
            checkExistClient();
            checkFormCreateNewUser();
        }
        birthdate.onblur = () => {
            checkFormCreateNewUser();
        }
        phone.onblur = () => {
            checkFormCreateNewUser();
        }

        function checkFormCreateNewUser() {
            if (name.value && email.value && cpf.value && birthdate.value && phone.value) {
                buttomSaveClient.removeAttribute('disabled');
            } else {
                buttomSaveClient.setAttribute("disabled", "disabled");
            }
        }


        async function checkExistClient() {
            let url = new URL(`${window.location.origin}/api/v1/verify/client`);
            if (email.value) {
                url.searchParams.append('email', email.value);
            }
            if (cpf.value) {
                let cpfReplace = cpf.value.replace(/[-\.]/g, '');
                url.searchParams.append('cpf', cpfReplace);
            }
            if (email.value || cpf.value) {
                const response = await fetch(url);
                const json = await response.json();
                //se o usuario já existir
                if (json) {
                    $('#ModalPF').modal('hide');
                    setClient(json);
                    getAddressesClient();
                    setPropretsModalNewUser();
                    clearModalCreateNewClient();
                }
            }
        }

        function setPropretsModalNewUser() {
            alertUserExist.classList.remove('hidden');
            dataHeadingUser.classList.remove('sucessPanel');
            dataHeadingUser.classList.add('alertPanel');
            removeAttributeDisabled(btnNext);
        }

        function clearModalCreateNewClient() {
            name.value = "";
            email.value = "";
            cpf.value = "";
            birthdate.value = "";
            phone.value = "";
        }

        //save new client 
        buttomSaveClient.onclick = () => {
            saveCliente();
        }
        async function saveCliente() {
            let body = JSON.stringify({
                name: name.value,
                email: email.value,
                cpf: cpf.value,
                birthdate: birthdate.value,
                phone: phone.value

            });
            const response = await fetch(`${window.location.origin}/api/v1/client/createNewClient`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body
            })
            const json = await response.json();
        }
        //editUser
        btnEditUser.onclick = () => {
            if (btnEditUser.dataset.btnedituser == 0) {
                InputEmailShowUser.removeAttribute('readonly');
                InputCpfShowUser.removeAttribute('readonly');
                btnEditUser.innerText = 'Salvar';
                btnEditUser.classList.remove('btn-warning');
                btnEditUser.classList.add('btn-primary');
                btnEditUser.dataset.btnedituser = 1
            } else {
                editCliente();
            }
        }

        async function editCliente() {
            let body = JSON.stringify({
                id: client_id.value,
                email: InputEmailShowUser.value,
                cpf: InputCpfShowUser.value
            });
            const response = await fetch(`${window.location.origin}/api/v1/client/editClient`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body
            })
            const json = await response.json();
            if (!response.ok) {

            } else {
                sucessEditClient();
                setClient(json);
            }
        }

        function sucessEditClient() {
            InputEmailShowUser.setAttribute('readonly', 'readonly');
            InputCpfShowUser.setAttribute('readonly', 'readonly');
            btnEditUser.innerText = 'Editar';
            btnEditUser.classList.remove('btn-primary')
            btnEditUser.classList.add('btn-warning')
            btnEditUser.dataset.btnedituser = 0
        }

        buttomsServices.forEach(buttom => {
            buttom.onclick = () => {
                switch (+buttom.dataset.buttomtypeservices) {
                    case 1:
                        typeService.value = 1; //faxina comun
                        activateCurrentStepForId(4);
                        break;

                    default:
                        break;
                }
            }
        });

        additionalsButtons.forEach(button => {
            button.onclick = (event) => {
                event.preventDefault();
                if (+button.dataset.additionals) {
                    button.classList.remove('active');
                    button.dataset.additionals = 0;
                    additionals.forEach((item, index) => {
                        if (button.innerText == item) {
                            additionals.splice(index, 1);
                        }
                    });
                } else {
                    button.classList.add('active');
                    button.dataset.additionals = 1;
                    additionals.push(button.innerText);
                }
            }
        });

        buttomsRecurrence.forEach(buttom => {
            buttom.onclick = () => {
                setRecurrence(buttom.dataset.cardrecurrence);
            }
        });

        function setRecurrence(typeRecurrence) {
            recurrence.value = typeRecurrence;
            setColorButtonsRecurrence();
        }

        function setColorButtonsRecurrence() {
            buttomsRecurrence.forEach(buttom => {
                if (recurrence.value == buttom.dataset.cardrecurrence) {
                    buttom.classList.add('bg-primary');
                    buttom.querySelector('i').classList.remove('fa-circle');
                    buttom.querySelector('i').classList.add('fa-check-circle');
                    // activateCurrentStepForId(5);

                } else {
                    buttom.classList.remove('bg-primary');
                    buttom.querySelector('i').classList.add('fa-circle');
                    buttom.querySelector('i').classList.remove('fa-check-circle');
                }
            });
        }
        //subustituir as funçoes são a mesma coiza
        buttonsTypeAddres.forEach(buttom => {
            buttom.onclick = () => {
                setAddres(buttom.dataset.cardtypeaddres);
            }
        });

        function setAddres(typeAddresValue) {
            typeAddres.value = typeAddresValue;
            setColorButtonsTypeAddres();
        }

        function setColorButtonsTypeAddres() {
            buttonsTypeAddres.forEach(buttom => {
                if (typeAddres.value == buttom.dataset.cardtypeaddres) {
                    buttom.classList.add('bg-primary');
                    buttom.querySelector('i').classList.remove('fa-circle');
                    buttom.querySelector('i').classList.add('fa-check-circle');
                    // activateCurrentStepForId(5);

                } else {
                    buttom.classList.remove('bg-primary');
                    buttom.querySelector('i').classList.add('fa-circle');
                    buttom.querySelector('i').classList.remove('fa-check-circle');
                }
            });
        }
        //aquiiiiii kkkkkkk
        buttomsRecurrence.forEach(buttom => {
            buttom.onclick = () => {
                setRecurrence(buttom.dataset.cardrecurrence);
            }
        });

        function setRecurrence(typeRecurrence) {
            recurrence.value = typeRecurrence;
            setColorButtonsRecurrence();
        }

        function setColorButtonsRecurrence() {
            buttomsRecurrence.forEach(buttom => {
                if (recurrence.value == buttom.dataset.cardrecurrence) {
                    buttom.classList.add('bg-primary');
                    buttom.querySelector('i').classList.remove('fa-circle');
                    buttom.querySelector('i').classList.add('fa-check-circle');
                    // activateCurrentStepForId(5);

                } else {
                    buttom.classList.remove('bg-primary');
                    buttom.querySelector('i').classList.add('fa-circle');
                    buttom.querySelector('i').classList.remove('fa-check-circle');
                }
            });
        }





        buttomsSum.forEach(buttom => {
            buttom.onclick = () => {
                const input = document.querySelector(`[name="${buttom.dataset.buttomsum}"]`);
                input.value != 9 && input.value++;
                //chamar função de calcular
                getPriceCleanNewModel();
            }
        });
        buttomsSubtraction.forEach(buttom => {
            buttom.onclick = () => {
                const input = document.querySelector(`[name="${buttom.dataset.buttomsubtraction}"]`);
                input.value != 1 && input.value--;
                //chamar função de calcular
                getPriceCleanNewModel();
            }
        });
        inputHours.onkeyup = () => {
            onkeyUpValueSumAndSubtraction(inputHours.value);
        }
        inputProfessionals.onkeyup = () => {
            onkeyUpValueSumAndSubtraction(inputProfessionals);
        }

        inputHours.onblur = () => {
            onblurValueSumAndSubtraction(inputHours);
        }

        inputProfessionals.onblur = () => {
            onblurValueSumAndSubtraction(inputProfessionals);
        }

        function onblurValueSumAndSubtraction(input) {
            if (input.value < 1) {
                input.value = 1;
            }
        }

        function onkeyUpValueSumAndSubtraction(input) {
            if (input.value > 9) {
                input.value = 9;
            } else if (input.value < 1) {
                input.value = '';
            }
        }

        inputCupom.onclick = () => {

        }


        //rota calcular preço
        async function getPriceCleanNewModel() {
            let body = JSON.stringify({
                source_request: "App",
                service_type_id: typeService.value,
                service_category_id: recurrence.value,
                address_type_id: typeAddres.value, //falta tipo de endereço
                qt_bedrooms: totalBedrooms.value,
                qt_bathrooms: totalBathrooms.value,
                products_included: productsIncluded.value, //falta produtos inclusos
                additionals: additionals.join(','),
                client_address_id: addres_id.value, //trocar pelo endereço selecionado
                salesman_id: client_id.value,
                qt_employees: inputProfessionals.value,
                totalTime: inputHours.value
            });

            const response = await fetch(`https://www.clin.app.br/api/get_price_clean`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body
            });


            if (response.status == 200) {
                const json = await response.json();
                setValuesClien(json);
            }
        }

        function setValuesClien(json) {
            valueClean.value = json.price + '.00';
            inputHours.value = json.totalTime;
            inputProfessionals.value = json.qt_employees;
        }

        //outra
        buttonsPayment.forEach(button => {
            button.onclick = () => {
                containerClickPayment(button);
            }
        });

        function containerClickPayment(button) {
            buttonsPayment.forEach(button => {
                button.classList.remove('checked');
                button.classList.add('unchecked');
            });
            button.classList.remove('unchecked');
            button.classList.add('checked');
            typePayment.value = button.dataset.buttonpayment;
        }

        //create checkin
        async function storeServices() {
            dataPiker = dataTime.value.replaceAll(' ', '');
            newDate = dataPiker.replaceAll('/', '-');

            body = {
                source_request: "App",
                salesman_id: 696969,
                cod_source: 6,
                order_id: 0,
                user_id: client_id.value,
                source: "Agendamento admin",
                services: [{
                    service_category_id: recurrence.value,
                    additionals: additionals.join(',') || 0,
                    client_address_id: addres_id.value,
                    start_time: newDate,
                    value_service: valueClean.value,
                    products_included: productsIncluded.value,
                    service_type_id: typeService.value,
                    total_time: inputHours.value,
                    qt_employees: inputProfessionals.value,
                    subscription_id: 0, // ??
                }, ],
            };

            const response = await fetch(`https://www.clin.app.br/api/storeServices`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    'Authorization': 'Bearer ' + token.value
                },
                body: JSON.stringify(body)
            });
            const json = await response.json();
            orderId = json[0]['order_id'];
        }


        //ativar quando clicar em tipo de pagamento
        async function createServicePayment() {
            body = {
                user_id: client_id.value,
                source_request: "Admin",
                salesman_id: 696969, //vai sair fora
                cod_source: "6", // cron 2// se não é quem esta logado
                order_id: orderId,
                payment_method_id: typePayment.value,
                daysPayment: 2,
                description_payment: `Agendamento realizado para a data de ${dataTime.value}`
            }
            const response = await fetch(`https://www.clin.app.br/api/createServicePayment`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    'Authorization': 'Bearer ' + token.value
                },
                body: JSON.stringify(body)
            })
            const json = await response.json();
            const {
                invoiceUrl,
                identificationField
            } = json;
            console.log(json);
            if (response.status == 200) {
                codeBoleto.value = identificationField;
                linkBoleto.setAttribute('href', `${invoiceUrl}`)
            } else {
                let ErrorMensage = 'Erro ao gerar pagamento'
            }
        }

        buttonCopyLink.onclick = () => {
            copyText();
        }

        function copyText() {
            navigator.clipboard.writeText(codeBoleto.value);
        }


        async function saveAddres() {
            body = {
                zip: cep.value.replace('-', ''),
                street: streetPfInput.value,
                neighborhood: neighbourhoodPfInput.value,
                number: numberAddres.value,
                user_id: client_id.value,
                title_city: cityPfInput.value,
                uf: statePfInput.value,
                source_request: 'Admin',
                salesman_id: 0, //id operador
                cod_source: 4
            }

            const response = await fetch(`${window.location.origin}/api/createAddress`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    'Authorization': 'Bearer ' + token.value
                },
                body: JSON.stringify(body)
            })
            if (response.status != 200) {
                errorsDefault.classList.remove('hidden');
            }
            $('#ModalRegisterAddress').modal('hide');
        }
    </script>







    <script>
        // if there're query params, autoload fields
        // window.onload = () => {

        //     const urlSearchParams = new URLSearchParams(window.location.search);
        //     const params = Object.fromEntries(urlSearchParams.entries());

        //     // document.querySelector('#client_id').click()
        //     //  document.querySelector('#client_id').value = params.client_name ? params.client_name : null
        //     document.querySelector('#total_time').value = params.total_time ? params.total_time : 0
        //     document.querySelector('#qt_employees').value = params.qt_employees ? params.qt_employees : 1
        // }

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
                    $(inputs[i]).datetimepicker({
                        date: moment(""),
                        format: "DD/MM/YYYY HH:mm",
                        sideBySide: true
                    });
                }
            }, 500);
        }
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
                <div class="d-flex justify-content-between titleModal">
                    <h2 class="modal-title" id="exampleModalLabel">Cadastrar novo usuario</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                @include(
                    'admin.agendamento_admin_new.modalCreateNewUser'
                )
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalRegisterAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex justify-content-between titleModal">
                    <h2 class="modal-title" id="exampleModalLabel">Cadastrar novo endereço</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                @include('admin.agendamento_admin_new.modalNewAddress')
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
                <h5 class="modal-title text-center" id="exampleModalLabel">Cadastrar Novo Cliente</h5>
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
<script src="{{ asset('js/buscaCepV2.js') }}"></script>
