<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css"> --}}
    <link rel="stylesheet" href="{{ mix('css/studioDetail/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>CLIN | home</title>
</head>

<body>
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
                            <a class="nav-link nav-link-custom" href="#">Automotivo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#">Higienização</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="#">Clin Pro</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <div>
                                <a class="nav-link nav-link-custom px-md-4" href="#section-13">Baixar App</a>
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
                                    {{-- <h6 class="card-subtitle py-md-3" style="color: #66AFFF;"><i class="feather"
                                            data-feather="check-circle"></i>6 anos
                                        no mercado
                                        de limpeza</h6> --}}
                                    <h1 class="card-title title-custom mb-2 py-md-3">Limpeza, Tecnologia,<br>Cuidado e
                                        Propósito.
                                    </h1>
                                    <p class="card-text py-md-3 fs-5">A conexão mais rápida e segura entre profissionais
                                        autônomos de limpeza e clientes. Prático, seguro, rápido e fácil.</p>
                                    {{-- <div style="display: flex">
                                        <div class="btn-type-one">
                                            <a href="#" class="card-link fs-6p p-2">SAIBA MAIS</a>
                                        </div>
                                    </div> --}}
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
                                        style="background-image: url('{{ asset('imagens/studioDetail/Balom.png') }}');background-size: 95% 33.921rem; background-repeat: no-repeat; background-position: bottom; width: 100%; height: 100%;object-fit: contain;bottom:-1px">
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
                                                            <a target="_blank"
                                                                href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es%20sobre%20higieniza%C3%A7%C3%A3o%20de%20estofados"
                                                                class="card-link fs-6p p-2">AGENDAR
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
                <div class="swiper-pagination paginator-one"></div>
                {{-- <div class="col-md-6 d-flex flex-column justify-content-center align-items-center"
                    style="padding-top: 6.25rem;">
                    <div class="px-md-6">
                        <h6 class="card-subtitle py-md-3" style="color: #66AFFF;"><i class="feather"
                                data-feather="check-circle"></i>4 anos
                            no mercado
                            de limpeza</h6>
                        <h1 class="card-title title-custom mb-2 py-md-3">Limpeza,tecnologia,<br>cuidado e propósito.
                        </h1>
                        <p class="card-text py-md-3">Some quick example text to build on the card title and make up the
                            bulk
                            of the card's content.</p>
                        <div style="display: flex">
                            <div class="btn-type-one">
                                <a href="#" class="card-link">SAIBA MAIS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"
                    style="background:rgba(102, 175, 255, 0.9);mix-blend-mode: normal;
                border-radius: 0px 0px 0px 350px;padding-top: 6.25rem;">

                </div> --}}
            </div>
        </section>

        <section class="section1-mobile container px-0">
            <div class="d-flex flex-column w-100 h-100 container-person-mobile" style="background: #F3F9FF;">
                <div class="w-100 container-blue-mobile position-relative"
                    style="height: 374px;background: #66AFFF;padding-top: 6.25rem;">
                    <div class="d-flex flex-row h-100">
                        <div class="ps-3">
                            <h2 class="fs-1 text-white">Limpeza,<br>tecnologia,<br>cuidado e<br>propósito</h2>
                        </div>
                        <div class="image-container-mobile">
                            <img src="{{ asset('imagens/studioDetail/Person.png') }}" alt="Imagem">
                        </div>
                        <div class="card-icon-mobile">
                            <img src="{{ asset('imagens/studioDetail/Vector.png') }}" alt="Imagem">
                        </div>
                    </div>
                </div>
                <div class="w-100 container-blue-mobile position-relative p-4 d-flex flex-column align-items-center">
                    <h5 class="card-subtitle py-md-3 mb-4 fw-bold"><i class="feather me-1"
                            data-feather="check-circle" style="color: #66AFFF;"></i>Por uma rotina <span
                            style="color: #66AFFF;">limpa</span> e <span style="color: #66AFFF;">feliz</span></h5>
                    <p style="color: #47525E" class="fw-normal">Faxina residencial e comercial</p>
                    <div class="d-flex justify-content-center">
                        <div class="" style="display: flex;justify-content: center">
                            <div class="btn-type-one">
                                <a href="https://clin.com.br/agendamento"
                                    class="card-link fs-6 p-2 px-5 text-uppercase fst-normal" target="_blank">simular
                                    valores</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-1 section-one-container-web">
            <div class="w-100 container-blue-mobile position-relative p-4 d-flex flex-column align-items-center">
                <h5 class="card-subtitle py-md-3 mb-4 fw-bold"><i class="feather me-1" data-feather="check-circle"
                        style="color: #66AFFF;"></i>Por uma rotina <span style="color: #66AFFF;">limpa</span> e <span
                        style="color: #66AFFF;">feliz</span></h5>
                <p style="color: #47525E" class="fw-normal">Faxina residencial e comercial</p>
                <div class="d-flex justify-content-center">
                    <div class="" style="display: flex;justify-content: center">
                        <div class="btn-type-one">
                            <a href="https://clin.com.br/agendamento"
                                class="card-link fs-6 p-2 px-5 text-uppercase fst-normal" target="_blank">simular
                                valores</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="section-2 container p-0">

            <div class="wave-top">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>

            <div style="background: #75b8ff">
                <div class="container d-flex flex-column align-items-center">
                    <h2 class="fs-1 mb-0 fw-bold">+<span id="totalYears"></span> anos</h2>
                    <p class="text-white fs-5">no mercado</p>
                    <p class="text-center my-3 text-white fs-5">A maior plataforma de serviços de limpeza do sul do
                        Brasil
                    </p>
                    <h2 class="fs-1 mb-0 fw-bold">+<span id="totalServices"></span></h2>
                    <p class="text-center text-white fs-5">serviços realizados</p>
                </div>
            </div>

            <div class="wave-bottom">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>

        </section>

        <section class="section-3 mt-5 mb-4">
            <div class="d-flex flex-column align-items-center">
                <h2 class="fs-1 mb-0 text-center">Nossos Serviços de Limpeza Profissional</h2>
            </div>
        </section>

        <section class="section-4 container overflow-hidden mb-5 p-0">
            {{-- @aqui --}}
            <!-- Slider main container -->
            <div class="swiper swiper1">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #OmaisPedido</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Limpeza residencial</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">Deixe
                                        sua casa impecável com nossos serviços
                                        profissionais de limpeza, garantindo um ambiente higienizado e confortável para
                                        você e sua família desfrutarem.</p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4 bg-blue">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #ParaSuaEmpresa</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Limpeza Comercial</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">
                                        Simplifique sua rotina com contratação fácil e
                                        segura por hora, adaptada às necessidades do seu negócio. Praticidade e
                                        eficiência garantidas.</p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #SeuSofáNovoDeNovo</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Higienização de Estofados</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">Renove e
                                        proteja seus móveis com nosso serviço
                                        especializado, removendo sujeira e ácaros para um ambiente mais saudável e
                                        confortável.</p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4 bg-blue">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #DeixeSeuEstofadoProtegido</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Impermeabilização</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">Produtos
                                        não inflamáveis para proteger seus
                                        estofados e tapetes contra manchas e líquidos, garantindo qualidade e segurança.
                                        Além disso, oferecemos garantia para sua tranquilidade.</p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #LavagemAutomotivaDelivery</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Lavagem Automotiva</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">Renove o
                                        brilho do seu veículo no conforto da sua
                                        casa com nosso serviço de lavagem automotiva delivery. Garantimos conveniência e
                                        qualidade onde você estiver.</p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4 bg-blue">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #HigienizaçãoInternaAutomotiva</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Higienização Automotiva</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">Renove o
                                        interior do seu veículo com nossa
                                        higienização interna especializada. Removemos manchas, sujeira e germes,
                                        proporcionando um ambiente limpo e agradável.</p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #LimpezaDePiscina</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Piscineiro</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">Desfrute
                                        de uma piscina sempre limpa com nosso
                                        serviço profissional. Garantimos segurança e praticidade na contratação, para
                                        que você possa aproveitar ao máximo seus momentos de lazer.</p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4 bg-blue">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #JardimBemCuidado</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Manutenção de Jardim</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">Desfrute
                                        de um jardim exuberante o ano todo com
                                        nossa manutenção especializada. Nossos profissionais cuidam de cada detalhe,
                                        desde poda até adubação, garantindo beleza e saúde para suas plantas.</p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #LimpezaPósObras</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Limpeza Pós Obras</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">Obtenha
                                        uma limpeza pós obras profissional com
                                        preço justo. Sua casa nova pronta para morar, sem preocupações.</p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4 bg-blue">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #PassadoriaProfissional</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Passadoria de roupas</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">Mantenha
                                        suas roupas sempre impecáveis com nosso
                                        serviço de passadoria profissional. Conveniência e qualidade para facilitar sua
                                        rotina para você desfrutar do conforto de ter suas roupas sempre bem cuidadas.
                                    </p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #AmbientesOrganizados</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Organização de Ambientes</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">Crie
                                        espaços funcionais e harmoniosos com nossa
                                        organização profissional. Deixe seus ambientes impecáveis e prontos para
                                        facilitar sua rotina diária.</p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="container-slid-card">
                            <div class="card-slid p-3 my-4 bg-blue">
                                <div class="w-100 internal-card">
                                    <div class="d-flex">
                                        <p class="text-black px-2" style="background: #969FAA;border-radius: 10px">
                                            #LimpezaProfissionalDeVidros</p>
                                    </div>
                                    <h3 class="fw-bold text-white text-center">Limpeza de Vidraças e Vitrines</h3>
                                    <p class="text-white text-center my-4 px-md-4 fs-5 mt-3" style="flex: 1;">Mantenha
                                        suas vidraças e vitrines impecáveis
                                        ​​com nosso serviço profissional de limpeza. Brilho e transparência para
                                        destacar sua imagem.</p>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one" style="background: #fff;">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                                    class="card-link fs-6 text-uppercase fst-normal custom-color-blue fw-bold"
                                                    target="_blank">solicitar orçamento</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                {{-- <div class="swiper-pagination"></div> --}}

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev pe-4"></div>
                <div class="swiper-button-next ps-4"></div>

                <!-- If we need scrollbar -->
            </div>


            {{-- <div class="swiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center">
                        <div class="swiper-slide-transform p-2">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('imagens/carrocel/1.png') }}" alt="Imagem">
                            </div>
                            <h3 class="card-title title-custom mb-2">Simule sua<br>faxina.</h3>
                        </div>
                    </div>
                    <div class="swiper-slide text-center">
                        <div class="swiper-slide-transform p-2">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('imagens/carrocel/2.png') }}" alt="Imagem">
                            </div>
                            <h3 class="card-title title-custom mb-2">Escolha data<br>e hora.</h3>
                        </div>
                    </div>
                    <div class="swiper-slide text-center">
                        <div class="swiper-slide-transform p-2">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('imagens/carrocel/3.png') }}" alt="Imagem">
                            </div>
                            <h3 class="card-title title-custom mb-2">Faça o<br>pagamento.</h3>
                        </div>
                    </div>
                    <div class="swiper-slide text-center">
                        <div class="swiper-slide-transform p-2">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('imagens/carrocel/4.png') }}" alt="Imagem">
                            </div>
                            <h3 class="card-title title-custom mb-2">Hora de<br>relaxar.</h3>
                        </div>
                    </div>
                    <!-- Adicione mais slides conforme necessário -->
                </div>
                <div class="swiper-pagination"></div>
            </div> --}}
        </section>

        <section class="section-5 container my-5 px-0">
            <div class="wave-top">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>
            <div class="container d-flex flex-column align-items-center py-2" style="background: #75B8FF;">
                <h2 class="fs-1 mb-4">Por que escolher a Clin?</h2>
                <div class="cards row">
                    <div class="col-md-3 mb-4">
                        <div class="card p-4 px-3">
                            <div class="mb-3">
                                {{-- //icones para baixar   --}}
                                <img class="icon mb-4" src="{{ asset('imagens\icons\escudo.png') }}" alt="">
                                <h2 class="fs-1">Segurança</h2>
                            </div>
                            <p>Nossos profissionais parceiros são verificados e passam por um rigoroso processo de
                                seleção,
                                com todos os documentos checados, garantindo tranquilidade e confiança.</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card p-4 px-3">
                            <div class="mb-3">
                                {{-- //icones para baixar   --}}
                                <img class="icon mb-4" src="{{ asset('imagens\icons\certificate.png') }}"
                                    alt="">
                                <h2 class="fs-1">Qualidade</h2>
                            </div>
                            <p>Nossos profissionais são certificados e participam regularmente de treinamentos de
                                aprimoramento, assegurando profissionalismo e um serviço de alta qualidade e eficiência
                                em
                                cada visita.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card p-4 px-3">
                            <div class="mb-3">
                                {{-- //icones para baixar   --}}
                                <img class="icon mb-4" src="{{ asset('imagens\icons\tecnology.png') }}"
                                    alt="">
                                <h2 class="fs-1">Tecnologia</h2>
                            </div>
                            <p>Inovação ao seu alcance. Utilizamos tecnologia de ponta para garantir praticidade e
                                conveniência aos nossos clientes e parceiros, proporcionando uma experiência de serviço
                                fluida e eficiente.</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card p-4 px-3">
                            <div class="mb-3">
                                {{-- //icones para baixar   --}}
                                <img class="icon mb-4" src="{{ asset('imagens\icons\avaliables.png') }}"
                                    alt="">
                                <h2 class="fs-1">Avaliações</h2>
                            </div>
                            <p>Com 97% de avaliações positivas, a maioria dos serviços são avaliados com 5 e 4 estrelas.
                                Nosso compromisso é proporcionar uma experiência de serviço que supere as expectativas
                                dos nossos clientes. Sua satisfação é nossa prioridade número 1.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="" style="display: flex;justify-content: center">
                        <div class="btn-type-one">
                            <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es"
                                class="card-link fs-6 p-2 px-5 text-uppercase" target="_blank">Solicitar orçamento</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wave-bottom">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>
        </section>

        <section class="section-6 container my-5">
            <div class="d-flex justify-content-center">
                <h2 class="fs-1 text-center mb-5">
                    Veja como é fácil
                </h2>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div class="cards">
                    <div class="card card-facility px-3 mb-5">
                        <div class="rigth col-md-7">
                            <h2 class="fs-1 color-secundary fw-bold">
                                Simule
                            </h2>
                            <p class="font-mobile">
                                Faça seu orçamento de forma personalizada de acordo com seu ambiente.
                            </p>
                        </div>
                        <div class="left">
                            {{-- <h2>colocar a imagem aqui</h2> --}}
                            <img class="icon img-card-two mb-4" src="{{ asset('imagens\icons\clock.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="card card-facility flex-row-reverse px-3 mb-5">
                        <div class="rigth ps-3 col-md-7">
                            <h2 class="fs-1 color-secundary fw-bold">
                                Data e hora
                            </h2>
                            <p class="font-mobile">
                                Escolha o melhor dia e horario para que a profissional inicie o serviço.
                            </p>
                        </div>
                        <div class="left">
                            <img class="icon img-card-two mb-4" src="{{ asset('imagens\icons\gender.png') }}"
                                alt="">
                            {{-- <h2>colocar a imagem aqui</h2> --}}
                        </div>
                    </div>
                    <div class="card card-facility px-3 mb-5 ">
                        <div class="rigth col-md-7">
                            <h2 class="fs-1 color-secundary fw-bold">
                                Pagamento
                            </h2>
                            <p class="font-mobile">
                                Com total segurança via PIX, boleto ou cartão de crédito.
                            </p>
                        </div>
                        <div class="left">
                            <img class="icon img-card-two mb-4" src="{{ asset('imagens\icons\wallet.png') }}"
                                alt="">
                            {{-- <h2>colocar a imagem aqui</h2> --}}
                        </div>
                    </div>
                    <div class="card card-facility flex-row-reverse px-3 mb-5">
                        <div class="rigth ps-3 col-md-7">
                            <h2 class="fs-1 color-secundary fw-bold">
                                Relaxe
                            </h2>
                            <p class="font-mobile">
                                No dia escolhido uma das profissionais Clin irá deixar o seu lar limpo e cheiroso.
                            </p>
                        </div>
                        <div class="left">
                            <img class="icon img-card-two mb-4" src="{{ asset('imagens\icons\coffe.png') }}"
                                alt="">
                            {{-- <h2>colocar a imagem aqui</h2> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-7 container my-5 p-0">
            <div class="wave-top">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>

            <div class="d-flex flex-column align-items-center" style="background: #75B8FF;">
                <h2 class="fs-1 text-center text-white">Clientes que<br>contratam e confiam</h2>
                {{-- @aqui --}}
                <div class="scroller" data-direction="right" data-speed="slow">
                    <div class="scroller__inner">
                        <img src="{{ asset('imagens\icons\logo1.png') }}" alt="" />
                        <img src="{{ asset('imagens\icons\logo2.png') }}" alt="" />
                        <img src="{{ asset('imagens\icons\logo3.png') }}" alt="" />
                        <img src="{{ asset('imagens\icons\logo4.png') }}" alt="" />
                        <img src="{{ asset('imagens\icons\logo5.png') }}" alt="" />
                        <img src="{{ asset('imagens\icons\logo6.png') }}" alt="" />
                        {{-- <img src="{{ asset('imagens\icons\logo7.png') }}" alt="" /> --}}
                        <img src="{{ asset('imagens\icons\logo8.png') }}" alt="" />
                        <img class="custom-logo-wh-gardem" src="{{ asset('imagens\icons\logo9.png') }}"
                            alt="" />
                        <img src="{{ asset('imagens\icons\logo10.png') }}" alt="" />
                        <img class="custom-logo-wh-levelup" src="{{ asset('imagens\icons\logo11.png') }}"
                            alt="" />
                        <img src="{{ asset('imagens\icons\logo12.png') }}" alt="" />
                        <img src="{{ asset('imagens\icons\logo13.png') }}" alt="" />
                    </div>
                </div>
            </div>

            <div class="wave-bottom">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>
        </section>

        {{-- <section class="section2 container">
            <div class="row p-4 pt-md-2 px-0 p-md-5">
                <div class="col-12 mb-4 mb-md-4">
                    <div class="container d-flex my-4 justify-content-center" style="flex-wrap: wrap">
                        <div class="d-flex">
                            <div class="btn-type-two select" data-select=1>
                                <a class="card-link">RESIDENCIAL</a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-type-two" data-select=2>
                                <a class="card-link">COMERCIAL</a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-type-two" data-select=3>
                                <a class="card-link">AUTOMOTIVO</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="residencial row">
                    <div class="col-md-7 image-rigth">
                        <div class="d-flex w-100 h-100 justify-content-center">
                            <div class="position-relative w-75">
                                <div class="p-2 rounded"
                                    style="position: absolute;
                                width: 169px;
                                height: 225px;
                                right: -84px;
                                top: 421px;background: #fff; box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.05);
                                border-radius: 10px;">
                                    <img src="{{ asset('imagens/studioDetail/CleanerBotton.png') }}"
                                        class="w-100 h-100" style="border-radius: 5px" alt="Imagem">
                                </div>

                                <div class="p-2"
                                    style="position: absolute;
                                width: 221px;
                                height: 281px;
                                left: -111px;
                                top: 51.47px;
                                
                                background: #FFFFFF;
                                /* shadow */
                                
                                box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.05);
                                border-radius: 10px;">
                                    <img src="{{ asset('imagens/studioDetail/CleanerTop.png') }}"
                                        class="w-100 h-100 rounded" alt="Imagem">
                                </div>
                                <img src="{{ asset('imagens/studioDetail/Cleaner.png') }}" class="w-100 rounded"
                                    alt="Imagem">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="pt-2 mb-4 mx-3 flex">
                            <h2 class="card-title title-custom mb-2 h2 fw-semibold">Limpeza, tecnologia, cuidado e
                                propósito.
                            </h2>
                            <p class="card-text mb-3 fs-6">Limpeza é cuidado com o ambiente e com as pessoas. Descubra
                                como é fácil contratar esses cuidados para seu lar.</p>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza comum.</h3>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza alto brilho.</h3>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza Express.</h3>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza pós-mudança e pré-mudança.</h3>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza pós-reforma e pós-obra.</h3>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza de vidros em altura.</h3>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Passadoria de roupas.</h3>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Higienização de estofados.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="comercial row" style="display: none">
                    <div class="col-lg-5">
                        <div class="pt-2 mb-4 mx-3 flex">
                            <h2 class="card-title title-custom mb-2 h2 fw-semibold">Limpeza, tecnologia, cuidado e
                                propósito.
                            </h2>
                            <p class="card-text mb-3 fs-6">Limpeza é cuidado com o ambiente e com as pessoas. Descubra
                                como é fácil contratar esses cuidados para seu lar.</p>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza de escritórios.</h3>
                                    
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza de copa.</h3>
                                    
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza pós-confraternização.</h3>
                                    
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza de condomínio.</h3>
                                   
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Zeladoria Profissional.</h3>
                                    
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Sanitização de ambientes.</h3>
                                    
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza de condomínio.</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 image-rigth">
                        <div class="d-flex w-100 h-100 justify-content-center">
                            <div class="position-relative w-75">
                                <div class="p-2 rounded"
                                    style="position: absolute;
                                width: 169px;
                                height: 225px;
                                right: -84px;
                                top: 421px;background: #fff; box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.05);
                                border-radius: 10px;">
                                    <img src="{{ asset('imagens/studioDetail/CleanerBotton.png') }}"
                                        class="w-100 h-100" style="border-radius: 5px" alt="Imagem">
                                </div>

                                <div class="p-2"
                                    style="position: absolute;
                                width: 221px;
                                height: 281px;
                                left: -111px;
                                top: 51.47px;
                                
                                background: #FFFFFF;
                                /* shadow */
                                
                                box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.05);
                                border-radius: 10px;">
                                    <img src="{{ asset('imagens/studioDetail/CleanerTop.png') }}"
                                        class="w-100 h-100 rounded" alt="Imagem">
                                </div>
                                <img src="{{ asset('imagens/studioDetail/Cleaner.png') }}" class="w-100 rounded"
                                    alt="Imagem">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="automotivo row" style="display: none">
                    <div class="col-md-7 image-rigth">
                        <div class="d-flex w-100 h-100 justify-content-center">
                            <div class="position-relative w-75">
                                <div class="p-2 rounded"
                                    style="position: absolute;
                                width: 169px;
                                height: 225px;
                                right: -84px;
                                top: 421px;background: #fff; box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.05);
                                border-radius: 10px;">
                                    <img src="{{ asset('imagens/studioDetail/CleanerBotton.png') }}"
                                        class="w-100 h-100" style="border-radius: 5px" alt="Imagem">
                                </div>

                                <div class="p-2"
                                    style="position: absolute;
                                width: 221px;
                                height: 281px;
                                left: -111px;
                                top: 51.47px;
                                
                                background: #FFFFFF;
                                /* shadow */
                                
                                box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.05);
                                border-radius: 10px;">
                                    <img src="{{ asset('imagens/studioDetail/CleanerTop.png') }}"
                                        class="w-100 h-100 rounded" alt="Imagem">
                                </div>
                                <img src="{{ asset('imagens/studioDetail/Cleaner.png') }}" class="w-100 rounded"
                                    alt="Imagem">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="pt-2 mb-4 mx-3 flex">
                            <h2 class="card-title title-custom mb-2 h2 fw-semibold">Limpeza, cuidado e excelência para
                                seu carro.
                            </h2>
                            <p class="card-text mb-3 fs-6">Cuidamos do seu veículo com a mesma atenção e dedicação que
                                oferecemos ao seu lar.</p>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Lavagem Convencional.</h3>
                                    
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Lavagem Técnica Profissional.</h3>
                                    
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Lavagem Técnica Detailed de Motos.</h3>
                                    
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Polimento técnico.</h3>
                                    
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Higienização Interna Completa.</h3>
                                    
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Higienização e Hidratação de bancos em
                                        couro.</h3>
                                    
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h3 class="card-title title-custom mb-2">Limpeza Técnica de motor.</h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="m-5" style="display: flex;justify-content: center">
                        <div class="btn-type-one">
                            <a href="https://clin.com.br/downloadAppClin" class="card-link fs-6p p-2"
                                target="_blank">BAIXAR APP</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section class="section3 container">
            <div class="p-4 p-md-5">
                <h2 class="card-title title-custom mb-5 h1 fw-semibold">Escolha uma de nossas soluções.</h2>
                <div class="mt-3 mb-5">

                    <div class="space-container-solution w-100 position-relative">
                        <div class="card-solution p-4 p-md-5 mb-4">
                            <div class="row">
                                <div class="order-md-1 col-md-12">
                                    <div class="d-flex">
                                        <h4 class="fw-medium me-md-2 mt-md-2">Faxina</h4>
                                        <div class="btn-type-tree more-btn">
                                            <a href="#" class="card-link">SAIBA MAIS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-md-3 col-md-7 py-md-3">
                                    <p class="card-text">Desde 2017, transformamos espaços em lares limpos e felizes.
                                        Das limpezas diárias que removem os vestígios da rotina até as faxinas
                                        minuciosas que eliminam toda sujeira persistente, nossos cuidados garantem um
                                        ambiente impecável para você aproveitar.</p>
                                </div>
                                <div class="d-flex">
                                    <div class="btn-type-tree my-4 btn-more-booton">
                                        <a href="#" class="card-link">SAIBA MAIS</a>
                                    </div>
                                </div>
                            </div>
                            <img class="solution-image" src="{{ asset('imagens/studioDetail/balde.svg') }}"
                                alt="Car">
                        </div>
                    </div>


                    <div class="space-container-solution w-100 d-flex justify-content-md-end position-relative">
                        <div class="card-solution p-4 p-md-5 mb-4">
                            <div class="row d-flex justify-content-md-end">
                                <div class="order-md-1 col-md-12">
                                    <div class="d-flex justify-content-md-end">
                                        <h4 class="fw-medium me-md-2 mt-md-2">Higienização</h4>
                                        <div class="btn-type-tree more-btn">
                                            <a href="#" class="card-link">SAIBA MAIS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-md-3 col-md-7 py-md-3">
                                    <p class="card-text">Nossos cuidados chegam a cada cantinho do seu lar, eliminando
                                        toda sujidade e ácaros que podem oferecer risco para você e sua família.
                                        Seus estofados e tapetes limpos e protegidos, para proporcionar uma rotina mais
                                        limpa e feliz.</p>
                                </div>
                                <div class="d-flex">
                                    <div class="btn-type-tree my-4 btn-more-booton">
                                        <a href="#" class="card-link">SAIBA MAIS</a>
                                    </div>
                                </div>
                            </div>
                            <img class="solution-image solution-image-sofa"
                                src="{{ asset('imagens/studioDetail/sofa.svg') }}" alt="Car">
                        </div>
                    </div>

                    <div class="space-container-solution w-100 position-relative">
                        <div class="card-solution p-4 p-md-5 mb-4">
                            <div class="row">
                                <div class="order-md-1 col-md-12">
                                    <div class="d-flex">
                                        <h4 class="fw-medium me-md-2 mt-md-2">Automotivo</h4>
                                        <div class="btn-type-tree more-btn">
                                            <a href="#" class="card-link">SAIBA MAIS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-md-3 col-md-7 py-md-3">
                                    <p class="card-text">Toda excelência e cuidado da Clin, também para seu carro!
                                        Lavagem convencional ou uma minuciosa limpeza detailed? Estamos aqui para
                                        ajudar.
                                        Nossos profissionais altamente treinados e equipamentos de última geração
                                        deixarão seu carro impecável.</p>
                                </div>
                                <div class="d-flex">
                                    <div class="btn-type-tree my-4 btn-more-booton">
                                        <a href="#" class="card-link">SAIBA MAIS</a>
                                    </div>
                                </div>
                            </div>
                            <img class="solution-image" src="{{ asset('imagens/studioDetail/carro.svg') }}"
                                alt="Car">
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="container" id="carrocel-feddback">
            <div class="p-4 p-md-5">
                <h2 class="card-title title-custom mb-2 h1 fw-semibold text-center">Quem confia indica
                </h2>
                <div class="py-5">
                    <div class="swiper swiper2 py-3">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Slides -->
                            @foreach ($comentarios as $index => $comentario)
                                <div class="swiper-slide {{ $index === 0 ? 'card-slide-professional-shadow' : '' }}"
                                    data-card-external={{ $index }}>
                                    <div class="d-flex flex-column card-slide-professional w-100 h-100 p-3 {{ $index === 0 ? 'shadow-card' : '' }}"
                                        data-card={{ $index }}>
                                        <div class="d-flex flex-row">
                                            @php
                                                $partes = explode(' ', $comentario->professional_user->name);
                                                $nameClientPars = explode(' ', $comentario->service->client_service->name);
                                                $finalName = ucwords(strtolower($partes[0] . ' ' . $partes[1]));

                                                $nameClient = ucwords(strtolower($nameClientPars[0] . '.')) . strtoupper($nameClientPars[1][0]) . ' ' . Carbon\Carbon::parse($comentario->created_at)->format('d-m-Y') . ' Curitiba ';

                                                $formatDate = Carbon\Carbon::parse($comentario->professional_user->created_at)->format('Y');

                                                $formatText = $comentario->text;
                                                if (strlen($formatText) > 50) {
                                                    $formatText = substr($formatText, 0, 50) . '...';
                                                }
                                                $avatar = $comentario->professional_user->professional->avatar ?? null;
                                            @endphp
                                            <div style="width: 70px;height: 70px;">
                                                <img src="{{ isset($avatar) ? "https://clin.com.br/imagens/$avatar" : asset('imagens/studioDetail/Perfil.png') }}"
                                                    alt="Imagem de perfil" class="rounded-circle" width="100%"
                                                    height="100%" style="object-fit: contain">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 fs-6" style="color: #002B5A!important;"
                                                    data-nameProfessional>
                                                    {{ $finalName }}</h6>
                                                <small class="m-0 text-muted">profissional desde
                                                    {{ $formatDate }}</small>
                                                <div>
                                                    <div
                                                        class="d-flex flex-row justify-content-between align-items-center w-75">
                                                        <i class="feather me-1" data-feather="star" fill="#44B4B7"
                                                            style="color: #44B4B7;"></i>
                                                        <i class="feather me-1" data-feather="star" fill="#44B4B7"
                                                            style="color: #44B4B7;"></i>
                                                        <i class="feather me-1" data-feather="star" fill="#44B4B7"
                                                            style="color: #44B4B7;"></i>
                                                        <i class="feather me-1" data-feather="star" fill="#44B4B7"
                                                            style="color: #44B4B7;"></i>
                                                        <i class="feather me-1" data-feather="star" fill="#44B4B7"
                                                            style="color: #44B4B7;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2 d-flex flex-column align-items-center justify-content-between"
                                            style="flex: 1">
                                            <div class="overflow-hidden" style="flex: 1">
                                                <p class="fw-normal fs-6 text-center"
                                                    style="font-weight: 500 !important;color: #002B5A!important;opacity: 1;">
                                                    {{ $formatText }}
                                                </p>
                                            </div>
                                            <div class="text-center">
                                                <small class="fw-normal fs-6 m-0 text-muted"
                                                    style="color: #002B5A!important;">
                                                    {{ $nameClient }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-9 container my-5 p-0">
            <div class="wave-top">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>

            <div class="" style="background: #75B8FF;">
                <div class="container py-5">
                    <div class="d-flex flex-column align-items-center">
                        <h1>Nossas soluções</h1>
                        <p class="text-white fs-5 my-2">Limpeza, tecnologia,<br>cuidado e propósito</p>
                        <div class="cards w-100 px-2">
                            <div class="line-white"></div>
                            <div class="card card-solution-final py-3">
                                <div class="d-flex flex-row align-items-center">
                                    <img class="icon img-card-tree pe-2" src="{{ asset('imagens\icons\house.png') }}"
                                        alt="">
                                    <h2 class="m-0 text-white">Residencial</h2>
                                </div>
                                <img class="icon size-plus plus" src="{{ asset('imagens\icons\plus.png') }}"
                                    alt="">
                            </div>
                            <div class="slid-toggle">
                                <p class="text-white">Na Clin, entendemos que limpeza vai além de remover a sujeira; é
                                    cuidado com o ambiente e com as pessoas. Descubra como é fácil contratar esses
                                    cuidados para o seu lar, com uma variedade de serviços personalizados.</p>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza comum.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza alto brilho</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza Express.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza pré-mudança</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza alto brilho</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza pós-obra</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza de vitrines e
                                            vidraças</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza alto brilho</h5>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <div class="pb-3" style="display: flex;justify-content: center">
                                        <div class="btn-type-one">
                                            <a href="https://clin.com.br/agendamento"
                                                class="card-link fs-6 p-2 px-3 text-uppercase" target="_blank">Agendar
                                                serviço</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line-white"></div>
                            <div class="card card-solution-final py-3">
                                <div class="d-flex flex-row align-items-center">
                                    <img class="icon img-card-tree pe-2"
                                        src="{{ asset('imagens\icons\comercial.png') }}" alt="">
                                    <h2 class="m-0 text-white">Comercial</h2>
                                </div>
                                <img class="icon size-plus plus" src="{{ asset('imagens\icons\plus.png') }}"
                                    alt="">
                            </div>
                            <div class="slid-toggle">
                                <p class="text-white">Mantenha seu ambiente de trabalho impecável com os serviços
                                    comerciais da Clin. Oferecemos soluções de limpeza personalizadas para escritórios,
                                    lojas, restaurantes e outros espaços comerciais. Garantimos um ambiente limpo e
                                    acolhedor para seus clientes e colaboradores.</p>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza comum.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza diária.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza Pesada.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Copa.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Eventos.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Pós obras.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza de vitrines e
                                            vidraças.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Terceirização.</h5>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <div class="pb-3" style="display: flex;justify-content: center">
                                        <div class="btn-type-one">
                                            <a href="https://clin.com.br/agendamento"
                                                class="card-link fs-6 p-2 px-3 text-uppercase" target="_blank">Agendar
                                                serviço</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line-white"></div>
                            <div class="card card-solution-final py-3">
                                <div class="d-flex flex-row align-items-center">
                                    <img class="icon img-card-tree pe-2"
                                        src="{{ asset('imagens\icons\higienizacao.png') }}" alt="">
                                    <h2 class="m-0 text-white">Higienização</h2>
                                </div>
                                <img class="icon size-plus plus" src="{{ asset('imagens\icons\plus.png') }}"
                                    alt="">
                            </div>
                            <div class="slid-toggle">
                                <p class="text-white">Proteja sua saúde e a de sua família com os serviços de
                                    higienização da Clin. Nossos profissionais especializados utilizam produtos e
                                    técnicas de última geração para eliminar germes, bactérias e vírus de superfícies e
                                    ambientes, proporcionando um espaço seguro e saudável para viver e conviver.</p>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Estofados.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Sofás.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Cadeiras.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Poltronas.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Colchões.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Puffs.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Carrinho de bebe.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Bebe conforto.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Impermeabilização de
                                            estofados.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Tapetes.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Carpetes.</h5>
                                    </div>
                                </div>



                                <div class="d-flex justify-content-center">
                                    <div class="pb-3" style="display: flex;justify-content: center">
                                        <div class="btn-type-one">
                                            <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es%20sobre%20higieniza%C3%A7%C3%A3o%20de%20estofados"
                                                class="card-link fs-6 p-2 px-3 text-uppercase" target="_blank">Agendar
                                                serviço</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line-white"></div>
                            <div class="card card-solution-final py-3">
                                <div class="d-flex flex-row align-items-center">
                                    <img class="icon img-card-tree pe-2" src="{{ asset('imagens\icons\car.png') }}"
                                        alt="">
                                    <h2 class="m-0 text-white">Automotivo</h2>
                                </div>
                                <img class="icon size-plus plus" src="{{ asset('imagens\icons\plus.png') }}"
                                    alt="">
                            </div>
                            <div class="slid-toggle">
                                <p class="text-white">Mantenha seu veículo limpo e bem-cuidado com os serviços
                                    automotivos da Clin. Oferecemos desde lavagens convencionais até higienização
                                    interna completa, garantindo que seu carro esteja impecável por dentro e por fora.
                                    Agende agora e deixe seu veículo brilhando como novo.</p>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Limpeza técnica
                                            profissional.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Higienização interna.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Higienização de bancos.
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Higienização e hidratação
                                            de couro.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Descontaminação de pintura
                                            e vidros.</h5>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="me-2">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <i class="feather style-icon-check" data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="card-title  mb-2 text-white">Lavagem Detailed de motos.
                                        </h5>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <div class="" style="display: flex;justify-content: center">
                                        <div class="btn-type-one">
                                            <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Estou no site da Clin, e gostaria de tirar algumas dúvidas sobre lavagem automotiva"
                                                class="card-link fs-6 p-2 px-3 text-uppercase" target="_blank">Agendar
                                                serviço</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wave-bottom">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>
        </section>

        <section class="section-10 container p-0">
            <div class="d-flex justify-content-center flex-column text-center px-2">
                <h1 class="fs-1">Planos de assinatura</h1>
                <p class="fs-5  fw-normal mb-5">Temos o plano de assinatura ideial para você
                    manter seu lar limpo, cheiroso e feliz.
                </p>

                <!-- Slider main container -->
                <div class="swiper swiper3">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">
                                <div class=" d-flex justify-content-center flex-column p-2 py-4"
                                    style="border: #75B8FF solid 2px;border-radius: 20px;position: relative;transform: scale(0.9);">
                                    {{-- <div class="toutlip py-1 px-4" style="border-radius: 12px">
                                        <h3 class="m-0 fw-bold" style="white-space: nowrap;">O mais pedido</h3>
                                    </div> --}}
                                    <h1 class="text-center">Quinzenal</h1>
                                    <div class="py-3">
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Agendamento
                                                    recorrente.</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Profissional
                                                    preferêncial.</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Descontos de até
                                                    15%.
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Suporte Humano via
                                                    WhatsApp.</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one">
                                                <a href="https://clin.com.br/agendamento"
                                                    class="card-link fs-6 p-2 px-3 text-uppercase"
                                                    target="_blank">Quero este
                                                    plano</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">
                                <div class=" d-flex justify-content-center flex-column p-2 py-4"
                                    style="border: #75B8FF solid 2px;border-radius: 20px;position: relative;transform: scale(0.9);">
                                    <div class="toutlip py-1 px-4" style="border-radius: 12px">
                                        <h3 class="m-0 fw-bold" style="white-space: nowrap;">O mais pedido</h3>
                                    </div>
                                    <h1 class="text-center">Semanal</h1>
                                    <div class="py-3">
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Seu lar limpo toda
                                                    semana.</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Profissional
                                                    preferêncial.</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Descontos de até
                                                    20%.
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Suporte Humano via
                                                    WhatsApp.</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one">
                                                <a href="https://clin.com.br/agendamento"
                                                    class="card-link fs-6 p-2 px-3 text-uppercase"
                                                    target="_blank">Quero este
                                                    plano</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">
                                <div class=" d-flex justify-content-center flex-column p-2 py-4"
                                    style="border: #75B8FF solid 2px;border-radius: 20px;position: relative;transform: scale(0.9);">
                                    <div class="toutlip py-1 px-4" style="border-radius: 12px">
                                        <h3 class="m-0 fw-bold" style="white-space: nowrap;">Comercial</h3>
                                    </div>
                                    <h1 class="text-center">Multipla</h1>
                                    <div class="py-3">
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Agendamento
                                                    recorrente.</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Profissional
                                                    preferêncial.</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Horários
                                                    flexiveis.
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <i class="feather style-icon-check"
                                                        data-feather="check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <h5 class="card-title  mb-2  text-start">Suporte Humano
                                                    via
                                                    WhatsApp.</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <div class="" style="display: flex;justify-content: center">
                                            <div class="btn-type-one">
                                                <a href="https://api.whatsapp.com/send/?phone=554141414444&text=Ol%C3%A1,%20estou%20no%20site%20da%20Clin%20e%20quero%20mais%20informa%C3%A7%C3%B5es%20sobre%20higieniza%C3%A7%C3%A3o%20de%20estofados"
                                                    class="card-link fs-6 p-2 px-3 text-uppercase"
                                                    target="_blank">Quero este
                                                    plano</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>


                {{-- <div class="d-flex justify-content-center">
                    <div class=" d-flex justify-content-center flex-column p-2 py-4"
                        style="border: #75B8FF solid 2px;border-radius: 20px;position: relative">
                        <div class="toutlip py-1 px-4" style="border-radius: 12px">
                            <h3 class="m-0 fw-bold" style="white-space: nowrap;">O mais pedido</h3>
                        </div>
                        <h1 class="text-center">Semanal</h1>
                        <div class="py-3">
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check-circle"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h5 class="card-title  mb-2  text-start">Seu lar limpo toda
                                        semana.</h5>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check-circle"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h5 class="card-title  mb-2  text-start">Profissional
                                        preferêncial.</h5>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check-circle"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h5 class="card-title  mb-2  text-start">Descontos de até 20%.
                                    </h5>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <i class="feather style-icon-check" data-feather="check-circle"></i>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h5 class="card-title title-custom mb-2  text-start">Suporte Humano via
                                        WhatsApp.</h5>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="" style="display: flex;justify-content: center">
                                <div class="btn-type-one">
                                    <a href="https://clin.com.br/downloadAppClin"
                                        class="card-link fs-6 p-2 px-3 text-uppercase" target="_blank">Quero este
                                        plano</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>


        <section class="section-11 container my-5 p-0">
            <div class="wave-top">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>

            <div class="d-flex flex-column align-items-center px-2 text-center" style="background: #75B8FF;">
                <h2 class="fs-1">Nossa missão</h2>
                <h3 class="text-white my-3 mt-2">É transformar Vidas, gerando Impacto Social Positivo</h3>
                <p class="text-white px-2 font-mobile">Na Clin, nosso maior propósito vai além da limpeza; buscamos
                    transformar vidas através da valorização, reconhecimento e educação profissional. Acreditamos no
                    poder de proporcionar não apenas uma fonte de renda, mas também uma oportunidade de crescimento e
                    desenvolvimento pessoal.</p>
            </div>

            <div class="col-md-12 py-md-4 px-md-4 container" style="background: #75B8FF;margin-top: -1px">
                <div class="position-relative d-flex align-items-center container-video">
                    <img src="{{ asset('imagens/studioDetail/Pointers.png') }}" alt="Imagem"
                        style="position: absolute;z-index: 0;top: 0;left: -10px;">
                    <div class="w-100 custom-youtube-container heigth-video">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/g20cggP90KI"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    <img src="{{ asset('imagens/studioDetail/Pointers.png') }}" alt="Imagem"
                        style="position: absolute;z-index: 0;bottom: 0;right:-10px;">
                </div>
            </div>

            <div class="wave-bottom">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>
        </section>


        <section class="section-12 container my-5">
            <h2 class="text-center">Nossos parceiros</h2>
            <p class="text-center mb-4 font-mobile">Conheça algumas das instiuíções parceiras que acreditam e apoiam o
                nosso
                projeto.
            </p>
            <div class="row parceiros-container">
                <div class="col-6 col-md-4 d-flex mb-3 justify-content-center">
                    <img class="icon parceiros" src="{{ asset('imagens\icons\sebrae.png') }}" alt="">
                </div>
                <div class="col-6 col-md-4 d-flex mb-3 justify-content-center">
                    <img class="icon parceiros rpc" src="{{ asset('imagens\icons\rpc.png') }}" alt="">
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center">
                    <img class="icon parceiros" src="{{ asset('imagens\icons\vale.png') }}" alt="">
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center">
                    <img class="icon parceiros" src="{{ asset('imagens\icons\hot.png') }}" alt="">
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center">
                    <img class="icon parceiros" src="{{ asset('imagens\icons\angels.png') }}" alt="">
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center">
                    <img class="icon parceiros" src="{{ asset('imagens\icons\puc.png') }}" alt="">
                </div>
            </div>
        </section>


        <section class="section-13 container my-5 p-0" id="section-13">
            <div class="wave-top">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>

            <div class="d-flex flex-column align-items-center" style="background: #75B8FF;">
                <h2 class="fs-1 text-center">Conheça o Aplicativo<br>Clin</h2>
                <p class="px-2 text-center mx-md-5 font-mobile text-white">
                    Com o aplicativo Clin, agendar serviços de limpeza é fácil e rápido. Conecte-se a profissionais
                    autônomas altamente qualificadas, prontas para oferecer serviços personalizados.<br><br>

                    Agende novos serviços, gerencie suas assinaturas, escolha um profissional preferido, e acompanhe seu
                    histórico de serviços e pagamentos. Avalie os serviços e os profissionais diretamente pelo
                    app.<br><br>

                    Baixe agora e tenha a melhor experiência ao contratar profissionais de limpeza.
                </p>

                <a target="_blank" class="a-style-none"
                    href="https://apps.apple.com/br/app/clin-servi%C3%A7os/id1607171606" data-linkIOS>
                    <img class="icon icon-dowload-app py-2 px-3 mb-3 custom-resize my-md-3"
                        style="border: #fff solid 2px;border-radius: 10px"
                        src="{{ asset('imagens\icons\appstore.png') }}" alt="">
                </a>

                <a target="_blank" class="a-style-none"
                    href="https://play.google.com/store/apps/details?id=com.clin.clinapp" data-linkAndroid>
                    <img class="icon icon-dowload-app py-2 px-3 mb-3 custom-resize my-md-3"
                        style="border: #fff solid 2px;border-radius: 10px"
                        src="{{ asset('imagens\icons\googleplay.png') }}" alt="">
                </a>

            </div>

            <div class="wave-bottom">
                <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
            </div>
        </section>

        <section class="section-14 container my-5">
            <div class="d-flex justify-content-center">
                <h2 class="fs-1 text-center mb-4">
                    Nos acompanhe em nossas redes sociais
                </h2>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div class="row col-12 justify-content-center">
                    <div class="col-2 col-md-1">
                        <a target="_blank" class="a-style-none" href="https://www.instagram.com/clin.app/">
                            <img class="p-lg-2" src="{{ asset('imagens\icons\instagran.png') }}" alt=""
                                width="100%" style="object-fit: contain">
                        </a>
                    </div>
                    <div class="col-2 col-md-1">
                        <a target="_blank" class="a-style-none" href="https://www.facebook.com/clin.faxinas">
                            <img class="p-lg-2" src="{{ asset('imagens\icons\faceboock.png') }}" alt=""
                                width="100%" style="object-fit: contain">
                        </a>
                    </div>
                    <div class="col-2 col-md-1">
                        <a target="_blank" class="a-style-none" href="https://www.linkedin.com/company/40655209/">
                            <img class="p-lg-2" src="{{ asset('imagens\icons\linkedin.png') }}" alt=""
                                width="100%" style="object-fit: contain">
                        </a>
                    </div>
                    <div class="col-2 col-md-1">
                        <a target="_blank" class="a-style-none" href="https://www.youtube.com/@clin5405">
                            <img class="p-lg-2" src="{{ asset('imagens\icons\youtube.png') }}" alt=""
                                width="100%" style="object-fit: contain">
                        </a>
                    </div>

                </div>
                {{-- imagens das redes sociais. --}}

            </div>
        </section>




        {{-- <section class="section5 container"
            style="background-image: url('{{ asset('imagens/studioDetail/Wave.png') }}');">
            <div class="row p-4 p-md-5">
                <div class="col-md-8 px-0">
                    <h2 class="card-title title-custom mb-2 h1 fw-semibold">Invista na maior Startup<br>de Tecnologia,
                        limpeza
                        e<br>cuidados do sul do Brasil
                    </h2>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4 py-4 py-md-5 d-flex">
                    <div class="btn-type-tree" style="background: #1F80EA">
                        <a href="#" class="card-link fs-6p p-2">QUERO ME TORNAR FRANQUEADO</a>
                    </div>
                </div>

            </div>
        </section> --}}

        {{-- <section class="section6 container">
            <div class="row p-4 p-md-5">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center justify-content-md-start align-items-center py-4 h-100">
                        <img src="{{ asset('imagens/studioDetail/clinpro.png') }}" alt="Imagem"
                            id="logo-edu-clin">
                    </div>
                </div>
                <div class="col-md-6 py-md-4 row">
                    <h4 class="fw-semibold fs-6 order-md-2" style="color: #1F80EA">Conheça a Clin Pro</h4>
                    <p class="fw-normal mb-4 order-md-1" style="opacity: 0.7">
                        Estudar é a principal forma de conquistar seu espaço no mercado de trabalho. E até mesmo na
                        limpeza
                        o conhecimento é diferencial.
                    </p>
                </div>
                <div class="col-md-12 py-md-4 px-md-4 container">
                    <div class="position-relative d-flex align-items-center container-video">
                        <img src="{{ asset('imagens/studioDetail/Pointers.png') }}" alt="Imagem"
                            style="position: absolute;z-index: 0;top: 0;left: -10px;">
                        <div class="w-100 custom-youtube-container heigth-video">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/g20cggP90KI"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                        <img src="{{ asset('imagens/studioDetail/Pointers.png') }}" alt="Imagem"
                            style="position: absolute;z-index: 0;bottom: 0;right:-10px;">
                    </div>
                </div>
            </div>
        </section> --}}


        <footer class="container p-0">
            <section class="section-15 mt-5 p-0">
                <div class="wave-top">
                    <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
                </div>

                <div class="container" style="background: #75B8FF;margin-top: -1px">
                    <div class="row pb-5">
                        <div class="col-12">
                            <div class="px-5 d-flex justify-content-center">
                                <img class="px-5 mb-4 logo-footer" src="{{ asset('imagens/Clin-61.png') }}"
                                    alt="Imagem" style="object-fit: contain">
                            </div>
                        </div>

                        <div class="col-md-6 py-3">
                            <div class="px-4">
                                <a
                                    href="https://wa.me/554141414444?text=Estou no site na Clin, e gostaria de tirar algumas dúvidas">
                                    <p class="text-white">
                                        (41)98875-4815
                                    </p>
                                </a>
                                <a
                                    href="https://wa.me/5541988754815?text=Estou no site na Clin, e gostaria de tirar algumas dúvidas">
                                    <p class="text-white">(41)4141-4444</p>
                                </a>
                                <p class="text-white">contato@clin.com.br</p>
                                <div class="text-center text-white">
                                    <p class="text-white">R. Imac. Conceição, 1430 - Prado Velho, Curitiba - PR,
                                        80215-182</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="container">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="cards w-100 px-2">
                                        <div class="card card-solution-final py-3">
                                            <div class="d-flex flex-row align-items-center">

                                                <h3 class="m-0 text-white">Sobre a Clin</h3>
                                            </div>
                                            <img class="icon size-plus" style="transform: rotate(90deg);"
                                                src="{{ asset('imagens\icons\arrow.png') }}" alt="">
                                        </div>
                                        <div class="slid-toggle">
                                            <p class="text-white">
                                                Bem-vindo à Clin - Conexão para uma Rotina Mais Limpa e Feliz<br><br>

                                                Na Clin, acreditamos que todas as casas e escritórios merecem estar
                                                limpos e felizes. Afinal, a limpeza não apenas remove a sujeira, mas
                                                também varre o mau humor, esfrega o desânimo e e deixa e felicidade
                                                entrar. Todos têm o direito de desfrutar de um espaço limpo e acolhedor,
                                                e é por isso que tornamos mais fácil e seguro encontrar serviços de
                                                limpeza de alta qualidade.<br><br>

                                                A Clin é a conexão rápida e segura entre diaristas e clientes,
                                                proporcionando uma experiência de limpeza personalizada para tornar sua
                                                casa e seu escritório verdadeiramente aconchegante e acolhedores. Com
                                                nossa plataforma intuitiva e confiável, você pode agendar serviços com
                                                facilidade e confiança, garantindo uma rotina mais limpa e
                                                feliz.<br><br>

                                                Junte-se a nós na missão de trazer mais brilho para sua vida diária.
                                                Descubra como a Clin pode fazer a diferença em sua casa e em sua vida.
                                                Por uma rotina mais limpa e feliz - Clin.
                                            </p>
                                        </div>
                                        <div class="card card-solution-final py-3">
                                            <div class="d-flex flex-row align-items-center">

                                                <h3 class="m-0 text-white">Serviços</h3>
                                            </div>
                                            <img class="icon size-plus" style="transform: rotate(90deg);"
                                                src="{{ asset('imagens\icons\arrow.png') }}" alt="">
                                        </div>
                                        <div class="slid-toggle">
                                            <p class="text-white">Limpeza residencial.</p>
                                            <p class="text-white">Limpeza comercial.</p>
                                            <p class="text-white">limpeza pesada.</p>
                                            <p class="text-white">Faxina comum.</p>
                                            <p class="text-white">Faxina express.</p>
                                            <p class="text-white">Faxina alto brilho.</p>
                                            <p class="text-white">Limpeza de Vidros.</p>
                                            <p class="text-white">Limpeza de Vitrines e vidraças.</p>
                                            <p class="text-white">Limpeza de fachada.</p>
                                            <p class="text-white">Higienização de estofados.</p>
                                            <p class="text-white">Higienização de Colchoes.</p>
                                            <p class="text-white">Impermeabilização de estofados.</p>
                                            <p class="text-white">Lavagem de tapetes.</p>
                                            <p class="text-white">Limpeza automotiva delivery.</p>
                                            <p class="text-white">Higienização interna completa.</p>
                                            <p class="text-white">Higienização e hidratação de couro.</p>
                                            <p class="text-white">Higienização de bancos.</p>
                                            <p class="text-white">Descontaminação de pintura e vidros.</p>
                                            <p class="text-white">Lavagem detailed de motos.</p>
                                        </div>
                                        <div class="card card-solution-final py-3">
                                            <div class="d-flex flex-row align-items-center">

                                                <h3 class="m-0 text-white">Trabalhe no App</h3>
                                            </div>
                                            <img class="icon size-plus" style="transform: rotate(90deg);"
                                                src="{{ asset('imagens\icons\arrow.png') }}" alt="">
                                        </div>
                                        <div class="slid-toggle">
                                            <p class="text-white">Junte-se à nossa equipe de profissionais autônomos e
                                                faça parte da comunidade Clin. Trabalhe com flexibilidade, seja seu
                                                próprio chefe e tenha controle sobre sua agenda. Inscreva-se agora e
                                                comece a transformar vidas enquanto ganha dinheiro oferecendo serviços
                                                de limpeza de alta qualidade.</p>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex justify-content-center">
                                                    <div class=""
                                                        style="display: flex;justify-content: center">
                                                        <div class="btn-type-one">
                                                            <a href="https://www.clin.com.br/pro"
                                                                class="card-link fs-6 p-2 px-3 text-uppercase"
                                                                target="_blank">saiba mais</a>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- <a target="_blank" class="a-style-none" href="https://apps.apple.com/br/app/clin-servi%C3%A7os/id1607171606" data-linkIOS>
                                                        <img class="icon icon-dowload-app py-2 px-3 mb-3 my-md-3"
                                                            style="border: #fff solid 2px;border-radius: 10px"
                                                            src="{{ asset('imagens\icons\appstore.png') }}" alt="">
                                                    </a>
                                                    
                                                    <a target="_blank" class="a-style-none" href="https://play.google.com/store/apps/details?id=com.clin.clinapp" data-linkAndroid>
                                                        <img class="icon icon-dowload-app py-2 px-3 mb-3 my-md-3"
                                                            style="border: #fff solid 2px;border-radius: 10px"
                                                            src="{{ asset('imagens\icons\googleplay.png') }}" alt="">
                                                    </a> --}}

                                            </div>
                                        </div>

                                        <div class="card card-solution-final py-3">
                                            <div class="d-flex flex-row align-items-center">
                                                <a class="a-style-none"
                                                    href="https://www.clin.com.br/termos-e-condicoes-de-uso-clin"
                                                    target="_blank">
                                                    <h3 class="m-0 text-white text-start">Termos e condições de uso
                                                    </h3>
                                                </a>
                                            </div>
                                            {{-- <img class="icon size-plus" style="transform: rotate(90deg);" src="{{ asset('imagens\icons\arrow.png') }}"
                                                alt=""> --}}
                                        </div>
                                        <div class="slid-toggle">
                                            <p class="text-white">Na Clin, entendemos que limpeza vai além de remover
                                                a
                                                sujeira; é
                                                cuidado com o ambiente e com as pessoas. Descubra como é fácil contratar
                                                esses
                                                cuidados para o seu lar, com uma variedade de serviços personalizados:
                                            </p>
                                            <div class="d-flex">
                                                <div class="me-2">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <i class="feather style-icon-check"
                                                            data-feather="check"></i>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <h3 class="card-title title-custom mb-2 text-white">Limpeza comum.
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div class="" style="display: flex;justify-content: center">
                                                    <div class="btn-type-one">
                                                        <a href="https://clin.com.br/downloadAppClin"
                                                            class="card-link fs-6 p-2 px-3 text-uppercase"
                                                            target="_blank">Agendar
                                                            serviço</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="wave-bottom">
                    <img src="{{ asset('imagens/wave.svg') }}" alt="Imagem">
                </div> --}}
            </section>
            {{-- <div class="px-md-5 pb-md-5">
                <div class="row">
                    <div class="col-md-4 order-md-1 px-5">
                        <div class="d-flex my-4 my-md-5">
                            <img src="{{ asset('imagens/studioDetail/LogoClin1.png') }}" alt="Imagem">
                        </div>
                        <div class="d-flex flex-column">
                            <p class="h5 mb-4 fw-light">
                                (41) 98875-4815<br><br>
                                (41) 3024-1859
                            </p>
                            <p class="h5 mb-4 fw-light">
                                contato@clin.com.br
                            </p>
                        </div>
                        <div class="d-flex flex-row">
                            <a href="https://www.instagram.com/clin.app/" target="_blank">
                                <i data-feather="instagram" class="mx-2" style="color: #fff;"></i>

                            </a>
                            <a href="https://www.facebook.com/clin.faxinas/" target="_blank">
                                <i class="feather mx-2" data-feather="facebook" fill="#fff"
                                    style="color: #fff;"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/clin-app" target="_blank">
                                <i class="feather mx-2" data-feather="linkedin" fill="#fff"
                                    style="color: #fff;"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 order-md-3 px-5">
                        <div class="d-flex my-4 my-md-5">
                        </div>
                        <div class="d-flex flex-column align-items-center">
                        </div>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="btn-type-tree" style="background: #fff">
                                <a href="https://clin.com.br/downloadAppClin" class="card-link card-link fs-6p p-2"
                                    style="color: #1F80EA">BAIXAR
                                    APP</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 order-md-2 ps-5">
                        <div class="d-flex my-4 my-md-5">
                            <h3 class="mb-0">Serviços</h3>
                        </div>
                        <div class="d-flex flex-column">
                            <p class="h5 mb-4 fw-light">
                                Home
                            </p>
                            <p class="h5 mb-4 fw-light">
                                Higienização
                            </p>
                            <p class="h5 mb-4 fw-light">
                                Automotivo
                            </p>
                            <p class="h5 mb-4 fw-light">
                                Clin Pro
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </footer>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/plugins/countUp.umd.js') }}"></script>
    <script>
        $(document).ready(function() {
            //jquery
            $('.navbar-toggler').click(function() {
                $('.navbar-nav').toggleClass('show');
            });
            //
            feather.replace();
            // @aqui
            //todos os slids na ordem.
            const swiper2 = new Swiper('.carrocelHeader', {
                // Optional parameters
                direction: 'horizontal',
                // loop: true,

                slidesPerView: 1,
                spaceBetween: 0,

                // If we need pagination
                pagination: {
                    el: '.paginator-one',
                    clickable: true,
                },
                on: {
                    slideChange: function() {
                        // Função de callback a ser executada no slide atual
                        if (window.pageYOffset === 0 && swiper2.activeIndex === 1) {
                            navbar.classList.remove('transparent');
                            navbar.classList.add('nav-background-custom');
                        } else if (window.pageYOffset === 0 && swiper2.activeIndex === 0) {
                            navbar.classList.add('transparent')
                            navbar.classList.remove('nav-background-custom');
                        }
                        // console.log(window.pageYOffset);
                        console.log('Slide atual:', swiper2.activeIndex);

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


                navigation: {
                    nextEl: false,
                    prevEl: false,
                },
            });


            const swiper1 = new Swiper('.swiper1', {
                slidesPerView: 1.2,
                spaceBetween: 5,
                centeredSlides: true,
                initialSlide: 1,

                // If we need pagination
                // pagination: {
                //     el: '.swiper-pagination',
                // },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
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
                        spaceBetween: 0
                    }
                },



                on: {
                    init: function(e) {
                        $(e.slides[e.activeIndex]).find('.container-slid-card').find('.card-slid');
                        $(e.slides[e.activeIndex]).find('.container-slid-card').find('.card-slid')
                            .addClass('resize-1 shadow');

                    },
                    slideChange: function(e) {
                        $(e.slides).find('.container-slid-card').find('.card-slid').removeClass(
                            'resize-1 shadow');
                        $(e.slides[e.activeIndex]).find('.container-slid-card').find('.card-slid')
                            .addClass('resize-1 shadow');
                    }
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                }
            });

            const swiper = new Swiper('.swiper2', {
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
                        // console.log('Slide atual:', swiper.activeIndex);

                        //sombra 2 
                        $('[data-card-external]').removeClass('card-slide-professional-shadow');
                        const selectCardExternal = $(`[data-card-external=${swiper.activeIndex}]`);
                        selectCardExternal.addClass('card-slide-professional-shadow');
                        // console.log(selectCard);
                        // console.log('Slide atual:', swiper.activeIndex);

                    }
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false
                }

                // And if we need scrollbar
                // scrollbar: {
                //     el: '.swiper-scrollbar',
                // },
            });

            const swiper3 = new Swiper('.swiper3', {
                slidesPerView: 1.2,
                spaceBetween: 5,
                centeredSlides: true,
                initialSlide: 1,

                // If we need pagination
                // pagination: {
                //     el: '.swiper-pagination',
                // },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
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
                        slidesPerView: 1,
                        spaceBetween: 0
                    }
                },



                on: {
                    init: function(e) {
                        $(e.slides[e.activeIndex]).find('.container-slid-card').find('.card-slid');
                        $(e.slides[e.activeIndex]).find('.container-slid-card').find('.card-slid')
                            .addClass('resize-1 shadow');

                    },
                    slideChange: function(e) {
                        $(e.slides).find('.container-slid-card').find('.card-slid').removeClass(
                            'resize-1 shadow');
                        $(e.slides[e.activeIndex]).find('.container-slid-card').find('.card-slid')
                            .addClass('resize-1 shadow');
                    }
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                }
            });






            $(".section2").find("[data-select]").click(function(element) {
                $(".section2").find("[data-select]").removeClass("select");
                $(this).addClass("select");
                const valueDataset = $(this).data("select");
                if (valueDataset === 1) {
                    $(".comercial").fadeOut(1);
                    $(".automotivo").fadeOut(1);
                    $(".residencial").fadeIn(500);
                } else if (valueDataset === 2) {
                    $(".residencial").fadeOut(1);
                    $(".automotivo").fadeOut(1);
                    $(".comercial").fadeIn(500);
                } else if (valueDataset === 3) {
                    $(".residencial").fadeOut(1);
                    $(".comercial").fadeOut(1);
                    $(".automotivo").fadeIn(500);
                }
            });
            // console.log(btns);



            //javascript
            window.addEventListener('scroll', function() {
                const limiteMobile = 768;
                const navbar = document.querySelector('#navbar');
                console.log(swiper.activeIndex);

                if (window.pageYOffset === 0 && swiper.activeIndex === 0 && !(window.innerWidth <
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
            console.log(nomeFormatado);


            function formatarNomeESobrenome(nome) {
                var partes = nome.trim().split(" ");
                if (partes.length > 1) {
                    return partes[0] + " " + partes[1];
                }
                return partes[0];
            }

            var nomeCompleto = "Anderson Bernardes de Oliveira";

            var nomeFormatado = formatarNomeESobrenome(nomeCompleto);
            console.log(nomeFormatado);
        });
    </script>

    <script>
        var numAnim = new countUp.CountUp('totalYears', 7, {
            duration: 2.5
        });
        numAnim.start()

        var totalServices = new countUp.CountUp('totalServices', 100000, {
            duration: 2.5,
            separator: '.'
        });
        totalServices.start()
    </script>

    <script>
        $(document).ready(function() {
            $('.icon.size-plus').click(function() {
                const minus = "{{ asset('imagens/icons/minus.png') }}"
                const plus = "{{ asset('imagens/icons/plus.png') }}"

                if (!$(this).parent().next('.slid-toggle').is(':visible')) {
                    $(this).parent().parent().find('.size-plus.plus').attr('src', plus);
                    if (!!$(this).parent().parent().find('.size-plus.plus').length) {
                        $(this).attr('src', minus)
                    }
                } else {
                    $(this).parent().parent().find('.size-plus.plus').attr('src', plus);
                }
                $(this).parent().next('.slid-toggle').slideToggle();
                $('.slid-toggle').not($(this).parent().next('.slid-toggle')).slideUp();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            const scrollers = document.querySelectorAll(".scroller");

            // If a user hasn't opted in for recuded motion, then we add the animation
            if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
                addAnimation();
            }

            function addAnimation() {
                scrollers.forEach((scroller) => {
                    // add data-animated="true" to every `.scroller` on the page
                    scroller.setAttribute("data-animated", true);

                    // Make an array from the elements within `.scroller-inner`
                    const scrollerInner = scroller.querySelector(".scroller__inner");
                    const scrollerContent = Array.from(scrollerInner.children);

                    // For each item in the array, clone it
                    // add aria-hidden to it
                    // add it into the `.scroller-inner`
                    scrollerContent.forEach((item) => {
                        const duplicatedItem = item.cloneNode(true);
                        duplicatedItem.setAttribute("aria-hidden", true);
                        scrollerInner.appendChild(duplicatedItem);
                    });
                });
            }
        });
    </script>

    <script>
        window.onload = function() {
            const divIOS = $('[data-linkIOS]');
            const divAndroid = $('[data-linkAndroid]');

            if (navigator.userAgent.match(/Android/i)) {
                divIOS.addClass('d-none');
                divAndroid.removeClass('d-none');
            } else if (navigator.userAgent.match(/iPhone/i)) {
                divIOS.removeClass('d-none');
                divAndroid.addClass('d-none');
            } else if (navigator.userAgent.match(/Windows/i)) {
                divIOS.removeClass('d-none');
                divAndroid.removeClass('d-none');
            }
        };
    </script>

</body>

</html>
