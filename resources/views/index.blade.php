<!-- aa -->
@extends('clin.head')
@section('style')
  <link rel="stylesheet" href="{{asset('css/indexclin2.css')}}" media="screen">
@endsection

@section('content')

<body class="u-body"><header class="u-clearfix u-header u-sticky u-white u-header" id="sec-b474"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-logo u-image-1" data-image-width="112" data-image-height="65">
          <img src="{{asset('imagens/clin/logo.svg')}}" class="u-logo-image u-logo-image-1" data-image-width="147.405">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1.25rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-custom-color-4" href="Início.html#sec-84b0" data-page-id="169241702" style="padding: 10px 20px;">Início</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-custom-color-4" href="Início.html#carousel_6a17" data-page-id="169241702" style="padding: 10px 20px;">Quem somos</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-custom-color-4" href="Início.html#sec-a0d5" data-page-id="169241702" style="padding: 10px 20px;">Educlin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-custom-color-4" href="Início.html#carousel_2313" data-page-id="169241702" style="padding: 10px 20px;">Contato</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-custom-color-4" href="{{route('terms')}}" style="padding: 10px 20px;">Termos de uso</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-custom-color-5 u-text-hover-custom-color-4" href="{{route('login')}}"  method="POST" style="padding: 10px 20px;">Minha conta</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Início.html#sec-84b0" data-page-id="169241702" style="padding: 10px 20px;">Início</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Início.html#carousel_6a17" data-page-id="169241702" style="padding: 10px 20px;">Quem somos</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Início.html#sec-a0d5" data-page-id="169241702" style="padding: 10px 20px;">Educlin</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Início.html#carousel_2313" data-page-id="169241702" style="padding: 10px 20px;">Contato</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('terms')}}"style="padding: 10px 20px;">Termos de uso</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('login')}}"  method="POST"  style="padding: 10px 20px;">Minha conta</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="sec-84b0" style="background-image: url('{{ asset('imagens/clin/CleanHouse-101111.jpg')}}');" data-image-width="1600" data-image-height="1506">
      <div class="u-clearfix u-sheet u-valign-bottom-md u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left-xs u-container-style u-layout-cell u-shape-rectangle u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-align-center-sm u-align-left-lg u-align-left-md u-align-left-xl u-text u-text-custom-color-5 u-text-1"><span
                    style="background-color: #fff; border-radius: 10px;">Limpeza,<br>tecnologia,<br>cuidado e&nbsp;<br>
                    <span style="font-weight: 700;">propósito.</span></span>
                  </h1>
                  <a href="{{route('agendamento')}}" class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-btn u-btn-round u-button-style u-custom-color-2 u-radius-10 u-btn-1">Simular valores</a>
                  <a href="{{route('agendamentoComercial')}}" class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-btn u-btn-round u-button-style u-custom-color-3 u-radius-10 u-btn-2">para seu escritório</a>
                </div>
              </div>
              <div class="u-align-left u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-27 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-f3ce">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center-sm u-align-center-xs u-text u-text-custom-color-5 u-text-1">Veja como é fácil:</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1"><span class="u-align-center u-border-7 u-border-custom-color-1 u-icon u-icon-circle u-spacing-22 u-text-custom-color-5 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 484.184 484.184" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6565"></use></svg><svg class="u-svg-content" viewBox="0 0 484.184 484.184" x="0px" y="0px" id="svg-6565" style="enable-background:new 0 0 484.184 484.184;"><g><path d="M309.43,219.944c-19-10.5-39.2-18.5-59.2-26.8c-11.6-4.8-22.7-10.4-32.5-18.2c-19.3-15.4-15.6-40.4,7-50.3   c6.4-2.8,13.1-3.7,19.9-4.1c26.2-1.4,51.1,3.4,74.8,14.8c11.8,5.7,15.7,3.9,19.7-8.4c4.2-13,7.7-26.2,11.6-39.3   c2.6-8.8-0.6-14.6-8.9-18.3c-15.2-6.7-30.8-11.5-47.2-14.1c-21.4-3.3-21.4-3.4-21.5-24.9c-0.1-30.3-0.1-30.3-30.5-30.3   c-4.4,0-8.8-0.1-13.2,0c-14.2,0.4-16.6,2.9-17,17.2c-0.2,6.4,0,12.8-0.1,19.3c-0.1,19-0.2,18.7-18.4,25.3c-44,16-71.2,46-74.1,94   c-2.6,42.5,19.6,71.2,54.5,92.1c21.5,12.9,45.3,20.5,68.1,30.6c8.9,3.9,17.4,8.4,24.8,14.6c21.9,18.1,17.9,48.2-8.1,59.6   c-13.9,6.1-28.6,7.6-43.7,5.7c-23.3-2.9-45.6-9-66.6-19.9c-12.3-6.4-15.9-4.7-20.1,8.6c-3.6,11.5-6.8,23.1-10,34.7   c-4.3,15.6-2.7,19.3,12.2,26.6c19,9.2,39.3,13.9,60,17.2c16.2,2.6,16.7,3.3,16.9,20.1c0.1,7.6,0.1,15.3,0.2,22.9   c0.1,9.6,4.7,15.2,14.6,15.4c11.2,0.2,22.5,0.2,33.7-0.1c9.2-0.2,13.9-5.2,13.9-14.5c0-10.4,0.5-20.9,0.1-31.3   c-0.5-10.6,4.1-16,14.3-18.8c23.5-6.4,43.5-19,58.9-37.8C386.33,329.544,370.03,253.444,309.43,219.944z"></path>
</g></svg></span>
                <p class="u-align-center u-custom-font u-font-open-sans u-large-text u-text u-text-custom-color-4 u-text-variant u-text-2">Simule sua faxina</p>
                <p class="u-align-center u-text u-text-custom-color-1 u-text-3">Faça seu orçamento de forma personalizada de acordo com seu ambiente.<br>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-2"><span class="u-align-center u-border-7 u-border-custom-color-1 u-icon u-icon-circle u-spacing-22 u-text-custom-color-5 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 477.867 477.867" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9f35"></use></svg><svg class="u-svg-content" viewBox="0 0 477.867 477.867" x="0px" y="0px" id="svg-9f35" style="enable-background:new 0 0 477.867 477.867;"><g><g><path d="M119.467,0C110.041,0,102.4,7.641,102.4,17.067V51.2h34.133V17.067C136.533,7.641,128.892,0,119.467,0z"></path>
</g>
</g><g><g><path d="M358.4,0c-9.426,0-17.067,7.641-17.067,17.067V51.2h34.133V17.067C375.467,7.641,367.826,0,358.4,0z"></path>
</g>
</g><g><g><path d="M426.667,51.2h-51.2v68.267c0,9.426-7.641,17.067-17.067,17.067s-17.067-7.641-17.067-17.067V51.2h-204.8v68.267    c0,9.426-7.641,17.067-17.067,17.067s-17.067-7.641-17.067-17.067V51.2H51.2C22.923,51.2,0,74.123,0,102.4v324.267    c0,28.277,22.923,51.2,51.2,51.2h375.467c28.277,0,51.2-22.923,51.2-51.2V102.4C477.867,74.123,454.944,51.2,426.667,51.2z     M443.733,426.667c0,9.426-7.641,17.067-17.067,17.067H51.2c-9.426,0-17.067-7.641-17.067-17.067V204.8h409.6V426.667z"></path>
</g>
</g><g><g><path d="M353.408,243.942c-6.664-6.669-17.472-6.672-24.141-0.009L204.8,368.401l-56.201-56.201    c-6.669-6.664-17.477-6.66-24.141,0.009c-6.664,6.669-6.66,17.477,0.009,24.141l68.267,68.267c6.665,6.663,17.468,6.663,24.132,0    L353.4,268.083C360.068,261.419,360.072,250.611,353.408,243.942z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-custom-font u-font-open-sans u-large-text u-text u-text-custom-color-4 u-text-variant u-text-4">Escolha data e hora</p>
                <p class="u-align-center u-text u-text-custom-color-1 u-text-5">Escolha o dia e a
melhor hora para
que a profissional
inicie o serviço.<br>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-3"><span class="u-align-center u-border-7 u-border-custom-color-1 u-icon u-icon-circle u-spacing-22 u-text-custom-color-5 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e345"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-e345" style="enable-background:new 0 0 512 512;"><g><g><path d="M496,319.996c-8.832,0-16,7.168-16,16v112H32v-192h176c8.832,0,16-7.168,16-16c0-8.832-7.168-16-16-16H32v-64h176    c8.832,0,16-7.168,16-16c0-8.832-7.168-16-16-16H32c-17.664,0-32,14.336-32,32v288c0,17.664,14.336,32,32,32h448    c17.664,0,32-14.336,32-32v-112C512,327.164,504.832,319.996,496,319.996z"></path>
</g>
</g><g><g><path d="M144,319.996H80c-8.832,0-16,7.168-16,16c0,8.832,7.168,16,16,16h64c8.832,0,16-7.168,16-16    C160,327.164,152.832,319.996,144,319.996z"></path>
</g>
</g><g><g><path d="M502.304,81.276l-112-48c-4.064-1.696-8.576-1.696-12.64,0l-112,48c-5.856,2.528-9.664,8.32-9.664,14.72v64    c0,88.032,32.544,139.488,120.032,189.888c2.464,1.408,5.216,2.112,7.968,2.112s5.504-0.704,7.968-2.112    C479.456,299.612,512,248.156,512,159.996v-64C512,89.596,508.192,83.804,502.304,81.276z M480,159.996    c0,73.888-24.448,114.56-96,157.44c-71.552-42.976-96-83.648-96-157.44v-53.44l96-41.152l96,41.152V159.996z"></path>
</g>
</g><g><g><path d="M442.016,131.484c-6.88-5.44-16.928-4.384-22.496,2.496l-50.304,62.912l-19.904-29.76    c-4.96-7.36-14.912-9.312-22.176-4.448c-7.328,4.896-9.344,14.848-4.448,22.176l32,48c2.848,4.256,7.52,6.88,12.64,7.136    c0.224,0,0.48,0,0.672,0c4.832,0,9.44-2.176,12.512-6.016l64-80C450.016,147.068,448.928,137.02,442.016,131.484z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-custom-font u-font-open-sans u-large-text u-text u-text-custom-color-4 u-text-variant u-text-6">Faça o pagamento</p>
                <p class="u-align-center u-text u-text-custom-color-1 u-text-7">Realize o pagamento
