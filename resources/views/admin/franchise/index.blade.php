@extends('layouts.app')

<style>
    .container-juno {
        width: 100%;
        height: calc(100vh);
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
    {{-- @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif --}}

    <div class="container-fluid container-juno allow-pointer-lock allow-scripts">
        <h2>Adicionar informaçoes de franquia</h2>
        <div class="container-content">
            <form method="POST" action={{ route('admin.franchise.create') }}>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nome da franquia</label>
                    <input type="name" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                        placeholder="Coloque um nome para a nova franquia" required>
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
                    <label for="user">User Id</label>
                    <input type="name" class="form-control" id="user" name="user"
                        placeholder="A qual usuario pertence a nova franquia?" required>
                </div>

                <div class="form-group">
                    <label for="clientIdJuno">ClientId Juno</label>
                    <input type="name" class="form-control" id="clientIdJuno" name="clientIdJuno"
                        placeholder="A qual usuario pertence a nova franquia?" required>
                    <i class="fas fa-question-circle icon" aria-hidden="true" onclick="openModal(0)"></i>
                </div>

                <div class=" form-group">
                    <label for="clientSecretJuno">Client secret Juno</label>
                    <input type="name" class="form-control" id="clientSecretJuno" placeholder="Client secret juno?"
                        name="clientSecretJuno" required>
                    <i class="fas fa-question-circle icon" aria-hidden="true" onclick="openModal(1)"></i>
                </div>

                <div class=" form-group">
                    <label for="clientTokenPrivadoJuno">Token privado Juno</label>
                    <input type="name" class="form-control" id="clientTokenPrivadoJuno" name="clientTokenPrivadoJuno"
                        placeholder="Token privado juno?" required>
                    <i class="fas fa-question-circle icon" id="datamodal" aria-hidden="true" onclick="openModal(2)"></i>
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
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection

<script>
    const arrayTeste = [
        [
            "{{ asset('imagens/ClientId.jpg') }}",
            "Girl in a jacket"
        ],
        [
            "{{ asset('imagens/secret.jpg') }}",
            "Girl in a jacket"
        ],
        [
            "{{ asset('imagens/tokenPrivado.jpg') }}",
            "Girl in a jacket"
        ],
    ]

    function openModal(imageIndex) {
        var element = document.getElementById("exampleModalCenter");
        element.classList.remove("fade");
        element.classList.add("show");

        const containerImage = document.querySelector(".modal-body");

        const image = document.createElement("img");
        image.setAttribute("src", arrayTeste[imageIndex][0]);
        image.setAttribute("alt", arrayTeste[imageIndex][1]);
        image.setAttribute("width", "100%");
        image.setAttribute("heigth", 600);
        containerImage.appendChild(image);

    }

    function closeModal() {
        var element = document.getElementById("exampleModalCenter");
        element.classList.remove("show");
        element.classList.add("fade");

        const containerImage = document.querySelector(".modal-body");
        containerImage.removeChild(containerImage.firstElementChild);

    }
</script>
