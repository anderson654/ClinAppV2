@extends('clinapp.app')

@section('content')
    <div class="container-flui px-0 min-vh-100 position-relative">
        {{-- <div class="blur background-svg position-absolute vh-100 w-100">
            <img class="w-100 h-100" src="{{ asset('imagens/limpeza.gif') }}"
                style="transform: translate(-1.42474) scale(0.00601481 0.00277778)">
        </div> --}}
        <div class="waves vh-100">
            <div class="wave-top position-relative">
                <img class="position-absolute top-0 start-50 translate-middle-x w-100"
                    src="{{ asset('imagens/wave_top.svg') }}" alt="">
            </div>
            <div class="wave-center">
                <div class="wave-title">
                    <div class="container pt-5">
                        <div class="mb-1">
                            <img style="width: 262px;" src="{{ asset('imagens/logo.svg') }}" alt="">
                        </div>
                        <div class="ps-4 lh-base space" style="font-size: 32px">
                            <p>Por uma rotina <br> limpa e <br> feliz</p>
                        </div>
                    </div>
                </div>
                <div class="wave-btn d-flex align-items-end pb-5">
                    <div class="container ">
                        <div class="col-12 p-2">
                            <a href="{{ route('termos') }}" type="button" style="font-size: 24px"
                                class="btn  d-flex rounded-pill w-100 justify-content-center background-color-blue text-white">
                                Cadastre-se</a>
                            <input type="text" class="form-control" id="next" value="0" hidden>
                        </div>
                        <div class="col-12 p-2">
                            <a href="{{ route('professional_homepage.login') }}" type="button"
                                style="background-color: rgba(221,221,221,0.4); font-size: 24px"
                                class="btn  d-flex rounded-pill w-100 justify-content-center text-black"
                                onclick="firtNextBtn()">Login</a>
                            <input type="text" class="form-control" id="next" value="0" hidden>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wave-bootom position-relative">
                <img class="position-absolute bottom-0 start-50 translate-middle-x w-100"
                    src="{{ asset('imagens/wave_bottom.svg') }}" alt="">
            </div>
        </div>
    </div>
    </div>
@endsection