de forma segura via
PIX, boleto ou cartão
de crédito.<br>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-4"><span class="u-align-center u-border-7 u-border-custom-color-1 u-icon u-icon-circle u-spacing-22 u-text-custom-color-5 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8ef4"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-8ef4" style="enable-background:new 0 0 512 512;"><g><g><path d="M422,211v-30H30v75c0,69.501,36.669,131.461,91.558,166h207.884c13.48-8.483,26.829-18.594,37.837-30H407    c57.891,0,105-47.109,105-105v-76H422z M482,287c0,41.353-33.647,75-75,75h-16.326C410.287,331.652,422,294.763,422,256v-15h60    V287z"></path>
</g>
</g><g><g><path d="M160.068,0l-16.641,24.961c5.962,3.97,9.375,10.356,9.375,17.52s-3.413,13.55-9.375,17.52    c-14.238,9.492-22.734,25.371-22.734,42.48s8.496,32.988,22.734,42.48L160.067,120c-5.962-3.97-9.375-10.356-9.375-17.52    s3.413-13.55,9.375-17.52c14.239-9.491,22.735-25.37,22.735-42.48C182.802,25.371,174.306,9.492,160.068,0z"></path>
</g>
</g><g><g><path d="M235.068,0l-16.641,24.961c5.962,3.97,9.375,10.356,9.375,17.52s-3.413,13.55-9.375,17.52    c-14.238,9.492-22.734,25.371-22.734,42.48s8.496,32.988,22.734,42.48L235.067,120c-5.962-3.97-9.375-10.356-9.375-17.52    s3.413-13.55,9.375-17.52c14.239-9.491,22.735-25.37,22.735-42.48C257.802,25.371,249.306,9.492,235.068,0z"></path>
</g>
</g><g><g><path d="M310.068,0l-16.641,24.961c5.962,3.97,9.375,10.356,9.375,17.52s-3.413,13.55-9.375,17.52    c-14.238,9.492-22.734,25.371-22.734,42.48s8.496,32.988,22.734,42.48L310.067,120c-5.962-3.97-9.375-10.356-9.375-17.52    s3.413-13.55,9.375-17.52c14.239-9.491,22.735-25.37,22.735-42.48C332.802,25.371,324.306,9.492,310.068,0z"></path>
</g>
</g><g><g><path d="M0,452c0,33.137,26.863,60,60,60h332c33.137,0,60-26.863,60-60H0z"></path>
</g>
</g></svg></span>
                <p class="u-align-center u-custom-font u-font-open-sans u-large-text u-text u-text-custom-color-4 u-text-variant u-text-8">Hora de relaxar</p>
                <p class="u-align-center u-text u-text-custom-color-1 u-text-9">No dia escolhido uma
das profissionais Clin
irá atender o seu lar.<br>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-custom-color-5 u-section-3" id="sec-ef26">
      <div class="u-clearfix u-sheet u-valign-bottom-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-align-center-xs u-text u-text-1">Quer <span style="font-weight: 700;">trabalhar </span>na Clin?
                  </h2>
                  <p class="u-align-center-xs u-custom-font u-heading-font u-text u-text-2">Conheça e faça parte da plataforma que já
