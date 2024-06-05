{{-- @php
    dd($payment);
@endphp --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/studioDetail/style.css') }}">
    <style>
        .section1 {
            display: none !important;
        }

        .transparent {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(2px);
        }

        .section1-mobile {
            display: block !important;
        }

        .container-person-mobile {
            display: block !important
        }

        .description-payment {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .description-payment.hidden {
            -webkit-line-clamp: 3;
            max-height: 4.4em;
        }

        .ver-mais {
            cursor: pointer;
        }

        textarea:focus {
            outline: none;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Clin cobrança</title>
</head>

<body>

    {{-- <header>
            <h1>Meu Site</h1>
        </header> --}}
    <div class="position-fixed vw-100">

        <nav class="navbar navbar-expand-lg navbar-light py-4 nav-background-custom transparent" id="navbar">
            <div class="container">
                <!-- Aqui você pode adicionar o código para a barra de navegação -->
                <a class="navbar-brand" href="#" style="padding: 0px">
                    <img src="{{ asset('imagens/studioDetail/LogoClin.png') }}" alt="Imagem" id="logo-clin">
                    <!-- Aqui você pode adicionar o código para a logo -->
                    {{-- Logo --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav pt-2 pt-md-0">
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#">Clin Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#">Higienizazção</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#">Clin Pro</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <div>
                                <a class="nav-link nav-link-custom px-md-4" href="#">Baixar App</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div>
                                <a class="nav-link nav-link-custom px-md-4 mx-md-4 nav-link-btn-background-custom px-2"
                                    href="#">SEJA FRANQUEADO</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    </div>
    <div class="container-custom">
        <section class="container position-relative px-0 section1">
            <div class="row h-100 px-0 carrocelHeader container-person-web" style="background: #F3F9FF;">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="row w-100 h-100">
                            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center"
                                style="padding-top: 6.25rem;">
                                <div class="px-md-6">
                                    <h6 class="card-subtitle py-md-3" style="color: #66AFFF;"><i class="feather"
                                            data-feather="check-circle"></i>4 anos
                                        no mercado
                                        de limpeza</h6>
                                    <h1 class="card-title title-custom mb-2 py-md-3">Limpeza,tecnologia,<br>cuidado e
                                        propósito.
                                    </h1>
                                    <p class="card-text py-md-3">Some quick example text to build on the card title and
                                        make up the
                                        bulk
                                        of the card's content.</p>
                                    <div style="display: flex">
                                        <div class="btn-type-one">
                                            <a href="#" class="card-link fs-6p p-2">SAIBA MAIS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- esse vai sumir --}}
                            <div class="col-md-6 position-relative"
                                style="background:rgba(102, 175, 255, 0.9);mix-blend-mode: normal;
                border-radius: 0px 0px 0px 350px;padding-top: 6.25rem;overflow: hidden;">
                                <div class="d-flex card-gear p-md-4">
                                    <div class="pe-md-4">
                                        <img src="{{ asset('imagens/studioDetail/Gear.png') }}" alt="Imagem">
                                    </div>
                                    <div>
                                        <p class="fs-5 fw-semibold m-0">Melhores</p>
                                        <p class="fs-6 fw-semibold m-0">Trabalhadores</p>
                                    </div>
                                </div>
                                <div class="image-container">
                                    <img src="{{ asset('imagens/studioDetail/Person.png') }}" alt="Imagem">
                                </div>
                                <div class="card-icon">
                                    <img src="{{ asset('imagens/studioDetail/Vector.png') }}" alt="Imagem">
                                </div>
                            </div>

                            {{-- <h1>Hello</h1> --}}
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="w-100 h-100"
                            style="background-image: url('{{ asset('imagens/studioDetail/Home2.png') }}');">
                            <div class="row h-100" style="padding-top: 6.25rem;">
                                <div class="col-md-4 p-0">

                                </div>
                                <div class="col-md-8 h-100 p-0">
                                    <div class="d-flex flex-column-reverse h-100 position-relative"
                                        style="background-image: url('{{ asset('imagens/studioDetail/Balom.png') }}');background-size: 95% 33.921rem; background-repeat: no-repeat; background-position: bottom; width: 100%; height: 100%;object-fit: contain;">
                                        <div class="w-100 d-flex justify-content-center" style="height: 20.921rem;">
                                            <div class="d-flex flex-row-reverse w-100 pe-5">
                                                <div class="px-5 w-75" style="text-align: right">
                                                    <h2 class="h1">Higienização</h2>
                                                    <p class="fw-normal fs-6 my-md-3">Não deixe manchas e odores
                                                        desagradáveis
                                                        arruinar seu sofá ou tapete. Com nosso serviço de higienização
                                                        profissional, podemos garantir que seu ambiente esteja livre de
                                                        germes e sujeiras. Agende sua limpeza hoje mesmo!</p>
                                                    <div class="d-flex flex-row-reverse">
                                                        <div class="btn-type-one">
                                                            <a href="#" class="card-link fs-6p p-2">AGENDAR
                                                                HIGIENIZAÇÃO</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="star-0" src="{{ asset('imagens/studioDetail/Star.png') }}"
                                            alt="Star">
                                        <img class="star-1" src="{{ asset('imagens/studioDetail/Star.png') }}"
                                            alt="Star">
                                        <img class="star-2" src="{{ asset('imagens/studioDetail/Star.png') }}"
                                            alt="Star">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="section1-mobile container px-0">
            <div class="d-flex flex-column w-100 h-100 container-person-mobile" style="background: #F3F9FF;">
                <div class="w-100 container-blue-mobile position-relative"
                    style="height: 374px;background: #66AFFF;padding-top: 6.25rem;">
                    <div class="image-container-mobile">
                        <img src="{{ asset('imagens/studioDetail/Person.png') }}" alt="Imagem">
                    </div>
                    <div class="card-icon-mobile">
                        <img src="{{ asset('imagens/studioDetail/Vector.png') }}" alt="Imagem">
                    </div>
                </div>
                <div class="w-100 container-blue-mobile position-relative p-4">
                    <h5 class="card-subtitle py-md-3 mb-2" style="text-align: center"><i class="feather"
                            style="color: #66AFFF; margin-right: 5px" data-feather="check-circle"></i>Por uma rotina
                        limpa e feliz</h5>
                    <h5 class="card-subtitle py-md-3 mb-3 " style="text-align: center;font-weight: 800">Link de
                        Pagamento</h5>
                    <div class="d-flex flex-row py-md-3">
                        @php
                            $statusPaymentTitle = 'Pagamento deletado.';
                            $statusPaymentColor = '#b7b7b7';

                            if (!$payment['deleted']) {
                                switch ($payment['status']) {
                                    case 'PENDING':
                                        # code...
                                        $statusPaymentTitle = 'Aguardando pagamento';
                                        $statusPaymentColor = '#FFC82C';
                                        break;
                                    case 'RECEIVED':
                                        # code...
                                        $statusPaymentTitle = 'Recebida';
                                        $statusPaymentColor = 'green';
                                        break;
                                    case 'CONFIRMED':
                                        # code...
                                        $statusPaymentTitle = 'Pagamento confirmado';
                                        $statusPaymentColor = 'green';
                                        break;
                                    case 'OVERDUE':
                                        # code...
                                        $statusPaymentTitle = 'Vencida';
                                        $statusPaymentColor = 'red';
                                        break;
                                    case 'REFUNDED':
                                        # code...
                                        $statusPaymentTitle = 'Estornada';
                                        $statusPaymentColor = 'red';
                                        break;
                                    case 'RECEIVED_IN_CASH':
                                        # code...
                                        $statusPaymentTitle = 'Recebida em dinheiro';
                                        $statusPaymentColor = 'green';
                                        break;
                                    case 'REFUND_REQUESTED':
                                        # code...
                                        $statusPaymentTitle = 'Estorno Solicitado';
                                        $statusPaymentColor = 'red';
                                        break;
                                    case 'REFUND_IN_PROGRESS':
                                        # code...
                                        $statusPaymentTitle =
                                            'Estorno em processamento (liquidação já está agendada, cobrança será estornada após executar a liquidação)';
                                        $statusPaymentColor = 'red';
                                        break;
                                    case 'CHARGEBACK_REQUESTED':
                                        # code...
                                        $statusPaymentTitle = 'Recebido chargeback';
                                        $statusPaymentColor = 'green';
                                        break;
                                    case 'CHARGEBACK_DISPUTE':
                                        # code...
                                        $statusPaymentTitle = 'Em disputa de chargeback';
                                        $statusPaymentColor = 'red';
                                        break;
                                    case 'AWAITING_CHARGEBACK_REVERSAL':
                                        # code...
                                        $statusPaymentTitle = 'Disputa vencida, aguardando repasse da adquirente';
                                        $statusPaymentColor = 'red';
                                        break;
                                    case 'DUNNING_REQUESTED':
                                        # code...
                                        $statusPaymentTitle = 'Em processo de negativação';
                                        $statusPaymentColor = 'red';
                                        break;
                                    case 'DUNNING_RECEIVED':
                                        # code...
                                        $statusPaymentTitle = 'Recuperada';
                                        $statusPaymentColor = '#FFC82C';
                                        break;
                                    case 'AWAITING_RISK_ANALYSIS':
                                        # code...
                                        $statusPaymentTitle = 'Pagamento em análise';
                                        $statusPaymentColor = '#FFC82C';
                                        break;
                                    default:
                                        $statusPaymentTitle = 'Aguardando pagamento';
                                        $statusPaymentColor = '#FFC82C';
                                        # code...
                                        break;
                                }
                            }

                        @endphp
                        <div class="me-1"
                            style="width: 20px;height: 20px;border-radius: 10px;background: {{ $statusPaymentColor }}">
                        </div>
                        <h6 class="card-subtitle mb-3" style="font-weight: 100">{{ $statusPaymentTitle }}</h6>
                    </div>
                    <h5 class="card-subtitle py-md-3 mb-3" style="font-weight: 100">ID da ORDER: <span
                            style="font-weight: bold">{{ $orderId }}</span></h5>

                    <div class="d-flex flex-row row">
                        <div class="col-6">
                            <h6 class="card-subtitle py-md-3 mb-2" style="font-weight: 100">Valor</h6>
                            <h5 class="card-subtitle py-md-3 mb-3" style="font-weight: 700;color: #66AFFF">R$
                                @php
                                    echo number_format((float) $payment['value'], 2, ',', '.');
                                @endphp
                            </h5>
                        </div>
                        <div class="col-6">
                            <h6 class="card-subtitle py-md-3 mb-2" style="font-weight: 100">Data de vencimento</h6>
                            <h5 class="card-subtitle py-md-3 mb-3" style="font-weight: 700;color: #66AFFF">
                                @php
                                    $data = new DateTime($payment['dueDate']);
                                    $dataFormatada = $data->format('d/m/Y');
                                    echo $dataFormatada;
                                @endphp
                                {{-- 22/07/2023 --}}
                            </h5>
                        </div>
                    </div>
                    <h5 class="card-subtitle py-md-3 mb-2" style="font-weight: 100">Descrição do serviço</h5>

                    <div class="mb-4">
                        <h5 class="card-subtitle py-md-3 mb-1 description-payment hidden" style="font-weight: bold">
                            @php
                                echo nl2br($payment['description']);
                            @endphp
                        </h5>
                        <h6 class="ver-mais" style="font-size: 14px;color: #66AFFF">ver mais ...</h6>
                    </div>

                    <h5 class="card-subtitle py-md-3 mb-1" style="font-weight: 100">Cliente:</h5>
                    <h5 class="card-subtitle py-md-3 mb-3" style="font-weight: bold">{{ $customer['name'] ?? '' }}
                    </h5>
                    <h5 class="card-subtitle py-md-3 mb-1" style="font-weight: 100">E-mail:</h5>
                    <h5 class="card-subtitle py-md-3 mb-3" style="font-weight: bold">{{ $customer['email'] ?? '' }}
                    </h5>


                    @if ($payment['deleted'] != true)
                        @if ($payment['status'] === 'PENDING')
                            <h5 class="card-subtitle py-md-3 mb-1" style="font-weight: 100">Formas de pagamento:</h5>
                            <div class="d-flex flex-row row">
                                @if (in_array($payment['billingType'], ['PIX', 'UNDEFINED']))
                                    <div class="col-6">
                                        <label class="d-flex flex-row">
                                            <input type="radio" name="typePayment" value="PIX" class="me-1"
                                                checked>
                                            <span class="card-subtitle py-md-3 h5"
                                                style="font-weight: bold">PIX</span>
                                        </label>
                                    </div>
                                @endif

                                @if (in_array($payment['billingType'], ['CREDIT_CARD', 'UNDEFINED']))
                                    <div class="col-6">
                                        <label class="d-flex flex-row">
                                            <input type="radio" name="typePayment" value="CARD" class="me-1"
                                                @if ($payment['billingType'] === 'CREDIT_CARD') checked @endif>
                                            <span class="card-subtitle py-md-3 h5" style="font-weight: bold">Cartão de
                                                crédito</span>
                                        </label>
                                    </div>
                                @endif
                            </div>

                            {{-- //div Pix --}}
                            @if (in_array($payment['billingType'], ['PIX', 'UNDEFINED']))
                                <div data-type-payment='PIX' class="mt-5">
                                    <div class="d-flex flex-row justify-content-center">
                                        <img src="{{ 'data:image/png;base64,' . $qrCode['encodedImage'] }}"
                                            alt="Imagem">
                                    </div>

                                    <div class="d-flex flex-row justify-content-between">
                                        <h5 class="card-subtitle py-md-3 mb-2" style="font-weight: bold;">Código</h5>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button class="card-subtitle p-1 px-2"
                                                style="font-weight: bold;font-size: 14px;background: #13CE66;border-radius: 20px;border: none"
                                                onclick="copiarTexto()">Copiar
                                                código</button>
                                        </div>
                                    </div>
                                    <div class="">
                                        <textarea class="card-subtitle p-1 px-2 mb-2"
                                            style="font-weight: 100;font-size: 14px;border-radius: 20px;word-break: break-all;width: 100%;resize: none;border: none;background: transparent"
                                            rows="5" id="textQrCode" readonly>{{ $qrCode['payload'] }}</textarea>
                                    </div>
                                </div>
                            @endif
                            @if (in_array($payment['billingType'], ['BOLETO']))
                                <div data-type-payment='BOLETO' class="mt-5">
                                    <div class="d-flex flex-row justify-content-between">
                                        <h5 class="card-subtitle py-md-3 mb-2" style="font-weight: bold;">Código do boleto</h5>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <button class="card-subtitle p-1 px-2"
                                                style="font-weight: bold;font-size: 14px;background: #13CE66;border-radius: 20px;border: none"
                                                onclick="copiarTexto()">Copiar
                                                código</button>
                                        </div>
                                    </div>
                                    <div class="">
                                        <textarea class="card-subtitle p-1 px-2 mb-2"
                                            style="font-weight: 100;font-size: 14px;border-radius: 20px;word-break: break-all;width: 100%;resize: none;border: none;background: transparent"
                                            rows="5" id="textQrCode" readonly>{{ $payment['identificationField'] }}</textarea>
                                    </div>
                                </div>
                            @endif
                            {{-- //fim div pix --}}

                            {{-- div credit card --}}
                            <div data-type-payment='CARD'
                                style="display: {{ $payment['billingType'] == 'CREDIT_CARD' ? 'block' : 'none' }}"
                                class="my-4">
                                <form id="creditCardForm">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="mb-3">
                                        <label for="creditCardHolderName" class="form-label">Nome do Titular:</label>
                                        <input type="text" class="form-control" id="creditCardHolderName"
                                            name="creditCardHolderName" required>
                                        <div class="form-text">Informe o nome exatamente como está no cartão.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="creditCardNumber" class="form-label">Número do Cartão:</label>
                                        <div style="position: relative;">
                                            <input type="text" class="form-control number_card"
                                                id="creditCardNumber" name="creditCardNumber" required>
                                            <div class="py-1 px-2"
                                                style="position: absolute;right: 0;top:0;height: 100%;">
                                                <img id="image-credit-card"
                                                    src="https://clin.app.br/imagens/cards/cardnone.png"
                                                    height="100%" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="creditCardExpiryMonth" class="form-label">Mês:</label>
                                            <input type="text" class="form-control month"
                                                id="creditCardExpiryMonth" name="creditCardExpiryMonth"
                                                placeholder="MM" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="creditCardExpiryYear" class="form-label">Ano:</label>
                                            <input type="text" class="form-control year" id="creditCardExpiryYear"
                                                name="creditCardExpiryYear" placeholder="AA" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="cpfOrCnpf" class="form-label">CPF ou CNPJ:</label>
                                            <input type="text" class="form-control cpfCnpjInput" id="cpfOrCnpf"
                                                name="cpfOrCnpf" placeholder="CPF ou CNPJ do titular do cartão"
                                                required>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <label for="creditCardCcv" class="form-label">Código de segurança:</label>
                                            <input type="text" class="form-control CVV" id="creditCardCcv"
                                                name="creditCardCcv" placeholder="código de segurança" required>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">
                                        <span class="spinner-border spinner-border-sm spiner" role="status"
                                            aria-hidden="true" style="display: none"></span>
                                        COMFIRMAR
                                    </button>
                                </form>
                            </div>
                            {{-- fim div credit card --}}
                        @endif

                        @if (isset($payment['transactionReceiptUrl']))
                            <a href="{{ $payment['transactionReceiptUrl'] }}" target="_blank">
                                <button type="submit" class="btn btn-primary">
                                    VER COMPROVANTE
                                </button>
                            </a>
                        @endif
                    @endif


                </div>

            </div>
        </section>




        <section class="section2 container p-3" style="background: #13CE66">
            <h5 class="card-subtitle py-md-3 mb-0" style="font-weight: 100">Esta Cobrança é de responsabilidade unica
                e exclusiva de <span style="font-weight: bold">Clean House Express-tecnologia LTDA</span></h5>
            <h5 class="card-subtitle py-md-3 mb-3" style="font-weight: 100">CNPJ:<span
                    style="font-weight: bold">31.720.371/0001-71</span></h5>
            <h6 class="card-subtitle py-md-3 mb-3" style="font-weight: 100">
                https://www.clin.com.br/<br>Financeiro@clin.com.br (41)<br>30241859 R. Imac. Conceição, 1430 - Prado
                Velho Curitiba - PR, 80215-182</h6>
            <span class="d-flex flex-row w-100 mb-3" style="background: #7E55F3;height: 2px;"></span>
            <h6 class="card-subtitle py-md-3 mb-3" style="font-weight: 100">Esta cobrança é intermediada por
                https://www.asaas.com<br><br>ASAAS GESTÃO FINANCEIRA INSTITUIÇÃO DE PAGAMENTO S/A, pessoa jurídica de
                direito privado, inscrita no CNPJ sob o n. 19.540.550/0001-21</h6>
        </section>

    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/mask.js') }}"></script>
    <script src="{{ asset('js/jquery.creditCardValidator.js') }}"></script>
    <script>
        $(document).ready(function() {
            //jquery
            $('.navbar-toggler').click(function() {
                $('.navbar-nav').toggleClass('show');
            });
            //
            feather.replace();
            //
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                // loop: true,

                slidesPerView: 1.3,
                spaceBetween: 0,
                centeredSlides: true,

                // If we need pagination
                // pagination: {
                //     el: '.swiper-pagination',
                // },
                // Opções responsivas
                breakpoints: {
                    // Quando a largura da tela for igual ou maior que 576px
                    576: {
                        slidesPerView: 1.2,
                    },
                    // Quando a largura da tela for igual ou maior que 768px
                    768: {
                        slidesPerView: 1.8,
                    },
                    // Quando a largura da tela for igual ou maior que 992px
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 40
                    }
                },

                // Navigation arrows
                navigation: {
                    nextEl: false,
                    prevEl: false,
                },

                on: {
                    slideChange: function() {
                        $('[data-card]').removeClass('shadow-card');
                        const selectCard = $(`[data-card=${swiper.activeIndex}]`);
                        selectCard.addClass('shadow-card');
                        // console.log(selectCard);
                        console.log('Slide atual:', swiper.activeIndex);

                        //sombra 2 
                        $('[data-card-external]').removeClass('card-slide-professional-shadow');
                        const selectCardExternal = $(`[data-card-external=${swiper.activeIndex}]`);
                        selectCardExternal.addClass('card-slide-professional-shadow');
                        // console.log(selectCard);
                        console.log('Slide atual:', swiper.activeIndex);

                    }
                },

                // And if we need scrollbar
                // scrollbar: {
                //     el: '.swiper-scrollbar',
                // },
            });

            const swipe1 = new Swiper('.carrocelHeader', {
                // Optional parameters
                direction: 'horizontal',
                // loop: true,

                slidesPerView: 1,
                spaceBetween: 0,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                on: {
                    slideChange: function() {
                        // Função de callback a ser executada no slide atual
                        if (window.pageYOffset === 0 && swipe1.activeIndex === 1) {
                            navbar.classList.remove('transparent');
                            navbar.classList.add('nav-background-custom');
                        } else if (window.pageYOffset === 0 && swipe1.activeIndex === 0) {
                            navbar.classList.add('transparent')
                            navbar.classList.remove('nav-background-custom');
                        }
                        // console.log(window.pageYOffset);
                        // console.log('Slide atual:', swipe1.activeIndex);

                        // Outras ações que você deseja executar no slide atual
                        // ...
                    }
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },

                // Opções responsivas
                // breakpoints: {
                //     // Quando a largura da tela for igual ou maior que 576px
                //     576: {
                //         slidesPerView: 1.5,
                //     },
                //     // Quando a largura da tela for igual ou maior que 768px
                //     768: {
                //         slidesPerView: 1.8,
                //     },
                //     // Quando a largura da tela for igual ou maior que 992px
                //     992: {
                //         slidesPerView: 3,
                //     }
                // },

                // Navigation arrows


                navigation: {
                    nextEl: false,
                    prevEl: false,
                },

                // And if we need scrollbar
                // scrollbar: {
                //     el: '.swiper-scrollbar',
                // },
            });

            $(".section2").find("[data-select]").click(function(element) {
                $(".section2").find("[data-select]").removeClass("select");
                $(this).addClass("select");
                const valueDataset = $(this).data("select");
                if (valueDataset === 1) {
                    $(".comercial").fadeOut(1);
                    $(".residencial").fadeIn(500);
                } else if (valueDataset === 2) {
                    $(".residencial").fadeOut(1);
                    $(".comercial").fadeIn(500);
                }
            });
            // console.log(btns);



            //javascript
            window.addEventListener('scroll', function() {
                const limiteMobile = 768;
                const navbar = document.querySelector('#navbar');
                // console.log(swipe1.activeIndex);

                if (window.pageYOffset === 0 && swipe1.activeIndex === 0 && !(window.innerWidth <
                        limiteMobile)) {
                    navbar.classList.remove('nav-background-custom')
                    navbar.classList.add('transparent')
                    //    console.log('Hello');
                } else {
                    navbar.classList.add('nav-background-custom')
                    navbar.classList.remove('transparent')
                }
            });
            const dataNameProfessional = $('[data-nameProfessional]')

            function formatarNome(nome) {
                var partes = nome.trim().split(" ");
                var primeiroNome = partes[0].charAt(0).toUpperCase() + partes[0].slice(1);

                var nomeFormatado = primeiroNome;

                if (partes.length > 1) {
                    var primeiraLetraSegundoNome = partes[1].charAt(0).toUpperCase();
                    nomeFormatado += " " + primeiraLetraSegundoNome;
                }

                return nomeFormatado;
            }

            var nomeCompleto = "Anderson Bernardes";

            var nomeFormatado = formatarNome(nomeCompleto);
            // console.log(nomeFormatado);


            function formatarNomeESobrenome(nome) {
                var partes = nome.trim().split(" ");
                if (partes.length > 1) {
                    return partes[0] + " " + partes[1];
                }
                return partes[0];
            }

            var nomeCompleto = "Anderson Bernardes de Oliveira";

            var nomeFormatado = formatarNomeESobrenome(nomeCompleto);
            // console.log(nomeFormatado);
        });


        //ver mais
        const conteudo = document.querySelector('.description-payment');
        const verMais = document.querySelector('.ver-mais');

        verMais.addEventListener('click', function() {
            conteudo.classList.contains("hidden") ? conteudo.classList.remove("hidden") : conteudo.classList.add(
                "hidden");
        });


        function copiarTexto() {
            var textarea = document.getElementById("textQrCode");
            textarea.select();
            document.execCommand("copy");
            alert("Código copiado para a área de transferência!");
        }

        $("input[name='typePayment']").change(function() {
            const opcaoSelecionada = $(this).val();
            selectTypePayment(opcaoSelecionada);
        });

        function selectTypePayment(optionSelected) {
            const sectionsPayment = $("[data-type-payment]");
            sectionsPayment.fadeOut(1);
            $(`[data-type-payment=${optionSelected}]`).fadeIn(500);
        }

        //submit form
        const submitForm = document.getElementById("creditCardForm");

        submitForm && submitForm.addEventListener("submit", async function(event) {
            event.preventDefault();

            const btnSubmit = submitForm.getElementsByTagName('button');
            btnSubmit[0].disabled = true;
            $(".spiner").fadeIn(500);

            var formData = new FormData(this);

            // for (var pair of formData.entries()) {
            //     console.log(pair[0] + ': ' + pair[1]);
            // }

            const valueToken = $('[name=_token]').val();

            //pega o id da fatura na url
            const url = window.location.href;
            const elementos = url.split('/');
            const idInvoice = elementos[elementos.length - 1];

            try {
                const response = await fetch(`/payment/${idInvoice}/paymentCard`, {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': valueToken
                    },
                    body: formData
                });

                const json = await response.json();
                location.reload();
            } catch (error) {
                alert(error);
            } finally {
                btnSubmit[0].disabled = false;
                $(".spiner").fadeOut(1);
            }
        });

        //validar cartão de credito
        const inputCreditCard = document.getElementById('creditCardNumber');
        inputCreditCard && $('#creditCardNumber').validateCreditCard(function(result) {
            const creditCardName = result.card_type == null ? '-' : result.card_type.name;
            // console.log(result.card_type == null ? '-' : result.card_type.name);
            switch (creditCardName) {
                case 'mastercard':
                    $("#image-credit-card").attr("src", "https://clin.app.br/imagens/cards/master.png");
                    break;
                case 'visa':
                    $("#image-credit-card").attr("src", "https://clin.app.br/imagens/cards/visa.png");
                    break;
                case 'discover':
                    $("#image-credit-card").attr("src", "https://clin.app.br/imagens/cards/discover.png");
                    break;
                default:
                    $("#image-credit-card").attr("src", 'https://clin.app.br/imagens/cards/cardnone.png');
                    break;
            }
            // console.log($("#image-credit-card"));
            // $('.log').html('Card type: ' + (result.card_type == null ? '-' : result.card_type.name)
            //          + '<br>Valid: ' + result.valid
            //          + '<br>Length valid: ' + result.length_valid
            //          + '<br>Luhn valid: ' + result.luhn_valid);
        });
    </script>
</body>

</html>
