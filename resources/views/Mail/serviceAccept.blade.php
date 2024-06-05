<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body
    style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; color: #74787E; height: 100%; hyphens: auto; line-height: 1.4; margin: 0; -moz-hyphens: auto; -ms-word-break: break-all; width: 100% !important; -webkit-hyphens: auto; -webkit-text-size-adjust: none; word-break: break-word;">
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }

    </style>

    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0"
        style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #f5f8fa; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
        <tr>
            <td align="center" style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                <table class="content" width="100%" cellpadding="0" cellspacing="0"
                    style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
                    <tr>
                        <td class="header"
                            style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 25px 0; text-align: center;">
                            <img src="https://clin.com.br/abrigosoftware/images/logo.png"
                                alt="Clin" />
                        </td>
                    </tr>

                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0"
                            style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; border-bottom: 1px solid #EDEFF2; border-top: 1px solid #EDEFF2; margin: 0; padding: 0; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0"
                                style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; background-color: #FFFFFF; margin: 0 auto; padding: 0; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell"
                                        style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">
                                        <h4
                                            style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 19px; font-weight: bold; margin-top: 0; text-align: left;">
                                            Olá, {{ $nome_cliente }}, tudo bem?</h4>

                                        <p
                                            style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;">
                                        <p class="help"> <b> Boas notícias sua faxina agendada para o dia
                                                <b>{{ date('d/m/y H:i', strtotime($service->start_time)) }}</b> foi
                                                Confirmada !!
                                                <br> Confira abaixo o(s) nome(s) da(s) Profissional(is) que irá(ão) lhe
                                                atender:

                                                <p class="text-center">
                                                    <b>Obrigado, por escolher a gente !</b>
                                                </p>
                                        </p>
                                        </p>
                                        <table class="action" align="center" width="100%" cellpadding="0"
                                            cellspacing="0"
                                            style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 30px auto; padding: 0; text-align: center; width: 100%; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 100%;">
                                            <tr>
                                                <td align="center"
                                                    style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0"
                                                        style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                                                        <tr>
                                                            <td align="center"
                                                                style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                                                                <table border="0" cellpadding="0" cellspacing="0"
                                                                    style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                                                                    <tr>
                                                                        <td
                                                                            style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                                                                            <div class="row">
                                                                                <div class="col-xs-6">
                                                                                    <div class="card">
                                                                                        <div
                                                                                            class="card-body form-group">
                                                                                            <div
                                                                                                class="card-title text-center">
                                                                                                Detalhes da Faxina</div>
                                                                                            <div class="help"> </div>
                                                                                            <hr>
                                                                                            <center>
                                                                                                <div>
                                                                                                    <div class="row">
                                                                                                        &nbsp;</div>
                                                                                                    <div
                                                                                                        class="row col-md-12">
                                                                                                        <p> Confira o
                                                                                                            nome da(s)
                                                                                                            Profissional(is)
                                                                                                            que irá(ão)
                                                                                                            lhe atender:
                                                                                                        </p>
                                                                                                        <!--Card Avatar e Info Basica  -->

                                                                                                        @if (count($profissional) > 1)
                                                                                                            @foreach ($profissional as $item)
                                                                                                                {{-- @foreach ($item as $item) --}}
                                                                                                                <div
                                                                                                                    class="card mt-2 mb-2">
                                                                                                                    <div>
                                                                                                                        <img src="https://app.clin.com.br/imagens/{{ $item['professional']['avatar'] }}"
                                                                                                                            width="120px"
                                                                                                                            height="120px">
                                                                                                                    </div>
                                                                                                                    <h4
                                                                                                                        class="card-title">
                                                                                                                        {{ $item['professional']['name'] }}
                                                                                                                    </h4>
                                                                                                                    @if ($item['professional']['cpf'] != null)
                                                                                                                        <p
                                                                                                                            class="card-text">
                                                                                                                            CPF:
                                                                                                                            {{ substr($item['professional']['cpf'], 0, 3) . '******' . substr($item['professional']['cpf'], 9, 2) }}
                                                                                                                        </p>
                                                                                                                    @else
                                                                                                                        <p
                                                                                                                            class="card-text">
                                                                                                                            CPF:
                                                                                                                        </p>
                                                                                                                    @endif
                                                                                                                </div>
                                                                                                    </div>
                                                                                                    {{-- @endforeach --}}
                                                                                                    @endforeach
                                                                                                @else
                                                                                                    @foreach ($profissional as $item)
                                                                                                        <div
                                                                                                            class="card mt-2 mb-2">
                                                                                                            <div>
                                                                                                                <img src="https://clin.com.br/imagens/{{ $item['professional']['avatar'] }}"
                                                                                                                    width="120px"
                                                                                                                    height="120px">
                                                                                                            </div>
                                                                                                            <h4
                                                                                                                class="card-title">
                                                                                                                {{ $item['professional']['name'] }}
                                                                                                            </h4>
                                                                                                            @if ($item['professional']['cpf'] != null)
                                                                                                                <p
                                                                                                                    class="card-text">
                                                                                                                    CPF:
                                                                                                                    {{ substr($item['professional']['cpf'], 0, 3) . '******' . substr($item['professional']['cpf'], 9, 2) }}
                                                                                                                </p>
                                                                                                            @else
                                                                                                                <p
                                                                                                                    class="card-text">
                                                                                                                    CPF:
                                                                                                                </p>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                </div>
                                                                                                @endforeach
                                                                                                @endif
                                                                                                <!--Card Avatar e Info Basica  -->

                                                                                                <!-- Texto de Ajuda WhatsUp -->
                                                                                                <div class="row">
                                                                                                    <p>&nbsp;</p>
                                                                                                    <p class="help">
                                                                                                        <span
                                                                                                            class="text-capitalize">{{ $nome_cliente }},</span>
                                                                                                        caso tenha
                                                                                                        qualquer
                                                                                                        problema
                                                                                                        temos uma
                                                                                                        equipe
                                                                                                        maravilhosa
                                                                                                        a sua
                                                                                                        disposição
                                                                                                        para ajudar
                                                                                                    </p>
                                                                                                </div>
                                                                                                <!-- botao de ajuda -->
                                                                                                <div class="row btn btn-block btn-success"
                                                                                                    style="background-color:#41A326; width: auto;">
                                                                                                    <div>
                                                                                                        <a href="https://api.whatsapp.com/send?phone=5541988754815&text=Ajuda Faxina Aceita - ( {{ $nome_cliente }} - Faxina ID: {{ $service->id }} ) !"
                                                                                                            style="text-decoration: none; color: #ffffff;">
                                                                                                            <b>Para
                                                                                                                Ajuda
                                                                                                                Clique
                                                                                                                aqui
                                                                                                                !
                                                                                                            </b>
                                                                                                            <img src="https://clin.com.br/imagens/whatsapp.svg"
                                                                                                                alt="whatsApp serviceHouseExpressCTBA"
                                                                                                                width="32px"
                                                                                                                height="32px"></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- Botao de Ajuda -->
                                                                                                </p>
                                                                                                </p>
                                                                                        </div>
                                                                                        <!-- Texto de Ajuda WhatsUp -->
                                                                                        </center>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Fim Boleto -->
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <p class="help"><b> Caso precise de ajuda ou queria ficar por dentro das
                                                melhores promo&ccedil;&otilde;es?</b> </p>
                                        <!-- Redes Sociais -->
                                        <p>Siga nossas redes sociais !!</p>

                                        <p><a href="https://www.instagram.com/cleanhouseexpress">
                                                <img src="https://www.flaticon.com/svg/static/icons/svg/1384/1384063.svg"
                                                    alt="instagram CleanHouseExpressCTBA" width="32px"
                                                    height="32px"></a>

                                            <a href="https://www.facebook.com/CleanHouseExpressCTBA">
                                                <img src="https://www.flaticon.com/svg/static/icons/svg/174/174848.svg"
                                                    alt="Facebook CleanHouseExpressCTBA" width="32px" height="32px"></a>
                                            <a href="https://www.facebook.com/CleanHouseExpressCTBA">
                                                <img src="https://clin.com.br/imagens/whatsapp.svg"
                                                    alt="whatsApp CleanHouseExpressCTBA" width="32px" height="32px"></a>
                                        </p>
                                        <!-- Fim Redes Sociais -->
                                        <table class="subcopy" width="100%" cellpadding="0" cellspacing="0"
                                            style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; border-top: 1px solid #EDEFF2; margin-top: 25px; padding-top: 25px;">
                                            <tr>
                                                <td
                                                    style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                                                    <!-- Rodape -->
                                                    <div class="row text-center">
                                                        <p><b> Atenciosamente</b></p>
                                                        <p>(41) 98875-4815</p>
                                                        <p>R. João Negrão, 731, Sala 2003, Centro, Curitiba / PR</p>
                                                        <p>
                                                            <span>
                                                                <b>Visite Nossso Site
                                                                    <a href="https://www.clin.com.br"
                                                                        style="text-decoration: none; color: #41A326;">Clin</a>
                                                                </b>
                                                        </p>
                                                        </span>
                                                    </div>
                                                    <!-- Fim Rodape -->
                                                </td>
                                            </tr>
                                        </table>


                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box;">
                            <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0"
                                style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; margin: 0 auto; padding: 0; text-align: center; width: 570px; -premailer-cellpadding: 0; -premailer-cellspacing: 0; -premailer-width: 570px;">
                                <tr>
                                    <td class="content-cell" align="center"
                                        style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; padding: 35px;">
                                        <p
                                            style="font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; line-height: 1.5em; margin-top: 0; color: #AEAEAE; font-size: 12px; text-align: center;">

                                            © 2022 Clin. All rights reserved.</p>
                                        <p>
                                            <img src="https://clin.com.br/abrigosoftware/images/logo.png"
                                                alt="Clin" />
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