a<span style="font-weight: 400;"></span>judou milhares de diaristas
a conquistarem:
                  </p>
                  <ul class="u-custom-font u-custom-list u-heading-font u-indent-4 u-spacing-10 u-text u-text-3">
                    <li style="margin-left: 1.6em;">
                      <div class="u-list-icon u-text-custom-color-2 u-list-icon-1">
                        <svg class="u-svg-content" viewBox="0 0 384 384" id="svg-646c" style="font-size: 1.6em; margin: -1.6em;"><path d="m192 384c105.863281 0 192-86.128906 192-192 0-18.273438-2.550781-36.28125-7.601562-53.527344-2.488282-8.480468-11.34375-13.351562-19.847657-10.863281-8.488281 2.480469-13.34375 11.367187-10.863281 19.847656 4.183594 14.328125 6.3125 29.320313 6.3125 44.542969 0 88.222656-71.777344 160-160 160s-160-71.777344-160-160 71.777344-160 160-160c32.0625 0 62.910156 9.375 89.207031 27.105469 7.320313 4.941406 17.273438 3 22.207031-4.320313 4.9375-7.328125 3.011719-17.273437-4.316406-22.210937-31.601562-21.308594-68.632812-32.574219-107.097656-32.574219-105.863281 0-192 86.128906-192 192s86.136719 192 192 192zm0 0"></path><path d="m356.6875 36.6875-164.6875 164.679688-52.6875-52.679688c-6.25-6.246094-16.375-6.246094-22.625 0-6.246094 6.25-6.246094 16.375 0 22.625l64 64c3.128906 3.128906 7.214844 4.6875 11.3125 4.6875s8.183594-1.558594 11.3125-4.6875l176-176c6.246094-6.25 6.246094-16.375 0-22.625-6.25-6.246094-16.375-6.246094-22.625 0zm0 0"></path></svg>
                      </div>
                      <span style="font-size: 1.25rem; font-weight: 700;">&nbsp; Agenda cheia</span>
                    </li>
                    <li style="margin-left: 1.6em;">
                      <div class="u-list-icon u-text-custom-color-2 u-list-icon-2">
                        <svg class="u-svg-content" viewBox="0 0 384 384" id="svg-646c" style="font-size: 1.6em; margin: -1.6em;"><path d="m192 384c105.863281 0 192-86.128906 192-192 0-18.273438-2.550781-36.28125-7.601562-53.527344-2.488282-8.480468-11.34375-13.351562-19.847657-10.863281-8.488281 2.480469-13.34375 11.367187-10.863281 19.847656 4.183594 14.328125 6.3125 29.320313 6.3125 44.542969 0 88.222656-71.777344 160-160 160s-160-71.777344-160-160 71.777344-160 160-160c32.0625 0 62.910156 9.375 89.207031 27.105469 7.320313 4.941406 17.273438 3 22.207031-4.320313 4.9375-7.328125 3.011719-17.273437-4.316406-22.210937-31.601562-21.308594-68.632812-32.574219-107.097656-32.574219-105.863281 0-192 86.128906-192 192s86.136719 192 192 192zm0 0"></path><path d="m356.6875 36.6875-164.6875 164.679688-52.6875-52.679688c-6.25-6.246094-16.375-6.246094-22.625 0-6.246094 6.25-6.246094 16.375 0 22.625l64 64c3.128906 3.128906 7.214844 4.6875 11.3125 4.6875s8.183594-1.558594 11.3125-4.6875l176-176c6.246094-6.25 6.246094-16.375 0-22.625-6.25-6.246094-16.375-6.246094-22.625 0zm0 0"></path></svg>
                      </div>
                      <span style="font-size: 1.25rem; font-weight: 700;">&nbsp;  Renda mensal de até R$ 4 mil<span style="font-weight: 400;"></span>
                      </span>
                    </li>
                    <li style="margin-left: 1.6em;">
                      <div class="u-list-icon u-text-custom-color-2 u-list-icon-3">
                        <svg class="u-svg-content" viewBox="0 0 384 384" id="svg-646c" style="font-size: 1.6em; margin: -1.6em;"><path d="m192 384c105.863281 0 192-86.128906 192-192 0-18.273438-2.550781-36.28125-7.601562-53.527344-2.488282-8.480468-11.34375-13.351562-19.847657-10.863281-8.488281 2.480469-13.34375 11.367187-10.863281 19.847656 4.183594 14.328125 6.3125 29.320313 6.3125 44.542969 0 88.222656-71.777344 160-160 160s-160-71.777344-160-160 71.777344-160 160-160c32.0625 0 62.910156 9.375 89.207031 27.105469 7.320313 4.941406 17.273438 3 22.207031-4.320313 4.9375-7.328125 3.011719-17.273437-4.316406-22.210937-31.601562-21.308594-68.632812-32.574219-107.097656-32.574219-105.863281 0-192 86.128906-192 192s86.136719 192 192 192zm0 0"></path><path d="m356.6875 36.6875-164.6875 164.679688-52.6875-52.679688c-6.25-6.246094-16.375-6.246094-22.625 0-6.246094 6.25-6.246094 16.375 0 22.625l64 64c3.128906 3.128906 7.214844 4.6875 11.3125 4.6875s8.183594-1.558594 11.3125-4.6875l176-176c6.246094-6.25 6.246094-16.375 0-22.625-6.25-6.246094-16.375-6.246094-22.625 0zm0 0"></path></svg>
                      </div>
                      <span style="font-size: 1.25rem; font-weight: 700;">&nbsp; Certificações</span>
                    </li>
                    <li style="margin-left: 1.6em;">
                      <div class="u-list-icon u-text-custom-color-2 u-list-icon-1">
                        <svg class="u-svg-content" viewBox="0 0 384 384" id="svg-646c" style="font-size: 1.6em; margin: -1.6em;"><path d="m192 384c105.863281 0 192-86.128906 192-192 0-18.273438-2.550781-36.28125-7.601562-53.527344-2.488282-8.480468-11.34375-13.351562-19.847657-10.863281-8.488281 2.480469-13.34375 11.367187-10.863281 19.847656 4.183594 14.328125 6.3125 29.320313 6.3125 44.542969 0 88.222656-71.777344 160-160 160s-160-71.777344-160-160 71.777344-160 160-160c32.0625 0 62.910156 9.375 89.207031 27.105469 7.320313 4.941406 17.273438 3 22.207031-4.320313 4.9375-7.328125 3.011719-17.273437-4.316406-22.210937-31.601562-21.308594-68.632812-32.574219-107.097656-32.574219-105.863281 0-192 86.128906-192 192s86.136719 192 192 192zm0 0"></path><path d="m356.6875 36.6875-164.6875 164.679688-52.6875-52.679688c-6.25-6.246094-16.375-6.246094-22.625 0-6.246094 6.25-6.246094 16.375 0 22.625l64 64c3.128906 3.128906 7.214844 4.6875 11.3125 4.6875s8.183594-1.558594 11.3125-4.6875l176-176c6.246094-6.25 6.246094-16.375 0-22.625-6.25-6.246094-16.375-6.246094-22.625 0zm0 0"></path></svg>
                      </div>
                      <span style="font-size: 1.25rem; font-weight: 700;">&nbsp; As melhores avaliações<br>
                      </span>
                    </li>
                    <li style="margin-left: 1.6em;">
                      <div class="u-list-icon u-text-custom-color-2 u-list-icon-1">
                        <svg class="u-svg-content" viewBox="0 0 384 384" id="svg-646c" style="font-size: 1.6em; margin: -1.6em;"><path d="m192 384c105.863281 0 192-86.128906 192-192 0-18.273438-2.550781-36.28125-7.601562-53.527344-2.488282-8.480468-11.34375-13.351562-19.847657-10.863281-8.488281 2.480469-13.34375 11.367187-10.863281 19.847656 4.183594 14.328125 6.3125 29.320313 6.3125 44.542969 0 88.222656-71.777344 160-160 160s-160-71.777344-160-160 71.777344-160 160-160c32.0625 0 62.910156 9.375 89.207031 27.105469 7.320313 4.941406 17.273438 3 22.207031-4.320313 4.9375-7.328125 3.011719-17.273437-4.316406-22.210937-31.601562-21.308594-68.632812-32.574219-107.097656-32.574219-105.863281 0-192 86.128906-192 192s86.136719 192 192 192zm0 0"></path><path d="m356.6875 36.6875-164.6875 164.679688-52.6875-52.679688c-6.25-6.246094-16.375-6.246094-22.625 0-6.246094 6.25-6.246094 16.375 0 22.625l64 64c3.128906 3.128906 7.214844 4.6875 11.3125 4.6875s8.183594-1.558594 11.3125-4.6875l176-176c6.246094-6.25 6.246094-16.375 0-22.625-6.25-6.246094-16.375-6.246094-22.625 0zm0 0"></path></svg>
                      </div>
                      <span style="font-size: 1.25rem; font-weight: 700;">&nbsp; Valorização</span>
                    </li>
                    <li style="margin-left: 1.6em;">
                      <div class="u-list-icon u-text-custom-color-2 u-list-icon-1">
                        <svg class="u-svg-content" viewBox="0 0 384 384" id="svg-646c" style="font-size: 1.6em; margin: -1.6em;"><path d="m192 384c105.863281 0 192-86.128906 192-192 0-18.273438-2.550781-36.28125-7.601562-53.527344-2.488282-8.480468-11.34375-13.351562-19.847657-10.863281-8.488281 2.480469-13.34375 11.367187-10.863281 19.847656 4.183594 14.328125 6.3125 29.320313 6.3125 44.542969 0 88.222656-71.777344 160-160 160s-160-71.777344-160-160 71.777344-160 160-160c32.0625 0 62.910156 9.375 89.207031 27.105469 7.320313 4.941406 17.273438 3 22.207031-4.320313 4.9375-7.328125 3.011719-17.273437-4.316406-22.210937-31.601562-21.308594-68.632812-32.574219-107.097656-32.574219-105.863281 0-192 86.128906-192 192s86.136719 192 192 192zm0 0"></path><path d="m356.6875 36.6875-164.6875 164.679688-52.6875-52.679688c-6.25-6.246094-16.375-6.246094-22.625 0-6.246094 6.25-6.246094 16.375 0 22.625l64 64c3.128906 3.128906 7.214844 4.6875 11.3125 4.6875s8.183594-1.558594 11.3125-4.6875l176-176c6.246094-6.25 6.246094-16.375 0-22.625-6.25-6.246094-16.375-6.246094-22.625 0zm0 0"></path></svg>
                      </div>
                      <span style="font-size: 1.25rem; font-weight: 700;">&nbsp; Reconhecimento<br>
                      </span>
                    </li>
                    <li style="margin-left: 1.6em;">
                      <div class="u-list-icon u-text-custom-color-2 u-list-icon-1">
                        <svg class="u-svg-content" viewBox="0 0 384 384" id="svg-646c" style="font-size: 1.6em; margin: -1.6em;"><path d="m192 384c105.863281 0 192-86.128906 192-192 0-18.273438-2.550781-36.28125-7.601562-53.527344-2.488282-8.480468-11.34375-13.351562-19.847657-10.863281-8.488281 2.480469-13.34375 11.367187-10.863281 19.847656 4.183594 14.328125 6.3125 29.320313 6.3125 44.542969 0 88.222656-71.777344 160-160 160s-160-71.777344-160-160 71.777344-160 160-160c32.0625 0 62.910156 9.375 89.207031 27.105469 7.320313 4.941406 17.273438 3 22.207031-4.320313 4.9375-7.328125 3.011719-17.273437-4.316406-22.210937-31.601562-21.308594-68.632812-32.574219-107.097656-32.574219-105.863281 0-192 86.128906-192 192s86.136719 192 192 192zm0 0"></path><path d="m356.6875 36.6875-164.6875 164.679688-52.6875-52.679688c-6.25-6.246094-16.375-6.246094-22.625 0-6.246094 6.25-6.246094 16.375 0 22.625l64 64c3.128906 3.128906 7.214844 4.6875 11.3125 4.6875s8.183594-1.558594 11.3125-4.6875l176-176c6.246094-6.25 6.246094-16.375 0-22.625-6.25-6.246094-16.375-6.246094-22.625 0zm0 0"></path></svg>
                      </div>
                      <span style="font-size: 20px; font-weight: 700;"><b style="">&nbsp; Profissionalismo</b>
                      </span>
                    </li>
                  </ul>
                  <a href="{{route('eduClin')}}" class="u-align-center-xs u-btn u-btn-round u-button-style u-custom-color-2 u-radius-6 u-btn-1">Saber mais</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-custom-color-3 u-shape u-shape-circle u-shape-1"></div>
                  <div class="u-palette-1-base u-shape u-shape-circle u-shape-2"></div>
                  <div class="u-align-center-xs u-expanded-width-md u-image u-image-circle u-image-1" style="background-image: url('{{ asset('imagens/clin/CleanHouse-301.jpg')}}');" alt="" data-image-width="1600" data-image-height="975"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-4 u-section-4" id="carousel_4c51">
      <div class="u-clearfix u-sheet u-valign-top-md u-valign-top-sm u-sheet-1">
        <div class="u-custom-color-1 u-opacity u-opacity-40 u-shape u-shape-circle u-shape-1"></div>
        <div class="u-custom-color-1 u-opacity u-opacity-20 u-shape u-shape-circle u-shape-2"></div>
        <div class="u-custom-color-1 u-opacity u-opacity-50 u-shape u-shape-circle u-shape-3"></div>
        <div class="u-custom-color-3 u-opacity u-opacity-20 u-shape u-shape-circle u-shape-4"></div>
        <h1 class="u-align-center u-text u-text-white u-text-1">Avaliações</h1>
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-custom-background u-custom-color-1 u-list-item u-radius-20 u-repeater-item u-shape-round u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <p class="u-align-center u-text u-text-white u-text-2"><span class="u-icon u-icon-1"><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg><img></span>&nbsp;Algum tempo que contratei os serviços dessa agência e estou muito satisfeita,recomendo.&nbsp;&nbsp;<span class="u-icon u-icon-2"><svg class="u-svg-content" viewBox="0 0 98.829 98.829" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M96.76,41.603C91.511,22.831,78.562,9.204,65.975,9.204c-1.011,0-2.021,0.088-3.005,0.262    c-0.558,0.098-1.046,0.426-1.348,0.902c-0.301,0.479-0.386,1.061-0.233,1.605l2.591,9.268c0.25,0.895,1.113,1.5,2.01,1.459    l0.206-0.004c4.668,0,13.199,6.996,17.548,22.545c0.172,0.617,0.335,1.248,0.492,1.906c-4.882-2.416-10.706-2.975-15.98-1.506    C56.358,48.97,49.388,61.356,52.714,73.252c2.696,9.639,11.563,16.373,21.563,16.373c2.037,0,4.071-0.281,6.046-0.834    c7.846-2.193,13.745-8.707,16.611-18.338C99.521,61.764,99.456,51.249,96.76,41.603z"></path><path d="M14.088,9.206c-1.009,0-2.02,0.086-3.003,0.26c-0.557,0.096-1.046,0.426-1.347,0.902    c-0.301,0.479-0.386,1.061-0.234,1.605l2.592,9.268c0.25,0.895,1.097,1.5,2.01,1.459l0.204-0.004    c4.668,0,13.2,6.996,17.549,22.545c0.173,0.621,0.336,1.252,0.492,1.906c-4.884-2.416-10.706-2.975-15.98-1.506    C4.475,48.97-2.497,61.356,0.831,73.252c2.696,9.639,11.563,16.373,21.563,16.373c2.037,0,4.071-0.281,6.047-0.834    c7.845-2.193,13.744-8.707,16.611-18.338c2.586-8.689,2.522-19.205-0.175-28.852C39.625,22.831,26.678,9.206,14.088,9.206z"></path>
</g>
</g></svg><img></span>
                </p>
                <h6 class="u-align-center u-text u-text-3">LUCIANA r. 18/05/2021</h6>
              </div>
            </div>
            <div class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-container-style u-custom-background u-custom-color-1 u-list-item u-radius-20 u-repeater-item u-shape-round u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <p class="u-align-center u-text u-text-white u-text-4"><span class="u-icon u-icon-3"><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path><path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
