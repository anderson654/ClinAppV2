@extends('clinapp.app')
@section('content')
    <script src="{{ asset('js/clinapp/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/clinapp/masks.js') }}"></script>
    <div class="container-fluid px-0">
        <div class="container">
            <div class="min-vh-100">
                <div class="d-flex pt-2 justify-content-between">
                    <button type="button" class="btn btn-link pt-2 fs-1 text-decoration-none align-middle text-dark"><i
                            class="fas fa-arrow-left" onClick="history.go(-1)"></i></button>
                </div>
                <div id="logo">
                    <div class="d-flex mb-4 justify-content-center">
                        <img src="{{ asset('imagens/logo.svg') }}" alt="" style="width: 50%">
                    </div>
                </div>
                <form action="{{ url('professional_homepage/register') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="d-flex overflow-hidden">
                        <div class="page p-2 col-12 sledepage">
                            <div class="container-fluid mb-5 px-2">
                                <p class="btn-font">Prazer,qual o seu nome ?</p>
                                <p class="subtitulo lh-1">Para identificação, é fundamental que você digite seu
                                    nome exatamente
                                    como está
                                    escrito nos seus documentos.</p>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control rounded-pill border-0 form-input  p-0 px-2" id="name"
                                    name="name" placeholder="Nome" autocomplete="off">
                            </div>
                        </div>

                        <div class="page p-2 col-12 ">
                            <div class="container-fluid mb-5 px-2">
                                <p class="btn-font">Muito bem! agora precisamos do nº do seu cpf (somente números).
                                </p>
                                <p class="subtitulo lh-1">Esse dado é importante para que sua conta seja única e
                                    especial</p>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control rounded-pill border-0 form-input p-0 px-2 cpf"
                                    id="cpf" name="cpf" placeholder="CPF" autocomplete="off"><br>
                                <p id="blockCpf" class="text-center"
                                    style="color: #721c24; background-color: #f8d7da; border-color: #f5c6cb" hidden>Já
                                    existe um usuário com este nº
                                    de CPF!</p>
                            </div>
                        </div>

                        <div class="page p-2 col-12">
                            <div class="container-fluid mb-5 px-2">
                                <p class="btn-font">Qual o número do seu celular?.</p>
                                <p class="subtitulo lh-1">Insira um número com DDD (2 dígitos) + 9 dígitos.</p>
                            </div>
                            <div class="mb-3">
                                <input type="text"
                                    class="form-control rounded-pill border-0 form-input p-0 px-2 phone_with_ddd" id="phone"
                                    name="phone" placeholder="Número do celular" autocomplete="off">
                            </div>
                        </div>

                        <div class="page p-2 col-12">
                            <div class="container-fluid mb-5 px-2">
                                <p class="btn-font">Agora digite seu e-mail.</p>
                                <p class="subtitulo lh-1">Preciso dele para a gente se comunicar e também para
                                    recuperar seus dados cadastrais,se necessário.</p>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control rounded-pill border-0 form-input p-0 px-2"
                                    id="email" name="email" placeholder="E-mail" autocomplete="off"><br>
                                <p id="blockEmail" class="text-center"
                                    style="color: #721c24; background-color: #f8d7da; border-color: #f5c6cb" hidden>Já
                                    existe um usuário com este e-mail</p>
                            </div>

                        </div>

                        <div class="page p-2 col-12">
                            <div class="container-fluid mb-5 px-2">
                                <p class="btn-font">Só falta criar sua senha.</p>
                                <p class="subtitulo lh-1">É muito importante que nunca compartilhe sua senha!.</p>
                                <p class="subtitulo lh-1">Sua senha deve conter no mínimo seis caractéres, letras e números
                                </p>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control rounded-pill border-0 form-input p-0 px-2"
                                    id="password" name="password" placeholder="Senha" autocomplete="off">
                            </div>
                            <p class="text-center">mostrar senha <i class="fas fa-eye-slash"></i></p>
                        </div>

                        <div
                            class="w-100 position-absolute bottom-0 start-50 translate-middle-x d-flex justify-content-center ">
                            <div class="row w-100" id="btns-next">
                                <div class="col-12 p-2">
                                    <button id="step-1" type="button"
                                        class="btn  d-flex rounded-pill w-100 justify-content-center text-uppercase fs-5 background-color-blue text-white"
                                        onclick="firtNextBtn()" disabled>Proximo</button>
                                    <button id="step-2" type="button"
                                        class="btn  d-flex rounded-pill w-100 justify-content-center text-uppercase fs-5 background-color-blue text-white d-none"
                                        onclick="firtNextBtn()" disabled>Proximo</button>
                                    <button id="step-3" type="button"
                                        class="btn  d-flex rounded-pill w-100 justify-content-center text-uppercase fs-5 background-color-blue text-white d-none"
                                        onclick="firtNextBtn()" disabled>Proximo</button>
                                    <button id="step-4" type="button"
                                        class="btn  d-flex rounded-pill w-100 justify-content-center text-uppercase fs-5 background-color-blue text-white d-none"
                                        onclick="firtNextBtn()" disabled>Proximo</button>
                                    <button id="step-5" type="submit"
                                        class="btn  d-flex rounded-pill w-100 justify-content-center text-uppercase fs-5 background-color-blue text-white d-none"
                                        disabled>Proximo</button>

                                    <input type="text" class="form-control" id="next" value="0" hidden>
                                </div>

                                <div class="col-12 p-2">
                                    <button type="button" id="comback-1"
                                        class="btn  d-flex rounded-pill w-100 justify-content-center text-uppercase d-none fs-5 background-color-blue text-white"
                                        onclick="ComeBack()">voltar</button>
                                    <input type="text" class="form-control" id="comeback" value="0" hidden="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/clinapp/javaScripts.js') }}"></script>
@endsection
