@extends('clinapp.app')

@section('content')
    <div class="container-fluid px-0">
        <div class="container">
            <div class="vh-100">
                <div class="d-flex pt-2 justify-content-between">
                    <a href="{{ url('professional_homepage') }}" type="button"
                        class="btn btn-link pt-2 fs-1 text-decoration-none align-middle text-dark"><i
                            class="fas fa-arrow-left"></i></a>
                </div>
                <div id="logo">
                    <div class="d-flex mb-4 justify-content-center">
                        <img src="{{ asset('imagens/logo.svg') }}" alt="" style="width: 70%">
                    </div>
                </div>
                <form action="{{ url('login') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="d-flex overflow-hidden">
                        <div class="page p-2 col-12 sledepage">
                            <div class="container-fluid mb-5 px-2">
                                <p class="btn-font text-center">Bem vindo ao seu login!</p>
                                <p class="subtitulo lh-1"></p>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control rounded-pill border-0 form-input  p-0 px-2"
                                    id="email" name="email" placeholder="email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control rounded-pill border-0 form-input  p-0 px-2"
                                    id="password" name="password" placeholder="senha">
                            </div>
                            <div class="d-flex" style="justify-content: space-between">
                                <div class="remember">
                                    <input type="checkbox" name="remember"> @lang('abrigosoftware.as_remember_me')
                                </div>
                                <a href="{{ route('auth.password.reset') }}" class="pull-right"
                                    style="color: #666; text-decoration: none">@lang('abrigosoftware.as_forgot_password')</a>
                            </div>
                        </div>
                    </div>
                    {{-- <a class="position-absolute text-center"
                        href="{{ route('auth.password.reset') }}">@lang('abrigosoftware.as_forgot_password')</a><br> --}}
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Não foi possível continuar:
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{-- <br> --}}
                    <div
                        class="w-100 position-absolute bottom-0 start-50 translate-middle-x d-flex justify-content-center ">
                        <div class="row w-100" id="btns-next">
                            <div class="col-12 p-2">
                                <button id="step-1" type="submit"
                                    class="btn  d-flex rounded-pill w-100 justify-content-center text-uppercase fs-5 background-color-blue text-white">Entrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