</g>
</g></svg><img></span>&nbsp;maravilho o serviço e o atendimento! respondem super rápido! profissionais de altíssima qualidade!.&nbsp;&nbsp;<span class="u-icon u-icon-4"><svg class="u-svg-content" viewBox="0 0 98.829 98.829" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M96.76,41.603C91.511,22.831,78.562,9.204,65.975,9.204c-1.011,0-2.021,0.088-3.005,0.262    c-0.558,0.098-1.046,0.426-1.348,0.902c-0.301,0.479-0.386,1.061-0.233,1.605l2.591,9.268c0.25,0.895,1.113,1.5,2.01,1.459    l0.206-0.004c4.668,0,13.199,6.996,17.548,22.545c0.172,0.617,0.335,1.248,0.492,1.906c-4.882-2.416-10.706-2.975-15.98-1.506    C56.358,48.97,49.388,61.356,52.714,73.252c2.696,9.639,11.563,16.373,21.563,16.373c2.037,0,4.071-0.281,6.046-0.834    c7.846-2.193,13.745-8.707,16.611-18.338C99.521,61.764,99.456,51.249,96.76,41.603z"></path><path d="M14.088,9.206c-1.009,0-2.02,0.086-3.003,0.26c-0.557,0.096-1.046,0.426-1.347,0.902    c-0.301,0.479-0.386,1.061-0.234,1.605l2.592,9.268c0.25,0.895,1.097,1.5,2.01,1.459l0.204-0.004    c4.668,0,13.2,6.996,17.549,22.545c0.173,0.621,0.336,1.252,0.492,1.906c-4.884-2.416-10.706-2.975-15.98-1.506    C4.475,48.97-2.497,61.356,0.831,73.252c2.696,9.639,11.563,16.373,21.563,16.373c2.037,0,4.071-0.281,6.047-0.834    c7.845-2.193,13.744-8.707,16.611-18.338c2.586-8.689,2.522-19.205-0.175-28.852C39.625,22.831,26.678,9.206,14.088,9.206z"></path>
</g>
</g></svg><img></span>
                </p>
                <h6 class="u-align-center u-text u-text-5">maria fernanda r. 12/05/2021</h6>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-custom-color-3 u-gallery-nav u-gallery-nav-prev u-icon-circle u-opacity u-opacity-70 u-spacing-5 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-custom-color-3 u-gallery-nav u-gallery-nav-next u-icon-circle u-opacity u-opacity-70 u-spacing-5 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="carousel_6a17">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-sheet-1">
        <h2 class="u-text u-text-custom-color-1 u-text-1">Propósito</h2>
        <div class="u-custom-color-3 u-opacity u-opacity-20 u-shape u-shape-circle u-shape-1"></div>
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="{{asset('imagens/clin/logo.svg')}}" alt="" data-image-width="112" data-image-height="65">
        <p class="u-text u-text-custom-color-1 u-text-2"><b>Limpeza é cuidado.&nbsp;</b>Cuidado com o ambiente e cuidado com as pessoas.

Nosso propósito é espalhar limpeza entregando o melhor serviço e cuidando das nossas profissionais.
<br> Existem no Brasil, atualmente, cerca de 7 milhões de diaristas que no dia a dia fazem de lares e escritórios ambientes mais limpos, seguros e felizes.

<br> Sabemos que profissionais bem remuneradas, satisfeitas, valorizadas e que contam com um suporte podem entregar sempre o melhor serviço criando uma rotina limpa e feliz.<br>
        </p>
        <div class="u-custom-color-3 u-opacity u-opacity-20 u-shape u-shape-circle u-shape-2"></div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-1 u-section-6" id="sec-5be2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
                <h1 class="u-align-center u-text u-title u-text-1" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">4 anos</h1>
                <p class="u-align-center u-text u-text-2">no mercado de limpeza</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                <h1 class="u-align-center u-text u-title u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">+30 mil</h1>
                <p class="u-align-center u-text u-text-4">Faxinas<br>realizadas
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                <h1 class="u-align-center u-text u-title u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">+12 mil</h1>
                <p class="u-align-center u-text u-text-6">ambientes<br>limpos
                </p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                <h1 class="u-align-center u-text u-title u-text-7" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">+ 2 mil</h1>
                <p class="u-align-center u-text u-text-8">Profissionais cadastradas</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-7" id="sec-a0d5">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-opacity u-opacity-20 u-shape u-shape-svg u-text-palette-1-base u-shape-1">
              <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d61e"></use></svg>
              <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-d61e" style="enable-background:new 0 0 160 160;"><path d="M10.3,39.9c-18.2,24.9-9.2,62.5,4,87.4c8.2,15.4,23,36.1,48.6,32.2c5.8-0.9,11.1-3.2,16.9-4.3c17.8-3.4,37.9,4.7,54.5-1.5
	c6.6-2.5,11.6-6.9,15.5-11.8c12.2-15.3,13.7-35.6,3.8-51.9c-6.9-11.5-19-20.9-23.6-33.1c-4.5-11.9-1.4-24.9-4.7-37.1
	C121.1,5,103.7-5.6,85.7,3.1c-6.8,3.3-12.6,7.7-20,10.2C58,15.9,49.5,16.6,41.6,19C26.8,23.6,16.7,31,10.3,39.9z"></path></svg>
            </div>
            <img class="u-image u-image-default u-image-1" src="{{ asset('imagens/clin/Educlin-5.png')}}" alt="" data-image-width="1080" data-image-height="1081">
            <h2 class="u-align-center u-text u-text-custom-color-1 u-text-1">Estudar é a principal forma de conquistar seu espaço no
mercado de trabalho. E até mesmo na limpeza o <span style="font-weight: 700;">conhecimento é diferencial.</span>
            </h2>
            <a href="{{route('eduClin')}}" class="u-btn u-btn-round u-button-style u-custom-color-1 u-radius-6 u-btn-1">Conheça o Educlin</a>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-8" id="sec-b504">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <h3 class="u-align-center u-text u-text-custom-color-1 u-text-1">Empresas parceiras</h3>
        <div class="u-gallery u-layout-horizontal u-lightbox u-no-transition u-show-text-on-hover u-gallery-1">
          <div class="u-gallery-inner"><div class="u-effect-fade u-gallery-item u-gallery-item-1"><div class="u-back-slide" data-image-width="770" data-image-height="367"><img class="u-back-image" src="{{asset('imagens/clin/Claro.png')}}">
</div><div class="u-over-slide u-shading u-over-slide-1"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-gallery-item-2"><div class="u-back-slide" data-image-width="300" data-image-height="160"><img class="u-back-image" src="{{asset('imagens/clin/dufry.jpg')}}">
</div><div class="u-over-slide u-shading u-over-slide-2"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-gallery-item-3"><div class="u-back-slide" data-image-width="300" data-image-height="160"><img class="u-back-image" src="{{asset('imagens/clin/laserfast.png')}}">
</div><div class="u-over-slide u-shading u-over-slide-3"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-gallery-item-4"><div class="u-back-slide" data-image-width="300" data-image-height="160"><img class="u-back-image" src="{{asset('imagens/clin/livup.png')}}">
</div><div class="u-over-slide u-shading u-over-slide-4"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-gallery-item-5"><div class="u-back-slide" data-image-width="300" data-image-height="160"><img class="u-back-image" src="{{asset('imagens/clin/apolar.png')}}">
</div><div class="u-over-slide u-shading u-over-slide-5"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-gallery-item-6"><div class="u-back-slide" data-image-width="620" data-image-height="330"><img class="u-back-image" src="{{asset('imagens/clin/candyshop.png')}}">
</div><div class="u-over-slide u-shading u-over-slide-6"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div></div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <!-- <section class="u-clearfix u-section-8" id="sec-b504">
      <h3 class="u-align-center u-text u-text-custom-color-1 u-text-1">Empresas parceiras</h3>
      <div class="u-expanded-width u-gallery u-layout-horizontal u-lightbox u-no-transition u-show-text-on-hover u-gallery-1">
        <div class="u-gallery-inner"><div class="u-effect-fade u-gallery-item u-gallery-item-1"><div class="u-back-slide" data-image-width="770" data-image-height="367"><img class="u-back-image" src="{{asset('imagens/clin/Claro.png')}}">
