@extends('layouts.app')

<style>
    .container-juno {
        width: 100%;
        min-height: calc(100vh);
    }

    .content {
        padding: 0 !important;
    }

    .container-content {
        background: #fff;
        width: 100%;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
        border-radius: 9px;
        margin-top: 40px;
        padding: 20px;
    }

    .form {
        padding: 20px;
        box-sizing: border-box;
        margin: 0;
    }

    .icon {
        position: absolute;
        top: 0;
        right: 0px;
    }

    .form-group {
        position: relative;
    }

    h3 {
        margin-bottom: 20px !important;
    }

    .container-buttom {
        margin-top: 30px;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }

</style>
{{-- descomentar partials head caso de algo errado --}}
@section('content')
    <div class="container-fluid container-juno allow-pointer-lock allow-scripts">
        <h2>Registrar franquiado</h2>
        <div class="container-content">
            <form method="POST" action={{ route('admin.franchise.create') }}>
                {{ csrf_field() }}
                <h3>Dados pessoais</h3>
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="name" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                        placeholder="Nome do titular" required>
                    {{-- <small id="emailHelp" class="form-text text-muted">trave.</small> --}}
                </div>

                {{-- <label for="user">User</label> --}}
                {{-- <select class="form-control" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select> --}}
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="name" class="form-control phone_pf" id="telefone" name="telefone"
                        placeholder="(xx)9xxxx-xxxx" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="EX: clin@clin.com.be"
                        required>
                    {{-- <i class="fas fa-question-circle icon" aria-hidden="true" onclick="openModal(0)"></i> --}}
                </div>

                <div class=" form-group">
                    <label for="CPF">CPF</label>
                    <input type="name" class="form-control cpf" id="CPF" placeholder="EX: 000.000.000-00" name="CPF"
                        maxlength="14" required>
                    {{-- <i class="fas fa-question-circle icon" aria-hidden="true" onclick="openModal(1)"></i> --}}
                </div>

                <div class=" form-group">
                    <label for="nomemae">Nome da mãe</label>
                    <input type="name" class="form-control" id="nomemae" name="nomemae"
                        placeholder="EX: Rosalina Salvador" required>
                    {{-- <i class="fas fa-question-circle icon" id="datamodal" aria-hidden="true" onclick="openModal(2)"></i> --}}
                </div>

                <h3>Endereço</h3>
                <div class=" form-group">
                    <label for="cep">CEP</label>
                    <input type="name" class="form-control zip" id="cep" name="cep" placeholder="EX: 00.000-000" required>
                    {{-- <i class="fas fa-question-circle icon" id="datamodal" aria-hidden="true" onclick="openModal(2)"></i> --}}
                </div>

                <div class=" form-group">
                    <label for="logradouro">Rua</label>
                    <input type="name" class="form-control" id="logradouro" placeholder="EX: Avenida Canadá"
                        name="logradouro" readonly required>
                    {{-- <i class="fas fa-question-circle icon" aria-hidden="true" onclick="openModal(1)"></i> --}}
                </div>

                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="name" class="form-control" id="bairro" placeholder="EX: Avenida Canadá" name="bairro"
                        readonly required>
                    {{-- <i class="fas fa-question-circle icon" aria-hidden="true" onclick="openModal(1)"></i> --}}
                </div>

                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="name" class="form-control" id="cidade" placeholder="EX: Campo largo" name="cidade"
                        readonly required>
                    {{-- <i class="fas fa-question-circle icon" aria-hidden="true" onclick="openModal(1)"></i> --}}
                </div>

                <div class="form-group">
                    <label for="uf">Cigla</label>
                    <input type="name" class="form-control" id="uf" placeholder="EX: PR" name="uf" readonly required>
                    {{-- <i class="fas fa-question-circle icon" aria-hidden="true" onclick="openModal(1)"></i> --}}
                </div>

                <h3>Dados da empresa</h3>

                <div class=" form-group">
                    <label for="CNPJ">CNPJ</label>
                    <input type="name" class="form-control cnpj" id="CNPJ" name="CNPJ" placeholder="EX: 00.000.000/0000-00"
                        required>
                    {{-- <i class="fas fa-question-circle icon" id="datamodal" aria-hidden="true" onclick="openModal(2)"></i> --}}
                </div>

                <div class="form-group">
                    <label for="razaosocial">Razão social</label>
                    <input type="name" class="form-control" id="razaosocial" name="razaosocial"
                        placeholder="EX: CLINHOUSEEXPRESS" required>
                    {{-- <i class="fas fa-question-circle icon" id="datamodal" aria-hidden="true" onclick="openModal(2)"></i> --}}
                </div>

                <div class=" form-group">
                    <label for="nomefranquia">Nome franquia</label>
                    <input type="name" class="form-control" id="nomefranquia" name="nomefranquia" placeholder="EX: CLIN"
                        required>
                    {{-- <i class="fas fa-question-circle icon" id="datamodal" aria-hidden="true" onclick="openModal(2)"></i> --}}
                </div>

                <div class=" form-group">
                    <label for="cnae">CNAE</label>
                    <input type="name" class="form-control" id="cnae" name="cnae" placeholder="EX: 0000-0/00" required>
                    {{-- <i class="fas fa-question-circle icon" id="datamodal" aria-hidden="true" onclick="openModal(2)"></i> --}}
                </div>

                <div class=" form-group">
                    <label for="dataaberturaempresa">Data de abertura da empresa</label>
                    <input type="name" class="form-control" id="dataaberturaempresa" name="dataaberturaempresa"
                        placeholder="EX: 00/00/0000" required>
                    {{-- <i class="fas fa-question-circle icon" id="datamodal" aria-hidden="true" onclick="openModal(2)"></i> --}}
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    onclick="closeModal()">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{-- <img src="{{ asset('imagens/Api.jpg') }}" alt="Girl in a jacket" width="500" height="600"> --}}
                                {{-- image modal --}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                    onclick="closeModal()">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <div class="container-buttom">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

<script>
    window.onload = function() {
        let cep = document.querySelector('#cep');
        cep.addEventListener('keyup', ({
            target
        }) => {
            let cep = target.value.replaceAll(/[.\-]/g, "");
            cep.length == 8 && getCep(cep);
        })

        async function getCep(cep) {
            const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
            const json = await response.json();
            console.log(json);
            document.querySelector('#logradouro').value = json.logradouro;
            document.querySelector('#bairro').value = json.bairro;
            document.querySelector('#cidade').value = json.localidade;
            document.querySelector('#uf').value = json.uf;
        }
    }
</script>
