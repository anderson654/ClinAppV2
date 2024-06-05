@extends('clinapp.app')

@section('content')
    <div class="container-fluid px-0">
        <div class="container">
            <div class="vh-100">
                <div class="d-flex pt-2 justify-content-between">
                    <button type="button" class="btn btn-link pt-2 fs-1 text-decoration-none align-middle text-dark"><i
                            class="fas fa-arrow-left" onClick="history.go(-1)"></i></button>
                </div>
                <div id="logo">
                    <div class="d-flex mb-4 justify-content-center">
                        <img src="{{ asset('imagens/logo.svg') }}" alt="" style="width: 50%">
                    </div>
                </div>
                <div class="section-card pt-3">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="card br-30 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-center fs-2">Termos de contrato</h5>
                                    {{-- <p class="card-text lh-1">Para continuar pedimos que aceite os termos de
                                        compromisso.
                                    </p> --}}
                                    <div class="form-check">
                                        {{-- <div  style="flex-direction: column; justify-content: space-around"> --}}
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                            style="transform: scale(2.0)">
                                        <label class="form-check-label text-secondary lh-1" for="flexCheckDefault"
                                            style="margin-left: 10%">
                                            Concordo com os termos de contrato do app da CLIN
                                        </label>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-100 p-2 mb-4 position-absolute bottom-0 start-50 translate-middle-x d-flex justify-content-center ">
                    <div class="row w-100">
                        <div class="col-12 p-2">
                            <a href="./register" type="button" style="font-size: 24px"
                                class="btn d-flex rounded-pill w-100 justify-content-center text-uppercase background-color-blue text-white disabled"
                                onclick="firtNextBtn()" id="btnTermsNext">Continuar</a>
                            <input type="text" class="form-control" id="next" value="0" hidden>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/clinapp/termos.js') }}"></script>
@endsection