</div><div class="u-over-slide u-shading u-over-slide-1"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-gallery-item-2"><div class="u-back-slide" data-image-width="300" data-image-height="160"><img class="u-back-image" src="{{asset('imagens/clin/dufry.jpg')}}">
</div><div class="u-over-slide u-shading u-over-slide-2"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-gallery-item-3"><div class="u-back-slide" data-image-width="300" data-image-height="160"><img class="u-back-image" src="{{asset('imagens/clin/laserfast.png')}}">
</div><div class="u-over-slide u-shading u-over-slide-3"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-gallery-item-4"><div class="u-back-slide" data-image-width="300" data-image-height="160"><img class="u-back-image" src="{{asset('imagens/clin/livup.png')}}">
</div><div class="u-over-slide u-shading u-over-slide-4"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-gallery-item-5"><div class="u-back-slide" data-image-width="300" data-image-height="160"><img class="u-back-image" src="{{asset('imagens/clin/apolar.png')}}">
</div><div class="u-over-slide u-shading u-over-slide-5"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div><div class="u-effect-fade u-gallery-item u-gallery-item-6"><div class="u-back-slide" data-image-width="620" data-image-height="330"><img class="u-back-image" src="{{asset('imagens/clin/candyshop.png')}}">
</div><div class="u-over-slide u-shading u-over-slide-6"><h3 class="u-gallery-heading"></h3><p class="u-gallery-text"></p>
</div>
</div></div>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
        </a>
        <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
        </a>
      </div>
    </section> -->
    <section class="u-align-center u-clearfix u-image u-shading u-section-9" style="background-image: url('{{ asset('imagens/clin/CleanHouse-19.jpg')}}');" data-image-width="1600" data-image-height="1067" id="carousel_2313">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-rotation-parent u-rotation-parent-1"><span class="u-hidden-lg u-hidden-md u-hidden-xl u-icon u-icon-circle u-rotate-90 u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e5b5"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-e5b5" style="enable-background:new 0 0 512 512;"><g><g><path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M335.083,271.083    L228.416,377.749c-4.16,4.16-9.621,6.251-15.083,6.251c-5.461,0-10.923-2.091-15.083-6.251c-8.341-8.341-8.341-21.824,0-30.165    L289.835,256l-91.584-91.584c-8.341-8.341-8.341-21.824,0-30.165s21.824-8.341,30.165,0l106.667,106.667    C343.424,249.259,343.424,262.741,335.083,271.083z"></path>
</g>
</g></svg></span>
        </div>
        <p class="u-large-text u-text u-text-variant u-text-1">Queremos ficar em contato com você! Siga-nos nas redes sociais para que possamos manter contato.</p>
        <div class="u-align-left u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" target="_blank" href="https://www.facebook.com/CleanHouseExpressCTBA/" title="facebook"><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c6a2"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-c6a2"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg>


        </span>
          </a>
          <a class="u-social-url" target="_blank" href="https://www.instagram.com/clin.app/" title="instagram"><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2c49"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-2c49"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg>


        </span>
          </a>
        </div>
        <h4 class="u-align-left u-text u-text-2">Contato</h4>
        <p class="u-align-justify u-text u-text-3">Horário de atendimento:<br>Segunda a Sexta das 7h às 18h<br>Finais de semana e feriados, das 8h às 17h<br>
          <br>(41) 98875-4815<br>
          <br>&nbsp;Nº 731, Sala 2003, Centro - Curitiba - PR<br>
          <br>contato@clin.com.br
        </p><span class="u-align-right-md u-align-right-sm u-align-right-xs u-icon u-icon-circle u-text-palette-1-base u-icon-4" data-href="https://play.google.com/store/apps/details?id=br.com.cleanhouseparceiras"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 206.66667 80" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-799b"></use></svg><svg class="u-svg-content" viewBox="0 0 206.66667 80" id="svg-799b"><metadata id="metadata8"><rdf:rdf><cc:work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type><dc:title></dc:title>
