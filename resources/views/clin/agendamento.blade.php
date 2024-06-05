<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PGZT29N');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/clin/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/clin/agendamento.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGZT29N" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @php
        $user = \Auth::user();
        $login = Auth::check();
    @endphp

    <!-- se o usuario ja estiver logado pasar todos os dados -->
    <input type="text" name="user" id="user" value="{{ $login }}" class="none">
    @if ($login == true)
        <form action="" class="none" id="form-mobile">
            <input type="text" name="user_id" id="user_id" value="{{ $user->id }}">
        </form>
    @endif

    <header>
        <img src="{{ asset('imagens/clin/logo.svg') }}" alt="">
        <div class="btn-menu-lateral">
            <input type="checkbox" id="checkbox-menu" onclick="unloadScrollBars(this)">
            <label for="checkbox-menu">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <div class="menu-lateral">
            </div>
        </div>
    </header>
    <form action="" method="POST" id="valores">
        <section class="section-1">
            <h4>Que tipo de faxina você precisa?</h4>
            <div class="container-select">
                <input type="radio" id="select-1" name="Q1" value="2" class="select-1 click simula-v">
                <label for="select-1" class="bloco">
                    <!--svg-->
                    <?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512">
                        <path
                            d="M256.47 216.77l86.73 109.18s-16.6 102.36-76.57 150.12C206.66 523.85 0 510.19 0 510.19s3.8-23.14 11-55.43l94.62-112.17c3.97-4.7-.87-11.62-6.65-9.5l-60.4 22.09c14.44-41.66 32.72-80.04 54.6-97.47 59.97-47.76 163.3-40.94 163.3-40.94zM636.53 31.03l-19.86-25c-5.49-6.9-15.52-8.05-22.41-2.56l-232.48 177.8-34.14-42.97c-5.09-6.41-15.14-5.21-18.59 2.21l-25.33 54.55 86.73 109.18 58.8-12.45c8-1.69 11.42-11.2 6.34-17.6l-34.09-42.92 232.48-177.8c6.89-5.48 8.04-15.53 2.55-22.44z" />
                    </svg>
                    <!--fin-svg-->
                    <p>Faxina express</p>
                </label>
                <input type="radio" id="select-2" name="Q1" value="1" class="select-2 simula-v" checked>
                <label for="select-2" class="bloco"> <span>POPULAR</span>
                    <!--svg-->
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg
                        PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="32.000000pt" height="32.000000pt"
                        viewBox="0 0 32.000000 32.000000" preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,32.000000) scale(0.100000,-0.100000)" fill="#000000"
                            stroke="none">
                            <path d="M100 302 c0 -30 18 -40 56 -32 28 7 36 5 45 -11 5 -10 16 -19 24 -19
                    20 0 19 16 -2 24 -15 6 -14 8 2 20 31 22 8 36 -61 36 -55 0 -64 -3 -64 -18z" />
                            <path d="M140 240 c0 -5 6 -10 14 -10 8 0 18 5 21 10 3 6 -3 10 -14 10 -12 0
                    -21 -4 -21 -10z" />
                            <path d="M110 193 c-6 -16 -15 -36 -20 -45 -9 -16 -4 -18 61 -18 68 0 70 1 63
                    23 -20 64 -23 67 -59 67 -30 0 -37 -4 -45 -27z" />
                            <path d="M80 55 l0 -55 75 0 75 0 0 55 0 55 -75 0 -75 0 0 -55z" />
                        </g>
                    </svg>
                    <!--svg-fim-->
                    <p>Faxina comum</p>
                </label>
                <input type="radio" id="select-3" name="Q1" value="3" class="select-3 simula-v">
                <label for="select-3" class="bloco">
                    <!--svg-->
                    <?xml version="1.0" encoding="utf-8"?>
                    <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32"
                        style="enable-background:new 0 0 32 32;" xml:space="preserve">
                        <g>
                            <path d="M22.5,14c-1.4,0-2.7-0.6-3.5-1.7c-0.3-0.4-0.3-1.1,0.2-1.4c0.4-0.3,1.1-0.3,1.4,0.2c0.5,0.6,1.2,1,2,1c1,0,1.8-0.6,2.3-1.4
  c0.2-0.3,0.2-0.7,0.2-1.1C25,8.1,23.9,7,22.5,7c-0.4,0-0.8,0.1-1.2,0.3c-0.3,0.2-0.6,0.2-0.9,0.1c-0.3-0.1-0.5-0.4-0.6-0.7
  C19.2,4.5,17.3,3,15,3c-2.3,0-4.2,1.5-4.8,3.7C10.1,7,9.9,7.2,9.7,7.3C8.6,7.8,8,8.9,8,10c0,0.3,0,0.5,0.1,0.8
  c0.1,0.5-0.2,1.1-0.7,1.2c-0.5,0.1-1.1-0.2-1.2-0.7C6.1,10.8,6,10.4,6,10c0-1.7,0.9-3.3,2.4-4.2C9.3,2.9,12,1,15,1
  c2.8,0,5.3,1.7,6.4,4.1C21.8,5,22.1,5,22.5,5C25,5,27,7,27,9.5c0,0.7-0.1,1.3-0.4,1.9C25.8,13,24.2,14,22.5,14z" />
                        </g>
                        <g>
                            <path d="M16.5,19.9c5.1,0,9.5-3,11.5-7.7l0-0.1c0-0.3,0-0.6-0.2-0.8C27.6,11.1,27.3,11,27,11h-1.2c-0.4,1.2-1.5,2-2.8,2
  s-2.4-0.8-2.8-2H6c-0.3,0-0.6,0.1-0.8,0.4C5,11.6,5,11.9,5,12.2l0,0.1C7,16.9,11.4,19.9,16.5,19.9z" />
                            <path d="M16.5,21.9c-4.2,0-8-1.7-10.6-4.7L8,30.2C8.1,30.6,8.5,31,9,31h15c0.5,0,0.9-0.4,1-0.8l2.2-12.9
  C24.5,20.2,20.7,21.9,16.5,21.9z" />
                        </g>
                    </svg>
                    <!--fin-svg-->
                    <p>Faxina alto brilho</p>
                </label>
            </div>

            <br>
            <a href="#" onclick="modalOpen(document.querySelector('#modal-includ'))">O que está incluso?</a>
            <br>
            <h4>Como é seu lar?</h4>
            <div class="container-select">
                <input type="radio" id="select-4" name="Q2" value="1" class="select-1 simula-v">
                <label for="select-4" class="bloco">
                    <!--svg-->
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="511.627px" height="511.627px"
                        viewBox="0 0 511.627 511.627" style="enable-background:new 0 0 511.627 511.627;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <path d="M451.378,115.06c-3.613-3.617-7.898-5.424-12.847-5.424h-91.357V27.412c0-7.616-2.663-14.092-7.991-19.417
   C333.854,2.666,327.376,0,319.766,0H191.857c-7.611,0-14.084,2.663-19.414,7.994c-5.33,5.329-7.992,11.802-7.992,19.417v82.224
   H73.089c-4.952,0-9.233,1.807-12.85,5.424c-3.615,3.617-5.424,7.898-5.424,12.847v365.446c0,4.952,1.809,9.233,5.424,12.851
   c3.621,3.617,7.902,5.424,12.85,5.424h365.449c4.948,0,9.233-1.807,12.847-5.424c3.61-3.617,5.428-7.898,5.428-12.851V127.907
   C456.809,122.958,455.002,118.677,451.378,115.06z M201.002,45.679c0-2.474,0.905-4.617,2.712-6.423
   c1.809-1.809,3.949-2.714,6.423-2.714h18.272c2.474,0,4.615,0.905,6.423,2.714c1.807,1.807,2.712,3.949,2.712,6.423v27.41h36.54
   v-27.41c0-2.474,0.907-4.617,2.711-6.423c1.813-1.809,3.956-2.714,6.427-2.714h18.274c2.478,0,4.613,0.905,6.427,2.714
   c1.8,1.807,2.703,3.949,2.703,6.423v91.363c0,2.475-0.903,4.615-2.703,6.424c-1.813,1.809-3.949,2.712-6.427,2.712h-18.274
   c-2.471,0-4.62-0.903-6.427-2.712c-1.801-1.809-2.711-3.949-2.711-6.424v-27.41h-36.54v27.41c0,2.475-0.905,4.615-2.712,6.424
   c-1.809,1.809-3.949,2.712-6.423,2.712h-18.272c-2.474,0-4.615-0.903-6.423-2.712c-1.807-1.809-2.712-3.949-2.712-6.424V45.679z
   M420.264,475.085H310.632v-63.953c0-2.478-0.907-4.62-2.707-6.427c-1.817-1.807-3.949-2.711-6.427-2.711h-91.367
   c-2.474,0-4.615,0.904-6.423,2.711c-1.807,1.807-2.712,3.949-2.712,6.427v63.953H91.36V146.178h73.098v9.135
   c0,7.613,2.662,14.084,7.992,19.414s11.803,7.994,19.414,7.994h127.909c7.61,0,14.089-2.664,19.41-7.994
   c5.328-5.33,7.994-11.801,7.994-19.414v-9.135h73.084v328.907H420.264z" />
                                <path
                                    d="M155.313,365.449h-18.271c-2.474,0-4.615,0.903-6.423,2.714c-1.809,1.807-2.712,3.949-2.712,6.42v18.274
   c0,2.478,0.903,4.609,2.712,6.427c1.809,1.807,3.949,2.707,6.423,2.707h18.271c2.474,0,4.616-0.9,6.423-2.707
   c1.809-1.817,2.714-3.949,2.714-6.427v-18.274c0-2.471-0.905-4.613-2.714-6.42C159.93,366.356,157.788,365.449,155.313,365.449z" />
                                <path
                                    d="M155.313,292.362h-18.271c-2.474,0-4.615,0.903-6.423,2.71c-1.809,1.804-2.712,3.949-2.712,6.42v18.274
   c0,2.478,0.903,4.613,2.712,6.427c1.809,1.807,3.949,2.711,6.423,2.711h18.271c2.474,0,4.616-0.904,6.423-2.711
   c1.809-1.813,2.714-3.949,2.714-6.427v-18.274c0-2.471-0.905-4.616-2.714-6.42C159.93,293.266,157.788,292.362,155.313,292.362z" />
                                <path
                                    d="M228.407,292.362h-18.272c-2.474,0-4.615,0.903-6.423,2.71c-1.807,1.807-2.712,3.949-2.712,6.42v18.274
   c0,2.478,0.905,4.613,2.712,6.427c1.809,1.807,3.949,2.711,6.423,2.711h18.272c2.473,0,4.615-0.904,6.423-2.711
   c1.807-1.813,2.712-3.949,2.712-6.427v-18.274c0-2.471-0.909-4.613-2.712-6.42C233.022,293.266,230.88,292.362,228.407,292.362z" />
                                <path
                                    d="M155.313,219.271h-18.271c-2.474,0-4.615,0.903-6.423,2.712c-1.809,1.807-2.712,3.949-2.712,6.424v18.271
   c0,2.475,0.903,4.615,2.712,6.424s3.949,2.712,6.423,2.712h18.271c2.474,0,4.616-0.903,6.423-2.712
   c1.809-1.809,2.714-3.949,2.714-6.424v-18.271c0-2.475-0.905-4.617-2.714-6.424C159.93,220.175,157.788,219.271,155.313,219.271z" />
                                <path
                                    d="M374.585,365.449h-18.274c-2.471,0-4.613,0.903-6.42,2.714c-1.811,1.807-2.707,3.949-2.707,6.42v18.274
   c0,2.478,0.896,4.609,2.707,6.427c1.807,1.807,3.949,2.707,6.42,2.707h18.274c2.478,0,4.616-0.9,6.427-2.707
   c1.811-1.817,2.707-3.949,2.707-6.427v-18.274c0-2.471-0.903-4.613-2.707-6.42C379.201,366.356,377.062,365.449,374.585,365.449z" />
                                <path
                                    d="M301.498,292.362h-18.274c-2.471,0-4.62,0.903-6.427,2.71c-1.801,1.807-2.711,3.949-2.711,6.42v18.274
   c0,2.478,0.907,4.613,2.711,6.427c1.813,1.807,3.956,2.711,6.427,2.711h18.274c2.478,0,4.613-0.904,6.427-2.711
   c1.8-1.813,2.703-3.949,2.703-6.427v-18.274c0-2.471-0.903-4.613-2.703-6.42C306.114,293.266,303.976,292.362,301.498,292.362z" />
                                <path
                                    d="M228.407,219.271h-18.272c-2.474,0-4.615,0.903-6.423,2.712c-1.807,1.807-2.712,3.949-2.712,6.424v18.271
   c0,2.475,0.905,4.615,2.712,6.424c1.809,1.809,3.949,2.712,6.423,2.712h18.272c2.473,0,4.615-0.903,6.423-2.712
   c1.807-1.809,2.712-3.949,2.712-6.424v-18.271c0-2.475-0.909-4.613-2.712-6.424C233.022,220.175,230.88,219.271,228.407,219.271z" />
                                <path
                                    d="M374.585,292.362h-18.274c-2.471,0-4.613,0.903-6.42,2.71c-1.811,1.804-2.707,3.949-2.707,6.42v18.274
   c0,2.478,0.896,4.613,2.707,6.427c1.807,1.807,3.949,2.711,6.42,2.711h18.274c2.478,0,4.616-0.904,6.427-2.711
   c1.811-1.813,2.707-3.949,2.707-6.427v-18.274c0-2.471-0.903-4.613-2.707-6.42C379.201,293.266,377.062,292.362,374.585,292.362z" />
                                <path
                                    d="M301.498,219.271h-18.274c-2.471,0-4.62,0.903-6.427,2.712c-1.801,1.807-2.711,3.949-2.711,6.424v18.271
   c0,2.475,0.907,4.615,2.711,6.424c1.813,1.809,3.956,2.712,6.427,2.712h18.274c2.478,0,4.613-0.903,6.427-2.712
   c1.8-1.809,2.703-3.949,2.703-6.424v-18.271c0-2.475-0.903-4.613-2.703-6.424C306.114,220.175,303.976,219.271,301.498,219.271z" />
                                <path
                                    d="M347.177,246.678c0,2.475,0.903,4.615,2.71,6.424c1.808,1.809,3.949,2.712,6.42,2.712h18.274
   c2.478,0,4.613-0.903,6.427-2.712c1.808-1.809,2.711-3.949,2.711-6.424v-18.271c0-2.475-0.903-4.613-2.711-6.424
   c-1.813-1.809-3.949-2.712-6.427-2.712h-18.274c-2.471,0-4.612,0.903-6.42,2.712c-1.807,1.807-2.71,3.949-2.71,6.424V246.678z" />
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg>

                    <!--fim-svg-->
                    <p>Apartamento</p>
                </label>
                <input type="radio" id="select-5" name="Q2" value="2" class="select-2 simula-v" checked>
                <label for="select-5" class="bloco">
                    <!--svg-->
                    <?xml version="1.0" encoding="UTF-8"?>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 15 15"
                        id="home-15">
                        <path
                            d="M2,13.7478c0,0.13807,0.11193,0.25,0.25,0.25h3.749v-3h3v3h3.749c0.13807,0,0.25-0.11193,0.25-0.25V7.9987H2&#xA;&#x9;C2,7.9987,2,13.7478,2,13.7478z M13.93,6.5778l-0.9319-0.8189V2c0-0.55228-0.44771-1-1-1s-1,0.44772-1,1v2L7.6808,1.09&#xA;&#x9;C7.5863,0.9897,7.42846,0.98478,7.3279,1.079L7.3169,1.09L1.0678,6.553C0.9734,6.65376,0.97856,6.81197,1.07932,6.90637&#xA;&#x9;C1.12478,6.94896,1.18451,6.97304,1.2468,6.9739L3,6.9989h10.7468c0.13807,0.00046,0.25037-0.1111,0.25083-0.24917&#xA;&#x9;C13.99784,6.68592,13.97365,6.62445,13.93,6.5779V6.5778z" />
                    </svg>
                    <!--fim-svg-->
                    <p>Casa / Sobrado</p>
                </label>
                <input type="radio" id="select-6" name="Q2" value="3" class="select-3 simula-v">
                <label for="select-6" class="bloco">
                    <!--svg-->
                    <?xml version="1.0" encoding="UTF-8" standalone="no"?> <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512">
                        <path
                            d="M436 480h-20V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v456H12c-6.627 0-12 5.373-12 12v20h448v-20c0-6.627-5.373-12-12-12zM128 76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76zm0 96c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40zm52 148h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm76 160h-64v-84c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v84zm64-172c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40z" />
                    </svg>
                    <p>Triplex</p>
                    <!--fin-svg-->
                </label>
            </div>
            <br>
            <br>
            <div class="component-center">
                <div class="component-1">
                    <button
                        onclick="event.preventDefault();subtracao(document.getElementById('v-quartos'),document.getElementById('Q3'));bedroomsText()"
                        class="simula-v">-</button>
                    <p><b id="v-quartos">1</b>&nbsp; <span id="bedroomsText"> quarto</span> </p>
                    <input class="none" id="Q3" name="Q3" value="1">
                    <button
                        onclick="event.preventDefault();soma(document.getElementById('v-quartos'),document.getElementById('Q3'));bedroomsText()"
                        class="simula-v">+</button>
                </div>
            </div>
            <br>
            <div class="component-center">
                <div class="component-1">
                    <button
                        onclick="event.preventDefault();subtracao(document.getElementById('v-banheiros'),document.getElementById('Q4'));bathroomText()"
                        class="simula-v">-</button>
                    <p><b id="v-banheiros">1</b>&nbsp; <span id="bathroomText"> banheiro</span> </p>
                    <input class="none" id="Q4" name="Q4" value="1">
                    <button
                        onclick="event.preventDefault();soma(document.getElementById('v-banheiros'),document.getElementById('Q4'));bathroomText()"
                        class="simula-v">+</button>
                </div>
            </div>
            <br>
            <img src="{{ asset('imagens/clin/informacoes.png') }}" width="20px" alt="">
            <p>Cozinha, sala e varanda já inclusos.</p>
            <br>
            <h4>Qual o seu CEP?</h4>
            @if ($login == true && isset($zip))
                <input type="text" name="cep" id="cep" class="zip" style="text-align: center;"
                    value="{{ $user->address->zip }}">
            @else
                <input type="text" name="cep" id="cep" class="zip" style="text-align: center;">
            @endif

            <input type="text" name="region_id" id="region_id" class="none" style="text-align: center;">

            <br>
            <br>
            <div class="alerta none">
                <p>!</p>
                <br>
                <p id="error-cep">O tempo ajustado é menor do que o
                    recomendado, sua faxina pode não ficar
                    completa.
                </p>
            </div>
            <br>
            {{-- <p>Não sabe o seu CEP? <a href="#">Clique aqui</a></p> --}}
            <br>
            <button href="" type="button" class="btn-2" onclick="event.preventDefault();scrollFunction();"> Ver
                Preço</button>
            <br>
            <br>
            <br>
            <div class="container">
                <h4>Formas de pagamento:</h4>
                <div class="paymentMethod">
                    <div class="payment">
                        <img src="{{ asset('imagens/clin/boleto.svg') }}" width="75" alt="">
                    </div>
                    <div class="payment">
                        <img src="{{ asset('imagens/clin/pix.svg') }}" width="80" alt="">
                    </div>
                    <div class="payment">
                        <img src="{{ asset('imagens/clin/visa.svg') }}" width="40" alt="">
                        <img src="{{ asset('imagens/clin/mastercard.svg') }}" width="40" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="section-2" id="section-2">
                <h4 style="text-align: center;">Itens adicionais(opcional)?</h4>
                <div class="d-flex">
                    <div>
                        <img src="{{ asset('imagens/clin/calçada.png') }}" width="35" alt="">
                    </div>
                    <div>
                        <p>Calçada</p>
                        <p style="color: rgb(87 85 88); font-size: 0.8rem;">+1 hora de serviço</p>
                    </div>
                    <div class="btn-checkbox">
                        <input type="checkbox" name="teste[]" id="calcada" value="Calçada" class="simula-v">
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <img src="{{ asset('imagens/clin/banheira.png') }}" width="40" alt="">
                    </div>
                    <div>
                        <p>Banheira</p>
                        <p style="color: rgb(87 85 88); font-size: 0.8rem;">+1 hora de serviço</p>
                    </div>
                    <div class="btn-checkbox">
                        <input type="checkbox" name="teste[]" id="banheira" value="Banheira" class="simula-v">
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <img src="{{ asset('imagens/clin/geladeira.png') }}" width="40" alt="">
                    </div>
                    <div>
                        <p>Interior de geladeira</p>
                        <p style="color: rgb(87 85 88); font-size: 0.8rem;">+1 hora de serviço</p>
                    </div>
                    <div class="btn-checkbox">
                        <input type="checkbox" name="teste[]" id="geladeira" value="Interior de Geladeira"
                            class="simula-v">
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <img src="{{ asset('imagens/clin/churrasqueira.png') }}" width="40" alt="">
                    </div>
                    <div>
                        <p>Área de churrasqueira</p>
                        <p style="color: rgb(87 85 88); font-size: 0.8rem;">+1 hora de serviço</p>
                    </div>
                    <div class="btn-checkbox">
                        <input type="checkbox" name="teste[]" id="churrasqueira" value="Área de Churrasqueira"
                            class="simula-v">
                    </div>
                </div>
                <div class="d-flex" style="border-bottom: none;">
                    <div>
                        <img src="{{ asset('imagens/clin/vidro.png') }}" width="40" alt="">
                    </div>
                    <div>
                        <p>Área envidraçada grande</p>
                        <p style="color: rgb(87 85 88); font-size: 0.8rem;">+1 hora de serviço</p>
                    </div>
                    <div class="btn-checkbox">
                        <input type="checkbox" name="teste[]" id="vidro" value="Área envidraçada grande"
                            class="simula-v">
                    </div>
                </div>
                <h4>Incluir produtos de limpeza?</h4>
                <a href="#" style="text-align: center;"
                    onclick="modalOpen(document.querySelector('#included-products'))">Quais produtos estão inclusos?</a>
                <br>
                <div class="container-btn">
                    <label class="switch">
                        <input type="checkbox" name="Q7" id="Q7" class="simula-v">
                        <span class="slider round"></span>
                    </label>
                </div>
                <br>
                <br>
                <h4>Ajustar horas de serviço?</h4>
                <p style="text-align:center;">Recomendamos <b id="aj-horas1"></b> <b>horas</b> de faxina, é uma
                    estimativa que leva em consideração o tipo de faxina escolhida e o tamanho do seu lar, pode ser
                    necessário mais ou menos tempo, conforme a sujidade do ambiente e falta de limpeza regular, por isso
                    você pode aumentar ou reduzir a duração, conforme sua necessidade.
                </p>
                <br>
                <div class="component-center">
                    <div class="component-1">
                        <button
                            onclick="event.preventDefault();subtracao1(document.getElementById('aj-horas'),document.getElementById('Q6'));calcularValor2()">-</button>
                        <p><b id="aj-horas">0</b>&nbsp; horas </p>
                        <input class="none" id="Q6" value="1">
                        <button
                            onclick="event.preventDefault();soma(document.getElementById('aj-horas'),document.getElementById('Q6'));calcularValor2()">+</button>
                    </div>
                </div>
                <br>
                <p style="text-align: center;" class="none">com <b id="qt_employees1">0</b>&nbsp; profissional
                </p>
                <br>
                <div class="alerta none" id="error-service">
                    <p><span class="circle-alert">!</span></p>
                    <br>
                    <p>O tempo ajustado é menor do que o
                        recomendado, sua faxina pode não ficar
                        completa.
                    </p>
                </div>
                <br>
            </div>

        </section>
        <section class="section-3" id="section-3">
            <h4>Qual recorrência você precisa?</h4>
            <div class="container-select">
                <input type="radio" id="select-7" name="Q5" value="1" class="select-1 simula-v">
                <label for="select-7" class="bloco p">

                    <p>Faxina única</p>
                    <label for="select-7" class="circle"></label>
                </label>
                <input type="radio" id="select-8" name="Q5" value="3" class="select-2 simula-v" checked>
                <label for="select-8" class="bloco p"> <span>20% OFF</span>

                    <p>Semanal</p>
                    <label for="select-8" class="circle"></label>
                </label>
                <input type="radio" id="select-9" name="Q5" value="2" class="select-3 simula-v">
                <label for="select-9" class="bloco p"> <span>15% OFF</span>
                    <p>Quinzenal</p>
                    <label for="select-9" class="circle"></label>
                </label>
            </div>
            <br>
            <a href="#">Como funciona as assinaturas?</a>
        </section>
    </form>
    <div class="container-btn none" id="container-btn">
        <button type="button" class="btn-3">Escolha a data</button>
    </div>
    <br>
    <br>
    <!--Altenticação-->
    <form action="" id="form-1">
        <div class="autentication none">
            <div class="logo">
                <img src="{{ asset('imagens/clin/logo.svg') }}" style="width: 100px;" alt="">
                <a href="">x</a>
            </div>
            <div class="page">
                <h3>Bem vindo ao login Clin</h3>
                <div class="div-inputs">
                    <p>Entre com seu e-mail</p>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <div class="alerta none" id="alerta-email">
                        <p id="error-email">O tempo ajustado é menor do que o
                            recomendado, sua faxina pode não ficar
                            completa.
                        </p>
                    </div>
                </div>
                <div class="container-btn-1">
                    <button type="button" class="btn-login"
                        onclick="consultarEmail(document.querySelector('#email').value)">Próximo</button>
                </div>
            </div>
        </div>
    </form>
    <form action="" id="form-2">
        <div class="form-register none">
            <div class="logo">
                <img src="{{ asset('imagens/clin/logo.svg') }}" style="width: 100px;" alt="">
            </div>
            <div class="page">
                <h3>Registre-se</h3>
                <div class="div-inputs">
                    <div class="name-register form-2">
                        <input type="Name" name="name" id="name" placeholder="Nome e sobrenome"
                            onblur="contarpalavra(this.value);">
                    </div>
                    <div class="phone-register  form-2">
                        <input type="phone" class="sp_celphones" name="phone" id="phone"
                            placeholder="Número do celular" onblur="verifyPhone(this.value);">
                    </div>
                    <div class="senha-register  form-2">
                        <input type="password" name="password" id="password" placeholder="Senha">
                    </div>
                    <div class="senha-register  form-2">
                        <input type="password" name="password-confirm" id="password-confirm"
                            placeholder="Digite a senha novamente"
                            onblur="verifyPassword(this.value,document.querySelector('#password').value);">
                    </div>
                </div>
                <div class="container-btn-1">
                    <input type="number" class="none" name="" id="nextStepRegister" value="1">
                    <button type="button" class="btn-login"
                        onclick="event.preventDefault();register()">Registrar-se</button>
                </div>
                <div class="alerta none" id="alerta-form">
                    <p id="error-form">O tempo ajustado é menor do que o
                        recomendado, sua faxina pode não ficar
                        completa.
                    </p>
                </div>
            </div>
            <div class="lateral none">
                <div class="lateral-1">
                    <div class="lateral-2">
                        <img src="{{ asset('imagens/clin/clin-logo.svg') }}" style="width: 200px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="" id="form-3">
        <div class="form-autentication none">
            <div class="logo">
                <img src="{{ asset('imagens/clin/logo.svg') }}" style="width: 100px;" alt="">
            </div>
            <div class="page">
                <h3>Bem vindo ao login Clin</h3>
                <div class="div-inputs">
                    <p>Entre com sua senha</p>
                    <input type="senha-1" name="senha-1" id="senha-1" placeholder="Digite sua senha">
                </div>
                <div class="container-btn-1">
                    <button type="button" class="btn-login"
                        onclick="consultarEmail(document.querySelector('#email').value)">NEXT</button>
                </div>
            </div>
        </div>
    </form>
    <!--fi9m autenticação-->
    <div class="price" id="price1">
        <div class="price-1">
            <p>R$ <strong id="price">00,00</strong></p>
            <input type="text" name="" id="price-1" class="none">
            <div style="display: flex;flex-direction: column;justify-content: center;">
                <p> <strong id="hours">0</strong> horas de serviço</p>
                <p> <strong id="employes">2</strong>
                    <t id="professionalText">profissional</t>
                </p>
            </div>
            <input type="text" name="" id="hours-2" class="none">
            @if ($login == true)
                @if ($user->role_id == 0 || $user->role_id == 1)
                    <button type="button" class="btn-copy" onclick="copyService();">Copiar</button>
                @else
                    <p id="seta-2" onclick="">></p>
                @endif
            @else
                <p id="seta-2" onclick="">></p>
            @endif
        </div>
    </div>

    <!-- modal o que esta incluso -->
    <div id="modal-includ" class="none modal-container">
        <div class="modal">
            <input type="button" id="close-modal" value="x"
                onclick="modalClose(document.querySelector('#modal-includ'))">
            <h3>O que está incluso nos serviços</h3>
        </div>
        <div class="modal-description">
            <div class="Service-comun">
                <h3>O que é limpo na Faxina Comum e Express?</h3>
                <h4>Cozinha e Área de serviço</h4>
                <ul class="a">
                    <li>Armários limpos externamente</li>
                    <li>Vidros e Espelhos Janelas (Por questões de segurança são limpas somente por dentro)</li>
                    <li>Geladeira (externamente)</li>
                    <li>Fogão (externamente)</li>
                    <li>Micro-ondas (externamente)</li>
                    <li>Retirada dos lixos e troca dos sacos Plásticos</li>
                    <li>Limpeza do piso</li>
                </ul>
                <h4>Salas e Quartos</h4>
                <ul class="a">
                    <li>Limpeza do Piso</li>
                    <li>Vidros, espelhos e janelas (Por questões de segurança, janelas localizadas em alturas são limpas
                        somente por dentro)</li>
                    <li>Moveis, decorações e objetos limpos externamente (Por motivos de segurança não movemos móveis
                        pesados que exijam força, para que sejam limpos por baixo)</li>
                    <li>Arrumamos as camas e organizamos o ambiente (As peças para troca da roupa de cama devem estar
                        acessíveis)</li>
                </ul>
                <h4>Banheiros</h4>
                <ul class="a">
                    <li>Box lavado</li>
                    <li>Sanitário lavado, desinfetado e lacrado com uma etiqueta (Exclusivo)</li>
                    <li>Retirada dos lixos e troca dos sacos plásticos</li>
                    <li>Armários (externamente)</li>
                    <li>Vidros e Espelhos</li>
                    <li>Limpeza do piso</li>
                </ul>
            </div>
            <div class="clean-brilho">
                <h3>O que é limpo na Faxina Alto Brilho?</h3>
                <p>Na Faxina Alto Brilho, oferecemos todos os itens listados na Faxina Comum, mais os itens abaixo:</p>
                <h4>Cozinha e Área de serviço</h4>
                <ul class="a">
                    <li>Interior da Geladeira</li>
                    <li>Armários de cozinha e banheiros limpos internamente</li>
                    <li>Limpeza azulejos (Em caso de Áreas com muito bolor, verificar a viabilidade antes)</li>
                    <li>Fornos Elétricos e microondas internamente</li>
                    <li>Piso</li>
                </ul>
                <h4>Banheiros</h4>
                <ul class="a">
                    <li>Armários internamentea</li>
                    <li>Organização de objetos e Armários</li>
                    <li>Azulejos (Em caso de Áreas com muito bolor, verificar a viabilidade antes)</li>
                    <li>Piso</li>
                </ul>
                <h4>Salas e Quartos</h4>
                <ul class="a">
                    <li>Rodapés, portas e batentes</li>
                    <li>Piso</li>
                    <li>Aspirar os Tapetes (forneça o aspirador)</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- fim modal -->

    <!--Produtos inclusos-->
    <div id="included-products" class="none modal-container">
        <div class="modal">
            <input type="button" id="close-products" value="x"
                onclick="modalClose(document.querySelector('#included-products'))">
            <h3>Produtos inclusos</h3>
        </div>
        <div class="modal-description">
            <div class="clean-comun">
                <h3>Na modalidade com todos os produtos inclusos, nossas profissionais Levam:</h3>
                <h4>Produtos</h4>
                <ul class="a">
                    <li>Limpador Multiuso Biodegradável</li>
                    <li>Limpador Limpa vidros Biodegradável</li>
                    <li>Limpador Banheiro Biodegradável</li>
                    <li>Limpador Cozinha Biodegradável</li>
                    <li>Produto para finalização do piso com Aroma</li>
                    <li>Panos Limpos - Diferentes para chão, movéis, Banheiros e Superficies</li>
                </ul>
            </div>
            <div class="clean-brilho">
                <h3>Observações?</h3>
                <h4>Não fornecemos equipamentos como:</h4>
                <ul class="a">
                    <li>Aspirador</li>
                    <li>Vap</li>
                    <li>Enceradeira</li>
                    <li>Extensor (Para limpar vidros altos)</li>
                    <li>Para necessidades especiais ou pós obras, consulte valores para locação.</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Produtos inclusos -->

    <script src="{{ asset('js/clin/simula.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/clinapp/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/mask/masks.js') }}"></script>
</body>

</html>