</cc:work>
</rdf:rdf>
</metadata><defs id="defs6"><clipPath clipPathUnits="userSpaceOnUse" id="clipPath18"><path d="M 0,60 H 155 V 0 H 0 Z" id="path16" inkscape:connector-curvature="0"></path>
</clipPath><clipPath clipPathUnits="userSpaceOnUse" id="clipPath26"><path d="M 0,60 H 155 V 0 H 0 Z" id="path24" inkscape:connector-curvature="0"></path>
</clipPath><linearGradient x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(-16.782402,-16.782402,16.782402,-16.782402,31.799738,41.290287)" spreadMethod="pad" id="linearGradient68"><stop style="stop-opacity:1;stop-color:#00a0ff" offset="0" id="stop56"></stop><stop style="stop-opacity:1;stop-color:#00a1ff" offset="0.00657445" id="stop58"></stop><stop style="stop-opacity:1;stop-color:#00beff" offset="0.2601" id="stop60"></stop><stop style="stop-opacity:1;stop-color:#00d2ff" offset="0.5122" id="stop62"></stop><stop style="stop-opacity:1;stop-color:#00dfff" offset="0.7604" id="stop64"></stop><stop style="stop-opacity:1;stop-color:#00e3ff" offset="1" id="stop66"></stop>
</linearGradient><linearGradient x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(-24.196898,0,0,-24.196898,43.834377,29.998548)" spreadMethod="pad" id="linearGradient92"><stop style="stop-opacity:1;stop-color:#ffe000" offset="0" id="stop84"></stop><stop style="stop-opacity:1;stop-color:#ffbd00" offset="0.4087" id="stop86"></stop><stop style="stop-opacity:1;stop-color:#ffa500" offset="0.7754" id="stop88"></stop><stop style="stop-opacity:1;stop-color:#ff9c00" offset="1" id="stop90"></stop>
</linearGradient><linearGradient x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(-22.758278,-22.758278,22.758278,-22.758278,34.82695,27.703901)" spreadMethod="pad" id="linearGradient112"><stop style="stop-opacity:1;stop-color:#ff3a44" offset="0" id="stop108"></stop><stop style="stop-opacity:1;stop-color:#c31162" offset="1" id="stop110"></stop>
</linearGradient><linearGradient x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(10.162522,-10.162522,10.162522,10.162522,17.297329,49.823822)" spreadMethod="pad" id="linearGradient138"><stop style="stop-opacity:1;stop-color:#32a071" offset="0" id="stop128"></stop><stop style="stop-opacity:1;stop-color:#2da771" offset="0.0685" id="stop130"></stop><stop style="stop-opacity:1;stop-color:#15cf74" offset="0.4762" id="stop132"></stop><stop style="stop-opacity:1;stop-color:#06e775" offset="0.8009" id="stop134"></stop><stop style="stop-opacity:1;stop-color:#00f076" offset="1" id="stop136"></stop>
</linearGradient><clipPath clipPathUnits="userSpaceOnUse" id="clipPath148"><path d="M 0,60 H 155 V 0 H 0 Z" id="path146" inkscape:connector-curvature="0"></path>
</clipPath><clipPath clipPathUnits="userSpaceOnUse" id="clipPath156"><path d="M 20.4354,25.8681 H 37.1219 V 17.1387 H 20.4354 Z" id="path154" inkscape:connector-curvature="0"></path>
</clipPath><clipPath clipPathUnits="userSpaceOnUse" id="clipPath172"><path d="m 19.9726,19.0866 h 0.5373 v -1.551 h -0.5373 z" id="path170" inkscape:connector-curvature="0"></path>
</clipPath><clipPath clipPathUnits="userSpaceOnUse" id="clipPath188"><path d="M 37.0288,29.9986 H 43.063 V 25.7751 H 37.0288 Z" id="path186" inkscape:connector-curvature="0"></path>
</clipPath><clipPath clipPathUnits="userSpaceOnUse" id="clipPath204"><path d="M 19.9726,42.8595 H 43.063 V 29.999 H 19.9726 Z" id="path202" inkscape:connector-curvature="0"></path>
</clipPath>
</defs><sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="1600" inkscape:window-height="837" id="namedview4" showgrid="false" inkscape:zoom="1.5670398" inkscape:cx="-4.331603" inkscape:cy="169.75855" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" inkscape:current-layer="g14"></sodipodi:namedview><g id="g10" inkscape:groupmode="layer" inkscape:label="disponivel-google-play-badge" transform="matrix(1.3333333,0,0,-1.3333333,0,80)"><g id="g12"><g id="g14" clip-path="url(#clipPath18)"><g id="g20" inkscape:export-filename="G:\Users\suitedoalex\sites\disponivel-google-play-badge-7.png" inkscape:export-xdpi="26.666666" inkscape:export-ydpi="26.666666"></g><g id="g34" transform="translate(140.0001,10.0001)" inkscape:export-filename="G:\Users\suitedoalex\sites\disponivel-google-play-badge-7.png" inkscape:export-xdpi="26.666666" inkscape:export-ydpi="26.666666"><path d="m 0,0 h -125 c -2.75,0 -5,2.25 -5,5 v 30 c 0,2.75 2.25,5 5,5 H 0 c 2.75,0 5,-2.25 5,-5 V 5 C 5,2.25 2.75,0 0,0" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path36" inkscape:connector-curvature="0"></path>
</g><g id="g38" transform="translate(140.0001,49.9999)" inkscape:export-filename="G:\Users\suitedoalex\sites\disponivel-google-play-badge-7.png" inkscape:export-xdpi="26.666666" inkscape:export-ydpi="26.666666"><path d="m 0,0 h -125 c -2.75,0 -5,-2.25 -5,-5 v -30 c 0,-2.75 2.25,-5 5,-5 H 0 c 2.75,0 5,2.25 5,5 V -5 C 5,-2.25 2.75,0 0,0 m 0,-0.8 c 2.316,0 4.2,-1.884 4.2,-4.2 v -30 c 0,-2.316 -1.884,-4.2 -4.2,-4.2 h -125 c -2.316,0 -4.2,1.884 -4.2,4.2 v 30 c 0,2.316 1.884,4.2 4.2,4.2 H 0" style="fill:#a6a6a6;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path40" inkscape:connector-curvature="0"></path>
</g><path d="m 116.936,20 h 1.866 v 12.501 h -1.866 z m 16.807,7.998 -2.139,-5.42 h -0.064 l -2.22,5.42 h -2.01 l 3.329,-7.575 -1.897,-4.214 h 1.945 l 5.131,11.789 z M 123.161,21.42 c -0.612,0 -1.464,0.305 -1.464,1.062 0,0.964 1.061,1.334 1.978,1.334 0.82,0 1.207,-0.177 1.705,-0.418 -0.145,-1.158 -1.142,-1.978 -2.219,-1.978 m 0.225,6.851 c -1.351,0 -2.751,-0.595 -3.329,-1.914 l 1.656,-0.691 c 0.354,0.691 1.013,0.917 1.705,0.917 0.965,0 1.946,-0.579 1.962,-1.609 v -0.128 c -0.338,0.193 -1.061,0.482 -1.946,0.482 -1.785,0 -3.603,-0.981 -3.603,-2.814 0,-1.673 1.464,-2.751 3.104,-2.751 1.255,0 1.947,0.563 2.381,1.223 h 0.064 v -0.965 h 1.801 v 4.793 c 0,2.219 -1.656,3.457 -3.795,3.457 M 111.854,26.476 H 109.2 v 4.285 h 2.654 c 1.395,0 2.187,-1.155 2.187,-2.142 0,-0.969 -0.792,-2.143 -2.187,-2.143 m -0.048,6.025 h -4.471 V 20 h 1.865 v 4.736 h 2.606 c 2.068,0 4.101,1.498 4.101,3.883 0,2.385 -2.033,3.882 -4.101,3.882 M 87.425,21.418 c -1.289,0 -2.368,1.079 -2.368,2.561 0,1.498 1.079,2.594 2.368,2.594 1.273,0 2.271,-1.096 2.271,-2.594 0,-1.482 -0.998,-2.561 -2.271,-2.561 m 2.143,5.88 h -0.065 c -0.419,0.499 -1.224,0.95 -2.239,0.95 -2.127,0 -4.076,-1.868 -4.076,-4.269 0,-2.384 1.949,-4.237 4.076,-4.237 1.015,0 1.82,0.451 2.239,0.967 h 0.065 v -0.613 c 0,-1.627 -0.87,-2.497 -2.272,-2.497 -1.144,0 -1.853,0.822 -2.143,1.515 l -1.627,-0.677 c 0.467,-1.128 1.708,-2.513 3.77,-2.513 2.191,0 4.044,1.289 4.044,4.43 v 7.637 H 89.568 Z M 92.629,20 h 1.869 v 12.502 h -1.869 z m 4.623,4.124 c -0.048,1.643 1.273,2.481 2.223,2.481 0.742,0 1.37,-0.37 1.579,-0.902 z m 5.8,1.418 c -0.354,0.95 -1.434,2.706 -3.641,2.706 -2.191,0 -4.011,-1.723 -4.011,-4.253 0,-2.384 1.804,-4.253 4.22,-4.253 1.95,0 3.078,1.192 3.545,1.885 l -1.45,0.967 c -0.483,-0.709 -1.144,-1.176 -2.095,-1.176 -0.95,0 -1.627,0.435 -2.062,1.288 l 5.687,2.353 z m -45.308,1.401 v -1.804 h 4.317 c -0.129,-1.015 -0.467,-1.756 -0.982,-2.271 -0.629,-0.629 -1.612,-1.322 -3.335,-1.322 -2.659,0 -4.737,2.143 -4.737,4.801 0,2.659 2.078,4.801 4.737,4.801 1.434,0 2.481,-0.564 3.254,-1.289 l 1.273,1.273 c -1.08,1.031 -2.513,1.821 -4.527,1.821 -3.641,0 -6.702,-2.965 -6.702,-6.606 0,-3.641 3.061,-6.605 6.702,-6.605 1.965,0 3.447,0.645 4.607,1.853 1.193,1.192 1.563,2.867 1.563,4.221 0,0.419 -0.032,0.805 -0.097,1.127 z m 11.079,-5.525 c -1.289,0 -2.401,1.063 -2.401,2.577 0,1.531 1.112,2.578 2.401,2.578 1.288,0 2.4,-1.047 2.4,-2.578 0,-1.514 -1.112,-2.577 -2.4,-2.577 m 0,6.83 c -2.353,0 -4.27,-1.788 -4.27,-4.253 0,-2.449 1.917,-4.253 4.27,-4.253 2.352,0 4.269,1.804 4.269,4.253 0,2.465 -1.917,4.253 -4.269,4.253 m 9.313,-6.83 c -1.289,0 -2.401,1.063 -2.401,2.577 0,1.531 1.112,2.578 2.401,2.578 1.289,0 2.4,-1.047 2.4,-2.578 0,-1.514 -1.111,-2.577 -2.4,-2.577 m 0,6.83 c -2.352,0 -4.269,-1.788 -4.269,-4.253 0,-2.449 1.917,-4.253 4.269,-4.253 2.352,0 4.269,1.804 4.269,4.253 0,2.465 -1.917,4.253 -4.269,4.253" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path42" inkscape:connector-curvature="0" inkscape:export-filename="G:\Users\suitedoalex\sites\disponivel-google-play-badge-7.png" inkscape:export-xdpi="26.666666" inkscape:export-ydpi="26.666666"></path>
</g>
</g><g id="g44"><g id="g46"><g id="g52"><g id="g54"><path d="m 20.435,42.462 c -0.29,-0.308 -0.462,-0.786 -0.462,-1.405 v 0 -22.116 c 0,-0.62 0.172,-1.097 0.462,-1.405 v 0 l 0.074,-0.072 12.39,12.389 v 0.146 0.147 l -12.39,12.389 z" style="fill:url(#linearGradient68);stroke:none" id="path70" inkscape:connector-curvature="0"></path>
</g>
</g>
</g>
</g><g id="g72"><g id="g74"><g id="g80"><g id="g82"><path d="m 32.899,30.146 v -0.147 -0.146 l 4.129,-4.132 0.094,0.053 4.893,2.78 c 1.397,0.795 1.397,2.095 0,2.888 v 0 l -4.893,2.781 -0.093,0.053 z" style="fill:url(#linearGradient92);stroke:none" id="path94" inkscape:connector-curvature="0"></path>
</g>
</g>
</g>
</g><g id="g96"><g id="g98"><g id="g104"><g id="g106"><path d="m 20.435,17.536 c 0.461,-0.487 1.222,-0.548 2.079,-0.062 v 0 l 14.608,8.301 -4.223,4.224 z" style="fill:url(#linearGradient112);stroke:none" id="path114" inkscape:connector-curvature="0"></path>
</g>
</g>
</g>
</g><g id="g116"><g id="g118"><g id="g124"><g id="g126"><path d="m 20.435,42.462 12.464,-12.463 4.223,4.224 -14.608,8.3 c -0.402,0.229 -0.783,0.337 -1.121,0.337 v 0 c -0.384,0 -0.713,-0.139 -0.958,-0.398" style="fill:url(#linearGradient138);stroke:none" id="path140" inkscape:connector-curvature="0"></path>
</g>
</g>
</g>
</g><g id="g142"><g id="g144" clip-path="url(#clipPath148)"><g id="g150"><g id="g164"><g clip-path="url(#clipPath156)" id="g162" style="opacity:0.19999701"><g transform="translate(37.0288,25.8681)" id="g160"><path d="m 0,0 -14.515,-8.247 c -0.812,-0.462 -1.538,-0.431 -2.004,-0.011 l -0.074,-0.075 0.074,-0.072 v 10e-4 c 0.466,-0.42 1.192,-0.451 2.004,0.011 l 14.608,8.3 z" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path158" inkscape:connector-curvature="0"></path>
</g>
</g>
</g>
</g><g id="g166"><g id="g180"><g clip-path="url(#clipPath172)" id="g178" style="opacity:0.119995"><g transform="translate(20.4354,17.6817)" id="g176"><path d="M 0,0 C -0.291,0.308 -0.463,0.786 -0.463,1.405 V 1.259 C -0.463,0.64 -0.291,0.162 0,-0.146 l 0.075,0.074 z" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path174" inkscape:connector-curvature="0"></path>
</g>
</g>
</g>
</g><g id="g182"><g id="g196"><g clip-path="url(#clipPath188)" id="g194" style="opacity:0.119995"><g transform="translate(42.0147,28.7013)" id="g192"><path d="M 0,0 -4.986,-2.833 -4.893,-2.926 0,-0.146 C 0.699,0.251 1.048,0.774 1.048,1.297 0.989,0.824 0.634,0.36 0,0" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path190" inkscape:connector-curvature="0"></path>
</g>
</g>
</g>
</g><g id="g198"><g id="g212"><g clip-path="url(#clipPath204)" id="g210" style="opacity:0.25"><g transform="translate(22.5135,42.3768)" id="g208"><path d="m 0,0 19.501,-11.08 c 0.634,-0.36 0.99,-0.824 1.048,-1.298 0.001,0.523 -0.349,1.047 -1.048,1.444 L 0,0.146 C -1.398,0.94 -2.541,0.281 -2.541,-1.32 v -0.146 c 0,1.6 1.143,2.26 2.541,1.466" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path206" inkscape:connector-curvature="0"></path>
</g>
</g>
</g>
</g><g id="g214" transform="translate(52.1084,37.7373)"><path d="M 0,0 H 1.064 C 1.757,0 2.306,0.198 2.711,0.595 3.116,0.992 3.318,1.548 3.318,2.263 3.318,2.972 3.116,3.526 2.711,3.926 2.306,4.325 1.757,4.525 1.064,4.525 H 0 Z m -0.77,-0.737 v 6 h 1.834 c 0.922,0 1.66,-0.278 2.213,-0.834 C 3.83,3.873 4.106,3.151 4.106,2.263 4.106,1.374 3.83,0.652 3.277,0.097 2.724,-0.46 1.986,-0.737 1.064,-0.737 Z" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path216" inkscape:connector-curvature="0"></path>
</g><g id="g218" transform="translate(52.1084,37.7373)"><path d="M 0,0 H 1.064 C 1.757,0 2.306,0.198 2.711,0.595 3.116,0.992 3.318,1.548 3.318,2.263 3.318,2.972 3.116,3.526 2.711,3.926 2.306,4.325 1.757,4.525 1.064,4.525 H 0 Z m -0.77,-0.737 v 6 h 1.834 c 0.922,0 1.66,-0.278 2.213,-0.834 C 3.83,3.873 4.106,3.151 4.106,2.263 4.106,1.374 3.83,0.652 3.277,0.097 2.724,-0.46 1.986,-0.737 1.064,-0.737 Z" style="fill:none;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path220" inkscape:connector-curvature="0"></path>
</g><path d="m 57.297,43 h 0.771 v -6 h -0.771 z" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path222" inkscape:connector-curvature="0"></path><g id="g224" transform="translate(61.1338,36.8662)"><path d="m 0,0 c -0.436,0 -0.861,0.142 -1.277,0.427 -0.417,0.285 -0.69,0.684 -0.818,1.199 L -1.391,1.91 C -1.307,1.581 -1.136,1.303 -0.876,1.077 -0.615,0.851 -0.324,0.737 0,0.737 c 0.335,0 0.622,0.088 0.859,0.264 0.238,0.176 0.356,0.415 0.356,0.717 0,0.335 -0.118,0.593 -0.356,0.775 C 0.622,2.674 0.246,2.843 -0.268,3 c -0.531,0.167 -0.933,0.384 -1.207,0.649 -0.273,0.266 -0.411,0.605 -0.411,1.019 0,0.43 0.171,0.804 0.512,1.122 0.341,0.318 0.785,0.478 1.332,0.478 0.509,0 0.922,-0.127 1.24,-0.381 C 1.517,5.632 1.724,5.355 1.818,5.053 L 1.115,4.76 C 1.064,4.949 0.94,5.126 0.742,5.288 0.544,5.449 0.288,5.53 -0.025,5.53 -0.321,5.53 -0.574,5.448 -0.783,5.283 -0.993,5.118 -1.098,4.913 -1.098,4.668 -1.098,4.444 -1.001,4.255 -0.809,4.102 -0.615,3.948 -0.332,3.81 0.042,3.687 0.338,3.592 0.585,3.5 0.784,3.41 0.982,3.321 1.184,3.202 1.387,3.054 1.591,2.906 1.744,2.722 1.848,2.501 1.951,2.28 2.003,2.025 2.003,1.734 2.003,1.444 1.943,1.184 1.823,0.955 1.703,0.726 1.543,0.544 1.345,0.41 1.146,0.276 0.934,0.174 0.704,0.105 0.475,0.035 0.24,0 0,0" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path226" inkscape:connector-curvature="0"></path>
</g><g id="g228" transform="translate(61.1338,36.8662)"><path d="m 0,0 c -0.436,0 -0.861,0.142 -1.277,0.427 -0.417,0.285 -0.69,0.684 -0.818,1.199 L -1.391,1.91 C -1.307,1.581 -1.136,1.303 -0.876,1.077 -0.615,0.851 -0.324,0.737 0,0.737 c 0.335,0 0.622,0.088 0.859,0.264 0.238,0.176 0.356,0.415 0.356,0.717 0,0.335 -0.118,0.593 -0.356,0.775 C 0.622,2.674 0.246,2.843 -0.268,3 c -0.531,0.167 -0.933,0.384 -1.207,0.649 -0.273,0.266 -0.411,0.605 -0.411,1.019 0,0.43 0.171,0.804 0.512,1.122 0.341,0.318 0.785,0.478 1.332,0.478 0.509,0 0.922,-0.127 1.24,-0.381 C 1.517,5.632 1.724,5.355 1.818,5.053 L 1.115,4.76 C 1.064,4.949 0.94,5.126 0.742,5.288 0.544,5.449 0.288,5.53 -0.025,5.53 -0.321,5.53 -0.574,5.448 -0.783,5.283 -0.993,5.118 -1.098,4.913 -1.098,4.668 -1.098,4.444 -1.001,4.255 -0.809,4.102 -0.615,3.948 -0.332,3.81 0.042,3.687 0.338,3.592 0.585,3.5 0.784,3.41 0.982,3.321 1.184,3.202 1.387,3.054 1.591,2.906 1.744,2.722 1.848,2.501 1.951,2.28 2.003,2.025 2.003,1.734 2.003,1.444 1.943,1.184 1.823,0.955 1.703,0.726 1.543,0.544 1.345,0.41 1.146,0.276 0.934,0.174 0.704,0.105 0.475,0.035 0.24,0 0,0 Z" style="fill:none;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path230" inkscape:connector-curvature="0"></path>
</g><g id="g232" transform="translate(65.0137,40.168)"><path d="M 0,0 H 1.291 C 1.615,0 1.875,0.108 2.07,0.326 2.266,0.544 2.363,0.784 2.363,1.047 2.363,1.31 2.266,1.55 2.07,1.768 1.875,1.986 1.615,2.095 1.291,2.095 H 0 Z m 0,-3.168 h -0.77 v 6 h 2.044 c 0.508,0 0.949,-0.169 1.32,-0.507 C 2.966,1.987 3.151,1.561 3.151,1.047 3.151,0.533 2.966,0.107 2.594,-0.23 2.223,-0.569 1.782,-0.738 1.274,-0.738 H 0 Z" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path234" inkscape:connector-curvature="0"></path>
</g><g id="g236" transform="translate(65.0137,40.168)"><path d="M 0,0 H 1.291 C 1.615,0 1.875,0.108 2.07,0.326 2.266,0.544 2.363,0.784 2.363,1.047 2.363,1.31 2.266,1.55 2.07,1.768 1.875,1.986 1.615,2.095 1.291,2.095 H 0 Z m 0,-3.168 h -0.77 v 6 h 2.044 c 0.508,0 0.949,-0.169 1.32,-0.507 C 2.966,1.987 3.151,1.561 3.151,1.047 3.151,0.533 2.966,0.107 2.594,-0.23 2.223,-0.569 1.782,-0.738 1.274,-0.738 H 0 Z" style="fill:none;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path238" inkscape:connector-curvature="0"></path>
</g><g id="g240" transform="translate(70.2129,38.2778)"><path d="M 0,0 C 0.444,-0.45 0.987,-0.674 1.63,-0.674 2.272,-0.674 2.816,-0.45 3.26,0 3.704,0.45 3.927,1.024 3.927,1.722 3.927,2.42 3.704,2.995 3.26,3.444 2.816,3.894 2.272,4.119 1.63,4.119 0.987,4.119 0.444,3.894 0,3.444 -0.443,2.995 -0.666,2.42 -0.666,1.722 -0.666,1.024 -0.443,0.45 0,0 m 3.83,-0.502 c -0.59,-0.607 -1.323,-0.91 -2.2,-0.91 -0.877,0 -1.61,0.303 -2.199,0.91 -0.59,0.606 -0.884,1.347 -0.884,2.224 0,0.877 0.294,1.619 0.884,2.225 0.589,0.606 1.322,0.91 2.199,0.91 0.872,0 1.603,-0.305 2.196,-0.914 C 4.418,3.334 4.714,2.594 4.714,1.722 4.714,0.845 4.419,0.104 3.83,-0.502" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path242" inkscape:connector-curvature="0"></path>
</g><g id="g244" transform="translate(70.2129,38.2778)"><path d="M 0,0 C 0.444,-0.45 0.987,-0.674 1.63,-0.674 2.272,-0.674 2.816,-0.45 3.26,0 3.704,0.45 3.927,1.024 3.927,1.722 3.927,2.42 3.704,2.995 3.26,3.444 2.816,3.894 2.272,4.119 1.63,4.119 0.987,4.119 0.444,3.894 0,3.444 -0.443,2.995 -0.666,2.42 -0.666,1.722 -0.666,1.024 -0.443,0.45 0,0 Z m 3.83,-0.502 c -0.59,-0.607 -1.323,-0.91 -2.2,-0.91 -0.877,0 -1.61,0.303 -2.199,0.91 -0.59,0.606 -0.884,1.347 -0.884,2.224 0,0.877 0.294,1.619 0.884,2.225 0.589,0.606 1.322,0.91 2.199,0.91 0.872,0 1.603,-0.305 2.196,-0.914 C 4.418,3.334 4.714,2.594 4.714,1.722 4.714,0.845 4.419,0.104 3.83,-0.502 Z" style="fill:none;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path246" inkscape:connector-curvature="0"></path>
</g><g id="g248" transform="translate(76.0088,37)"><path d="M 0,0 V 6 H 0.939 L 3.854,1.333 H 3.888 L 3.854,2.489 V 6 H 4.626 V 0 H 3.821 L 0.77,4.894 H 0.737 L 0.77,3.737 V 0 Z" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path250" inkscape:connector-curvature="0"></path>
</g><g id="g252" transform="translate(76.0088,37)"><path d="M 0,0 V 6 H 0.939 L 3.854,1.333 H 3.888 L 3.854,2.489 V 6 H 4.626 V 0 H 3.821 L 0.77,4.894 H 0.737 L 0.77,3.737 V 0 Z" style="fill:none;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path254" inkscape:connector-curvature="0"></path>
</g><g id="g256" transform="translate(82.7295,43.4692)"><path d="m 0,0 h -0.671 l 0.437,1.073 H 0.604 Z M -0.721,-0.469 H 0.05 v -6 h -0.771 z" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path258" inkscape:connector-curvature="0"></path>
</g><g id="g260" transform="translate(82.7295,43.4692)"><path d="m 0,0 h -0.671 l 0.437,1.073 H 0.604 Z M -0.721,-0.469 H 0.05 v -6 h -0.771 z" style="fill:none;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path262" inkscape:connector-curvature="0"></path>
</g><g id="g264" transform="translate(85.6367,37)"><path d="m 0,0 -2.111,6 h 0.854 L 0.386,1.131 H 0.419 L 2.129,6 H 2.983 L 0.805,0 Z" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path266" inkscape:connector-curvature="0"></path>
</g><g id="g268" transform="translate(85.6367,37)"><path d="m 0,0 -2.111,6 h 0.854 L 0.386,1.131 H 0.419 L 2.129,6 H 2.983 L 0.805,0 Z" style="fill:none;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path270" inkscape:connector-curvature="0"></path>
</g><g id="g272" transform="translate(92.9951,42.2627)"><path d="m 0,0 h -2.732 v -1.902 h 2.464 V -2.623 H -2.732 V -4.525 H 0 v -0.738 h -3.503 v 6 l 3.503,0 z" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path274" inkscape:connector-curvature="0"></path>
</g><g id="g276" transform="translate(92.9951,42.2627)"><path d="m 0,0 h -2.732 v -1.902 h 2.464 V -2.623 H -2.732 V -4.525 H 0 v -0.738 h -3.503 v 6 l 3.503,0 z" style="fill:none;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path278" inkscape:connector-curvature="0"></path>
</g><g id="g280" transform="translate(94.2021,37)"><path d="M 0,0 V 6 H 0.771 V 0.737 H 3.368 V 0 Z" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path282" inkscape:connector-curvature="0"></path>
</g><g id="g284" transform="translate(94.2021,37)"><path d="M 0,0 V 6 H 0.771 V 0.737 H 3.368 V 0 Z" style="fill:none;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path286" inkscape:connector-curvature="0"></path>
</g><g id="g288" transform="translate(100.5537,37)"><path d="M 0,0 V 6 H 0.939 L 3.855,1.333 H 3.888 L 3.855,2.489 V 6 H 4.626 V 0 H 3.821 L 0.771,4.894 H 0.737 L 0.771,3.737 V 0 Z" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path290" inkscape:connector-curvature="0"></path>
</g><g id="g292" transform="translate(100.5537,37)"><path d="M 0,0 V 6 H 0.939 L 3.855,1.333 H 3.888 L 3.855,2.489 V 6 H 4.626 V 0 H 3.821 L 0.771,4.894 H 0.737 L 0.771,3.737 V 0 Z" style="fill:none;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path294" inkscape:connector-curvature="0"></path>
</g><g id="g296" transform="translate(107.6289,38.2778)"><path d="M 0,0 C 0.444,-0.45 0.987,-0.674 1.63,-0.674 2.272,-0.674 2.816,-0.45 3.26,0 3.704,0.45 3.927,1.024 3.927,1.722 3.927,2.42 3.704,2.995 3.26,3.444 2.816,3.894 2.272,4.119 1.63,4.119 0.987,4.119 0.444,3.894 0,3.444 -0.443,2.995 -0.666,2.42 -0.666,1.722 -0.666,1.024 -0.443,0.45 0,0 m 3.83,-0.502 c -0.59,-0.607 -1.323,-0.91 -2.2,-0.91 -0.877,0 -1.61,0.303 -2.199,0.91 -0.59,0.606 -0.884,1.347 -0.884,2.224 0,0.877 0.294,1.619 0.884,2.225 0.589,0.606 1.322,0.91 2.199,0.91 0.872,0 1.603,-0.305 2.196,-0.914 C 4.418,3.334 4.714,2.594 4.714,1.722 4.714,0.845 4.419,0.104 3.83,-0.502" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" id="path298" inkscape:connector-curvature="0"></path>
</g><g id="g300" transform="translate(107.6289,38.2778)"><path d="M 0,0 C 0.444,-0.45 0.987,-0.674 1.63,-0.674 2.272,-0.674 2.816,-0.45 3.26,0 3.704,0.45 3.927,1.024 3.927,1.722 3.927,2.42 3.704,2.995 3.26,3.444 2.816,3.894 2.272,4.119 1.63,4.119 0.987,4.119 0.444,3.894 0,3.444 -0.443,2.995 -0.666,2.42 -0.666,1.722 -0.666,1.024 -0.443,0.45 0,0 Z m 3.83,-0.502 c -0.59,-0.607 -1.323,-0.91 -2.2,-0.91 -0.877,0 -1.61,0.303 -2.199,0.91 -0.59,0.606 -0.884,1.347 -0.884,2.224 0,0.877 0.294,1.619 0.884,2.225 0.589,0.606 1.322,0.91 2.199,0.91 0.872,0 1.603,-0.305 2.196,-0.914 C 4.418,3.334 4.714,2.594 4.714,1.722 4.714,0.845 4.419,0.104 3.83,-0.502 Z" style="fill:none;stroke:#ffffff;stroke-width:0.2;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path302" inkscape:connector-curvature="0"></path>
</g>
</g>
</g>
</g></svg></span>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-80 u-section-10" id="sec-0002">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">ASSINE NOSSA NEWSLETTER</h2>
        <div class="u-form u-form-1">
          <form action="#" method="POST" class="u-clearfix u-form-horizontal u-form-spacing-15 u-inner-form" style="padding: 15px;" source="custom">
            <div class="u-form-email u-form-group">
              <label for="email-ef64" class="u-form-control-hidden u-label">Email</label>
              <input type="email" placeholder="Email" id="email-ef64" name="email" class="u-border-1 u-border-white u-input u-input-rectangle u-radius-10 u-white u-input-1" required="">
            </div>
            <div class="u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-10 u-btn-1">ASSINE<br>
              </a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">#FormSendSuccess</div>
            <div class="u-form-send-error u-form-send-message">#FormSendError</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #ffffff !important
}</style>



    <section class="u-backlink u-clearfix u-grey-80">
      <p class="u-text">
        <span>powered By Clean House Express - Tecnologia LTDA 2021</span>
      </p>
    </section>
    <a href="https://api.whatsapp.com/send?phone=5541988754815&text=Olá! Estou no site e quero agendar uma faxina aqui pelo WhatsApp."
    target="_blank"
    style="position:fixed;bottom:20px;left:30px;">
    <svg enable-background="new 0 0 512 512" width="50" height="50" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><path d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104  l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z" fill="#4CAF50"/><path d="m405.02 361.5c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.62-127.46-112.58-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016 0.16 8.576 0.288 7.52 0.32 11.296 0.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744s-7.36 7.68-11.136 12.352c-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" fill="#FAFAFA"/></svg>
</a>
  </body>
@endsection
